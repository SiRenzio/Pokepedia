<!DOCTYPE html>
<html>
<head>
	<title>Pokedex</title>
	<link rel="stylesheet" href="css/pokeDex_styles.css">
</head>

<body>
	<section class="pokeDexContainer">
		<div class="pokeDexWrapper">
			<table>
				<thead>
				<tr>		
					<th width=21% align="center">Pokédex No.</th>
					<th width=21% align="center">Name</th>
					<th width=21% align="center">Type 1</th>
					<th width=21% align="center">Type 2</th>
				</tr>
				</thead>
				<tfoot>
				<tbody>
				<?php
					foreach($pokemons as $Pokedex)
					{
						echo "<tr>";
							echo "<td><a href='index.php?control=pokeDetails&&id=$Pokedex->id'>". $Pokedex->id ."</a></td>";
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
	</section>
</body>
</html>