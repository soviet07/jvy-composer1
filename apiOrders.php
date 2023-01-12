<?php

include 'orders.php';

    class ApiOrders{

        function getAll(){

            $order = new Order();
            $orders = array();
            $orders['register'] = array();

            $result = $order->getOrders();

            if($result->rowCount()){
                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                    $register = array(
                        'id'=>$row['id_order'],
                        'date'=>$row['date'],
                        'company'=>$row['company'],
                        'qty'=>$row['qty'],
                    );
                    array_push($orders['register'],$register);
                }
                http_response_code(200);
                echo json_encode($orders);
            }else{
                http_response_code(404);
                echo json_encode(array('message'=> 'Element not found'));
            }
        }
    }
    //Instancia de la Api y obtención de todos los datos de la tabla
    $api = new ApiOrders();
    $api->getAll();

    ?>