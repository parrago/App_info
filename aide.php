<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="aide.css"/>
		<script type="text/javascript" src="aide.js"></script>
	</head>
	
	<body>
            <?php include'Header.php'; ?>
		<div id="partie_aide">
			<h2 id="titre">Aide générale</h2>
			<div id="questions">
				<div id="bloc_question">
					<span onclick="ouvrirfermer('reponse1')"><h3 class="question">Je n'arrive pas à me connecter</h3></span>
					<div class="reponse" id="reponse1">
						<p>Il suffit pour se connecter de cliquer sur "connexion", puis de renseigner ses identifiants</p>
					</div>
					<span onclick="ouvrirfermer('reponse2')"><h3 class="question">Comment créer un événement ?</h3></span>
					<div class="reponse" id="reponse2">
						<p>il suffit d'appeler Satan tout en jouant à la trompette, vous verrez c'est vraiment super simple</p>
					</div>
					<span onclick="ouvrirfermer('reponse3')"><h3 class="question">Comment supprimer un événement ?</h3></span>
					<div class="reponse" id="reponse3">
						<p>Bah c'est pareil, tu prends un poulet, tu le tue sur une belle tombe et ça devrait aller</p>
					</div>
					<span onclick="ouvrirfermer('reponse4')"><h3 class="question">A quoi servent les centres d'interêts ?</h3></span>
					<div class="reponse" id="reponse4">
						<p>A revendre vos informations motherfucker !!</p>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		//<!--
			ouvrirfermer('reponse1');
		//-->
		</script>
		<script type="text/javascript">
		//<!--
			ouvrirfermer('reponse2');
		//-->
		</script>
		<script type="text/javascript">
		//<!--
			ouvrirfermer('reponse3');
		//-->
		</script>
		<script type="text/javascript">
		//<!--
			ouvrirfermer('reponse4');
		//-->
		</script>
                <?php include'footer.php';?>
	</body>
</html>