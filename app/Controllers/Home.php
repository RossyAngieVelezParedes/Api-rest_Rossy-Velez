<?php
/*ROSSY ANGIE VELEZ PAREDES UTM
*/
namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function getClientes()
    {
        $query = $this->db->query('SELECT * FROM cliente LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getcliente($id)
    {
        $query = $this->db->query('SELECT * FROM cliente WHERE id_cliente = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'cliente no encontrada']);
    }


    // Métodos para direcciones de entrega
    public function getDirecciones()
    {
        $query = $this->db->query('SELECT * FROM direccion_entrega LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getDireccion($id)
    {
        $query = $this->db->query('SELECT * FROM direccion_entrega WHERE id_direccion = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Dirección no encontrada']);
    }

    // Métodos para pedidos
    public function getPedidos()
    {
        $query = $this->db->query('SELECT * FROM pedido LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getPedido($id)
    {
        $query = $this->db->query('SELECT * FROM pedido WHERE id_pedido = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Pedido no encontrado']);
    }

    // Métodos para carritos de compra
    public function getCarritos()
    {
        $query = $this->db->query('SELECT * FROM carrito_compra LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getCarrito($id)
    {
        $query = $this->db->query('SELECT * FROM carrito_compra WHERE id_carrito = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Carrito no encontrado']);
    }

    // Métodos para categorías de empleados
    public function getCategoriasEmpleados()
    {
        $query = $this->db->query('SELECT * FROM categoria_empleado LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getCategoriaEmpleado($id)
    {
        $query = $this->db->query('SELECT * FROM categoria_empleado WHERE id_categoria = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Categoría de empleado no encontrada']);
    }

    // Métodos para empleados
    public function getEmpleados()
    {
        $query = $this->db->query('SELECT * FROM empleado LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getEmpleado($id)
    {
        $query = $this->db->query('SELECT * FROM empleado WHERE id_empleado = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Empleado no encontrado']);
    }

    // Métodos para promociones
    public function getPromociones()
    {
        $query = $this->db->query('SELECT * FROM promociones LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getPromocion($id)
    {
        $query = $this->db->query('SELECT * FROM promociones WHERE id_promocion = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Promoción no encontrada']);
    }

    // Métodos para facturas
    public function getFacturas()
    {
        $query = $this->db->query('SELECT * FROM factura LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getFactura($id)
    {
        $query = $this->db->query('SELECT * FROM factura WHERE id_factura = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Factura no encontrada']);
    }

    // Métodos para contratos
    public function getContratos()
    {
        $query = $this->db->query('SELECT * FROM contrato LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getContrato($id)
    {
        $query = $this->db->query('SELECT * FROM contrato WHERE id_contrato = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Contrato no encontrado']);
    }

    // Métodos para métodos de pago
    public function getMetodosPago()
    {
        $query = $this->db->query('SELECT * FROM metodo_pago LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getMetodoPago($id)
    {
        $query = $this->db->query('SELECT * FROM metodo_pago WHERE id_metodo = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Método de pago no encontrado']);
    }

    // Métodos para categorías de productos
    public function getCategoriasProductos()
    {
        $query = $this->db->query('SELECT * FROM categoria_producto LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getCategoriaProducto($id)
    {
        $query = $this->db->query('SELECT * FROM categoria_producto WHERE id_categoria = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Categoría de producto no encontrada']);
    }

    // Métodos para proveedores
    public function getProveedores()
    {
        $query = $this->db->query('SELECT * FROM proveedor LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getProveedor($id)
    {
        $query = $this->db->query('SELECT * FROM proveedor WHERE id_proveedor = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Proveedor no encontrado']);
    }

    // Métodos para productos
    public function getProductos()
    {
        $query = $this->db->query('SELECT * FROM producto LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getProducto($id)
    {
        $query = $this->db->query('SELECT * FROM producto WHERE id_producto = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Producto no encontrado']);
    }

    // Métodos para detalles de facturas
    public function getDetallesFacturas()
    {
        $query = $this->db->query('SELECT * FROM detalle_factura LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getDetalleFactura($id)
    {
        $query = $this->db->query('SELECT * FROM detalle_factura WHERE id_detalle = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Detalle de factura no encontrado']);
    }

    // Métodos para pasillos
    public function getPasillos()
    {
        $query = $this->db->query('SELECT * FROM pasillo LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getPasillo($id)
    {
        $query = $this->db->query('SELECT * FROM pasillo WHERE id_pasillo = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Pasillo no encontrado']);
    }

    // Métodos para detalles de productos
    public function getDetallesProductos()
    {
        $query = $this->db->query('SELECT * FROM detalle_producto LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getDetalleProducto($id)
    {
        $query = $this->db->query('SELECT * FROM detalle_producto WHERE id_detalle_producto = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Detalle de producto no encontrado']);
    }

    // Métodos para bodegas
    public function getBodegas()
    {
        $query = $this->db->query('SELECT * FROM bodega LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getBodega($id)
    {
        $query = $this->db->query('SELECT * FROM bodega WHERE id_bodega = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Bodega no encontrada']);
    }

    // Métodos para productos en bodegas
    public function getProductosBodegas()
    {
        $query = $this->db->query('SELECT * FROM producto_bodega LIMIT 10');
        $valor = $query->getResult();
        return $this->response->setJSON($valor);
    }

    public function getProductoBodega($id)
    {
        $query = $this->db->query('SELECT * FROM producto_bodega WHERE id_producto_bodega = ?', [$id]);
        $valor = $query->getRow();
        if ($valor) {
            return $this->response->setJSON($valor);
        }
        return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON(['message' => 'Producto en bodega no encontrado']);
    }
}
