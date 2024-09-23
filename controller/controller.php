<?php
class Controller{
    function __construct(){
        
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
        }
    }


}
?>