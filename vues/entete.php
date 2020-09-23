<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Un petit verre de vino</title>
		<meta charset="utf-8">
		<meta http-equiv="cache-control" content="no-cache">
		<meta name="viewport" content="width=device-width, minimum-scale=0.5, initial-scale=1.0, user-scalable=yes">

		<meta name="description" content="Un petit verre de vino">
		<meta name="author" content="Jonathan Martel (jmartel@cmaisonneuve.qc.ca)">

		<link rel="stylesheet" href="./css/normalize.css" type="text/css" media="screen">
		<link rel="stylesheet" href="./css/base_h5bp.css" type="text/css" media="screen">
		<link rel="stylesheet" href="./css/main.css" type="text/css" media="screen">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" />
		<base href="<?php echo BASEURL; ?>">
		<!--<script src="./js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
		<script src="./js/plugins.js"></script>
		<script src="./js/main.js"></script>
	</head>
	<body>
		<header>
			<div class="menu">
				<span>Bienvenue <?php echo $_SESSION['utilisateur_identifiant']; ?></span>
				<img src="img/user-24.png" alt="profile">
				<a href="index.php?requete=quitter"><abbr title="Se deconnecter"><img src="img/logout-24.png" alt="Déconnexion"></abbr></a>
			</div>
			<nav class="menu">
				<ul>
					<li class="logo"><a href=""?requete=accueil"><img src="img/logo.png" alt="logo"></a></li>
					<li class="menu-item"><a href="?requete=accueil">Accueil</a></li>
					<?php if ($_SESSION['utilisateur_type'] == 2){ ?><li class="menu-item"><a href="?requete=getListeCelliers">Gestion des celliers</a></li><?php } ?>
					<?php if ($_SESSION['utilisateur_type'] == 1){ ?>
					<li class="menu-item"><a href="index.php?requete=admin">Gestion d'administration</a></li><?php }?>
				</ul>
			</nav>
		</header>
	<div class="col-2">
		<main class="content">
		