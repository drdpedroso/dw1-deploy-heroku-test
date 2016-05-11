<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/port_index.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery.modal.min.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="css/jquery.modal.css" type="text/css" media="screen" />
		<title>Portifolio Eduardo Pedroso</title>
	</head>
	<body>
		<?php $date = "26/10/1995";
			if (isset($_POST["submit"])) {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$message = $_POST['message'];
				$human = intval($_POST['human']);
				$from = 'Demo Contact Form';
				$to = 'example@bootstrapbay.com';
				$subject = 'Message from Contact Demo';

				$body = "From: $name\n E-Mail: $email\n Message:\n $message";

				if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
					if (mail ($to, $subject, $body, $from)) {
						$result='<div class="alert alert-success">Obrigado pelo contato.</div>';
					} else {
						$result='<div class="alert alert-danger">Ocorreu um erro ao enviar a mensagem.</div>';
					}
				}
			}
		?>

		<header>
			<h1>Portifolio Eduardo Pedroso</h1>
			<p><h2>Full Stack Web Developer</h2></p>
			<nav class="navbar nav-menu">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li><a href="#">Link</a></li>
			        <li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</header>

		</br>

		<div class="row">
			<div class="sobre-mim col-lg-12">
				<h2 id="sobre-mim"> Sobre mim: </h2>
				<ul>
					<li><strong>Nome: </strong>Eduardo Pedroso</li>
					<li><strong>Idade: </strong>20 anos</li>
					<li><strong>Nascido em: </strong><?= $date ?></li>
					<li><strong>E-mail: </strong>drdpedroso@gmail.com</li>
					<li><strong>Celular: </strong>(19)981713271</li>
				</ul>
				<a class="btn btn-default" href="#success" rel="modal:open">Mostrar foto de perfil</a>
			</div>

			<div class="perfil-im" id="success" style="display:none">
				<img src="img\perfil.jpg">
			</div>

		</div>
		<br/>

		<div class="row projetos">
			<h2> Projetos:</h2>
			<div class="row projetos-items">
			  <div class="col-xs-6 col-md-3">
			    <a href="#" class="thumbnail">
			      <img src="img/fruits.jpg" alt="oi">
			    </a>
			  </div>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail">
						<img src="img/fruits.jpg" alt="oi">
					</a>
				</div>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail">
						<img src="img/fruits.jpg" alt="oi">
					</a>
				</div>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail">
						<img src="img/fruits.jpg" alt="oi">
					</a>
				</div>
			</div>
		</div>

		<!-- <div class="container" id="success" style="display:none">
			Seu modal foi mostrado com sucesso!
		</div> -->

		<br/>
<div class="container">
	<form class="form-horizontal" role="form" method="post" action="index.php">
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" value="">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" placeholder="example@example.com" value="">
			</div>
		</div>
		<div class="form-group">
			<label for="message" class="col-sm-2 control-label">Mensagem</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="4" name="message"></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input id="submit" name="submit" type="submit" value="Enviar" class="btn btn-primary">
			</div>
		</div>
	</form>
	<?= $result ?>
</div>
	</body>
</html>
