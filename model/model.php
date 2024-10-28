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

	public function getPokeDetails($pokeID)
	{
		$data = array();

		$queryGetDetails = mysqli_query($this->db,"SELECT * FROM pokedex WHERE id = $pokeID");

		while($getRow=mysqli_fetch_object($queryGetDetails))    		
		{    			
			$data[] = $getRow;
		}
		return $data;     
	}

	public function deleteRecord($pokeid)
    {
    	$sql="DELETE FROM pokedex WHERE id=$pokeid";
		
		$result = mysqli_query($this->db,$sql);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Deleted";
    }
	
}