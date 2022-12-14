<section id="gtco-menu" class="section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Amiens traiteur
                        </span>
                        <h2>
                            Nos menus
                        </h2>
                    </div>  
                </div>
            </div>
            <div class="col-12 menu-wrap text-center py-3">
                <?php for($i = $firstDishType ; $i < $typesOfDishes ; $i++) : ?>
                    <?php $dishTypeName = Dish::dishTypeName($i) ?>
                        <a href="#<?= $dishTypeName ?>" class="btn btn-primary btn-outline-primary btn-lg m-2"><?= ucfirst($dishTypeName) ?></a>
                <?php endfor; ?>
            </div>
            <?php for ($i = $firstDishType ; $i < $typesOfDishes ; $i++) :?>
                <?php $dishTypeName = Dish::dishTypeName($i) ?>
                <div class="row">
                    <div id="<?= $dishTypeName ?>" class="col-lg-12 menu-wrap">
                        <div class="heading-menu py-4">
                            <h3 class="text-center mb-5"><?= ucfirst($dishTypeName) ?></h3>
                        </div>
                        <?php foreach (Dish::getAll($i) as $element) : ?>
                            <div class="foodCard">
                                <div class="foodCardImg">
                                    <img src=<?= ($element->image == 2) ? "/public/assets/galery/".strtolower(str_replace(' ', '', $element->id)).".jpg" : '/public/assets/baseImg/dish.jpg'?> alt="Photo de <?= $element->title ;?>">
                                </div>
                                <div class="foodCardDesc">
                                    <h3><?= $element->title ?></h3>
                                    <h4><?= $element->price ?>€</h4>
                                    <p><?= $element->description ?></p>
                                </div>
                            </div>
                        <div class="menus d-flex align-items-center">
                            <div class="menu-img rounded-circle">
                                <img class="img-fluid" src=<?= ($element->image == 2) ? "/public/assets/galery/".strtolower(str_replace(' ', '', $element->id)).".jpg" : '/public/assets/baseImg/dish.jpg'?> alt="Photo de <?= $element->title ;?>">
                            </div>
                            <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4><?= $element->title ?></h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price"><?= $element->price ?>€</h4>
                                </div>
                            </div>
                            <p><?= $element->description ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <!-- Return to top -->
        <div class="returnToTop">
            <a href="#top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="#f3f3f3" d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>
            </a>
        </div>
    </div>

</section>
