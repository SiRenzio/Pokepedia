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
            <!-- <form action='index.php?command=13' method='post'> -->
	        <form action='index.php?control=updateRec' method='post' enctype='multipart/form-data'>
	    	    <table align="center" border="1">
	    		    <tr>
	    			    <td>Pokémon No.:</td>
	    			<td><input type='text' name='id' value='<?php echo $poke[0]->id ?>'></input></td>
    	    		</tr>
	        		<tr>
	        			<td>Name:</td>
	    	    		<td><input type='text' name='name' value='<?php echo $poke[0]->poke_name ?>'></input></td>
	    	    	</tr>
	    	    	<tr>
	    	    		<td>Type1:</td>
	    	    		<td><input type='text' name='type1' value='<?php echo $poke[0]->type1 ?>'></input></td>
	    	    	</tr>
                    <tr>
	    	    		<td>Type2:</td>
	    			    <td><input type='text' name='type2' value='<?php echo $poke[0]->type2 ?>'></input></td>
	    	    	</tr>
	    	    	<tr>
	    		    	<td colspan="2" align="center">Please upload Pokemon Image</td>
                    </tr>
                    <tr>				
		    		<td colspan="2" align="center"><img src='<?php echo $poke[0]->poke_image ?>' id="previewImage" alt='<?php echo $poke[0]->poke_name ?>' width="300" height="300"></td>
		    	    </tr>
		    	    <tr>
		    		<td colspan="2" align="center">
		    			<label for="fileToUpload" class="custom-file-button">Upload Pokemon Image</label>
		    			<input type="file" name="fileToUpload" id="fileToUpload" onchange="imagePreview(event)" accept="image/*">
		    		</td>
		        	</tr>
		         	<tr>
		        		<td colspan="2">Description:</td>
		        	</tr>
		        	<tr>
		        		<td colspan="2"><textarea name='description' cols=116 rows=10 style='resize: none'><?php echo $poke[0]->poke_description ?></textarea> </td>
		        	</tr>
		        	<tr>
		        		<td>Weight:</td>
		        		<td><input type='text' name='weight' value='<?php echo $poke[0]->poke_weight ?>'></input></td>
		        	</tr>
		        	<tr>
		    	    	<td>Height:</td>
		    		    <td><input type='text' name='height'value='<?php echo $poke[0]->height ?>'></input></td>
		    	    </tr>
		    	    <tr>
		    	    	<td>Mega Evolves:</td>
		    	    	<td><input type='text' name='mega_evolves' value='<?php echo $poke[0]->mega_evolves ?>'></input></td>
		    	    </tr>
		    	    <tr>
		    	    	<td>Next Evolution:</td>
		    	    	<td><input type='text' name='next_evolution' value='<?php echo $poke[0]->next_evolution ?>'></input></td>
		    	    </tr>
		    	    <td colspan='6' align='center'>
		    	    	<input type='submit' value='Update Records' name='saveRecords'>
		    	    	<input type='reset' value='Reset'>
		    	    </td>	
		        </table>
	        </form>
        </div>
    </section>
</body>
</html>