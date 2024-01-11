<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="PortFolio de Christel Rodriguez Perez Web-developper junior">
        <meta name="keywords" content="">
        <!-- CSS : Leaflet.js -->
	    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
		integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
		crossorigin="" />
        <link rel="stylesheet" href="./assets/styles/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/styles/styles.css">
        <!--Script Leaflet-->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
        <!--Scripts, framework JS-->
        <script src="./assets/scripts/bootstrap.bundle.min.js" defer></script>
        <script src="./assets/scripts/main.js" defer ></script>
        <title>PortFolio Christel Rodriguez Perez Web-developper</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top boxShadow">
            <div class="container-fluid">
                <a class="navbar-brand mx-5" href="#">PortFolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link mx-5" aria-current="page" href="#">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-5" aria-current="page" href="#projets">Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-5" aria-current="page" href="#pictos">Pictos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-5" aria-current="page" href="#stage">Stage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-5" aria-current="page" href="#certifications">Certifications</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <a id="#" href=""></a><!--Anchor-->
        <main>
            <section class="acceuil d-flex">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 py-5 mainTitle">
                            <h1 class="mx-2">Front-end</h1> 
                            <h1 class="mx-2 py-1">developer</h1>
                            <h1 class="mx-2 py-1">Christel</h1> 
                            <h1 class="mx-2 py-1">Rodriguez</h1>
                            <h1 class="mx-2 py-1">Perez</h1>
                        </div>
                        <div class="clock col-md-5">
                            <div class="wrap">
                                <!--Heure-->
                                <div class="heure"></div>
    
                                <!--Minutes-->
                                <div class="minute"></div>
    
                                <!--Secondes-->
                                <div class="seconde"></div>
    
                                <!--Point/centre-->
                                <div class="point"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="card my-5 border-0 rounded-4" id="cardAcceuil">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="./assets/img/bulles.png" height="555em" width="555em" class="img-fluid mx-3  p-3" alt="Chris faisant des bulles">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title text-center fontRanchers colorBlue p-3">Qui suis-je ?</h5>
                                            <p class="card-text fontCaveat colorBlue">Je suis une mordue d'informatique depuis l'âge de 12 ans.
                                                Mes premières lignes de codes, je les ai faites en Q-Basic sur un 486, je m'interesse 
                                                depuis peu à Kali Linux et à d'autres distribution.
                                                J'adore faire du sport en l'occurence du vélo, je m'interesse à la spiritualité, à la
                                                géopolitique, au Reiki, ... 
                                                J'aime beaucoup les jeux de société tels que les jeux de rôles, le jeu de Go, ...
                                                Je suis de nature sociable et diplomate, j'ai l'habitude du contact client grâce à mon passé en pharmacie.
                                            </p>
                                            <div>
                                                <a href="./assets/pdf/ChrisRodriguezPerezCV.pdf" type="button" class="btn btn-primary" >CV</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="container">
                            <div class="row">
                                <h2 id="titleSkills" class="text-center fontRanchers">SKILLS</h2>
                                <div class="col-md-12">
                                    <div class="boxShadow" id="borderSkills">
                                        <div class="d-flex" id="container">
                                            <img class="mx-2" src="./assets/img/svg/skills/html5.svg" alt="logo HTML">
                                            <img class="mx-2" src="./assets/img/svg/skills/css3.svg" alt="logo CSS">
                                            <img class="mx-2" src="./assets/img/svg/skills/sass.svg" alt="logo Sass">
                                            <img class="mx-2" src="./assets/img/svg/skills/bootstrap.svg" alt="logo Bootstrap">
                                            <img class="mx-2" src="./assets/img/svg/skills/javascript.svg" alt="logo JavaScript">
                                            <img class="mx-2" src="./assets/img/svg/skills/react.svg" alt="logo React">
                                            <img class="mx-2" src="./assets/img/svg/skills/angular.svg" alt="logo Angular">
                                            <img class="mx-2" src="./assets/img/svg/skills/php.svg" alt="logo PhP">
                                            <img class="mx-2" src="./assets/img/svg/skills/laravel.svg" alt="logo Laravel">
                                            <img class="mx-2" src="./assets/img/svg/skills/illustrator.svg" alt="logo Illustrator">
                                            <img class="mx-2" src="./assets/img/svg/skills/photoshop.svg" alt="logo PhotoShop">
                                            <img class="mx-2" src="./assets/img/svg/skills/xd.svg" alt="logo XD">
                                            <img class="mx-2" src="./assets/img/svg/skills/linux.svg" alt="logo Linux">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                </section><!--END Section acceuil-->
               
                <section class="projets d-flex justify-content-center">
                    <div class="container">
                        <a id="projets" href=""></a><!--Anchor-->
                        <h2 id="titleProjets" class="text-center fontRanchers">Projets</h2>
                        <div class="row py-5">
                            <div class="col-md-4 py-5">
                                <div class="card" style="height: 35em;" style="width: 25rem;">
                                    <img src="./assets/img/soinsDeSoie.png" height="210em" class="card-img-top" alt="Photo de la page d'acceuil du site Soins de soie">
                                    <div class="card-body">
                                      <h5 class="card-title text-center fontRanchers colorYellow">Site Soins de soie</h5>
                                      <p class="card-text">Site réalisé pour un institut de beauté se situant à Braine l'Alleud en Belgique. Site en cours de construction !</p>
                                      <h5 class="text-center fontRanchers colorYellow">Technologies utilisées</h5>
                                      <div class="p-3">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/html5.svg" alt="Logo HTMl5">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/css3.svg" alt="Logo CSS3">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/javascript.svg" alt="Logo JavaScript">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/bootstrap.svg" alt="Logo Bootstrap">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/illustrator.svg" alt="Logo Illustrator">
                                      </div>
                                      <div class="d-flex cardBtn">
                                        <a href="https://github.com/Baboo81/SoinsDeSoieV2" class="btn btn-primary">Code</a>
                                        <a href="http://soinsdesoie.be" class="btn btn-primary">Run</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 py-5">
                                <div class="card" style="height: 35em;" style="width: 25rem;">
                                    <img src="./assets/img/reactAsturias.png" height="210em" class="card-img-top" alt="Photo de la page d'acceuil du site Asturias">
                                    <div class="card-body">
                                      <h5 class="card-title text-center fontRanchers colorYellow">Site Asturias</h5>
                                      <p class="card-text">Site proposant un tour d'horizon de la Principauté des Asturies, région se trouvant au nord de l'Espagne.</p>
                                      <h5 class="text-center fontRanchers colorYellow">Technologies utilisées</h5>
                                      <div class="p-3">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/html5.svg" alt="Logo HTMl5">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/css3.svg" alt="Logo CSS3">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/javascript.svg" alt="Logo JavaScript">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/react.svg" alt="Logo Bootstrap">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/illustrator.svg" alt="Logo Illustrator">
                                      </div>
                                      <div class="d-flex">
                                        <a href="https://github.com/Baboo81/ReactP2Asturias" class="btn btn-primary">Code</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 py-5">
                                <div class="card" style="height: 35em;" style="width: 25rem;">
                                    <img src="./assets/img/molenbeek.png" height="210em" class="card-img-top" alt="Photo de la page d'acceuil du site Molenbeek en promenade">
                                    <div class="card-body">
                                      <h5 class="card-title text-center fontRanchers colorYellow">Site Molenbeek en promenade</h5>
                                      <p class="card-text">Site proposant la découverte de Molenbeek via trois itininéraires à faire à pieds, à vélo et en famille.</p>
                                      <h5 class="text-center fontRanchers colorYellow">Technologies utilisées</h5>
                                      <div class="p-3">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/html5.svg" alt="Logo HTMl5">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/css3.svg" alt="Logo CSS3">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/javascript.svg" alt="Logo JavaScript">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/sass.svg" alt="Logo Bootstrap">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/php.svg" alt="Logo Bootstrap">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/illustrator.svg" alt="Logo Illustrator">
                                      </div>
                                      <div class="d-flex">
                                        <a href="https://github.com/Baboo81/Molenbeek" class="btn btn-primary">Code</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-md-4 py-5">
                                <div class="card" style="height: 35em;" style="width: 25rem;">
                                    <img src="./assets/img/reactToDoList.png" height="210em" class="card-img-top" alt="Photo de la page d'acceuil du site Soins de soie">
                                    <div class="card-body">
                                      <h5 class="card-title text-center fontRanchers colorYellow">To Do List</h5>
                                      <p class="card-text">Petite application permettant de gérer son emploi du temps.</p>
                                      <h5 class="text-center fontRanchers colorYellow">Technologies utilisées</h5>
                                      <div class="p-3">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/html5.svg" alt="Logo HTMl5">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/css3.svg" alt="Logo CSS3">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/react.svg" alt="Logo JavaScript">
                                      </div>
                                      <div class="d-flex">
                                        <a href="https://github.com/Baboo81/ReactToDoList" class="btn btn-primary">Code</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 py-5">
                                <div class="card" style="height: 35em;" style="width: 25rem;">
                                    <img src="./assets/img/agularTest.png" height="210em" class="card-img-top" alt="Photo de la page d'acceuil du site Asturias">
                                    <div class="card-body">
                                      <h5 class="card-title text-center fontRanchers colorYellow">Site la tienda</h5>
                                      <p class="card-text">Petit test réalisé avec Angular.</p>
                                      <h5 class="text-center fontRanchers colorYellow">Technologies utilisées</h5>
                                      <div class="p-3">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/html5.svg" alt="Logo HTMl5">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/css3.svg" alt="Logo CSS3">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/angular.svg" alt="Logo JavaScript">
                                      </div>
                                      <div class="d-flex">
                                        <a href="https://github.com/Baboo81/AngularTest" class="btn btn-primary">Code</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 py-5">
                                <div class="card" style="height: 35em;" style="width: 25rem;">
                                    <img src="./assets/img/amme.png" height="210em" class="card-img-top" alt="Photo de la page d'acceuil du site Molenbeek en promenade">
                                    <div class="card-body">
                                      <h5 class="card-title text-center fontRanchers colorYellow">Site @mme</h5>
                                      <p class="card-text">Site en cours de construction pour une fiduciaire.</p>
                                      <h5 class="text-center fontRanchers colorYellow">Technologies utilisées</h5>
                                      <div class="p-3">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/html5.svg" alt="Logo HTMl5">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/css3.svg" alt="Logo CSS3">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/javascript.svg" alt="Logo JavaScript">
                                        <img class="sizeIcones" src="./assets/img/svg/skills/bootstrap.svg" alt="Logo Bootstrap">
                                      </div>
                                      <div class="d-flex cardBtn">
                                        <a href="https://github.com/Baboo81/ammeFiduciaire" class="btn btn-primary">Code</a>
                                        <a href="http://michael@amme.be" class="btn btn-primary">Run</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section><!--Section projets END-->
            
            <section class="pictos d-flex justify-content-center">
                <div class="container">
                    <a id="pictos" href=""></a><!--Anchor-->
                    <h2 id="titlePictos" class="text-center fontRanchers py-5">Pictos</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="list-group list-group-flush rounded-4 my-3 boxShadow">
                                <article id="list" class="list-group-item p-4">
                                    <div class="row">
                                        <div class="col-12 col-md-4 d-md-block">
                                            <img id="picto1" src="./assets/img/pictos/logoAmme.png" alt="Logo représentant un ordinateur">
                                        </div>
                                        <div class="col-12 col-md-8 p-4">
                                            <p id="txtListGroup">Logo réalisé pour une fiduciaire.</p>
                                            <h3 class="fontRanchers colorYellow py-3" id="picto-h5">Technologie</h3>
                                            <img id="pictoList" src="./assets/img/svg/PictoListGroup.svg" alt="Logo Illustrator">
                                        </div>
                                    </div>   
                                </article>
                                <article id="list" class="list-group-item p-4">
                                    <div class="row">
                                        <div class="col-12 col-md-4 d-md-block">
                                            <img id="picto2" src="./assets/img/pictos/logoSoinsDeSoie.png" alt="Logo représentant un pissenlit">
                                        </div>
                                        <div class="col-12 col-md-8 p-4">
                                            <p id="txtListGroup">Logo réalisé pour un institut de beauté.</p>
                                            <h3 class="fontRanchers colorYellow py-3" id="picto-h5">Technologie</h3>
                                            <img id="pictoList" src="./assets/img/svg/PictoListGroup.svg" alt="Logo Illustrator">
                                        </div>
                                    </div>
                                </article>
                                <article id="list" class="list-group-item p-4">
                                    <div class="row">
                                        <div class="col-12 col-md-4 d-md-block">
                                            <img id="picto3" src="./assets/img/pictos/cachet.png" alt="Logo représentant un pissenlit">
                                        </div>
                                        <div class="col-12 col-md-8 p-4">
                                            <p id="txtListGroup">Logo réalisé pour un institut de beauté.</p>
                                            <h3 class="fontRanchers colorYellow py-3" id="picto-h5">Technologie</h3>
                                            <img id="pictoList" src="./assets/img/svg/PictoListGroup.svg" alt="Logo Illustrator">
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <a id="stage" href=""></a><!--Anchor-->
                        <div class="row">
                            <h2 id="titlePictos" class="text-center fontRanchers py-5">Stage</h2>
                            <div class="col-md-12">
                                <article class="boxShadow scroll" id="agoria">
                                    <img src="./assets/img/svg/agoria.svg" alt="Logo Agoria">
                                    <p id="agoriaTxt" class="p-4">Agoria, la fédération de l’industrie technologique, regroupe 2079 entreprises technologiques et tous ceux qui sont inspirés par la technologie. Comptant plus de 321.000 travailleurs, le secteur technologique est le plus grand secteur de Belgique et Agoria la plus grande fédération au sein de la FEB. Quelque 70 pour cent des membres d'Agoria sont des PME. 
                                       Agoria compte plus de 200 collaborateurs. Ils travaillent chez les membres, à domicile ou au bureau à Bruxelles, Anvers, Liège, Gand et Charleroi. Dans les trois premières villes, Agoria dispose de son propre centre d'affaires BluePoint et d’un Tech.Lounge.
                                       Les services et positions d’Agoria portent sur la digitalisation, l’industrie manufacturière de demain, la politique de gestion des talents et la formation, l’évolution des marchés, la réglementation, les infrastructures, le climat, l’environnement et l’énergie. Agoria entend mettre en relation tous ceux qui sont inspirés par la technologie et l'innovation et accroître le succès des entreprises et façonner un avenir durable. Grâce à son initiative Agoria Techlancers, Agoria propose également toute une série de services aux freelances.
                                       À travers « Be The Change », Agoria se concentre sur l'avenir du marché du travail, dans le cadre de « Factory of the Future » sur les atouts de notre industrie manufacturière et à travers « DigiCoach », sur la poursuite de la digitalisation des individus et organisations. Agoria dispose à la fois d'un centre d'études et d’un centre d’innovation et est active à tous les niveaux politiques. Bart Steukers est le CEO d’Agoria.
                                    </p>
                                </article>
                                <table class="table-dark boxShadow">
                                    <thead>
                                        <tr class="fontRanchers">
                                            <th>Liens</th>
                                            <th>Activités</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="https://www.agoria.be/nl/5G-en-industrie" target="_blank" rel="noreferrer noopener">https://www.agoria.be/nl/5G-en-industrie</a></td>
                                            <td> 
                                                <li>Modification du design : HTML, CSS, Bootstrap</li>
                                                <li>Création d'un script en JavaScript qui génère les cards de la 2e partie de la page en créant un rendu aléatoire</li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.agoria.be/en/themes/tomorrows-manufacturing-industry/factories-of-the-future/factories-of-the-future-introduction" target="_blank" rel="noreferrer noopener">https://www.agoria.be/en/themes/tomorrows-manufacturing-industry/factories-of-the-future/factories-of-the-future-introduction</a></td>
                                            <td>
                                                <li>Modification du design : HTML, CSS, Bootstrap</li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.agoria.be/nl/sustainability-roadmap" target="_blank" rel="noreferrer noopener">https://www.agoria.be/nl/sustainability-roadmap</a></td>
                                            <td> 
                                                <li>Création de la page sur base d'une maquette : HTML, CSS, Bootstrap</li>
                                                <li>Création d'un script JavaScript pour l'animation des flêches et pour injecter du txt dans l'accordéon aussi.</li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.agoria.be/nl/sustainability-roadmap/waarom" target="_blank" rel="noreferrer noopener">https://www.agoria.be/nl/sustainability-roadmap/waarom</a></td>
                                            <td>
                                                <li>Création de la page sur base d'une maquette : HTML, CSS, Bootstrap</li>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="https://www.agoria.be/cyberstart/woordenboek" target="_blank" rel="noreferrer noopener">https://www.agoria.be/cyberstart/woordenboek</a></td>
                                            <td>
                                                <li>Création de la page sur base d'une maquette</li>
                                                <li>Création d'un script JavaScript qui récupère les données d'un fichier Excel pour les injecter dans des div</li>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </section>
            <section class="certifications">
                <h2 id="titleCertifications" class="text-center fontRanchers py-5">Certifications</h2>
                <a id="certifications" href=""></a>
                <div class="carousel-control bg-dark text-light text-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="carouselExampleFade" class="carousel slide carousel-fade rounded-4">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./assets/img/carousel/cover.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/img/carousel/Interface3/Front-end.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/img/carousel/LinkedIn/JS/CertificatDaccomplissement_JavaScript La programmation asynchrone .png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/img/carousel/LinkedIn/JS/CertificatDaccomplissement_JavaScript La programmation orientee objet.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/img/carousel/LinkedIn/JS/CertificatDaccomplissement_Lessentiel de JavaScript.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/img/carousel/LinkedIn/JS/CertificatDaccomplissement_Lessentiel de jQuery.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/img/carousel/LinkedIn/JS/CertificatDaccomplissement_Lessentiel de Node.js.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/img/carousel/LinkedIn/JS/CertificatDaccomplissement_Lessentiel de PHP et MySQL.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/img/carousel/LinkedIn/JS/CertificatDaccomplissement_Lessentiel de React.js.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/img/carousel/LinkedIn/bootstrap.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/img/carousel/LinkedIn/css.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/img/carousel/LinkedIn/Sass.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/img/carousel/LinkedIn/bootstrap.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/img/carousel/LinkedIn/les bases de données.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/img/carousel/LinkedIn/html.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/img/carousel/LinkedIn/Illustrator les logos.png" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 animationLogo">
                    <img src="./assets/img/svg/Logo.svg" alt="logo circulaire du PortFolio" id="logo">
                </div>
                <div id="commentsBloc" class="container py-5">
                    <div class="row">
                        <form action="POST" class="col-md-4">
                        <h4 id="titleComments" class="text-center fontRanchers py-5">Commentaires ...</h4>
                            <div class="form-group">
                                <input type="text" class="form-control bg-yellow border rounded-5" name="pseudo" placeholder="Votre pseudo" />
                                <textarea class="form-control bg-yellow border rounded-5 my-4" name="comments" id="textArea" cols="30" rows="10" placeholder="Entrez votre commentaire"></textarea>
                            </div>
                            <div class="p-2">
                                <input type="submit" class="btn" value="Envoyer" name="submit_comments" id="commentBoxBtn" />
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                    $server = "localhost";
                    $login = "root";
                    $passWord = "root";

                    try {
                        $connexion = new PDO("mysql:host=$server;dbname=CommentBox;charset=utf8", $login, $passWord);
                        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        //Verification de la présence des entrées de l'utilisateur:
                        if($_POST['submit_comments']) {
                            if(isset($_POST['pseudo'], $_POST['submit_comments']) AND !empty($_POST['pseudo']) AND !empty($_POST['comments']
                            )) {
                                $pseudo = htmlspecialchars($_POST['pseudo']);
                                $commentaire = htmlspecialchars($_POST['comments']);
                                if(strlen($pseudo) < 25) {
                                    $request = $connexion->prepare('
                                        INSERT INTO CommentBox (pseudo, commentaire) VALUES (?, ?)');
                                    $request->execute(array($pseudo, $commentaire));
                                } else {
                                    $comment_error = "Le pseudo doit faire moins de 25 caractères !";
                                }
                            } else {
                                $comment_error = "Tous les champs doivent être complétés !";
                                }
                            }
                        
                        if(isset($comment_error)) {
                            echo $comment_error;
                        }
                    }

                    catch(PDOException $error) {
                        echo "Echec de la connexion " . $error->getMessage();
                    }
                ?>
            </section>
        </main>
    </body>
    <footer class="text-center text-lg-start colorYellow py-5">
          <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                   <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">
                        <p class="text-uppercase fontRanchers fontSizeTitles mb-4 text-center">
                            <i class="fas fa-gem me-3"></i>Adresse
                        </p>
                        <p class="text-center">
                            Rue Champ Rodange 14, Waterloo
                        </p>
                        <div id="mapid" class="container-fluid"></div>
                    </div>
                    <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">
                        <p class="text-uppercase fontRanchers fontSizeTitles mb-4 text-center">
                            Réseaux Sociaux
                        </p>
                        <div class="justify-content-center mx-5">
                            <a href="https://github.com/Baboo81"><img class="netWorks px-2" src="../assets/img/svg/footer/PictoGit.svg" alt="Logo de GitHub"/></a>
                            <a href="https://www.linkedin.com/in/chris-rodriguez-perez-609716100/"><img class="netWorks px-2" src="../assets/img/svg/footer/PictoLinkedIn.svg" alt="Logo de LinkedIn"/></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">
                        <p class="text-uppercase fontRanchers fontSizeTitles mb-4 text-center">
                            Contact
                        </p>
                        <div class="justify-content-center mx-5 mt-3">
                            <a href="mailto:chrisrodriguez@hotmail.be"><img class="netWorks px-2" src="../assets/img/svg/footer/PictoMail.svg" alt="Logo mail"/></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center fontSizeMedium fontRanchers py-3">
                <p>&copy; Christel Rodriguez Perez - 2024</p>
            </div>
      </footer>
</html>