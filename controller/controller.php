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

            case 'viewBooks':
            {
                $books=$this->model->getBookList();	
                include 'html/viewbooklist2.php';
                break;
            }
        }
    }
}
?>