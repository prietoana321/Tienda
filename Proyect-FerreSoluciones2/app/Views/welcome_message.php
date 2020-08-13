<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/Styles.css">
	<link rel="stylesheet" href="styles/stayles2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>CLIENTS</title>
</head>
<body id="body3">
    <header >
	<div class="container">
				<div class="row">
					<div class="col-10">
						
						 <nav class="navbar navbar-expand-lg barra fixed-top  ">
							<a class="navbar-brand text-white texxto" href="#">
								<img src="<?php echo(base_url('public/img/logo_para_productos-1.png'))?>" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
							</a>
							<a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="Home.html"><span class="icon-home3"></span>HOME</a>
							</a>
							<a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?php echo(base_url('public/signin'))?>"><span class="icon-home3"></span>USERS</a>
							</a>
							<a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?php echo(base_url('public/add'))?>"><span class="icon-home3"></span>PRODUCTS</a>
							</a>
							<a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?php echo(base_url('public/administration'))?>"><span class="icon-home3"></span>WE ARE</a>
							</a> 
							<a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?php echo(base_url('public/developer'))?>"><span class="icon-home3"></span>PRODUCTS OPEN</a>
							</a>
							<a class="navbar-brand text-white texxto" href="#">
								<a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="<?php echo(base_url('public/altaGama'))?>"><span class="icon-home3"></span>WE ARE</a>
							</a> 
						</nav>
					</div>
				</div>
			</div>	 
    </header>
    <main>
	<br><br><br><br><br>
		<div class="jumbotron">
			<h1 class="display-4">REGISTER CLIENTS</h1>
			<p class="lead">This session was held so that you have a better experience when making your purchase.
				 You are the most important thing for us, register, ferresoluciones la america, your reliable friend.
				 This session was held so that you have a better experience when making your purchase. You are the most
				  important thing for us, register, ferresoluciones la america, your reliable friend.</p>
			<hr class="my-4">
			<ul>
				<li class="lead btn-outline-dark">You can access promotions for our users.</li>
				<li class="lead btn-outline-dark">Get attention preference</li>
				<li class="lead btn-outline-dark">You can participate for free addresses</li>
			</ul>
			<a class="btn btn-dark btn-outline-light" href="Login.html" role="button">USER</a>
			<a class="btn btn-dark btn-outline-light" href="register.html" role="button">REGISTER</a>
		  </div>
		  <div class="container">
            <div class="row justify-content-center">
                <div class="col-3">
					<form action="<?php echo(base_url('public/Cliente/agregar'))?>" method="POST">
					
					<div class="form-row">
							  <div class="form-group col-md-6">
								<label for="IdClients">Id Clients</label>
								<input type="text" class="form-control" id="IdClients">
							  </div>
							  <div class="form-group col-md-6">
								<label for="cedula_cliente">Identification card</label>
								<input type="number" class="form-control" id="cedula_cliente">
							  </div>
							</div>
							<div class="form-row">
							  <div class="form-group col-md-6">
								<label for="nombre_cliente">Clients Name</label>
								<input type="text" class="form-control" id="nombre_cliente">
							  </div>
							  <div class="form-group col-md-6">
								<label for="apellidos_cliente">Last Name</label>
								<input type="text" class="form-control" id="apellidos_cliente">
							  </div>
							</div>
							<div class="form-group col-md-6">
								<label for="nombre_usuario">User Name</label>
								<input type="text" class="form-control" id="nombre_usuario">
							  </div>
							</div>
							
							<div class="form-group">
							  <label for="TRIAL_COLUMN8">Email</label>
							  <input type="text" class="form-control" id="TRIAL_COLUMN8" >
							</div>
							<div class="form-group">
							  <label for="TRIAL_COLUMN9">Direction</label>
							  <input type="text" class="form-control" id="TRIAL_COLUMN9">
							</div>
							  <div class="form-row">
								<div class="form-group col-md-6">
								  <label for="TRIAL_COLUMN10">Municipalites</label>
								  <input type="text" class="form-control" id="TRIAL_COLUMN10">
								</div>
							 </div>	
                    
                        <button type="submit" class="btn btn-block" id="btn1">REGISTER CLIENTS</button>
                        
                    </form>

                </div>           
            </div>
        </div>
    </main>
    <div class="container text-center mt-5 ">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>identificationcard</th>
							<th>Name</th>
							<th>Last Name</th>
                            <th>User Name</th>
							<th>Email</th>
							<th>Direction</th>
                            <th>Municipalites</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($cliente as $clave=>$valor):?>                       
                            <tr>
                                <td><?php echo($valor->Id_cliente)?></td>
                                <td><?php echo($valor->cedula_cliente)?></td>
								<td><?php echo($valor->nombre_cliente)?></td>
								<td><?php echo($valor->apellidos_cliente)?></td>
                                <td><?php echo($valor->nombre_usuario)?></td>
								<td><?php echo($valor->TRIAL_COLUMN8)?></td>
								<td><?php echo($valor->TRIAL_COLUMN9)?></td>
								<td><?php echo($valor->TRIAL_COLUMN10)?></td>
                            </tr>
                            <td>
                                <button class="btn btn-primary" type="button" data-toggle="collapse"  href="#formulario<?php echo($valor->Id_cliente)?>"  aria-expanded="false" aria-controls="collapseExample">
                                    UPDATE
                                </button>
                                </p>
                                <div class="collapse" id="formulario<?php echo($valor->Id_cliente)?>">
                                    <form action="<?= base_url('public/cliente/modificar'.$valor->Id_cliente)?>" method="post" class="mt-1">
                                
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="cedula_cliente2" name="cedula_cliente2" value="<?= $valor->cedula_cliente?>">
										</div>
										<div class="form-group">
                                            <input type="text" class="form-control" id="nombre_cliente2" name="nombre_cliente2" value="<?= $valor->nombre_cliente)?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="apellidos_cliente2" name="apellidos_cliente2" value="<?= $valor->apellidos_cliente?>">
										</div>
										<div class="form-group">
                                            <input type="text" class="form-control" id="nombre_usuario2" name="nombre_usuario2" value="<?= $valor->nombre_usuario?>">
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
                                        <button type="submit" class="btn btn-info btn-block">SEND</button>
                                    </form>
                                </div>
                                </td>
                                <td><a href="<?php echo(base_url('public/cliente/eliminar'.$valor->Id_cliente))?>" class="btn btn-danger">REMOVE</a></td>
                                <td><a href="<?php echo(base_url('public/altaGama'))?>" class="btn btn-outline-success">LOGIN</a></td>
                            </tr>  
                        <?php endforeach?>
                    </tbody>         
                </table>
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