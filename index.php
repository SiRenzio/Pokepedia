<?php
    echo"<title>Pokepedia</title>";
    echo"<div align=CENTERR>";
        include_once( 'html/header.html');
    echo"</div>";

    echo "<div>";				
        include_once('controller/controller.php');
        $controller = new Controller();
        $controller->getPage();	
    echo "</div>";

    echo"<div align=CENTERR>";
        include_once( 'html/footer.html');
    echo"</div>";
?>