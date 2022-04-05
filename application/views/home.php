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
      <th scope="col">Image</th>
      <th scope="col"><button type="button" id="submit" class="btn btn-primary">
  Add
</button>
 	    </div>
	  </div>
	</div></th>
    </tr>
  </thead>
  <?php 
  session_start();
  $_SESSION['id']=1; ?>
    <form class = form-horizontal id="upload_form" enctype="multipart/form-data">
  <tbody id='aaa'>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr> -->
    	
    </tr>
  </tbody>
  <!-- <td><input type="hidden" id="id" name="id_value" value= <?php echo $i;?> ></td> -->
  <td colspan="5"><button type="button" class="btn btn-primary" id="submits">Submit</button></td>
  <td colspan="5"><button type="submit" class="btn btn-primary">Submit</button></td>
  </form>
</table>
<div class="row">
  <div class="col-12">
    <form class = form-horizontal id="upload" enctype="multipart/form-data">
      <div class = "form-group">
        <input type="text" name="title" id="title" placeholder="Enter Title">
      </div>
      <div class = "form-group">
        <input type="file" name="file" id="file" >
      </div>
      <div class = "form-group">
        <button id="upload" class="btn btn-primary" type="submit">
  Upload
</button>
      </div>
    </form>
    <div id="image_display">
      
    </div>
      
    </div>
  </div>
</div>
</div>
</body>
</html> 