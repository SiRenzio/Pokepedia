<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pokemon</title>
    <link rel="stylesheet" href="css/add_edit.css">

	<script type="text/javascript">
      function imagePreview(event) {
         if(event.target.files.length > 0)
         {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("previewImage");
            preview.src = src;      
            preview.style.display = "block";
          }
      }
    
    </script>
</head>
<body>
    <section class="editContainer">
        <div class="editWrapper">
			<div class="inputWrapper">
				<form action='index.php?control=updateRec&id=<?php echo $poke[0]->id ?>' method='post' enctype='multipart/form-data'>
					<div class="input-field">
						<label for="id">Pokémon No.</label><br>
						<input type="text" name="poke_no" value="<?php echo $poke[0]->pokemon_no ?>" autocomplete="off" required></input>
					</div>
					<div class="input-field">
						<label for="name">Name</label><br>
						<input type="text" name="name" value="<?php echo $poke[0]->poke_name ?>" autocomplete="off"></input>
					</div>
					<div class="input-field">
						<label for="type1">Type 1</label><br>
						<input type="text" name="type1" value="<?php echo $poke[0]->type1 ?>" autocomplete="off"></input>
					</div>
					<div class="input-field">
						<label for="type2">Type 2</label><br>
						<input type="text" name="type2" value="<?php echo $poke[0]->type2 ?>" autocomplete="off"></input>
					</div>
					<h3>Please Upload Pokemon Image</h3><br>
					<img src="<?php echo $poke[0]->poke_image ?>" id="previewImage" alt="<?php echo $poke[0]->poke_name ?>" width="300" height="300">
					<div class="input-field">
						<label for="fileToUpload" class="custom-file-button">Upload Pokémon Image</label>
						<input type="file" name="fileToUpload" id="fileToUpload" onchange="imagePreview(event)" accept="image/*"></input>
					</div>
					<div class="input-field">
						<label for="description">Description</label><br>
						<textarea name="description" id="desc-field" style='resize: none'><?php echo $poke[0]->poke_description ?></textarea>
					</div>
					<div class="input-field">
						<label for="weight">Weight</label><br>
						<input type="text" name="weight" value="<?php echo $poke[0]->poke_weight ?>" autocomplete="off"></input>
					</div>
					<div class="input-field">
						<label for="height">Height</label><br>
						<input type="text" name="height" value="<?php echo $poke[0]->height ?>" autocomplete="off"></input>
					</div>
					<div class="input-field">
						<label for="mega_evolves">Mega Evolves</label><br>
						<input type="text" name="mega_evolves" value="<?php echo $poke[0]->mega_evolves ?>" autocomplete="off"></input>
					</div>
					<div class="input-field">
						<label for="next_evolution">Next Evolution</label><br>
						<input type="text" name="next_evolution" value="<?php echo $poke[0]->next_evolution ?>" autocomplete="off"></input>
					</div>
					<div class="submit-reset_btns">
						<button type='submit' name='saveRecords' class="btn">Save Records</button>
						<button type='reset' class="btn">Reset</button>
					</div>
				</form>
			</div>
	        </form>
        </div>
    </section>
</body>
</html>