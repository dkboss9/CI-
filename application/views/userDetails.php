<?php 
	$i=1;
	foreach($result as $value):

?>
<tr>
	<th scope="row"><?php echo $i;?></th>
    <td>php echo $value->name; ?></td>
    <td><?php echo $value->classes; ?></td>
    <td><?php echo $value->roll; ?></td>
    <td><button type="button" class="close" aria-label="Close" name="delete" id="delete<?php echo 1;  ?>">
  <span aria-hidden="true">&times;</span>
</button></td>
<input type="hidden" id="id" value=<?php echo $_SESSION['id']; ?> >
</tr>

<?php $i++;
 endforeach ?>