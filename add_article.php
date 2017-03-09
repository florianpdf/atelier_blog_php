<?php include 'includes/header.php'; ?>

	<div class="container">
		<div class="row">
			<h1 class="center">Ajouter un élève</h1>
		</div>
		<div class="row">
			<form class="col s12" action="add_article_action.php" method="POST">
				<div class="row">
					<div class="input-field">
						<label for="nom">Nom</label>
						<input id="nom" type="text" name="nom" required="">	
					</div>
				</div>
				<div class="row">
					<div class="input-field">
						<label for="prenom">Prenom</label>
						<input id="prenom" type="text" name="prenom">	
					</div>
				</div>
				<div class="row">
					<div class="input-field">
						<label for="age">Age</label>
						<input id="age" type="number" name="age">	
					</div>
				</div>
				<div class="row">
					<select name="langage">
						<option disabled selected>Choisi ton langage</option>
						<option value="php">PHP</option> 
						<option value="js">JS</option>
						<option value="ruby">RUBY</option>
					</select>			
				</div>
				<div class="row center">
					<input class="waves-effect waves-light btn" type="submit" value="Envoyer">
				</div>
			</form>
		</div>
	</div>

<?php include 'includes/footer.php'; ?>
