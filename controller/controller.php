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
        }
    }
}
?>