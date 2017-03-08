<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	  <!-- Compiled and minified CSS -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
          
</head>
<body>
	<div class="container">
		<div class="row">
			<h1 class="center">Mon premier form</h1>
		</div>
		<div class="row">
			<form class="col s12" action="result.php" method="POST">
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
	<script
	  src="https://code.jquery.com/jquery-2.2.4.min.js"
	  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	  crossorigin="anonymous"></script>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('select').material_select();
		});
	</script>
</body>
</html>
