<div class="dishes">
	<h1>MENU</h1>

	<div class="openBurger">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
			<!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
			<path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
		</svg>
	</div>

	<!-- code -->
	<h2><?= Dish::dishTypeName($categories[0]->id_dishes_types) ?></h2>
	<div class="carrouselContainer">
		<img class="bannerPreview" src="../../public/assets/dishCardImg/1.jpg" alt="">
		<form method="POST" action="/admin/dishCardImg/edit/1" enctype="multipart/form-data" class="bannerForm">
			<label for="banner">
				Ajoutez un fichier pour modifier l'images de la catégorie
			</label>
			<input type="file" id="banner" name="img">

			<button type="submit">Modifier l'image</button>
		</form>
	</div>

	<h2><?= Dish::dishTypeName($categories[1]->id_dishes_types) ?></h2>
	<div class="carrouselContainer">
		<img class="bannerPreview" src="../../public/assets/dishCardImg/2.jpg" alt="">
		<form method="POST" action="/admin/dishCardImg/edit/2" enctype="multipart/form-data" class="bannerForm">
			<label for="banner">
				Ajoutez un fichier pour modifier l'images de la catégorie
			</label>
			<input type="file" id="banner" name="img">

			<button type="submit">Modifier l'image</button>
		</form>
	</div>

	<h2><?= Dish::dishTypeName($categories[2]->id_dishes_types) ?></h2>
	<div class="carrouselContainer">
		<img class="bannerPreview" src="../../public/assets/dishCardImg/3.jpg" alt="">
		<form method="POST" action="/admin/dishCardImg/edit/3" enctype="multipart/form-data" class="bannerForm">
			<label for="banner">
				Ajoutez un fichier pour modifier l'images de la catégorie
			</label>
			<input type="file" id="banner" name="img">

			<button type="submit">Modifier l'image</button>
		</form>
	</div>

	<h2><?= Dish::dishTypeName($categories[3]->id_dishes_types) ?></h2>
	<div class="carrouselContainer">
		<img class="bannerPreview" src="../../public/assets/dishCardImg/4.jpg" alt="">
		<form method="POST" action="/admin/dishCardImg/edit/4" enctype="multipart/form-data" class="bannerForm">
			<label for="banner">
				Ajoutez un fichier pour modifier l'images de la catégorie
			</label>
			<input type="file" id="banner" name="img">

			<button type="submit">Modifier l'image</button>
		</form>
	</div>

	<h2><?= Dish::dishTypeName($categories[4]->id_dishes_types) ?></h2>
	<div class="carrouselContainer">
		<img class="bannerPreview" src="../../public/assets/dishCardImg/5.jpg" alt="">
		<form method="POST" action="/admin/dishCardImg/edit/5" enctype="multipart/form-data" class="bannerForm">
			<label for="banner">
				Ajoutez un fichier pour modifier l'images de la catégorie
			</label>
			<input type="file" id="banner" name="img">

			<button type="submit">Modifier l'image</button>
		</form>
	</div>

	<h2><?= Dish::dishTypeName($categories[5]->id_dishes_types) ?></h2>
	<div class="carrouselContainer">
		<img class="bannerPreview" src="../../public/assets/dishCardImg/6.jpg" alt="">
		<form method="POST" action="/admin/dishCardImg/edit/6" enctype="multipart/form-data" class="bannerForm">
			<label for="banner">
				Ajoutez un fichier pour modifier l'images de la catégorie
			</label>
			<input type="file" id="banner" name="img">

			<button type="submit">Modifier l'image</button>
		</form>
	</div>

	<h2><?= Dish::dishTypeName($categories[6]->id_dishes_types) ?></h2>
	<div class="carrouselContainer">
		<img class="bannerPreview" src="../../public/assets/dishCardImg/7.jpg" alt="">
		<form method="POST" action="/admin/dishCardImg/edit/7" enctype="multipart/form-data" class="bannerForm">
			<label for="banner">
				Ajoutez un fichier pour modifier l'images de la catégorie
			</label>
			<input type="file" id="banner" name="img">

			<button type="submit">Modifier l'image</button>
		</form>
	</div>

	<h2><?= Dish::dishTypeName($categories[7]->id_dishes_types) ?></h2>
	<div class="carrouselContainer">
		<img class="bannerPreview" src="../../public/assets/dishCardImg/8.jpg" alt="">
		<form method="POST" action="/admin/dishCardImg/edit/8" enctype="multipart/form-data" class="bannerForm">
			<label for="banner">
				Ajoutez un fichier pour modifier l'images de la catégorie
			</label>
			<input type="file" id="banner" name="img">

			<button type="submit">Modifier l'image</button>
		</form>
	</div>

	<h2><?= Dish::dishTypeName($categories[8]->id_dishes_types) ?></h2>
	<div class="carrouselContainer">
		<img class="bannerPreview" src="../../public/assets/dishCardImg/9.jpg" alt="">
		<form method="POST" action="/admin/dishCardImg/edit/9" enctype="multipart/form-data" class="bannerForm">
			<label for="banner">
				Ajoutez un fichier pour modifier l'images de la catégorie
			</label>
			<input type="file" id="banner" name="img">

			<button type="submit">Modifier l'image</button>
		</form>
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