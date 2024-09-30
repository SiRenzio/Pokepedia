<!DOCTYPE html>
<html>
<head><title>View Books 1</title>

	
	
</head>

<body>

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
	<tr>
	<th width=21% align="center">id</th>
		<th width=21% align="center">Name</th>
		<td width=50% align="center">Type 1</td>
		<td width=8% align="center">Type 2</td>
	</tr>
	</tfoot>
	<tbody>
	<?php
		foreach($books as $title=>$MybookList)
		{

			echo "<tr>";
				echo "<td><a href='index.php?command=14&&page=$MybookList->id'>". $MybookList->id ."</a></td>";
				echo "<td>". $MybookList->name ."</td>";
				echo "<td>". $MybookList->type1 ."</td>";	
				echo "<td>". $MybookList->type2 ."</td>";								
				echo "<td>Edit | Delete </td>";
			echo "</tr>";
		}
	?>
	</tbody>
</table>

</body>
</html>