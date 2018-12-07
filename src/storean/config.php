<?php
namespace storean;
// use BafReport\Db;
use storean\config;
class Brand
{
	private $a;
    public function __construct(Config $a)
    {
    	// $a->connect();
        $this->a = $a;
        return $this;
        // var_dump($this->a->conn);
    }
    /*
    *	Get all applicant data, default is submitted today
    */
	public function getAll(){
		
	}
}