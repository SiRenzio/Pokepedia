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
                    $pokemon = $this->model->getPokedex();
                    include('html/gallery.php');
                    break;
                }

            case 'pokeDetails':
                {
                    $pokeID = $_GET['id'];
                    $pokemons = $this->model->getPokeDetails($pokeID);
                    include('html/pokeDetails.php');
                    break;
                }

            case 'pokeDex':
                {
                    if($_POST){
                        $pokeSearch = $_REQUEST['pokeSearch'];
                    }

                    if(isset($pokeSearch)){
                        $pokemons = $this->model->getPokeSearch($pokeSearch);
                        include 'html/pokeDex.php';
                    }
                    else{
                        $pokemons = $this->model->getPokedex();	
                        include 'html/pokeDex.php';
                    }
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
                    $pokemon_no=$_REQUEST['poke_no'];
                    $name = $_REQUEST['name'];
                    $type1 = $_REQUEST['type1'];
                    $type2 = $_REQUEST['type2'];    
                    $description = $_REQUEST['description'];
                    $weight = $_REQUEST['weight'];
                    $height = $_REQUEST['height'];
                    $me = $_REQUEST['mega_evolves'];
                    $ne = $_REQUEST['next_evolution'];
                

                    if (!filter_var($pokemon_no, FILTER_VALIDATE_INT) || 
                        !filter_var($weight, FILTER_VALIDATE_FLOAT) || 
                        !filter_var($height, FILTER_VALIDATE_FLOAT)){
                        echo '<script> alert("Please input a number on Pokemon No., Weight, Height!")</script>';
                        include 'html/addPokes.php';
                    }
                    else{
                        if(!empty($_FILES["fileToUpload"]["name"])){
                            $imageUpload=basename($_FILES["fileToUpload"]["name"]);
                            
                            $imagePath="img_upload/". $imageUpload;
                            
                            $imageFileType = strtolower(pathinfo($imagePath,PATHINFO_EXTENSION));
                            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    
                            $err = $this->model->checkImageUpload($check,$imageFileType,$imagePath,1);
                        }
                        else{
                            $err = 'No Image Selected';
                        }
                        
                        if($err=="K" )
                        {
                            $result=$this->model->insertPokeData($pokemon_no,$name,$type1,$type2,$description,$weight,$height,$me,$ne,$imagePath);
                            echo '<script> alert ("'.$result.'")</script>';
                        }
                        else
                        {
                            echo '<script> alert ("'.$err.'")</script>'; 
                        }			

                        include 'html/addPokes.php';
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
                    $pokemon_no=$_REQUEST['poke_no'];
                    $name=$_REQUEST['name'];
                    $type1=$_REQUEST['type1'];
                    $type2=$_REQUEST['type2'];
                    $description=$_REQUEST['description'];
                    $weight=$_REQUEST['weight'];
                    $height=$_REQUEST['height'];
                    $mega_evolves=$_REQUEST['mega_evolves'];
                    $next_evolution=$_REQUEST['next_evolution'];

                    if (!filter_var($pokemon_no, FILTER_VALIDATE_INT) || 
                        !filter_var($weight, FILTER_VALIDATE_FLOAT) || 
                        !filter_var($height, FILTER_VALIDATE_FLOAT)){
                        echo "<script> alert('Please input a number on Pokemon No., Weight, Height!')
                        window.location.href='index.php?control=editPokes&id=$id'
                        </script>";
                    }
                    
                    else{
                        if(!empty($_FILES["fileToUpload"]["name"])){
                            $imageUpload=basename($_FILES["fileToUpload"]["name"]);
                
                            $imagePath="img_upload/". $imageUpload;
                            
                            $imageFileType = strtolower(pathinfo($imagePath,PATHINFO_EXTENSION));
                            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    
                            $err = $this->model->checkImageUpload($check,$imageFileType,$imagePath,2);

                            if ($imagePath != $this->model->getExistingImage($id)){
                                $oldImagePath = $this->model->getExistingImage($id);
                                $this->model->deleteRecord($id,$oldImagePath);
                            }
                        }
                        else{
                            $imagePath = $this->model->getExistingImage($id);
                            $err = 'K';
                        }
    
                        if($err == "K"){
                            $result=$this->model->updateRecords($id,$pokemon_no,$name,$type1,$type2,$description,$weight,$height,$mega_evolves,$next_evolution,$imagePath);
                            echo "<script> alert ('".$result."')
                                window.location.href='index.php?control=pokeDex'
                            </script>";
                        }
                        else{
                            echo "<script> alert ('".$err."')
                            window.location.href='index.php?control=editPokes&id=$id'
                            </script>";
                        }
                    }

                    break;
                }

            default:
                {
                    include 'html/home.html';
                    break;
                }
        }
    }
}
?>