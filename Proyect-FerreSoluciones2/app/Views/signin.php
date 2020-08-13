<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/Styles.css">
	<link rel="stylesheet" href="styles/stayles2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>USERS</title>
</head>
<body id="body4">
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
                                    <a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="register.html"><span class="icon-home3"></span>CHECK IN</a>
                                </a>
                                <a class="navbar-brand text-white texxto" href="#">
                                    <a class="nav-link  btn btn-outline-light my-2 my-sm-0" href="addproductes.html"><span class="icon-home3"></span>PRODUCTS</a>
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
        <div class="jumbotron">
			<h1 class="display-4">LOGIN SESSION</h1>
			<p class="lead">In this session of our online store you will find information about our products.</p>
			<hr class="my-4">
			<ul>
				<li class="lead btn-outline-dark">A In this session you can log in with your username and password.</li>
				<li class="lead btn-outline-dark">You can access the products session</li>
			</ul>
			<p class="lead">REMEMBER:</p>
			<p class="lead">You have not yet registered to "REGISTER".</p>
			<a class="btn btn-dark btn-outline-light" href="Login.html" role="button">USER</a>
			<a class="btn btn-dark btn-outline-light" href="register.html" role="button">REGISTER</a>
        </div>
        <div class="form-row">
							  <div class="form-group col-md-6">
								<label for="Username">User name</label>
								<input type="text" class="form-control" id="Username">
							  </div>
							  <div class="form-group col-md-6">
								<label for="Name">Name</label>
								<input type="text" class="form-control" id="Name">
							  </div>
							</div>
							<div class="form-group">
							  <label for="password">Password</label>
							  <input type="text" class="form-control" id="password" >
							</div>
							<div class="form-group">
							  <label for="email">Email</label>
							  <input type="email" class="form-control" id="email">
                            </div>

        <div class="container text-center mt-5 ">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>nombre</th>
                            <th>nombreususario</th>
                            <th>correo</th>
                            <th>contraseña</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($usuarios as $clave=>$valor):?>                       
                            <tr>
                                <td><?php echo($valor->Id_usuario)?></td>
                                <td><?php echo($valor->nombre)?></td>
                                <td><?php echo($valor->nombreususario)?></td>
                                <td><?php echo($valor->correo)?></td>
                                <td><?php echo($valor->contraseña)?></td>
                            </tr>
                            <td>
                                <button class="btn btn-primary" type="button" data-toggle="collapse"  href="#formulario<?php echo($valor->Id_usuario)?>"  aria-expanded="false" aria-controls="collapseExample">
                                    UPDATE
                                </button>
                                </p>
                                <div class="collapse" id="formulario<?php echo($valor->Id_usuario)?>">
                                    <form action="<?= base_url('public/usuarios/modificar'.$valor->Id_usuario)?>" method="post" class="mt-1">
                                    
                                      <div class="form-group">
                                            <input type="text" class="form-control" id="nombre2" name="nombre2" value="<?= $valor->nombre?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nombreususario2" name="nombreususario2" value="<?= $valor->nombreususario?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="Email" class="form-control" id="correo2" name="correo2" value="<?= $valor->correo?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="contraseña2" name="contraseña2" value="<?= $valor->contraseña?>">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-info btn-block">UPDATE</button>
                                      </form>
                                </div>
                                </td>
                                <td><a href="<?php echo(base_url('public/usuarios/eliminar'.$valor->Id_usuario))?>" class="btn btn-danger">REMOVE</a></td>
                                <td><a href="<?php echo(base_url('public/altaGama'))?>" class="btn btn-outline-success">LOGIN</a></td>
                            </tr>  
                         <?php endforeach?>
                      </tbody>         
                   </table>
               </div>
           </div>
       </div>
       <div class="container">
            <div class="row justify-content-center">
                <div class="col-3">
                    <form action="<?php echo(base_url('public/usuarios/agregar'))?>" method="POST">
                        <div class="form-group mt-2">
                            <label for="nombre" id="colorti">nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="nombreususario" id="colorti">nombreususario</label>
                            <input type="text" class="form-control" id="nombreususario" name="nombreususario">
                        </div>
                        <div class="form-group">
                            <label for="Email" id="colorti">correo</label>
                            <input type="Email" class="form-control" id="correo" name="correo">
                        </div>
                        <div class="form-group">
                            <label for="contraseña" id="colorti">Contraseña</label>
                            <input type="password" class="form-control" id="contraseña" name="contraseña">
                        </div>
                        <button type="submit" class="btn btn-block" id="btn1">REGISTER USUARIO</button>
                        
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