<!DOCTYPE html>
<html lang="es">
<head>
   
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/Styles.css">
	<link rel="stylesheet" href="styles/stayles2.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Barlow+Condensed&family=Fjalla+One&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="../vista1/img/ferreteria.png" />
	<title>Add product</title>
</head>
<body class="body2">
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
			

		  </nav>
   </header>       
     <main>     
     <br><br><br><br><br>
		<div class="jumbotron">
			<h1 class="display-4">PRODUCTS SESSION</h1>
			<p class="lead">In this session of our online store you will find information about our products.</p>
			<hr class="my-4">
			<ul>
				<li class="lead btn-outline-dark">Add products to your list, get the id to place your order.</li>
				<li class="lead btn-outline-dark">Search your product for in stock.</li>
				<li class="lead btn-outline-dark">You can update the status of a product and its different properties</li>
				<li class="lead btn-outline-dark">You can eliminate products that leave the market</li>
				<li class="lead btn-outline-dark">and much more</li>
			</ul>
			<p class="lead">REMEMBER:</p>
			<p class="lead">You must enter with your username and password to the "USERS" session or if you have not yet registered to "REGISTER".</p>
			<a class="btn btn-dark btn-outline-light" href="Login.html" role="button">USER</a>
			<a class="btn btn-dark btn-outline-light" href="register.html" role="button">REGISTER</a>
		  </div>
    <div class="container text-center mt-5 ">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>Id Product</th>
                            <th>Products Name</th>
                            <th>Imagen</th>
                            <th>Category</th>
                            <th>Kind</th>
                            <th>Lower price</th>
                            <th>Higher Price</th>
                            <th>Suppliers</th>
                            <th>Provider Name</th>
                            <th>Telephone</th>
                            <th>Direction</th>
                            <th>Units</th>
                            <th>UPDATE</th>
                            <th>REMOVE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($productos as $clave=>$valor):?>                       
                            <tr>
                                <td><?php echo($valor->id_producto)?></td>
                                <td><?php echo($valor->nom_producto)?></td>
                                <td><?php echo($valor->cat_producto)?></td>
                                <td><?php echo($valor->medida)?></td>
                                <td><?php echo($valor->tipo)?></td>
                                <td><?php echo($valor->TRIAL_COLUMN6)?></td>
                                <td><?php echo($valor->TRIAL_COLUMN7)?></td>
                                <td><?php echo($valor->TRIAL_COLUMN8)?></td>
                                <td><?php echo($valor->TRIAL_COLUMN9)?></td>
                                <td><?php echo($valor->TRIAL_COLUMN10)?></td>
                                <td><?php echo($valor->TRIAL_COLUMN11)?></td>
                                <td><?php echo($valor->Imagen)?></td>
                                <td><?php echo($valor->Unidades)?></td>
                                <td>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse"  href="#formulario<?php echo($valor->id_producto)?>"  aria-expanded="false" aria-controls="collapseExample">
                                       UPDATE
                                    </button>
                                </p>
                                <div class="collapse" id="formulario<?php echo($valor->id_producto)?>">
                                    <form action="<?= base_url('public/admi123/modificar'.$valor->id_producto)?>" method="post" class="mt-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nom_producto2" name="nom_producto2" value="<?= $valor->nom_producto?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="cat_producto2" name="cat_producto2" value="<?= $valor->cat_producto?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="medida2" name="medida2" value="<?= $valor->medida?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="tipo2" name="tipo2" value="<?= $valor->tipo?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="TRIAL_COLUMN62" name="TRIAL_COLUMN62" value="<?= $valor->TRIAL_COLUMN6?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="TRIAL_COLUMN72" name="TRIAL_COLUMN72" value="<?= $valor->TRIAL_COLUMN7?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="TRIAL_COLUMN82" name="TRIAL_COLUMN82" value="<?= $valor->TRIAL_COLUMN8?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="TRIAL_COLUMN92" name="TRIAL_COLUMN92" value="<?= $valor->TRIAL_COLUMN9?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="TRIAL_COLUMN102" name="TRIAL_COLUMN102" value="<?= $valor->TRIAL_COLUMN10?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="TRIAL_COLUMN112" name="TRIAL_COLUMN112" value="<?= $valor->TRIAL_COLUMN11?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Imagen" name="Imagen" value="<?= $valor->Imagen?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Unidades" name="Unidades" value="<?= $valor->Unidades?>">
                                        </div>
                                        <button type="submit" class="btn btn-info btn-block">SEND</button>
                                    </form>
                                </div>
                                </td>
                                <td><a href="<?php echo(base_url('public/admi123/eliminar'.$valor->id_producto))?>" class="btn btn-danger">REMOVE</a></td>
                            </tr>
                        <?php endforeach?>
                    </tbody>         
                </table>
            </div>
        </div>
    </div>      
</div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>