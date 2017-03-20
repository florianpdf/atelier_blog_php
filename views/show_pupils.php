<?php include 'includes/header.php'; ?>

	<div class="container">
		<div class="row">
			<h1 class="center">Liste de tous les élèves</h1>
		</div>
		<div class="row">
			<table class="centered highlight">
				<thead>
					<tr>
						<th>id</th>
						<th>Nom</th>
						<th>Prenom</th>
						<th>Age</th>
						<th>Langage</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>

					<?php foreach ($pupils as $pupil) { ?>
					<tr>
						<td><?php echo $pupil['id']; ?></td>
						<td><?php echo $pupil['nom']; ?></td>
						<td><?php echo $pupil['prenom']; ?></td>
						<td><?php echo $pupil['age']; ?></td>
						<td><?php echo $pupil['langage']; ?></td>
						<td>
							<!-- On envoie en parametre de l'url l'id de l'eleve -->
							<a href="delete_action.php?id=<?php echo $pupil['id']; ?>">Delete</a>
							<a href="edit_article.php?id=<?php echo $pupil['id']; ?>">Edit</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="row center">
			<a href="index.php?section=add" class="waves-effect waves-light btn">Ajouter un élève</a>
		</div>
	</div>

<?php include 'includes/footer.php'; ?>
