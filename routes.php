<?php

require_once __DIR__ . '/router.php';
any('/accueil', 'controllers/homeController.php');
any('/', 'controllers/homeController.php');
any('/plats', 'controllers/dishesController.php');
any('/commentaires', 'controllers/reviewCtrl.php');
any('/galerie', 'controllers/galeryCtrl.php');
any('/getDishesAjax', 'helpers/ajax/dishes.php');
any('/legal', 'controllers/legalController.php');

// Page de commande
any('/commande', 'controllers/orderController.php');


// Connexion
any('/connexion', 'controllers/admin/connexionCtrl.php');
// Déconnexion
get('/disconnect', 'controllers/disconnectCtrl.php');
// Mot de passe oublié
any('/oubli-mot-de-passe', 'controllers/forgotPwdCtrl.php');


// ############################
// Gestion du menu et des plats
// ############################

// Images du carrousel
get('/admin/img', 'controllers/admin/dbImgCtrl.php');
any('/admin/carrousel/edit/1', 'controllers/admin/dbImgCtrl.php');
any('/admin/carrousel/edit/2', 'controllers/admin/dbImgCtrl.php');
any('/admin/carrousel/edit/3', 'controllers/admin/dbImgCtrl.php');

// Images des catégories
get('/admin/gategoriesImg', 'controllers/admin/dbDishesCardsCtrl.php');
any('/admin/dishCardImg/edit/1', 'controllers/admin/dbDishesCardsCtrl.php');
any('/admin/dishCardImg/edit/2', 'controllers/admin/dbDishesCardsCtrl.php');
any('/admin/dishCardImg/edit/3', 'controllers/admin/dbDishesCardsCtrl.php');
any('/admin/dishCardImg/edit/4', 'controllers/admin/dbDishesCardsCtrl.php');
any('/admin/dishCardImg/edit/5', 'controllers/admin/dbDishesCardsCtrl.php');
any('/admin/dishCardImg/edit/6', 'controllers/admin/dbDishesCardsCtrl.php');
any('/admin/dishCardImg/edit/7', 'controllers/admin/dbDishesCardsCtrl.php');
any('/admin/dishCardImg/edit/8', 'controllers/admin/dbDishesCardsCtrl.php');
any('/admin/dishCardImg/edit/9', 'controllers/admin/dbDishesCardsCtrl.php');

// Images de l'équipe
get('/admin/equipe', 'controllers/admin/dbTeamCtrl.php');
any('/admin/membre/edit/1', 'controllers/admin/dbTeamCtrl.php');
any('/admin/membre/edit/2', 'controllers/admin/dbTeamCtrl.php');
any('/admin/membre/edit/3', 'controllers/admin/dbTeamCtrl.php');

// Menu
get('/admin', 'controllers/admin/dbDishesCtrl.php');
get('/admin/menu', 'controllers/admin/dbDishesCtrl.php');
// Ajout d'un plat
any('/admin/menu/ajout', 'controllers/admin/dbDishesCtrl.php');
// Modification d'un plat
any('/admin/menu/edit/$id', 'controllers/admin/dbDishesCtrl.php');
// Modification de l'image d'un plat
any('/admin/menu/edit/img/$id', 'controllers/admin/dbDishesCtrl.php');
// Acitve la visibilité d'un plat sur le menu
any('/admin/menu/edit/active/$id', 'controllers/admin/dbDishesCtrl.php');
// Suppression d'un plat
any('/admin/menu/delete/$id', 'controllers/admin/dbDishesCtrl.php');

// #####################
// Gestion des commandes
// #####################

// Commandes (admin)
any('/admin/commandes', 'controllers/admin/dbOrdersCtrl.php');
// Valide une commande
any('/admin/commandes/validate', 'controllers/admin/dbOrdersCtrl.php');
// Supprime une commande
any('/admin/commande/delete/$id', 'controllers/admin/dbOrdersCtrl.php');
// Commandes (user)
any('/profil/commandes', 'controllers/user/userCtrl.php');
// Modifier une commande (user)
any('/profil/commande/edit/$id', 'controllers/user/userCtrl.php');
// Supprimer une commande (user)
any('/profil/commande/delete/$id', 'controllers/user/userCtrl.php');
// Supprimer une plat d'une commande (user)
any('/admin/commande/plat/delete/$id', 'controllers/user/userCtrl.php');

// ########################
// Gestion des commentaires
// ########################

// Commentaires (admin)
any('/admin/commentaires', 'controllers/admin/dbReviewsCtrl.php');
// Valide un commentaire (admin)
any('/admin/commentaire/edit/validate/$id', 'controllers/admin/dbReviewsCtrl.php');
// Supprime un commentaire (admin)
any('/admin/commentaire/delete/$id', 'controllers/admin/dbReviewsCtrl.php');
// Ajoute un commentaires (user)
any('/commentaires/ajout', 'controllers/reviewCtrl.php');
// Commentaires (user)
any('/profil/commentaires', 'controllers/user/userCtrl.php');
// Modifie un commentaire (user)
any('/profil/commentaire/edit/$id', 'controllers/user/userCtrl.php');
// Supprime un commentaire (user)
any('/profil/commentaire/delete/$id', 'controllers/user/userCtrl.php');

// ######################################
// Gestion de l'ajax de la page d'accueil
// ######################################

any('/getLastStartersAjax', 'helpers/ajax/startersPreview.php');
any('/getLastDishesAjax', 'helpers/ajax/dishesPreview.php');
any('/getLastDessertsAjax', 'helpers/ajax/dessertsPreview.php');
any('/getLastReviewsAjax', 'helpers/ajax/lastReviews.php');

get('/jwtverif', 'controllers/JWTVerifCtrl.php');
any('/modif-mdp', 'controllers/resetPwdCtrl.php');

any('/demande-devis', 'controllers/orderFormCtrl.php');

get('/cgu', 'controllers/cguCtrl.php');
// Page not found
any('/404', '/404.php');
