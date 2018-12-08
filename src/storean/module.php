<?php
namespace storean;
// use BafReport\Db;
use storean\config;
class App
{
	protected static $_instance;
	// Database Credentials
	protected $private_key;
	protected $password;
	protected $db_name;
	protected $charset;
	protected $conn;
	// static $this;
	public function __construct($private_key = NULL)
	{
		// // global $conn;
		// // if params were passed as array
  //       if (is_array ($host)) {
  //           foreach ($host as $key => $val)
  //               $$key = $val;
  //       }
  //       // if host were set as mysqli socket
  //       if (is_object ($host))
  //           $this->_mysqli = $host;
  //       else
  //           $this->host = $host;
  //       $this->username = $username;
  //       $this->password = $password;
  //       $this->db_name = $db_name;
  //       $this->port = $port;
  //       $this->charset = $charset;
  //       $this->conn = $this->connect();
  //       return self::$_instance;
  //       // var_dump($this);
	}
	public function connect(){
		// try {
		//     $conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->username, $this->password);
		//     // $conn = new PDO("mysql:host=mysql;dbname=baf_extension_db", $this->username, $this->password);
		//     // set the PDO error mode to exception
		//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//     // echo "Connected successfully"; 
		//     }
		// catch(PDOException $e)
		//     {
		//     // echo "Connection failed: " . $e->getMessage();
	 //    }
  //       return $conn;
	}
}