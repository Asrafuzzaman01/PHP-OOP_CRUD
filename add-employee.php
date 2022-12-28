<?php


include_once 'classes/register.php';

$regis= new Register(); // object from register.php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$register= $regis->addRegister($_POST,$_FILES);

}




?>

<!DOCTYPE html>
<html>
<head>
<title> add employee Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
  

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
<?php include_once 'header.php';?>



	<!-- main -->
	<div class="main-w3layouts wrapper">


	
		<h1 class="text-success"> Add Employee Form</h1>

		<div class="main-agileinfo">

<?php
		if(isset($register))
		
		{
			?>
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong><?= $register?></strong> 
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
						</button>
						</div>

 <?php
		}
		
		?>
		
           

			<div class="agileits-top">

			

				<form action="" method="post" enctype="multipart/form-data">
                    
                   <input class="text file" type="file" name="image" placeholder="image" required="">
				   
					<input class="text" type="text" name="Username" placeholder="Username" required="">

					<input class="text email" type="email" name="email" placeholder="Email" required="">

                    <input class="text phone" type="text" name="phone" placeholder="phone" required="">

                    
                    

					<input class="text" type="text" name="address" placeholder="address" required="">
					
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="ADD EMPLOYEE">
				</form>
				
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p></p>
		</div>
		
		
	</div>
	<?php include_once'footer.php';?>

	
	<!-- //main -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>