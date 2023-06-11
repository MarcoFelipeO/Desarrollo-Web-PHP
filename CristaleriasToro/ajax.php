<?php
require_once "PHP/coneccion.php";

if (isset($_POST)) {
    if ($_POST['action'] == 'buscar') {
        $array['datos'] = array();
        $total = 0;

        for ($i = 0; $i < count($_POST['data']); $i++) { 
            $id = $_POST['data'][$i]['id'];
            $query = mysqli_query($coneccion, "SELECT * FROM productos WHERE id = $id"); 
            $result = mysqli_fetch_assoc($query);
            
            $data['id'] = $result['id'];
            $data['nombre'] = $result['nombre'];
            $data['precio_unitario'] = number_format($result['precio_unitario'], 0, ',', '.');
            $data['cantidad_Carro'] = $result['cantidad_Carro'];
            //$data['cantidad_carrito'] = $result['cantidad_carrito'];

            $subtotal = $result['precio_unitario'] * $result['cantidad_Carro'];
            $total += $subtotal;

            array_push($array['datos'], $data);
        }

        $array['total'] = $total;
        echo json_encode($array);
        die();
    }
}


?>