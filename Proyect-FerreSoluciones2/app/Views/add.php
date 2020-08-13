<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>REGISTER PRODUCTS</title>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="Styles.css">
	<link rel="stylesheet" href="Stayles2.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Barlow+Condensed&family=Fjalla+One&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="../vista1/img/ferreteria.png" />
</head>
<body id="body2">   
<header>
	<div class="container">
		<div class="row">
				<div class="col-10">
						
						<nav class="navbar navbar-expand-lg barra fixed-top  ">
							<a class="navbar-brand text-white texxto" href="#">
								<img src="img/logo_para_productos-1.png" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
							</a>
							<a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="Home.html"><span class="icon-home3"></span>HOME</a>
							</a>
							<a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="Login.html"><span class="icon-home3"></span>LOG IN</a>
							</a>
							<a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="register.html"><span class="icon-home3"></span>CHECK IN</a>
							</a>
							<a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="aboutUs.html"><span class="icon-home3"></span>WE ARE</a>
							</a> 
						</nav>
				</div>
           </div>	
	</div>
			  
		
	</header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <form action="imagen.php" method="post" enctype="multipart/form-data">
                        <img src="img/product.png" width="185" height="185" alt="User" id="img2">                   
                       
                    </form>
                    <form action="<?php echo(base_url('public/ProductController/add'))?>" method="POST">                       
                    <div class="form-row">
							  <div class="form-group col-md-6">
								<label for="nom_producto">name producto</label>
								<input type="number" class="form-control" id="nom_producto">
							  </div>
							<div class="form-row">
							  <div class="form-group col-md-6">
								<label for="cat_producto">Category</label>
								<input type="text" class="form-control" id="cat_producto">
							  </div>
							  <div class="form-row">
								<label for="medida">Measure</label>
								  <input type="text" class="form-control" id="medida" width="150px" hight="150px">
								</div>
							</div>
							  <div class="form-group col-md-6">
								<label for="tipo">type</label>
								<input type="text" class="form-control" id="tipo">
							  </div>
							</div>
							<div class="form-group">
							  <label for="TRIAL_COLUMN62">Kind</label>
							  <input type="text" class="form-control" id="TRIAL_COLUMN62">
							</div>
							<div class="form-row">
							  <div class="form-group col-md-6">
								<label for="TRIAL_COLUMN72">Lower price</label>
								<input type="text" class="form-control" id="TRIAL_COLUMN72">
							  </div>
							  <div class="form-row">
								<div class="form-group col-md-6">
								  <label for="TRIAL_COLUMN82">Higher Price</label>
								  <input type="text" class="form-control" id="TRIAL_COLUMN82">
								</div>
							 </div>
							 <div class="form-row">
								<div class="form-group col-md-6">
								  <label for="TRIAL_COLUMN92">Suppliers</label>
								  <input type="text" class="form-control" id="TRIAL_COLUMN92">
								</div>
							 </div>
							  <div class="form-group col-md-2">
								<label for="TRIAL_COLUMN102">Provider Name</label>
								<input type="text" class="form-control" id="TRIAL_COLUMN102">
							  </div>
							</div>
							<div class="form-group col-md-4">
								<label for="TRIAL_COLUMN112">Telephone</label>
								<input type="text" class="form-control" id="TRIAL_COLUMN112">
							  </div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
								  <label for="Imagen">Direction</label>
								  <img src="" alt="">
								  <input type="text" class="form-control" id="Imagen">
								</div>
							</div>
							<div class="form-group col-md-2">
								<label for="unidades">Units</label>
								<input type="text" class="form-control" id="unidades">
							  </div>
                        <button type="submit" class="btn btn-block mt-4" id="btn1">ADD</button>
                    </form>
                </div>           
            </div>
        </div>
    </main>
    <br><br><br><br>
  <footer class="btn-outline-light">
	<div class="container">
		<div class="row">
			<div class="col-6"><hr><hr><hr>
				<h2 class="btn-light text-center"> CONTACT INFORMATION</h2><hr><hr>
            	<h3 class=" text-center">305 3366160</h3><hr>
                <h3 class=" text-center">ferresolucioneslaamerica@gmail.com</h3><hr>
	            <hr>
            	<h3  class=" text-center">BY: Los Chigüireados sin oficina &copy;</h3>
				 <br>
			</div>
			<div class="col-6"><br>
				<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.089560705357!2d-75.60530288547967!3d6.25192939547466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429742bcbba9b%3A0x19ea2a17e8ee6376!2sCra.%2082%20%2344b-28%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1596768717713!5m2!1ses-419!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>

			</div>
		</div>
	</div>	
  </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
