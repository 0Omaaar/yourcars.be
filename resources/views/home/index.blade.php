@include('navbar.navbar')

<style>
    @media (max-width: 768px) {
        .container_first_section_hero {
            margin-top: 25% !important;
        }
    }
</style>
<div id="top"></div>
<section id="de-carousel" class="no-top no-bottom carousel slide carousel-fade" data-mdb-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators z1000">
        <li data-mdb-target="#de-carousel" data-mdb-slide-to="0" class="active"></li>
        <li data-mdb-target="#de-carousel" data-mdb-slide-to="1"></li>
    </ol>

    <!-- Inner -->
    <div class="carousel-inner position-relative">
        <!-- Single item -->
        <div class="carousel-item active jarallax">
            <img src="images/slider/1.jpg" class="jarallax-img" alt="">
            <div class="mask">
                <div class="h-100 v-center">
                    <div class="container">
                        <div class="row gx-5 align-items-center container_first_section_hero">
                            <div class="col-lg-6 mb-sm-30 first_section_hero">
                                <h5 class="mb-4 s2"><span class="wow fadeInRight" data-wow-delay=".2s"><i
                                            class="id-color fa fa-calendar-o"></i>Membre de FEDERAUTO</span><span
                                        class="wow fadeInRight" data-wow-delay=".2s"><i
                                            class="id-color fa fa-map-marker"></i>Belgique</span></h5>
                                <h1 class="text-uppercase mb-3"><span class="text-gradient wow fadeInRight"
                                        data-wow-delay="0s">YourCars</span> <span class="wow fadeInRight"
                                        data-wow-delay=".2s">2025</span></h1>
                                <p class="wow fadeInUp" data-wow-delay=".3s" style="color: white">
                                    VOTRE FUTURE VOITURE VOUS ATTEND,
                                    Explorez notre sélection de véhicules d'occasion contrôlés et garantis – qualité,
                                    fiabilité, et prix justes réunis.
                                </p>
                                <div class="spacer-10"></div>
                                <a class="btn-main big mb10 wow fadeInUp btn_first_section_hero" data-wow-delay=".6s"
                                    href="{{ route('offers') }}">Découvrir nos voitures</a>
                            </div>
                            <div class="col-lg-6 cars_section_1_hero">
                                <img src="images/misc/car-2.png" class="wow zoomIn" data-wow-delay=".6s" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item jarallax">
            <img src="images/slider/2.jpg" class="jarallax-img" alt="">
            <div class="mask">
                <div class="h-100 v-center">
                    <div class="container">
                        <div class="row gx-5 align-items-center container_first_section_hero">
                            <div class="col-lg-6 mb-sm-30 first_section_hero">
                                <h5 class="mb-4 s2"><span class="wow fadeInRight" data-wow-delay=".2s"><i
                                            class="id-color fa fa-calendar-o"></i>Service Premium</span><span
                                        class="wow fadeInRight" data-wow-delay=".2s"><i
                                            class="id-color fa fa-map-marker"></i>Tout le territoire belge</span></h5>
                                <h1 class="text-uppercase mb-3"><span class="wow fadeInRight" data-wow-delay="0s">Le
                                        Meilleur</span> <span class="text-gradient wow fadeInRight"
                                        data-wow-delay=".2s">Prix Garanti</span></h1>
                                <p class="wow fadeInUp" data-wow-delay=".3s" style="color: white">
                                    Trouvez la voiture idéale, neuve ou d'occasion, au meilleur prix avec YourCars,
                                    votre expert en véhicules fiables et abordables.
                                </p>
                                <div class="spacer-10"></div>
                                <a class="btn-main big mb10 wow fadeInUp btn_first_section_hero" data-wow-delay=".6s"
                                    href="{{ route('offers') }}">Voir les offres</a>
                            </div>
                            <div class="col-lg-6 cars_section_1_hero">
                                <img src="images/misc/car-3.png" class="wow zoomIn" data-wow-delay=".6s" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Inner -->

    <!-- Controls -->
    <a class="carousel-control-prev" href="#de-carousel" role="button" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#de-carousel" role="button" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</section>

<section aria-label="section" class="no-bottom">
    <div class="wow fadeInRight d-flex">
        <div class="de-marquee-list wow">
            <div class="d-item">
                <span class="d-item-txt">Audi</span>
                <span class="d-item-display">
                    <i class="d-item-block"></i>
                </span>
                <span class="d-item-txt">BMW</span>
                <span class="d-item-display">
                    <i class="d-item-block"></i>
                </span>
                <span class="d-item-txt">Mercedes</span>
                <span class="d-item-display">
                    <i class="d-item-block"></i>
                </span>
                <span class="d-item-txt">Volkswagen</span>
                <span class="d-item-display">
                    <i class="d-item-block"></i>
                </span>
                <span class="d-item-txt">Volvo</span>
                <span class="d-item-display">
                    <i class="d-item-block"></i>
                </span>
                <span class="d-item-txt">Toyota</span>
                <span class="d-item-display">
                    <i class="d-item-block"></i>
                </span>
                <span class="d-item-txt">Renault</span>
                <span class="d-item-display">
                    <i class="d-item-block"></i>
                </span>
                <span class="d-item-txt">Peugeot</span>
                <span class="d-item-display">
                    <i class="d-item-block"></i>
                </span>
                <span class="d-item-txt">Ford</span>
                <span class="d-item-display">
                    <i class="d-item-block"></i>
                </span>
                <span class="d-item-txt">Skoda</span>
                <span class="d-item-display">
                    <i class="d-item-block"></i>
                </span>
                <span class="d-item-txt">Land Rover</span>
                <span class="d-item-display">
                    <i class="d-item-block"></i>
                </span>
                <span class="d-item-txt">Citroen</span>
                <span class="d-item-display">
                    <i class="d-item-block"></i>
                </span>
                <span class="d-item-txt">Maserati</span>
                <span class="d-item-display">
                    <i class="d-item-block"></i>
                </span>
            </div>
        </div>
    </div>
</section>

<section id="section-about" aria-label="section" class="no-bottom">
    <div class="container about_second_section">
        <div class="row">
            <div class="col-lg-12" data-jarallax-element="-50">
                <p class="lead big wow fadeInUp">Depuis nos débuts, notre mission chez YourCars.be est claire : vous
                    offrir une expérience d’achat automobile fluide, fiable et sans stress. Spécialistes des véhicules
                    d’occasion et de qualité, nous mettons à votre disposition une sélection variée de voitures
                    contrôlées, prêtes à prendre la route. Grâce à notre expertise locale et notre appartenance à
                    Federauto, vous bénéficiez d’un service transparent, de conseils honnêtes et d’un accès rapide aux
                    meilleures offres du marché belge. Choisissez YourCars.be pour rouler en toute confiance.
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h1 class="text-uppercase"><span class="wow fadeInUp">YOURCARS</span> <span
                        class="text-gradient wow fadeInUp" data-wow-delay="
                                .3s">EST
                        UN MEMBRE DE FEDERAUTO</span></h1>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 position-relative">
                <div class="images-deco-1">
                    <img src="images/misc/car-1.jpg" class="d-img-1" alt="">
                    <img src="images/misc/dotted.png" class="d-img-2 dots_section" alt=""
                        data-jarallax-element="40">
                    <div class="d-img-3 bg-color"></div>
                </div>
            </div>
            <div class="col-lg-6 position-relative" data-jarallax-element="-60">
                <div class="position-relative z1000">
                    <h2 class="text-uppercase wow fadeInRight title_about_us_section" data-wow-delay=".3s">Pourquoi
                        <span class="text-line">choisir</span> <span class="text-gradient">YourCars</span> ?
                    </h2>
                    <div class="row">
                        <div class="col-lg-2 col-2">
                            <img src="images/misc/arrow-up-left.png" class="img-fluid" alt=""
                                data-jarallax-element="30">
                        </div>
                        <div class="col-lg-10 col-10">
                            <p class="wow fadeInRight text_to_big" data-wow-delay=".4s" style="color: white">Chez
                                YourCars, nous mettons tout en œuvre pour rendre l’achat de votre voiture simple,
                                transparent et sécurisé. Chaque véhicule est soigneusement inspecté par nos experts pour
                                garantir sa qualité. Que vous cherchiez une voiture récente, une occasion fiable ou un
                                modèle unique, vous bénéficiez toujours de conseils personnalisés, de prix compétitifs
                                et d’un accompagnement complet, du choix à la livraison.
                            </p>
                        </div>
                    </div>
                </div>
                <img src="images/misc/circle-gradient.png"
                    class="position-absolute top-50 start-50 translate-middle about_us_section_img_background"
                    alt="">
            </div>
        </div>
    </div>
</section>

<section class="no-top">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 mb-sm-30 position-relative">
                <div class="de_count position-absolute top-50 start-50 translate-middle text-light wow fadeInUp">
                    <h3 class="timer text-gradient" data-to="40" data-speed="3000">0</h3>
                    <h4 class="text-uppercase">Véhicules<br>disponibles</h4>
                </div>
                <img src="images/misc/circle-gradient.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-3 col-sm-6 mb-sm-30 position-relative" data-jarallax-element="-50">
                <div class="de_count position-absolute top-50 start-50 translate-middle text-light wow fadeInUp">
                    <h3 class="timer text-line" data-to="15" data-speed="3000">0</h3>
                    <h4 class="text-uppercase">Années<br>d'expérience</h4>
                </div>
                <img src="images/misc/circle-gradient-2.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-3 col-sm-6 mb-sm-30 position-relative">
                <div class="de_count position-absolute top-50 start-50 translate-middle text-light wow fadeInUp">
                    <h3 class="timer text-gradient" data-to="12" data-speed="3000">0</h3>
                    <h4 class="text-uppercase">Marques<br>disponibles</h4>
                </div>
                <img src="images/misc/circle-gradient.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-3 col-sm-6 mb-sm-30 position-relative" data-jarallax-element="-50">
                <div class="de_count position-absolute top-50 start-50 translate-middle text-light wow fadeInUp">
                    <h3 class="timer text-line" data-to="100" data-speed="3000">0</h3>
                    <h4 class="text-uppercase">Clients<br>satisfaits</h4>
                </div>
                <img src="images/misc/circle-gradient-2.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<section id="section-testimonial" class="no-top no-bottom">
    <div class="container-fluid testiomonial_responsive_mobile_small">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <h2 class="text-uppercase wow fadeInUp"><span class="text-line">Ce que</span> <span
                        class="text-gradient">disent</span> nos clients</h2>
                <div class="spacer-single"></div>
            </div>
            <div class="owl-carousel owl-theme wow fadeInUp" id="testimonial-carousel">
                <div class="item">
                    <div class="de_testi type-2">
                        <blockquote>
                            <p>J'ai acheté ma première voiture chez YourCars et je suis très satisfait. Le processus
                                était simple et transparent, et j'ai obtenu un excellent prix pour une voiture de
                                qualité.
                            </p>
                            <div class="de_testi_by">
                                <img alt="" class="rounded-circle" src="images/people/1.jpg"> <span>Thomas D.
                                    (Client satisfait)</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="item">
                    <div class="de_testi type-2">
                        <blockquote>
                            <p>Le service client de YourCars est exceptionnel. Ils m'ont guidé tout au long du processus
                                d'achat et ont répondu à toutes mes questions avec patience et expertise.</p>
                            <div class="de_testi_by">
                                <img alt="" class="rounded-circle" src="images/people/2.jpg"> <span>Marie L.
                                    (Cliente fidèle)</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="item">
                    <div class="de_testi type-2">
                        <blockquote>
                            <p>J'ai vendu ma voiture via YourCars et j'ai été impressionné par leur professionnalisme.
                                Ils ont trouvé un acheteur rapidement et j'ai obtenu un bon prix.</p>
                            <div class="de_testi_by">
                                <img alt="" class="rounded-circle" src="images/people/3.jpg"> <span>Pierre M.
                                    (Vendeur satisfait)</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="item">
                    <div class="de_testi type-2">
                        <blockquote>
                            <p>C'est ma troisième voiture achetée chez YourCars et je reviens toujours pour leur service
                                exceptionnel et leurs véhicules de qualité. Une valeur sûre!
                            </p>
                            <div class="de_testi_by">
                                <img alt="" class="rounded-circle" src="images/people/5.jpg"> <span>Robert R.
                                    (Client fidèle)</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="item">
                    <div class="de_testi type-2">
                        <blockquote>
                            <p>YourCars m'a aidé à trouver exactement ce que je cherchais. Leur sélection de véhicules
                                est impressionnante et le personnel est très compétent.</p>
                            <div class="de_testi_by">
                                <img alt="" class="rounded-circle" src="images/people/6.jpg"> <span>Isabelle
                                    B.
                                    (Cliente récente)</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="item">
                    <div class="de_testi type-2">
                        <blockquote>
                            <p>Je recommande vivement YourCars à tous ceux qui cherchent une voiture d'occasion fiable.
                                Leur processus de vérification est rigoureux et on peut avoir confiance.</p>
                            <div class="de_testi_by">
                                <img alt="" class="rounded-circle" src="images/people/7.jpg"> <span>Marc H.
                                    (Client satisfait)</span>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-gallery" class="jarallax">
    <img src="images/background/2-flip.jpg" class="jarallax-img" alt="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-uppercase wow fadeInUp">Notre <span class="text-gradient">Galerie</span></h2>
            </div>
            <div class="spacer-single"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade wow fadeInUp"
                    data-mdb-ride="carousel">
                    <!-- Slides -->
                    <div class="carousel-inner mb-5">
                        <div class="carousel-item active">
                            <img src="images/gallery_real/5.jpeg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="images/gallery_real/4.jpeg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="images/gallery_real/11.jpeg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="images/gallery_real/9.jpeg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="images/gallery_real/12.jpeg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="images/gallery_real/8.jpeg" class="d-block w-100" alt="">
                        </div>

                    </div>
                    <!-- Slides -->
                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators"
                        data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators"
                        data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <!-- Controls -->
                    <!-- Thumbnails -->
                    <div class="carousel-indicators" style="margin-bottom: -20px;">
                        <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1" style="width: 100px;">
                            <img class="d-block w-100 img-fluid" src="images/gallery_real/5.jpeg" alt="">
                        </button>
                        <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="1"
                            aria-label="Slide 2" style="width: 100px;">
                            <img class="d-block w-100 img-fluid" src="images/gallery_real/4.jpeg" alt="">
                        </button>
                        <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="2"
                            aria-label="Slide 3" style="width: 100px;">
                            <img class="d-block w-100 img-fluid" src="images/gallery_real/11.jpeg" alt="">
                        </button>
                        <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="3"
                            aria-label="Slide 4" style="width: 100px;">
                            <img class="d-block w-100 img-fluid" src="images/gallery_real/9.jpeg" alt="">
                        </button>
                        <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="4"
                            aria-label="Slide 5" style="width: 100px;">
                            <img class="d-block w-100 img-fluid" src="images/gallery_real/12.jpeg" alt="">
                        </button>
                        <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="5"
                            aria-label="Slide 6" style="width: 100px;">
                            <img class="d-block w-100 img-fluid" src="images/gallery_real/8.jpeg" alt="">
                        </button>
                    </div>
                    <!-- Thumbnails -->
                </div>

            </div>

        </div>
        <div style="margin-top: 6%">
            <a href="{{ route('gallery') }}" target="_blank" class="btn-line btn_voir_plus"
                style="margin-left: 46%;">Voir Plus</a>
        </div>
    </div>

</section>

<section class="pt60 pb60 bg-dark-blue">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h2 class="text-uppercase wow fadeInUp"><span class="text-white">NOS</span> <span
                        class="text-gradient">AVANTAGES</span></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 text-center mb-4">
                <div class="advantage-box position-relative p-4">
                    <div class="advantage-icon mb-4">
                        <i class="fa fa-euro text-gold fa-3x"></i>
                    </div>
                    <h3 class="text-uppercase text-gold mb-3">Le Meilleur Prix, Sans Compromis</h3>
                    <p class="text-light">Profitez d’une sélection de véhicules neufs et d’occasion à des tarifs
                        compétitifs, sans sacrifier la qualité ni le service.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 text-center mb-4">
                <div class="advantage-box position-relative p-4">
                    <div class="advantage-icon mb-4">
                        <i class="fa fa-handshake-o text-gold fa-3x"></i>
                    </div>
                    <h3 class="text-uppercase text-gold mb-3">Où vous voulez, quand vous voulez</h3>
                    <p class="text-light">Depuis chez vous, commandez votre voiture en quelques clics sur notre site.
                        Préférez un contact direct ? Appelez-nous ou venez nous rendre visite en agence. C’est vous qui
                        choisissez.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 text-center mb-4">
                <div class="advantage-box position-relative p-4">
                    <div class="advantage-icon mb-4">
                        <i class="fa fa-smile-o text-gold fa-3x"></i>
                    </div>
                    <h3 class="text-uppercase text-gold mb-3">La tranquillité assurée</h3>
                    <p class="text-light">Chaque voiture d’occasion est soumise à des contrôles rigoureux et bénéficie
                        d’une garantie de 1 an. Nos véhicules neufs, quant à eux, sont couverts par la garantie
                        constructeur, pour une sérénité totale.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .bg-dark-blue {
        background-color: #191c3a;
    }

    .text-gold {
        color: #0072ff;
    }

    .text-gradient {
        background: linear-gradient(to right, #00a4bd, #00ffbd);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
    }

    .advantage-box {
        transition: transform 0.3s ease;
        border-radius: 8px;
    }

    .advantage-box:hover {
        transform: translateY(-10px);
    }

    .advantage-icon {
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<section id="section-location">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-uppercase wow fadeInUp">Où nous <span class="text-gradient">trouver</span></h2>
            </div>
            <div class="spacer-single"></div>

            <div class="col-lg-12">
                <div class="map-container map-fullwidth">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d376.74170791348934!2d4.496963!3d50.956126!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3e7176d84c21d%3A0x8d823504d1fd7ab6!2sYour%20Cars!5e1!3m2!1sen!2sus!4v1745484975483!5m2!1sen!2sus"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="spacer-single"></div>

            <div class="col-lg-4 col-md-4 text-center">
                <p class="lead no-bottom">Adresse</p>
                <h4 class="s2">Rue Belliard 40, 1040 Bruxelles</h4>

            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <p class="lead no-bottom">Téléphone</p>
                <h4 class="s2">+32 2 123 4567</h4>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <p class="lead no-bottom">Email</p>
                <h4 class="s2">contact@yourcars.be</h4>
            </div>

        </div>
    </div>
</section>

</div>
<!-- content close -->
<a href="#" id="back-to-top"></a>
<!-- ` begin -->

@include('footer.footer')
