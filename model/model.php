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
		catch(mysqli_sql_exception)
		{
			exit('Database connection could not be established.');
			echo "error";
		}
	}

	public function getPokedex() 
	{
		$data = array();

		$sql = mysqli_query($this->db,"SELECT * from pokedex");

		while($getRow=mysqli_fetch_object($sql))    		
		{    			
			$data[] = $getRow;
		}
		return $data;     
	}

	public function getPokeDetails($id)
	{
		$data = null;

		$queryGetDetails = mysqli_query($this->db,"SELECT * FROM pokedex WHERE id = $id");

		if($getRow=mysqli_fetch_object($queryGetDetails))    		
		{    			
			$data[] = $getRow;
		}
		return $data;     
	}

	public function deleteRecord($pokeid,$imagePath)
    {
    	$sql = "DELETE FROM pokedex WHERE id = ?";
		$stmt = $this->db->prepare($sql);
		$stmt->bind_param('i', $pokeid);
		$stmt->execute();
		$result = $stmt->get_result();

		if (file_exists($imagePath)){
			if(unlink($imagePath)){
				return "Record Deleted";
			}
		}else{
			return "Image Doesn't Exist";
		}


    }

	public function checkImageUpload($imageSize,$imageFileType,$target_file,$uploadType)
    {
		$uploadOk = 1;
		$errMsg = "1";
		if($imageSize !== false) 
		{				
			// Check if file already exists
			$uploadOk = 1;

			if (file_exists($target_file)) 
			{
				if ($uploadType == 1){
					$errMsg = "Sorry, file already exists.";
				} else {
					$errMsg = "You have chosen the same file, choose a different one.";
				}
				$uploadOk = 0;
			}
			else
			{
				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 5000000) 
				{
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

	public function insertPokeData($pokemon_no,$name,$type1,$type2,$description,$weight,$height,$me,$ne,$images)
    {
		//change to prepared statement
		$sql="INSERT INTO pokedex(pokemon_no, poke_name, type1, type2, poke_description, poke_weight, height, mega_evolves, next_evolution, poke_image)
				VALUES(? , ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$stmt = $this->db->prepare($sql);
		$stmt->bind_param("issssddsss", $pokemon_no, $name, $type1, $type2, $description, $weight, $height, $me, $ne, $images);
		
		if($stmt->execute())
			return "Record Saved";
		else
			return mysqli_error($this->db);

		$stmt->close();
    }

    public function updateRecords($id,$pokemon_no,$name,$type1,$type2,$description,$height,$weight,$mega_evolves,$next_evolution,$images)
    {
		//change to prepared statement
    	$sql="UPDATE pokedex SET pokemon_no=?, poke_name=?,type1=?,type2=?,poke_description=?,poke_weight=?,
    						height=?,mega_evolves=?,next_evolution=?,poke_image=? WHERE id=?";
		$stmt = $this->db->prepare($sql);
		$stmt->bind_param("issssddsssi", $pokemon_no, $name, $type1, $type2, $description, $weight, $height, $mega_evolves, $next_evolution, $images, $id);
		
		if($stmt->execute())
			return "Record Updated";
		else
			return mysqli_error($this->db);

		$stmt->close();
    }

	public function getExistingImage($id) 
	{
		$sql = "SELECT poke_image FROM pokedex WHERE id = ?";
		$stmt = $this->db->prepare($sql);
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$stmt->bind_result($imagePath);
		$stmt->fetch();
		$stmt->close();
		return $imagePath;
	}
	
	public function getPokeSearch($pokeSearch){
		$data = null;

		$sql = "SELECT * FROM pokedex WHERE pokemon_no LIKE ? OR poke_name LIKE ? OR type1 LIKE ? OR type2 LIKE ?";
		$stmt = $this->db->prepare($sql);

		$searchTerm = '%' . $pokeSearch . '%';
		$stmt->bind_param("ssss", $searchTerm, $searchTerm, $searchTerm, $searchTerm);

		$stmt->execute();
		$result = $stmt->get_result(); 

		while($row = $result->fetch_object())    		
		{    			
			$data[] = $row;
		}
		$stmt->close();
		return $data;  
	}
}