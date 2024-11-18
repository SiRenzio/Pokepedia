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

	public function getPokedex() 
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

		if($getRow=mysqli_fetch_object($queryGetDetails))    		
		{    			
			$data[] = $getRow;
		}
		return $data;     
	}

	public function deleteRecord($pokeid)
    {
    	$sql = "DELETE FROM pokedex WHERE id = $pokeid";
		
		$result = mysqli_query($this->db,$sql);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Deleted";
    }

	public function checkImageUpload($imageSize,$imageFileType,$target_file)
    {
		$uploadOk = 1;
		$errMsg = "1";
		if($imageSize !== false) 
		{				
			// Check if file already exists
			$uploadOk = 1;

			if (file_exists($target_file)) 
			{
				$errMsg= "Sorry, file already exists.";
				$uploadOk = 0;
			}

			else
			{
				// Check file size
				
				if ($_FILES["fileToUpload"]["size"] > 5000000) 
				{
					var_dump($imageSize);
					$errMsg= "Sorry, your file is too large.";
					$uploadOk = 0;
				}
				// check certain file formats
				else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) 
				{
					$errMsg= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					$uploadOk = 0;
				}
									
			}
		} 
		else 
		{
			$errMsg= "File is not an image.";
			$uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) 
		{
			$errMsg= $errMsg;
		
		} 
		else // if everything is ok, try to upload file
		{
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) // moves fileupload to targetfile.
			{
				$errMsg = "K";
			} 
			else 
			{
				$errMsg = "Sorry, there was an error uploading your file.";
			}
		}		
		return $errMsg;
    }

	public function insertPokeData($id,$name,$type1,$type2,$description,$weight,$height,$me,$ne,$images)
    {
		// Convert to Prepared Statement TODO
    	$sql="INSERT into pokedex(id, poke_name, type1, type2, poke_description, poke_weight, height, mega_evolves, next_evolution, poke_image)
											values('$id','$name','$type1','$type2', '$description','$weight','$height','$me','$ne','$images')";
		
		$result = mysqli_query($this->db,$sql);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Save";
    }

    public function updateRecords($id,$name,$type1,$type2,$description,$height,$weight,$mega_evolves,$next_evolution,$images)
    {
		// Convert to Prepared Statement TODO
    	$updateQuery="UPDATE pokedex SET id='$id', poke_name='$name',type1='$type1',type2='$type2',poke_description='$description',poke_weight='$weight',
    						height='$height',mega_evolves='$mega_evolves',next_evolution='$next_evolution',poke_image='$images' WHERE id=$id";

    	var_dump($updateQuery);
		
		$result = mysqli_query($this->db,$updateQuery);
		
		if(!$result)
			return mysqli_error($this->db);
		else
			return "Record Updated";
    }
	
}