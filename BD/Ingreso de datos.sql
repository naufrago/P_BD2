Delete From coordenada;
Delete From Venta;
Delete From FacturaVenta;
Delete From Compra;
Delete From FacturaCompra;
Delete From Usuario;
Delete From Rol;
Delete From Proveedor;
Delete From Cliente;
Delete From Celular;

copy Celular from 'C:\BDCelulares\Celular.csv' With (Format csv, delimiter ';' , Header);
copy Cliente from 'C:\BDCelulares\Cliente.csv' With (Format csv, delimiter ';' , Header);
copy Proveedor from 'C:\BDCelulares\Proveedor.csv' With (Format csv, delimiter ';' , Header);
copy Rol from 'C:\BDCelulares\Rol.csv' With (Format csv, delimiter ';' , Header);
copy Usuario from 'C:\BDCelulares\Usuario.csv' With (Format csv, delimiter ';' , Header);
copy FacturaCompra from 'C:\BDCelulares\FacturaCompra.csv' With (Format csv, delimiter ';' , Header);
copy Compra from 'C:\BDCelulares\Compra.csv' With (Format csv, delimiter ';' , Header);
copy FacturaVenta from 'C:\BDCelulares\FacturaVenta.csv' With (Format csv, delimiter ';' , Header);
copy Venta from 'C:\BDCelulares\Venta.csv' With (Format csv, delimiter ';' , Header);
copy Coordenada from 'C:\BDCelulares\Coordenada.csv' With (Format csv, delimiter ';' , Header);