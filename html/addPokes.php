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
			<form action='index.php?control=insertPoke' method='post' enctype='multipart/form-data'>
				<table align="center" border="1">
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
						<td colspan="2" align="center">Please upload Pokemon Image</td>
					</tr>
					<tr>				
						<td colspan="2" align="center"><img src="img_upload/preview.png" id="previewImage" alt="preview" width="300" height="300"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<label for="fileToUpload" class="custom-file-button">Upload Cover Page</label>
							<input type="file" name="fileToUpload" id="fileToUpload" onchange="imagePreview(event)" accept="image/*">
							<!-- event is from onchange itself because onchange is a type of event. Always take note of 'name' 
							- 'accept' only allows image input  -->
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
				</table>
			</form>
		</div>
	</section>
</body>
</html>