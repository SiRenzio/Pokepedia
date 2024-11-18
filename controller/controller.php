<?php
class Controller{

    public $model=null;

    function __construct(){
        require_once('model/model.php');
		$this->model=new Model();
    }

    public function getPage(){
        $control = null;

        if(isset($_REQUEST['control']))
            $control= $_REQUEST['control'];

        switch($control){
            case 'home':
                {
                    include('html/home.html');
                    break;
                }

            case 'about':
                {
                    include('html/about.html');
                    break;
                }

            case 'gallery':
                {
                    include('html/gallery.html');
                    break;
                }

            case 'pokeDetails':
                {
                    $pokeID = $_GET['num'];
                    $pokemons = $this->model->getPokeDetails($pokeID);
                    include('html/pokeDetails.php');
                    break;
                }

            case 'pokeDex':
                {
                    $pokemons = $this->model->getPokedex();	
                    include 'html/pokeDex.php';
                    break;
                }

            case 'deleteRec':
                {
                    $pokeid=$_REQUEST['id'];	

                    $imagePath = $this->model->getExistingImage($pokeid);
                    $result = $this->model->deleteRecord($pokeid, $imagePath);
                    echo "<script> alert ('".$result."')
                        window.location.href='index.php?control=pokeDex'
                        </script>";						
                    break;
                }

            case 'addPoke':
                {
                    include 'html/addPokes.php';
                    break;
                }

            case 'insertPoke':
                {
                    $name = $_REQUEST['name'];
                    $type1 = $_REQUEST['type1'];
                    $type2 = $_REQUEST['type2'];
                    $description = $_REQUEST['description'];
                    $weight = $_REQUEST['weight'];
                    $height = $_REQUEST['height'];
                    $me = $_REQUEST['mega_evolves'];
                    $ne = $_REQUEST['next_evolution'];
                
                    $imageUpload=basename($_FILES["fileToUpload"]["name"]); /* - gives access to 'fileToUpload's' filename, 
                    - $_FILES is a PHP superglobal array used to handle file uploads. 
                    - basename() ensures that only the filename is being stored, directory is no longer retrieved. */

                    $imagePath="img_upload/". $imageUpload; /* Just assigns name to Imagepath
                    - but does not contain actual file content,
                    - it will contain file content later on when "tmp_name" is assigned here. */
                    $imageFileType = strtolower(pathinfo($imagePath,PATHINFO_EXTENSION)); /* pathinfo() has 2 parameters,
                    - 1st parameter is the image path whose extension you want to retrieve.
                    - 2nd parameter tells pathinfo() to return the file extension.
                    - strtolower changes all letters into lowercase. */

                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]); /* tmp_name is the temporary file location of the image
                    - this returns a value of an array, where in different indexes, it contains the image's height, width, and imagetype */
                
                    $err=$this->model->checkImageUpload($check,$imageFileType,$imagePath);
                
                    if($err=="K")
                    {
                        $result=$this->model->insertPokeData($id,$name,$type1,$type2,$description,$weight,$height,$me,$ne,$imagePath);
                        echo '<script> alert ("'.$result.'")</script>';
                    
                        include 'html/addPokes.php';
                    }
                    else
                    {
                        echo '<script> alert ("'.$err.'")</script>';
                    }			

                    break;   
                }

            case 'editPokes':
                {
                    $id=$_REQUEST['id'];
                                        
                    $poke=$this->model->getPokeDetails($id);
                    
                    include 'html/edit_poke.php';				
                    break;
                }
                
            case 'updateRec':
                {				
                    $id=$_REQUEST['id'];
                    $name=$_REQUEST['name'];
                    $type1=$_REQUEST['type1'];
                    $type2=$_REQUEST['type2'];
                    $description=$_REQUEST['description'];
                    $weight=$_REQUEST['weight'];
                    $height=$_REQUEST['height'];
                    $mega_evolves=$_REQUEST['mega_evolves'];
                    $next_evolution=$_REQUEST['next_evolution'];

                    if(!empty($_FILES["fileToUpload"]["name"])){
                        $imageUpload=basename($_FILES["fileToUpload"]["name"]);
            
                        $imagePath="img_upload/". $imageUpload;
                        
                        $imageFileType = strtolower(pathinfo($imagePath,PATHINFO_EXTENSION));
                        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

                        $err=$this->model->checkImageUpload($check,$imageFileType,$imagePath);
                        if($err=="K")
                        {
                            echo '<script> alert ("'.$err.'")</script>';
                        }
                    }
                    else{
                        $imagePath = $this->model->getExistingImage($id);
                    }

                    $result=$this->model->updateRecords($id,$name,$type1,$type2,$description,$weight,$height,$mega_evolves,$next_evolution,$imagePath);
                    echo "<script> alert ('".$result."')
                            window.location.href='index.php?control=pokeDex'
                        </script>";

                    break;
                }

                //TODO addImage sa Gallery

                //TODO delete Image

                //TODO search

            default:
                {
                    include 'html/home.html';
                    break;
                }
        }
    }
}
?>