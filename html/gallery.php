<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokePedia</title>
    <link rel="stylesheet" href="css/gallery_styles.css">
</head>
<body>
    <div id="container">
        <?php
            foreach ($pokemon as $starters){
                echo "<div class = card>";
                    echo "<a href='index.php?control=pokeDetails&id=$starters->id'><img src='$starters->poke_image' class = starter></a>";
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>