<?php 
$i=1;
foreach($datas as $key => $data){
	?>
	<tr>
	<th scope="row"><?php echo $i;?></th>
    <td><?php echo $data->name;?></td>
    <td><?php echo $data->classes; ?></td>
    <td><?php echo $data->roll; ?></td>
    <td><a href="<?php echo base_url()?>delete/<?php echo $data->id; ?>"><button type="button" class="close" aria-label="Close" name="delete" id="delete<?php echo 1;  ?>">
  <span aria-hidden="true">&times;</span>
	</button></a></td>
	<input type="hidden" id="id" value=<?php echo $data->id; ?> >
	</tr>
<?php $i++; }
?>