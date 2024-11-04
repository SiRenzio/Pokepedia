<?php
class Controller{

    public $model=null;

    function __construct(){
        require_once('model/model.php');
		$this->model=new Model();
    }

    public function getPage(){
        $control = 'home';

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
                $details=$this->model->getPokeDetails($pokeID);
                include('html/pokeDetails.php');
                break;
            }

            case 'pokeDex':
            {
                $books=$this->model->getBookList();	
                include 'html/pokeDex.php';
                break;
            }

            case 'deleteRec':
            {
                $pokeid=$_REQUEST['id'];	

                $result=$this->model->deleteRecord($pokeid);
                echo "<script> alert ('".$result."')
                        window.location.href='index.php?control=pokeDex'
                        </script>";						
                break;
            }

            case 'addPoke':
            {
                include 'html/addBooks.php';
                break;
            }

            case 'insertPoke'://Insert Books
            {
                

                $id=$_REQUEST['id'];
                $name=$_REQUEST['name'];
                $type1=$_REQUEST['type1'];
                $type2=$_REQUEST['type2'];
                $description=$_REQUEST['description'];
                $weight=$_REQUEST['weight'];
                $height=$_REQUEST['height'];
                $me=$_REQUEST['mega_evolves'];
                $ne=$_REQUEST['next_evolution'];
                

                $imageUpload=basename($_FILES["fileToUpload"]["name"]);

                $imagePath="img_upload/". $imageUpload;

                $imageFileType = strtolower(pathinfo($imagePath,PATHINFO_EXTENSION));
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                

                $err=$this->model->checkImageUpload($check,$imageFileType,$imagePath);
                
                
                if($err=="K")
                {
                    $result=$this->model->insertBook($id,$name,$type1,$type2,$description,$weight,$height,$me,$ne,$imagePath);
                    echo '<script> alert ("'.$result.'")</script>';
                    
                    include 'html/addBooks.php';
                }
                else
                {
                    echo '<script> alert ("'.$err.'")</script>';
                }											
                break;
                
            }
        }
    }
}
?>