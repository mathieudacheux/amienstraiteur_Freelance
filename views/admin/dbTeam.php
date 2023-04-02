<div class="dishes">
	<h1>Equipe</h1>

	<div class="openBurger">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
			<!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
			<path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
		</svg>
	</div>

	<!-- code -->
	<h2>Equipe - 1</h2>
	<div class="carrouselContainer">
		<img class="bannerPreview" src="../../public/assets/team/1.jpg" alt="">

		<div class="teamInfo">
			<form method="POST" action="/admin/membre/edit/1">
				<label for="lastname">Nom</label>
				<input name="lastname" id="lastname" type="text" value="<?= $team[0]->lastname ?>">
				<label for="firstname">Prénom</label>
				<input name="firstname" id="firstname" type="text" value="<?= $team[0]->firstname ?>">
				<label for="post">Poste</label>
				<input name="post" id="post" type="text" value="<?= $team[0]->post ?>">

				<button type="submit">Modifier le membre</button>
			</form>
		</div>
		<!-- <form method="POST" action="/admin/equipe/edit/1" enctype="multipart/form-data" class="bannerForm">
			<label for="banner">
				Ajoutez un fichier pour modifier les images de l'équipe
			</label>
			<input type="file" id="banner" name="img">

			<button type="submit">Modifier l'image</button>
		</form> -->
	</div>

	<h2>Equipe - 2</h2>
	<div class="carrouselContainer">
		<img class="bannerPreview" src="../../public/assets/team/2.jpg" alt="">

		<div class="teamInfo">
			<form method="POST" action="/admin/membre/edit/2">
			<label for="lastname">Nom</label>
				<input name="lastname" id="lastname" type="text" value="<?= $team[1]->lastname ?>">
				<label for="firstname">Prénom</label>
				<input name="firstname" id="firstname" type="text" value="<?= $team[1]->firstname ?>">
				<label for="post">Poste</label>
				<input name="post" id="post" type="text" value="<?= $team[1]->post ?>">

				<button type="submit">Modifier le membre</button>
			</form>
		</div>

		<!-- <form method="POST" action="/admin/equipe/edit/2" enctype="multipart/form-data" class="bannerForm">
			<label for="banner">
				Ajoutez un fichier pour modifier les images de l'équipe
			</label>
			<input type="file" id="banner" name="img">

			<button type="submit">Modifier l'image</button>
		</form> -->
	</div>

	<h2>Equipe - 3</h2>
	<div class="carrouselContainer">
		<img class="bannerPreview" src="../../public/assets/team/3.jpg" alt="">

		<div class="teamInfo">
			<form method="POST" action="/admin/membre/edit/3">
			<label for="lastname">Nom</label>
				<input name="lastname" id="lastname" type="text" value="<?= $team[2]->lastname ?>">
				<label for="firstname">Prénom</label>
				<input name="firstname" id="firstname" type="text" value="<?= $team[2]->firstname ?>">
				<label for="post">Poste</label>
				<input name="post" id="post" type="text" value="<?= $team[2]->post ?>">

				<button type="submit">Modifier le membre</button>
			</form>
		</div>

		<!-- <form method="POST" action="/admin/equipe/edit/3" enctype="multipart/form-data" class="bannerForm">
			<label for="banner">
				Ajoutez un fichier pour modifier les images de l'équipe
			</label>
			<input type="file" id="banner" name="img">

			<button type="submit">Modifier l'image</button>
		</form> -->
	</div>
</div>
<div class="modale">
	<div class="modaleContent">
		<h2>Supprimer le plat</h2>
		<div class="modaleBtn">
			<button>Annuler</button>
			<a class="deleteMenuLink" href="">Supprimer</a>
		</div>
	</div>
</div>

<!-- <?php $message = SessionFlash::get('message') ?>
<?= ($message == '') ? '' : '<div class="messageContainer"><div class="message">' . $message . '</div></div>'; ?>

<?php $message = SessionFlash::get('error') ?>
<?= ($message == '') ? '' : '<div class="messageContainer"><div class="errorMessage">' . $message . '</div></div>'; ?> -->

<script src="../../public/js/deleteConfirm.js"></script>
<script src="../../public/js/modifyImg.js"></script>