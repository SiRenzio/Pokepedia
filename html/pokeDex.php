<!DOCTYPE html>
<html>
<head>
	<title>View Books 1</title>
	<link rel="stylesheet" href="css/pokeDex_styles.css">
</head>

<body>
	<div class="pokeDexContainer">
		<table>
			<thead>
			<tr>		
				<th width=21% align="center">ID</th>
				<th width=21% align="center">Name</th>
				<th width=21% align="center">Type 1</th>
				<th width=21% align="center">Type 2</th>
			</tr>
			</thead>
			<tfoot>
			<tbody>
			<?php
				foreach($pokemons as $id=>$Pokedex)
				{
					echo "<tr>";
						echo "<td><a href='index.php?control=pokeDetails&&num=$Pokedex->id'>". $Pokedex->id ."</a></td>";
						echo "<td>". $Pokedex->poke_name ."</td>";
						echo "<td>". $Pokedex->type1 ."</td>";	
						echo "<td>". $Pokedex->type2 ."</td>";
						echo "<td><a href='index.php?control=editPokes&&id=$Pokedex->id'>Edit</a> | <a href='index.php?control=deleteRec&&id=".$Pokedex->id."' onclick='return confirm(\"Are you sure you want to do Delete ". $Pokedex->poke_name."?\")'>Delete</a></td>";
					echo "</tr>";
				}
			?>
			</tbody>
		</table>
	</div>
</body>
</html>