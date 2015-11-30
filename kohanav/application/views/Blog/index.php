<h1>Personal Info</h1>
<table>
	<th>
		<tr>
			<td>Email</td>
			<td>Pass</td>
		</tr>
	</th>
	<tbody>
	       <?php foreach ($post as $r):?>
		   <tr>
				<td><?php echo $r->email;?></td>
				<td><?php echo $r->pass;?></td>
			</tr>
			<?php endforeach ?>
	</tbody>
