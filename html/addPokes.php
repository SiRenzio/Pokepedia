<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Pokemon</title>
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
	<section class="addContainer">
		<div class="addWrapper">
			<div class="inputWrapper">
				<form <?php echo"action='index.php?control=insertPoke'"?> method='post' enctype='multipart/form-data'>
					<h1>Add Pokémon</h1>
					<div class="input-field">
						<label for="id">Pokémon No.</label><br>
						<input type="text" name="poke_no" autocomplete="off" required></input>
					</div>
					<div class="input-field">
						<label for="name">Name</label><br>
						<input type="text" name="name" autocomplete="off"></input>
					</div>
					<div class="input-field">
						<label for="type1">Type 1</label><br>
						<input type="text" name="type1" autocomplete="off"></input>
					</div>
					<div class="input-field">
						<label for="type2">Type 2</label><br>
						<input type="text" name="type2" autocomplete="off"></input>
					</div>
					<h3>Please Upload Pokemon Image</h3><br>
					<img src="img_upload/preview.png" id="previewImage" alt="preview" width="300" height="300">
					<div class="input-field">
						<label for="fileToUpload" class="custom-file-button">Upload Pokémon Image</label>
						<input type="file" name="fileToUpload" id="fileToUpload" onchange="imagePreview(event)" accept="image/*"></input>
					</div>
					<div class="input-field">
						<label for="description">Description</label><br>
						<textarea name="description" id="desc-field" style='resize: none'></textarea>
					</div>
					<div class="input-field">
						<label for="weight">Weight</label><br>
						<input type="text" name="weight" autocomplete="off"></input>
					</div>
					<div class="input-field">
						<label for="height">Height</label><br>
						<input type="text" name="height" autocomplete="off"></input>
					</div>
					<div class="input-field">
						<label for="mega_evolves">Mega Evolves</label><br>
						<input type="text" name="mega_evolves" autocomplete="off"></input>
					</div>
					<div class="input-field">
						<label for="next_evolution">Next Evolution</label><br>
						<input type="text" name="next_evolution" autocomplete="off"></input>
					</div>
					<div class="submit-reset_btns">
						<button type='submit' name='saveRecords' class="btn">Save Records</button>
						<button type='reset' class="btn">Reset</button>
					</div>
				</form>
			</div>
		</div>
	</section>
</body>
</html>