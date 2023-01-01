
<?php 


include_once 'classes/register.php';

$regis= new Register(); // object from register.php 




?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CRUD Data Table </title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


<link href="css/indexstyle.css" rel="stylesheet" type="text/css" media="all"/>




</head>
<body>


<?php include_once 'header.php';?>

<div class="container-fluid">

	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">

			

				<div class="row">
					<div class="col-sm-10 text-center">
						<h2 class="text-info display-3"> All  Employees Information</h2>
					</div>
					
				</div>
			</div>
			<div class="row">

			<table class=" table table-bordered">
				<thead>
					<tr>
						
						<th>#</th>
						
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Address</th>
						<th>image</th>
						
						
						
					</tr>
				</thead>
				<tbody>
					

					<?php
					$allemply=$regis->viewAllemployees();

					if($allemply){

                       while($row=mysqli_fetch_array($allemply)){
						 
                      ?>
						<tr>
				
						<td><?=$row['id']?></td>
						<td><?=$row['Name']?></td>
						<td><?=$row['Email']?></td>
						<td><?=$row['Phone']?></td>
						<td><?=$row['Address']?></td>
						
						<td><img src="<?=$row['Image']?>" alt="" class="img-fluid" srcset=""></td>
						
						
						
					</tr>




                     <?php

					   }

					}

					?>
						
					
				
				</tbody>
			</table>
			</div>
			<div class="clearfix">
				<div class="hint-text">Showing <b>10</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>






<!-- footer -->

<?php include_once 'footer.php';?>

<script src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</body>
</html>