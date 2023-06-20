<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TUGAS 2 WEB | Bagus Sopian Wanandi</title>
	<link rel="shortcut icon" href="<?php echo AST; ?>/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
</head>

<body>

	<aside>

		<header>
			<img src="<?php echo AST; ?>/img/delitekno.png" class="brand">
			<div class="user">Bagus Sopian Wanandi</div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>/dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/home.png" alt=""> Home
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/user">
						<img class="icon" src="<?php echo AST; ?>/img/user.png" alt=""> User
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/pelanggan">
						<img class="icon" src="<?php echo AST; ?>/img/support.png" alt=""> Pelanggan
					</a>
				</li>
				<li>
				<li>
					<a href="<?php echo URL; ?>/golongan">
						<img class="icon" src="<?php echo AST; ?>/img/category.png" alt=""> Golongan
					</a>
				</li>
				</li>
			</ul>
		</nav>
		<navbar>
			<li>
				<a href="<?php echo URL; ?>/index">
					<img id="logout" class="icon" src="<?php echo AST; ?>/img/logout.png" alt=""> LogOut
				</a>
			</li>
		</navbar>
	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2023. Bagus Sopian Wanandi
		</footer>
	</main>

</body>

</html>