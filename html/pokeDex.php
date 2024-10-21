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
				<th width=21% align="center">id</th>
				<th width=21% align="center">Name</th>
				<td width=50% align="center">Type 1</td>
				<td width=8% align="center">Type 2</td>
			</tr>
			</thead>
			<tfoot>
			<tbody>
			<?php
				foreach($books as $pokes=>$Pokedex)
				{

					echo "<tr>";
						echo "<td><a href='index.php?control=pokeDetails&num=$Pokedex->id'>". $Pokedex->id ."</a></td>";
						echo "<td>". $Pokedex->name ."</td>";
						echo "<td>". $Pokedex->type1 ."</td>";	
						echo "<td>". $Pokedex->type2 ."</td>";
					echo "</tr>";
				}
			?>
			</tbody>
		</table>
	</div>
</body>
</html>