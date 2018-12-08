<?php
namespace storean;
use GuzzleHttp;
use GuzzleHttp\Psr7\Request;
// use BafReport\Db;


class Brand
{
	private $private_key;
    public function __construct($private_key)
    {
    	// $a->connect();
        $this->private_key = $private_key;
        // var_dump($this);
        return $this;
        // var_dump($this->a->conn);
    }
    /*
    *	Get all applicant data, default is submitted today
    */
	public function getInfo(){
        // var_dump($this);
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'https://storean.herokuapp.com/v1/store', [
            'headers' => ["key"=>$this->private_key]
        ]);
        // var_dump($res);
        $data = $res->getBody();
        // echo $data;
        $arr = json_decode($data, true);
		return $arr['results'];
	}
// <<<<<<< HEAD
    public function getProducts(){
        // var_dump($this);
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'https://storean.herokuapp.com/v1/products', [
            'headers' => ["key"=>$this->private_key]
        ]);
        // var_dump($res);
        $data = $res->getBody();
        // echo $data;
        $arr = json_decode($data, true);
        return $arr['results'];
    }
// =======
// >>>>>>> 29b02e23761d49d7432e286548dbdb849d6d5859
}