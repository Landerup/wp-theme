<!doctype html>
<html lang="en">
	<head>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid ">
                <a class="navbar-brand text-success" href="http://wpintro.test/">Travel Land</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Navigera här
                    </a>
                    <ul class="dropdown-menu text-success" aria-labelledby="navbarDropdown">
                        <li>
                            <?php wp_nav_menu( ['theme_location' => 'primary','container' => 'nav', ]); ?>
                        </li>
                    </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Sök" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Sök</button>
                </form>
                </div>
            </div>
        </nav>

        <div class="px-2 py-2 my-2 text-center">
                <img class="d-block mx-auto mb-4 img-fluid" src="http://wpintro.test/wp-content/uploads/2022/06/ross-parmly-rf6ywHVkrlY-unsplash.jpg" alt="" style="width: 100%; height: 600px">
                <h1 class="display-5 fw-bold text-success">Travel Land</h1>
            <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">En fantastikt hemsida som kan ta dig till vilken världsdel du önskar, det är dyrt men det är värt varenda krona. Köp din resa hos oss!</p>
                <div class="d-grid gap-5 d-sm-flex justify-content-sm-center">
                    <a href="http://wpintro.test/travel_matches/"><button type="button" class="btn btn-outline-success px-10">Sportresor</button></a>
                    <a href="http://wpintro.test/wcm_travel/"><button type="button" class="btn btn-outline-success px-10">Resor</button></a>
                    <a href="http://wpintro.test/travel_soccer/"><button type="button" class="btn btn-outline-success px-10">Fotbollsresor</button></a>
	            </div>
            </div>
        </div>



		<?php wp_head(); ?>
	</head>
    <body <?php body_class(); ?>
