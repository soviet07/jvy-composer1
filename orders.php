<?php

include 'DBconn.php';

class Order extends dbConn{

    function getOrders(){

        $result = $this->connect()->query('SELECT * FROM orders');

        return $result;
    }

}
?>