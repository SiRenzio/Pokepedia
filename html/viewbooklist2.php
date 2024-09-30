<!DOCTYPE html>
<html>
<head><title>View Books 1</title>

	
	
</head>

<body>

<table>
	<thead>
	<tr>
		<th width=21% align="center">Title</th>
		<th width=21% align="center">Author</th>
		<td width=50% align="center">Abstract</td>
		<td width=8% align="center">Action</td>
	</tr>
	</thead>
	<tfoot>
	<tr>
		<td width=21% align="center">Title</td>
		<td width=21% align="center">Author</td>
		<td width=50% align="center">Abstract</td>
		<td width=8% align="center">Action</td>
	</tr>
	</tfoot>
	<tbody>
	<?php
		foreach($books as $title=>$MybookList)
		{

			echo "<tr>";
				echo "<td><a href='index.php?command=14&&page=$MybookList->Title'>". $MybookList->Title ."</a></td>";
				echo "<td>". $MybookList->Author ."</td>";
				echo "<td>". $MybookList->Abstract ."</td>";								
				echo "<td>Edit | Delete </td>";
			echo "</tr>";
		}
	?>
	</tbody>
</table>

</body>
</html>