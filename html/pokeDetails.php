<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pokeDetails_styles.css">
</head>
<body>
    <div class="Container">
        <?php
	    	foreach($details as $title=>$pokeDetails)
	    	{
	    		echo  "<h1>" . "ID: " . $pokeDetails->id . "<br>";
                echo  "Name: " . $pokeDetails->name . "<br>";
                echo  "Type1: " . $pokeDetails->type1 . "<br>";
                echo  "Type2: " . $pokeDetails->type2 . "<br>";
                echo  "Description: " . $pokeDetails->description . "<br>";
                echo  "Weight: " . $pokeDetails->weight . "<br>";
                echo  "Height: " . $pokeDetails->height . "<br>";
                echo  "Mega Evolves: " . $pokeDetails->mega_evolves . "<br>";
                echo  "Next Evolution: " . $pokeDetails->next_evolution . "<br>";
	    	}
	    ?>
    </div>
</body>
</html>