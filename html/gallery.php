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
            echo "<div class=region_Starters>";
                echo "<div class = card>";
                    echo "<a href='index.php?control=pokeDetails&num=$starters->id'>";
                echo "</div>";
            echo "</div>";
            }
            // <div class="region_Starters">
            //     <div id="bulbasaur" class="card">
            //         <a href="index.php?control=pokeDetails&num=1"><img src="imgsrc/001.png" class="starter"></a>
            //     </div>
            //     <div id="ivysaur" class="card">
            //         <a href="index.php?control=pokeDetails&num=2"><img src="imgsrc/002.png" class="starter"></a>
            //     </div>
            //     <div id="venusaur" class="card">
            //         <a href="index.php?control=pokeDetails&num=3"><img src="imgsrc/003.png" class="starter"></a>
            //     </div>
            // </div>
            // <div class="region_Starters">
            //     <div id="charmander" class="card">
            //         <a href="index.php?control=pokeDetails&num=4"><img src="imgsrc/004.png" class="starter"></a>
            //     </div>
            //     <div id="charmeleon" class="card">
            //         <a href="index.php?control=pokeDetails&num=5"><img src="imgsrc/005.png" class="starter"></a>
            //     </div>
            //     <div id="Charizard" class="card">
            //         <a href="index.php?control=pokeDetails&num=6"><img src="imgsrc/006.png" class="starter"></a>
            //     </div>
            // </div>
            // <div class="region_Starters">
            //     <div id="squirtle" class="card">
            //         <a href="index.php?control=pokeDetails&num=7"><img src="imgsrc/007.png" class="starter"></a>
            //     </div>
            //     <div id="wartortle" class="card">
            //         <a href="index.php?control=pokeDetails&num=8"><img src="imgsrc/008.png" class="starter"></a>
            //     </div>
            //     <div id="Blastoise" class="card">
            //         <a href="index.php?control=pokeDetails&num=9"><img src="imgsrc/009.png" class="starter"></a>
            //     </div>
            // </div>
        ?>
    </div>
</body>
</html>