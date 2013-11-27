<?php


require_once('classes/PhpQuickProfiler.php');

/* - - - - - - - - - - - - - - - - - - - - -

 Title : PHP Quick Profiler MySQL Class
 Author : Created by Ryan Campbell
 URL : http://particletree.com/features/php-quick-profiler/

 Last Updated : April 22, 2009

 Description : A simple database wrapper that includes
 logging of queries.

- - - - - - - - - - - - - - - - - - - - - */

class MySqlDatabase {

    private $host;
    private $user;
    private $password;
    private $database;
    public $queryCount = 0;
    public $queries = array();
    public $conn;

	/*------------------------------------
	          CONFIG CONNECTION
	------------------------------------*/

    function __construct($host, $user, $password) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
    }

    function connectHybird($new = false) {
    //        $dsn = "mysql:host=localhost;dbname=test; port=3309";//infinDB

        $dsn = "mysql:host=localhost;dbname=carsales; port=5029";//HybirdProright
        $user = "root";
        $password = "";
        $this->conn = new PDO($dsn, $user, $password);
    }

    function connectRow($new = false) {
        $dsn = "mysql:host=localhost;dbname=carsales; port=5029";//HybirdProright
        $user = "root";
        $password = "";
        $this->conn = new PDO($dsn, $user, $password);
    }

    function changeDatabase($database) {
        $this->database = $database;
        if($this->conn) {
            if(!mysql_select_db($database, $this->conn)) {
                throw new CustomException('We\'re working on a few connection issues.');
            }
        }
    }

    function lazyLoadConnection() {
        $this->connect(true);
        if($this->database) $this->changeDatabase($this->database);
    }


    function query($sql , $isAPI = false) {
        $start = $this->getTime();
        $query = $this->conn->prepare($sql);
        $query->execute();
        $html = '';
        $APIList = array();
        for($i=0; $row =  $query->fetch(MYSQLI_ASSOC) ;  $i++) {
            if($isAPI) {
                $row = (array)$row;
                unset ($row["queryString"]);
                $APIList[] = $row;
            //                array(
            //                    "vin"=>$row['vin'],
            //                    "sales_person"=>$row['sales_person'],
            //                    "sales_discount"=>$row['sales_discount'],
            //                );
            }else {
                $html .= '<div class="box2">
                                <div class="box2_top">
                                    <div class="box2_bot">
                                        <div class="pad">
                                            <div class="wrapper">
                                                <figure class="left"><img src="images/marker_1.gif" alt=""></figure>
                                                <div class="cols">
                                                    <a href="#">This is the Result of Query:</a>
                                                    The vin is ' . $row['vin']. ' <br/>'.
                    'The Sales Person is ' . $row['sales_person']. ' <br/>'.
                    'The Sales Discount is ' . $row['sales_discount'].' <br/>'.
                    'The Sales Commission is ' . $row['sales_commission']. '
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
            }
        }
        if(!$isAPI)
            echo    $html;
        //die(var_dump($html));
        $this->queryCount += 1;
        $this->logQuery($sql, $start);
        return array("data" => $APIList , "time" => $this->queries[0]["time"]);
    }


    function queryChart($sql) {
        echo "[";

        $start = $this->getTime();
        $query = $this->conn->prepare($sql);
        $query->execute();
        $html = '';
        for($i=0; $row =  $query->fetch(MYSQLI_ASSOC) ;  $i++) {
            echo "['" .$row["sales_person"]. "', " .$row["total"]. "],";
        }
        echo "];";
        $this->queryCount += 1;
        $this->logQuery($sql, $start);
    }

	/*-----------------------------------
	          	DEBUGGING
	------------------------------------*/

    function logQuery($sql, $start) {
        $query = array(
            'sql' => $sql . "  execution time: ".($this->getTime() - $start),
            'time' => ($this->getTime() - $start)*1000
        );
        array_push($this->queries, $query);
    }

    function getTime() {
        $time = microtime();
        $time = explode(' ', $time);
        $time = $time[1] + $time[0];
        $start = $time;
        return $start;
    }

    public function getReadableTime($time) {
        $ret = $time;
        $formatter = 0;
        $formats = array('ms', 's', 'm');
        if($time >= 1000 && $time < 60000) {
            $formatter = 1;
            $ret = ($time / 1000);
        }
        if($time >= 60000) {
            $formatter = 2;
            $ret = ($time / 1000) / 60;
        }
        $ret = number_format($ret,3,'.','') . ' ' . $formats[$formatter];
        return $ret;
    }

    function __destruct() {
        @mysql_close($this->conn);
    }

}



class PQPExample {

    public $profiler;
    public $db = '';
    public $isAPI = false;

    public function __construct($isAPI = false) {
        $this->isAPI = $isAPI;
        if(!$this->isAPI)
            $this->profiler = new PhpQuickProfiler(PhpQuickProfiler::getMicroTime());
    }

    public function init() {
        if(!$this->isAPI) {
            $this->sampleConsoleData();
            $this->sampleMemoryLeak();
            $this->sampleSpeedComparison();

        }
        $this->sampleDatabaseData();
    }

	/*-------------------------------------------
	     EXAMPLES OF THE 4 CONSOLE FUNCTIONS
	-------------------------------------------*/

    public function sampleConsoleData() {
        try {
            Console::log('Begin logging data');
            Console::logMemory($this, 'PQP Example Class : Line '.__LINE__);
            Console::logSpeed('Time taken to get to line '.__LINE__);
            Console::log(array('Name' => 'Ryan', 'Last' => 'Campbell'));
            Console::logSpeed('Time taken to get to line '.__LINE__);
            Console::logMemory($this, 'PQP Example Class : Line '.__LINE__);
            Console::log('Ending log below with a sample error.');
            throw new Exception('Unable to write to log!');
        }
        catch(Exception $e) {
            Console::logError($e, 'Sample error logging.');
        }
    }

	/*-------------------------------------
	     DATABASE OBJECT TO LOG QUERIES
	--------------------------------------*/

    public function sampleDatabaseData() {
        $this->db = new MySqlDatabase(
            'localhost',
            'root',
            '');
    }

	/*-----------------------------------
	     EXAMPLE MEMORY LEAK DETECTED
	------------------------------------*/

    public function sampleMemoryLeak() {
        $ret = '';
        $longString = 'This is a really long string that when appended with the . symbol
					  will cause memory to be duplicated in order to create the new string.';
        for($i = 0; $i < 10; $i++) {
            $ret = $ret . $longString;
            Console::logMemory($ret, 'Watch memory leak -- iteration '.$i);
        }
    }

	/*-----------------------------------
	     POINT IN TIME SPEED MARKS
	------------------------------------*/

    public function sampleSpeedComparison() {
        Console::logSpeed('Time taken to get to line '.__LINE__);
        Console::logSpeed('Time taken to get to line '.__LINE__);
        Console::logSpeed('Time taken to get to line '.__LINE__);
        Console::logSpeed('Time taken to get to line '.__LINE__);
        Console::logSpeed('Time taken to get to line '.__LINE__);
        Console::logSpeed('Time taken to get to line '.__LINE__);
    }

    public function __destruct() {

        if(!$this->isAPI)
            $this->profiler->display($this->db);
    }

}



?>
