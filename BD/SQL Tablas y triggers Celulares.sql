----------------------------------TABLAS------------------------------

--TABLA CELULAR

CREATE TABLE Celular(
  codigocelular integer NOT NULL,
  marca character varying,
  referencia character varying,
  cantidad integer,
  procesadorGHz float,
  almexternoGB float,
  alminternoGB float,
  memoriaGB float,
  camaraMPx float,
  pantallaPx float,
  sistoperativo character varying,
  dimensionesM character varying,
  operador character varying,
  costo float,
  precio float,
  imagen bytea,
  activo boolean default true,
  PRIMARY KEY (codigocelular)
);


--TABLA CLIENTE

CREATE TABLE Cliente(
  cedula character varying NOT NULL,
  nombre character varying,
  apellido character varying,
  direccion character varying,
  telefono character varying,
  correo character varying,
  activo boolean default true,
  PRIMARY KEY (cedula)
);


--TABLA PROVEEDOR

CREATE TABLE Proveedor(
  nit character varying NOT NULL,
  nombre character varying,
  apellido character varying,
  direccion character varying,
  telefono character varying,
  correo character varying,
  activo boolean default true,
  PRIMARY KEY (nit)
);


-- TABLA ROL

CREATE TABLE Rol(
  idpermiso integer NOT NULL,
  tipopermiso character varying,
  activo boolean default true,
  PRIMARY KEY (idpermiso)
);


--TABLA USUARIO

CREATE TABLE Usuario(
  idusuario integer NOT NULL,
  contrasena character varying,
  rol integer,
  nombre character varying,
  apellido character varying,
  direccion character varying,
  telefono character varying,
  correo character varying,
  activo boolean default true,
  PRIMARY KEY (idusuario),
  FOREIGN KEY (rol) REFERENCES Rol (idpermiso)
);


--TABLA FACTURACOMPRA

CREATE TABLE FacturaCompra(
  idfaccompra integer NOT NULL,
  total float,
  fechacompra date,
  nit character varying,
  PRIMARY KEY (idfaccompra),
  FOREIGN KEY (nit) REFERENCES Proveedor (nit)
);


--TABLA COMPRA

CREATE TABLE Compra(
  idfaccompra integer not null,
  codigocelular integer not null,
  cantidad integer,
  subtotal float,
  PRIMARY KEY (idfaccompra,codigocelular),
  FOREIGN KEY (codigocelular) REFERENCES Celular (codigocelular),
  FOREIGN KEY (idfaccompra) REFERENCES FacturaCompra(idfaccompra)
);


-- TABLA FACTURAVENTA

CREATE TABLE Facturaventa(
  idfacventa integer NOT NULL,
  total float,
  fechaventa date,
  cedula character varying,
  idusuario integer,
  PRIMARY KEY (idfacventa),
  FOREIGN KEY (cedula) REFERENCES Cliente (cedula),
  FOREIGN KEY (idusuario) REFERENCES Usuario (idusuario)
);


--TABLA VENTA

CREATE TABLE Venta(
  idfacventa integer NOT NULL,
  codigocelular integer NOT NULL,
  cantidad integer,
  subcosto float,
  subtotal float,
  PRIMARY KEY (idfacventa, codigocelular),
  FOREIGN KEY (codigocelular) REFERENCES Celular (codigocelular),
  FOREIGN KEY (idfacventa) REFERENCES Facturaventa (idfacventa)
);

CREATE TABLE Coordenada(
  marca character varying,
  xmini integer,
  xmaxi integer,
  ymini integer,
  ymaxi integer,
  PRIMARY KEY (marca)
);


----------------------------------TRIGGERS------------------------------

--TRIGGER 1
/*Al momento de ingresar o modificar un celular validar que el costo
 sea menor o igual al precio de venta.*/

Create or Replace Function valCos() returns trigger as $$
  begin
    if(New.costo>New.precio)then
      raise exception 'El costo "%" no puede ser mayor al precio "%"',New.costo,New.precio;
    else
      return new;
    end if;
    return null;
  end;
$$ Language plpgsql;

Create trigger validarCosto
Before Insert or Update on Celular for each row
Execute procedure valCos();



--TRIGGER 2
--No permitir un registro de un nuevo tipo de celular que tenga la misma marca y referencia.
--Para Insert
Create or Replace Function valMarRefIns() returns trigger as $$
Declare cod integer;
  begin
    cod:=(
      Select codigocelular From Celular Where marca=New.marca and referencia=New.referencia
    );
    if(cod>0)then
        raise exception 'La marca y referencia "%" "%" ya existen para el codigo de celular "%"',New.marca,New.referencia,cod;
        return null;
    end if;
    return new;
  end;
$$ Language plpgsql;

Create trigger validarMarcaReferenciaInsert
Before Insert on Celular for each row
Execute procedure valMarRefIns();

--Para Update
Create or Replace Function valMarRefUpd() returns trigger as $$
Declare cod integer;
  begin
    cod:=(
      Select codigocelular From Celular Where marca=New.marca and referencia=New.referencia
    );
    if(cod>0 and (New.marca<>Old.marca or New.referencia<>Old.referencia))then
    	raise exception 'La marca y referencia "%" "%" ya existen para el codigo de celular "%"',New.marca,New.referencia,cod;
        return null;
    end if;
    return new;
  end;
$$ Language plpgsql;

Create trigger validarMarcaReferenciaUpdate
Before Update on Celular for each row
Execute procedure valMarRefUpd();



--TRIGGER 3
--Solo se pueden INACTICAR los celulares de los cuales hay 0 cantidades.
Create or Replace Function valIna() returns trigger as $$
  begin
    if(Old.activo=true and New.activo=false)then
      if(New.cantidad=0)then
        return new;
      else
        raise exception 'Para elimar un celular debe tener 0 unidades, el celular "%" posee "%" unidades',New.codigocelular,New.cantidad;
      end if;      
    else
      return new;
    end if;
    return null;
  end;
$$ Language plpgsql;

--No se va a considerar Delete, porque nunca se van a eliminar solo se les va a cambiar el estado
Create trigger validarInactivar
Before Update on Celular for each row
Execute procedure valIna();



--TRIGGER 4
/*Al momento de ingresar o modificar un celular, el almacenamiento interno,externo, la memoria,
la camara,pantall, precio, costo y cantidad no sean negativas.*/
Create or Replace Function valPos() returns trigger as $$
  begin
    if(New.alminternoGB<0 or New.almexternoGB<0 or New.memoriaGB<0 or New.camaraMPx<0 or New.pantallaPx<0 or New.precio<0 or New.costo<0 or New.cantidad<0 )then
      raise exception 'Los campos almacenamiento interno o externo, la memoria, la camara, la pantalla, el precio, el costo o la cantidad no pueden ser negativos';
    else
      return new;
    end if;
    return null;
  end;
$$ Language plpgsql;

Create trigger validarPositivos
Before Insert or Update on Celular for each row
Execute procedure valPos();



--TRIGGER 5
/*Al momento de realizar una compra se actualice la cantidad en el inventario.*/
Create or Replace Function actInvCom() returns trigger as $$
  begin
    Update celular set cantidad=celular.cantidad+New.cantidad
    Where celular.codigocelular=New.codigocelular;
    return new;
  end;
$$ Language plpgsql;

Create trigger actualizarInventarioCompra
After Insert on Compra for each row
Execute procedure actInvCom();