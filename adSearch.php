<?php

require_once('classes/MySqlDatabase.php');


$pqp = new PQPExample(true);
$pqp->init();



if(!empty ($_GET["dealer_name"])) {
    $sql = 'SELECT
	c.trans_month as "Month",
	b.dealer_name as "Dealer Name",
	SUM(a.dlr_trans_amt) as "Total sales"
FROM
	fact_sales a INNER JOIN	dim_dealers b
ON
	a.dealer_id = b.dealer_id INNER JOIN dim_dates c
ON
	a.trans_date = c.trans_date
WHERE
	b.dealer_name LIKE "' . $_GET["dealer_name"] . '%" AND
	c.trans_date between "' . $_GET["from"] . '" AND "' . $_GET["to"] . '"
GROUP BY
	c.trans_month,
	b.dealer_name
;';

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
