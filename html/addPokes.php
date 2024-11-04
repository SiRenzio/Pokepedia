<html>
<head>
	<title>Add Books</title>
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
    <style type="text/css">
    	input[type="file"] {
        	display: none;
      	}
	
		.container{
			padding-top: 5em;
			padding-left: 5em;
	 	}
	
    	.custom-file-button {
    		border: 1px solid #ccc;
        	display: inline-block;
        	padding: 6px 12px;
        	cursor: pointer;
        	background-color: #197909;	
			color: #fff;
			padding: 10px 20px;		
      	}
    </style>
</head>
<body>
	<div class="container">
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
					<td colspan="2" align="center">Please upload book cover page</td>
				</tr>
				<tr>				
					<td colspan="2" align="center"><img src="img_upload/preview.jpg" id="previewImage" alt="preview" width="300" height="300"></td>
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
</body>
</html>