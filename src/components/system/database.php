<?php
class Database {
    private static $instance = null;
    private $conn = null;
    private $num_of_queries = 0;
    
    private function __construct() {}
    
    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new self;
            self::$instance->connect();
        }
        return self::$instance;
    }
    
    private function connect() {
        if(!isset($this->conn))
           // $this->conn = mysqli_connect("mysql.rackhost.hu","c13343eplanner","tacoskft2019","c13343easyplanner");
        $this->conn = mysqli_connect(Config::getInstance()->getDB("HOST"),Config::getInstance()->getDB("USERNAME"),Config::getInstance()->getDB("PASSWORD"),Config::getInstance()->getDB("DB"));

        return $this->conn;
    }
    
    private function escape($tag) {
        return $this->conn->real_escape_string($tag);
    }

    public function makeQuery($query_string) {
        if($this->conn) {
          $this->num_of_queries++;
          return $this->conn->query($query_string);
        }
    }
    
    public function getNumberOfQueries() {
      return $this->num_of_queries;
    }
    
    public function getLastId() {
      return $this->conn->insert_id;
    }
}