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
	    	foreach($pokemons as $id=>$pokeDetails)
	    	{
	    		echo  "ID: " . $pokeDetails->id . "<br>";
                echo "Name: " . $pokeDetails->poke_name . "<br>";
                echo "Type1: " . $pokeDetails->type1 . "<br>";
                echo "Type2: " . $pokeDetails->type2 . "<br>";
                echo "Description: " . $pokeDetails->poke_description . "<br>";
                echo "Weight: " . $pokeDetails->poke_weight . "<br>";
                echo "Height: " . $pokeDetails->height . "<br>";
                echo "Mega Evolves: " . $pokeDetails->mega_evolves . "<br>";
                echo "Next Evolution: " . $pokeDetails->next_evolution . "<br>";
                echo "<img src='" . $pokeDetails->poke_image . "' alt='poke_img' class='poke_img'>" . "<br>";
	    	}
	    ?>
    </div>
</body>
</html>