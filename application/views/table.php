<?php
	session_start();
	$i=$_SESSION['id'];
?> 
<?php
	for($j=1;$j<=$i;$j++){ 
?>
<tr>
	<th scope="row"><?php echo $j;?></th>
    <td><input type="text" id="name<?php echo $j; ?>"></td>
    <td><input type="text" id="class<?php echo $j; ?>"></td>
    <td><input type="text" id="roll<?php echo $j; ?>"></td>
    <td>
    	
    		<input type="file" id="image<?php echo $j; ?>" name="image<?php echo $j; ?>">
    	
    </td>
    <td><a href="<?php echo base_url()?>remove_input/<?php echo $_SESSION['id']?>"><button type="button" class="close" aria-label="Close" name="delete" id="delete">
  <span aria-hidden="true" >&times;</span>
</button></a></td>
<input type="hidden" id="id" value=<?php echo $_SESSION['id']; ?> >
</tr>
<?php
	}
	$_SESSION['id']=$i+1;
?>
