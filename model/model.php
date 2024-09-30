<?php
class Model
{
	public $db=null;

	function __construct()
	{
		try
		{
			$this->db = new mysqli('localhost', 'root', '', 'pokepediadex');
		}
		catch(mysqli_sql_exception $e)
		{
			exit('Database connection could not be established.');
			echo "error";
		}
	}

	public function getBookList() 
	{
		$data = array();

		$queryGetBooks = mysqli_query($this->db,"SELECT * from pokedex");

		while($getRow=mysqli_fetch_object($queryGetBooks))    		
		{    			
			$data[] = $getRow;
		}
		return $data;     
	}
	
}