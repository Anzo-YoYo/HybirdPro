<?php

require_once('classes/MySqlDatabase.php');


$pqp = new PQPExample(true);
$pqp->init();



//if has search key KISS (keep it simple stubied)
if(!empty ($_GET["searchH"]) || (!empty ($_GET["searchR"])) ) {
    if(!empty ($_GET["searchH"])) {
        $sql = 'select *  from fact_sales_wide
            where ' . $_GET["key"] . ' = "' . $_GET["searchH"] . '"';
        $pqp->db->connectHybird(true);
        $APIList = $pqp->db->query($sql , true);
        echo "<pre>";
        die(print_r(
            array(
            "count" => count($APIList["data"]) ,
            "time" => $APIList["time"]/1000,
            "data" => $APIList["data"],

        )));
    }

    if(!empty ($_GET["searchR"])) {
        $sql = 'select vin , sales_person, sales_commission ,sales_discount  from _fact_sales_wide
            where ' . $_GET["key"] . ' = "' . $_GET["searchR"] . '"';
        $pqp->db->connectRow(true);
        $APIList = $pqp->db->query($sql , true);
        //        echo json_encode($APIList);
        echo "<pre>";
        die(print_r(
            array(
            "count" => count($APIList["data"]) ,
            "time" => $APIList["time"]/1000,
            "data" => $APIList["data"],

        )));
    }
}else {
}
?>
