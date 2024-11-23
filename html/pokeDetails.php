<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pokeDetails_styles.css">
</head>
<body>
    <section class="container">
        <div class="wrapper">
            <?php
	        	foreach($pokemons as $pokeDetails)
	        	{
                    echo "<img src='" . $pokeDetails->poke_image . "' alt='poke_img' class='poke_img'>" . "<br>";
                    echo "<div class='text_details'>";
                        echo "<strong>" . "Pokémon No.: " . "</strong>" . $pokeDetails->pokemon_no . "<br>";
                        echo "<strong>" . "Name: " . "</strong>" . $pokeDetails->poke_name . "<br>";
                        echo "<strong>" . "Type1: " . "</strong>" . $pokeDetails->type1 . "<br>";
                        echo "<strong>" . "Type2: " . "</strong>" . $pokeDetails->type2 . "<br>";
                        echo "<strong>" . "Description: " . "</strong>" . $pokeDetails->poke_description . "<br>";
                        echo "<strong>" . "Weight: " . "</strong>" . $pokeDetails->poke_weight . "<br>";
                        echo "<strong>" . "Height: " . "</strong>" . $pokeDetails->height . "<br>";
                        echo "<strong>" . "Mega Evolves: " . "</strong>" . $pokeDetails->mega_evolves . "<br>";
                        echo "<strong>" . "Next Evolution: " . "</strong>" . $pokeDetails->next_evolution . "<br>" . "<br>";
                    echo "</div>";
	        	}
	        ?>
        </div>
    </section>
</body>
</html>