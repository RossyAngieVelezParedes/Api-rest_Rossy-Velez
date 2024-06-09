<?php
/*ROSSY ANGIE VELEZ PAREDES UTM
*/
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Rutas para direcciones de entrega
$routes->get('/direcciones', 'Home::getDirecciones');
$routes->get('/direccion/(:num)', 'Home::getDireccion/$1');

$routes->get('/clientes', 'Home::getClientes');
$routes->get('/cliente/(:num)', 'Home::getcliente/$1');


// Rutas para pedidos
$routes->get('/pedidos', 'Home::getPedidos');
$routes->get('/pedido/(:num)', 'Home::getPedido/$1');

// Rutas para carritos de compra
$routes->get('/carritos', 'Home::getCarritos');
$routes->get('/carrito/(:num)', 'Home::getCarrito/$1');

// Rutas para categorías de empleados
$routes->get('/categorias-empleados', 'Home::getCategoriasEmpleados');
$routes->get('/categoria-empleado/(:num)', 'Home::getCategoriaEmpleado/$1');

// Rutas para empleados
$routes->get('/empleados', 'Home::getEmpleados');
$routes->get('/empleado/(:num)', 'Home::getEmpleado/$1');

// Rutas para promociones
$routes->get('/promociones', 'Home::getPromociones');
$routes->get('/promocion/(:num)', 'Home::getPromocion/$1');

// Rutas para facturas
$routes->get('/facturas', 'Home::getFacturas');
$routes->get('/factura/(:num)', 'Home::getFactura/$1');

// Rutas para contratos
$routes->get('/contratos', 'Home::getContratos');
$routes->get('/contrato/(:num)', 'Home::getContrato/$1');

// Rutas para métodos de pago
$routes->get('/metodos-pago', 'Home::getMetodosPago');
$routes->get('/metodo-pago/(:num)', 'Home::getMetodoPago/$1');

// Rutas para categorías de productos
$routes->get('/categorias-productos', 'Home::getCategoriasProductos');
$routes->get('/categoria-producto/(:num)', 'Home::getCategoriaProducto/$1');

// Rutas para proveedores
$routes->get('/proveedores', 'Home::getProveedores');
$routes->get('/proveedor/(:num)', 'Home::getProveedor/$1');

// Rutas para productos
$routes->get('/productos', 'Home::getProductos');
$routes->get('/producto/(:num)', 'Home::getProducto/$1');

// Rutas para detalles de facturas
$routes->get('/detalles-facturas', 'Home::getDetallesFacturas');
$routes->get('/detalle-factura/(:num)', 'Home::getDetalleFactura/$1');

// Rutas para pasillos
$routes->get('/pasillos', 'Home::getPasillos');
$routes->get('/pasillo/(:num)', 'Home::getPasillo/$1');

// Rutas para detalles de productos
$routes->get('/detalles-productos', 'Home::getDetallesProductos');
$routes->get('/detalle-producto/(:num)', 'Home::getDetalleProducto/$1');

// Rutas para bodegas
$routes->get('/bodegas', 'Home::getBodegas');
$routes->get('/bodega/(:num)', 'Home::getBodega/$1');

// Rutas para productos en bodegas
$routes->get('/productos-bodegas', 'Home::getProductosBodegas');
$routes->get('/producto-bodega/(:num)', 'Home::getProductoBodega/$1');

;
