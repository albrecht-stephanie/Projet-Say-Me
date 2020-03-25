<!--Début NavBar-->
<div class="container-fluid-nav">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="digimeg-nav-wrap">
            <ul class="digimeg-group digimeg-main-nav">
                <li><a href="../Controllers/accueilController.php" data-subnav="define-subnav" class="digimeg-nav-item"> Accueil</a></li>
                <li><a href="#" data-subnav="Hight-Tech-subnav" class="digimeg-nav-item"> Hight-Tech <span
                            class="digimeg-active-mark"></span> </a> </li>
                <li><a href="#" data-subnav="Electro-Menager-subnav" class="digimeg-nav-item"> Electro-Ménager <span
                            class="digimeg-active-mark"></span> </a> </li>
            </ul>
            <ul class="digimeg-nav-down-content digimeg-sub-nav">
                <li id="Hight-Tech-subnav">
                    <div class="digimeg-nav-item-content digimeg-group">
                        <div class="nicemenu-item">
                            <h5><a href="../Controllers/categorieController.php?id_categories=1" id_categories ="1">Smartphone</a></h5><!--Affiche tous les articles de la catégorie-->
                            <div class="nicemenu-sub">
                                <div class="w-3-1">
                                    <h6><a href="../Controllers/marqueController.php?id_marques=" id_marques ="1">Samsung</a></h6><!--Affiche tous les articles de la marque-->
                                    <ul>
                                        <li><a href="../Controllers/articleController.php?id=1" id = "1" >Samsung S9+</a></li>
                                        <li><a href="../Controllers/articleController.php?id=2" id = "2">Samsung Galaxy S20 Ultra</a></li>
                                        <li><a href="../Controllers/articleController.php?id=11" id = "11">Samsung Note 10+</a></li>
                                    </ul>
                                </div>
                                <!-- <div class="w-3-1">
                                    <h6>Apple</h6>
                                    <ul>
                                    <li><a href="#"></a></li>
                                    </ul>
                                </div> -->
                                <div class="w-3-1">
                                    <h6><a href="../Controllers/marqueController.php?id_marques=6" id_marques = "6">Huawei</a></h6>
                                    <ul>
                                        <li><a href="../Controllers/articleController.php?id=15" id = "15">Huawei Mate 20 Lite</a></li>
                                    </ul>
                                </div>
                                <!-- <div class="w-3-1">
                                    <h6>Xiaomi</h6>
                                    <ul>
                                        <li><a href="#"></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="nicemenu-item">
                            <h5><a href="../Controllers/categorieController.php?id_categorie=2" id_categories ="2">Tablette</a></h5>
                            <div class="nicemenu-sub">
                                <!-- <div class="w-3-1">
                                    <h6>Samsung</h6>
                                    <ul>
                                        <li><a href="#"></a></li>
                                    </ul>
                                </div> -->
                                <div class="w-3-1">
                                    <h6><a href="../Controllers/marqueController.php?id_marques=2" id_marques ="2">Apple</a></h6>
                                    <ul>
                                        <li><a href="./Controllers/articleController.php?id=13" id = "13">Ipad 10.2 32Go</a></li>
                                    </ul>
                                </div>
                                <div class="w-3-1">
                                    <h6><a href="../Controllers/marqueController.php?id_marques=6" id_marques = "6">Huawei</a></h6>
                                    <ul>
                                        <li><a href="../Controllers/articleController.php?id=6" id = "6">Mediapad T5 10" 32GO</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="nicemenu-item">
                            <h5><a href="../Controllers/categorieController.php?id_categories=3" id_categories = "3">Montre Connectée</h5>
                            <div class="nicemenu-sub">
                                <div class="w-3-1">
                                    <h6><a href="../Controllers/marqueController.php?id_marques=1" id_marques = "1">Samsung</h6>
                                    <ul>
                                        <li><a href="../Controllers/articleController.php?id=12" id = "12">Gear Fit 2 Pro</a></li>
                                    </ul>
                                </div>
                                <!-- <div class="w-3-1">
                                    <h6>Apple</h6>
                                    <ul>
                                        <li><a href="#"></a></li>
                                    </ul>
                                </div> -->
                                <div class="w-3-1">
                                    <h6><a href="../Controllers/marqueController.php?id_marques=7" id_marques = "7">Xiaomi</h6>
                                    <ul>
                                        <li><a href="../Controllers/articleController.php?id=5" id = "5">Mi Band 4</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="nicemenu-item">
                            <h5><a href="../Controllers/categorieController.php?id_categories=4" id_categories = "4">PC / PC Portable</h5>
                            <div class="nicemenu-sub">
                                <div class="w-3-1">
                                    <h6><a href="../Controllers/marqueController.php?id_marques=8" id_marques = "8">Acer</h6>
                                    <ul>
                                        <li><a href="../Controllers/articleController.php?id=3" id = "3">Acer Predator Helios</a></li>
                                    </ul>
                                </div>
                                <div class="w-3-1">
                                    <h6><a href="../Controllers/marqueController.php?id_marques=2" id_marques = "2">Apple</h6>
                                    <ul>
                                        <li><a href="../Controllers/articleController.php?id=4" id = "4">iMac 21.5" 2017</a></li>
                                    </ul>
                                </div>
                                <!-- <div class="w-3-1">
                                    <h6>HP</h6>
                                    <ul>
                                        <li><a href="#"></a></li>
                                    </ul>
                                </div> -->
                                <div class="w-3-1">
                                    <h6><a href="../Controllers/marqueController.php?id_marques=12" id_marques = "12">Lenovo</h6>
                                    <ul>
                                        <li><<a href="../Controllers/articleController.php?id=10" id = "10">Ideapad S340-15API</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li id="Electro-Menager-subnav">
                    <div class="digimeg-nav-item-content digimeg-group">
                        <div class="nicemenu verticle" data-pos="list.right" data-classes="active">

                            <div class="nicemenu-item">
                                <h5><a href="../Controllers/categorieController.php?id_categories=5" id_categories = "5">Cuisiner</h5>
                                <div class="nicemenu-sub">
                                    <div class="w-3-1">
                                        <h6><a href="../Controllers/marqueController.php?id_marques=27" id_marques = "27">Magimix</h6>
                                        <ul>
                                            <li><a href="../Controllers/articleController.php?id=14" id = "14">Magimix-Multifonction-CS-4200-XL</a></li>
                                        </ul>
                                    </div> 
                                    <div class="w-3-1">
                                        <h6><a href="../Controllers/marqueController.php?id_marques=24" id_marques = "24">Moulinex</h6>
                                        <ul>
                                            <li><a href="../Controllers/articleController.php?id=7" id = "7">Cookeo.</a></li>
                                        </ul>
                                    </div>
                                    <!--<div class="w-3-1">
                                        <h6>Brant</h6>
                                        <ul>
                                            <li><a href="#">Huawei P30 Pro</a></li>
                                            <li><a href="#">Huawei</a></li>
                                            <li><a href="#">Huawei</a></li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                            <div class="nicemenu-item">
                                <h5><a href="../Controllers/categorieController.php?id_categories=7" id_categories = "7">Entretien du linge</h5>
                                <div class="nicemenu-sub">
                                    <!--<div class="w-3-1">
                                        <h6>Indesit</h6>
                                        <ul>
                                            <li><a href="#"></a></li>
                                        </ul>
                                    </div> -->
                                    <div class="w-3-1">
                                        <h6><a href="../Controllers/marqueController.php?id_marques=17" id_marques = "17">Electrolux</h6>
                                        <ul>
                                            <li><a href="../Controllers/articleController.php?id=8" id = "8">Hublot AUTODOSE</a></li>
                                            <li><a href="../Controllers/articleController.php?id=16" id = "16">Sèche linge pompe à chaleur </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="nicemenu-item">
                                <h5><a href="../Controllers/categorieController.php?id_categories=8" id_categories = "8">Entretien de la maison</h5>
                                <div class="nicemenu-sub">
                                    <div class="w-3-1">
                                        <h6><a href="../Controllers/marqueController.php?id_marques=23" id_marques = "23">Dyson</h6>
                                        <ul>
                                            <li><a href="../Controllers/articleController.php?id=9" id ="9">Aspirateur balai Dyson Cyclone V10 Animal</a></li>
                                        </ul>
                                    </div>
                                    <div class="w-3-1">
                                        <h6><a href="../Controllers/marqueController.php?id_marques=28" id_marques = "28">Autres</h6>
                                        <ul>
                                            <li><a href="../Controllers/articleController.php?id=17" id = "17">Irobot Roomba 676</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <form class="form-inline my-lg-0">
            <?php if (!isset($_SESSION['auth']['login'])) { ?>
                <a class="btn btn-danger mr-2" href="../Controllers/connexionController.php" title="Laisse un Avis et T'Chat !">
                    <i class="fa fa-user" aria-hidden="true"></i> Connectes-toi et Participe !</a>
            <?php } else { ?>
                <a  href="../Controllers/profilController.php" class="btn btn-success mr-1">Bonjour <?= ucfirst(strip_tags($_SESSION['auth']['firstname'])) ?> </a>
                <a href="../Controllers/logoutController.php" class="btn btn-danger mr-1"><i class="fas fa-sign-out-alt">Déconnexion</i></a>
            <?php } ?>
            <a class="btn btn-warning" href="tchat.php"><i class="fa fa-comments" aria-hidden="true"></i> T'Chat</a>
            <input class="form-control mr-sm-2 ml-sm-2" type="text" aria-label="Search">
            <button class="search btn btn-outline-info  my-sm-0" type="submit">Rechercher</button>
        </form>
    </nav>         
</div>
<!--Fin NavBar-->