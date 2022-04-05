<!DOCTYPE html>
<html lang="en">
<head>
  <title>CI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <script type = 'text/javascript' src = "<?php echo base_url(); 
   ?>js/user.js"></script>
</head>
<body>

<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">S.N.</th>
      <th scope="col">Name</th>
      <th scope="col">Class</th>
      <th scope="col">Roll No.</th>
      <th scope="col"><button type="button" id="submit" class="btn btn-primary">
  Add
</button>
 	    </div>
	  </div>
	</div></th>
    </tr>
  </thead>
  <?php 
  $i = $_SESSION['id'];
  $_SESSION['id']=$i-1;
   ?>
  <tbody id='aaa'>
    <?php
    $i = $_SESSION['id'];
  for($j=1;$j<=$i;$j++){ 
?>
    <tr>
      <th scope="row"><?php echo $j;?></th>
        <td><input type="text" id="name<?php echo $j; ?>"></td>
        <td><input type="text" id="class<?php echo $j; ?>"></td>
        <td><input type="text" id="roll<?php echo $j; ?>"></td>
        <td><a href="<?php echo base_url()?>remove_input/<?php echo $_SESSION['id']?>"><button type="button" class="close" aria-label="Close" name="delete" id="delete">
      <span aria-hidden="true" >&times;</span>
    </button></a></td>
    <input type="hidden" id="id" value=<?php echo $_SESSION['id']; ?> >
    </tr>
<?php
  }
  $_SESSION['id']=$i+1;
?>

    	
    </tr>
  </tbody>
  <!-- <td><input type="hidden" id="id" name="id_value" value= <?php echo $i;?> ></td> -->
  
  <td colspan="5"><button type="button" class="btn btn-primary" id="submits">Submit</button></td>
</table>
</div>
</body>
</html> 