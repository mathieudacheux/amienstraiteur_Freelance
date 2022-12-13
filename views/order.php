<section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background-image: url(../public/assets/img/reservation-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-content bg-white p-5 shadow">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Amiens traiteur
                        </span>
                        <h3>
                            Quel est votre besoin ?
                        </h3>
                    </div>
                    <form method="post" action="/commande">

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="name" placeholder="Nom*" value="<?= $lastname ?? '' ?>" required pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$">
                                <?= empty($errors['name']) ? '' : '<div class="errorMessage">' . $errors['name'] . '</div>' ?>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="firstname" placeholder="Prénom*" value="<?= $firstname ?? '' ?>" required pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$">
                                <?= empty($errors['firstname']) ? '' : '<div class="errorMessage">' . $errors['firstname'] . '</div>' ?>
                            </div>
                            <div class="col-md-12 form-group">
                            <input type="email" class="form-control" name="email" placeholder="Adresse e-mail*" value="<?= $email ?? '' ?>" required pattern="^[a-zA-Z0-9_.+-]+@[a-zA-Z-]+\.[a-zA-Z-.]+$">
                                <?= empty($errors['email']) ? '' : '<div class="errorMessage">' . $errors['email'] . '</div>' ?>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="phone" name="phone" class="form-control" placeholder="Numéro de téléphone*" value="<?= $phoneNb ?? '' ?>" required pattern="^[0][1-9]-?[0-9]{2}-?[0-9]{2}-?[0-9]{2}-?[0-9]{2}$">
                                <?= empty($errors['phoneNb']) ? '' : '<div class="errorMessage">' . $errors['phoneNb'] . '</div>' ?>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="date" name="date" class="form-control" value="<?= $date ?? '' ?>" pattern="^<?= date('Y', time()) ?>-<?= date('m', time()) ?>-[0-3][0-9]$" required>
                                <?= empty($errors['date']) ? '' : '<div class="errorMessage">' . $errors['date'] . '</div>' ?>
                            </div>
                            <div class="col-md-12 form-group">
                                <select name="time" pattern="^[1-8]$" class="form-control" required>
                                    <optgroup selected label="Réserver pour le midi">
                                        <option value="1" <?= (isset($time) && $time == 1) ? 'selected' : '' ?>>12h00</option>
                                        <option value="2" <?= (isset($time) && $time == 2) ? 'selected' : '' ?>>12h30</option>
                                        <option value="3" <?= (isset($time) && $time == 3) ? 'selected' : '' ?>>13h00</option>
                                        <option value="4" <?= (isset($time) && $time == 4) ? 'selected' : '' ?>>13h30</option>
                                    </optgroup>
                                    <optgroup label="Réserver pour le soir">
                                        <option value="5" <?= (isset($time) && $time == 5) ? 'selected' : '' ?>>19h00</option>
                                        <option value="6" <?= (isset($time) && $time == 6) ? 'selected' : '' ?>>19h30</option>
                                        <option value="7" <?= (isset($time) && $time == 7) ? 'selected' : '' ?>>20h00</option>
                                        <option value="8" <?= (isset($time) && $time == 8) ? 'selected' : '' ?>>20h30</option>
                                    </optgroup>
                                </select>
                            </div>
		                    <?= empty($errors['time']) ? '' : '<div class="errorMessage">' . $errors['time'] . '</div>' ?>

                            <div class="col-md-12 form-group">
                                <div class="dishes">
                                    <script>
                                        fetch(`/getDishesAjax`)
                                        .then(response => response.json())
                                        .then(data => {
                                                // Tri les plats par type de plat du plus petit au plus grand
                                                data.sort(
                                                    (p1, p2) =>
                                                    (p1.id_dishes_types < p2.id_dishes_types) ? -1 : (p1.id_dishes_types > p2.id_dishes_types) ? 1 : 0);
                                                let div =
                                                    `<div class="col-md-12 form-group">`;
                                                let select =
                                                    `<select name="dishList[]" class="form-control col-md-8">`;


                                                let select2 =
                                                    `<select name="quantity[]" class="form-control col-md-2">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                    </select>`;
                                                let del =
                                                    `<div class="del col-md-2 form-control">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                                                    </div>`;
                                                data.forEach(element => {
                                                    select += `<option value="${element.id}">${element.title}</option>`;
                                                });
                                                select += `</select>`;
                                                div += select + select2 + del + `</div>`;
                                                dishesContainer.innerHTML += div;

                                                let deleteDishes = document.querySelectorAll('.del');
                                                deleteDishes.forEach(element => {
                                                    element.addEventListener('click', () => {
                                                        element.parentNode.remove();
                                                    })
                                                });
                                            })
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-2 col-2 form-group">
                                <div class="addDish form-control">+</div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Commander</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</section>

<script src="../../public/js/orderForm.js"></script>