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
				<form action='index.php?control=insertPoke' method='post' enctype='multipart/form-data'>
					<h1>Add Pokémon</h1>
					<div class="input-field">
						<label for="id">Pokémon No.</label><br>
						<input type="text" name="id"></input>
					</div>
					<div class="input-field">
						<label for="name">Name</label><br>
						<input type="text" name="name"></input>
					</div>
					<div class="input-field">
						<label for="type1">Type 1</label><br>
						<input type="text" name="type1"></input>
					</div>
					<div class="input-field">
						<label for="type2">Type 2</label><br>
						<input type="text" name="type2"></input>
					</div>
					<h3>Please Upload Pokemon Image</h3><br>
					<img src="img_upload/preview.png" id="previewImage" alt="preview" width="300" height="300">
					<div class="input-field">
						<label for="fileToUpload" class="custom-file-button">Upload Pokémon Image</label>
						<input type="file" name="fileToUpload" id="fileToUpload" onchange="imagePreview(event)" accept="image/*"></input>
					</div>
					<div class="input-field">
						<label for="description">Description</label><br>
						<textarea name="description" id="desc-field"></textarea>
					</div>
					<div class="input-field">
						<label for="weight">Weight</label><br>
						<input type="text" name="weight"></input>
					</div>
					<div class="input-field">
						<label for="height">Height</label><br>
						<input type="text" name="height"></input>
					</div>
					<div class="input-field">
						<label for="mega_evolves">Mega Evolves</label><br>
						<input type="text" name="mega_evolves"></input>
					</div>
					<div class="input-field">
						<label for="next_evolution">Next Evolution</label><br>
						<input type="text" name="next_evolution"></input>
					</div>
					<div class="submit-reset_btns">
						<button type='submit' name='saveRecords' class="btn">Save Records</button>
						<button type='reset' class="btn">Reset</button>
					</div>
				</form>
			</div>
				<!-- <table align="center" border="1">
					<tr>
						<td>ID:</td>
						<td><input type='text' name='id'></input></td>
					</tr>
					<tr>
						<td>Name:</td>
						<td><input type='text' name='name' ></input></td>
					</tr>			
					<tr>
						<td>Type1:</td>
						<td><input type='text' name='type1' ></input></td>
					</tr>
					<tr>
						<td>Type2:</td>
						<td><input type='text' name='type2' ></input></td>
					</tr>
					<tr>
						<td colspan="2" align="center">Please upload Pokémon Image</td>
					</tr>
					<tr>				
						<td colspan="2" align="center"><img src="img_upload/preview.png" id="previewImage" alt="preview" width="300" height="300"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<label for="fileToUpload" class="custom-file-button">Upload Pokémon Image</label>
							<input type="file" name="fileToUpload" id="fileToUpload" onchange="imagePreview(event)" accept="image/*">
							event is from onchange itself because onchange is a type of event. Always take note of 'name' 
							- 'accept' only allows image input 
						</td>
					</tr>
					<tr>
						<td colspan="2">Description:</td>
					</tr>	
					<tr>
						<td colspan="2"><textarea name='description' cols=100 rows=10></textarea></td>
					</tr>
					<tr>
						<td>Weight:</td>
						<td><input type='text' name='weight' ></input></td>
					</tr>
					<tr>
						<td>Height:</td>
						<td><input type='text' name='height'></input></td>
					</tr>
					<tr>
						<td>Mega  Evolves:</td>
						<td><input type='text' name='mega_evolves' ></input></td>
					</tr>
					<tr>
						<td>Next Evolution:</td>
						<td><input type='text' name='next_evolution' ></input></td>
					</tr>
					<td colspan='6' align='center'>
						<input type='submit' value='Save Records' name='saveRecords'>
						<input type='reset' value='Reset'>
					</td>	
				</table> -->
		</div>
	</section>
</body>
</html>