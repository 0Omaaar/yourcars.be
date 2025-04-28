@include('navbar.navbar')

<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- section begin -->
    <section id="subheader" class="jarallax">
        <img src="images/background/5.jpg" class="jarallax-img" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h1>Contact-nous</h1>
                    <div class="de-separator"></div>
                </div>
            </div>
        </div>
        <div class="de-gradient-edge-bottom"></div>
    </section>
    <!-- section close -->

    <section id="section-content" class="no-top" aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="text-white">Plus de 15 000 clients satisfait</h2>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-6 text-center mb-4">
                    <div class="contact-box">
                        <a href="https://maps.google.com/?q=Tervuursesteenweg+27+Bus+4,+1820+Perk"
                            class="text-decoration-none">
                            <div class="icon-box bg-gradient-primary mx-auto mb-4">
                                <i class="fa fa-map-marker text-white"></i>
                            </div>
                            <h5 class="text-white mb-2">Notre Adresse</h5>
                            <p class="mb-0" style="color: #757575 !important">Tervuursesteenweg 27 Bus 4, 1820 Perk
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-4">
                    <div class="contact-box">
                        <div class="icon-box bg-gradient-primary mx-auto mb-4">
                            <i class="fa fa-clock-o text-white"></i>
                        </div>
                        <h5 class="text-white mb-2">Heures d'Ouverture</h5>
                        <p class="mb-0">lun-dim: 7h - 21h</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-4">
                    <div class="contact-box">
                        <a href="tel:+3215617805" class="text-decoration-none">
                            <div class="icon-box bg-gradient-primary mx-auto mb-4">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <h5 class="text-white mb-2">Téléphone</h5>
                            <p class="mb-0" style="color: #757575 !important">+32 (0)15 - 61.78.05</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-4">
                    <div class="contact-box">
                        <a href="mailto:info@yourcars.be" class="text-decoration-none">
                            <div class="icon-box bg-gradient-primary mx-auto mb-4">
                                <i class="fa fa-envelope text-white"></i>
                            </div>
                            <h5 class="text-white mb-2">Email</h5>
                            <p class="mb-0" style="color: #757575 !important">info@yourcars.be</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #00d0c4 0%, #2989d8 100%);
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .contact-box {
            padding: 20px;
            transition: all 0.3s;
        }

        .contact-box:hover {
            transform: translateY(-5px);
        }

        .bg-dark {
            background-color: #111827 !important;
        }
    </style>


    <section class="no-top jarallax">
        <div class="de-gradient-edge-top"></div>
        <img src="images/background/21.jpg" class="jarallax-img" alt="">
        <div class="container position-relative z1000">
            <div class="row gx-5">

                <div class="col-lg-6 offset-lg-3">
                    <div class="d-sch-table">
                        <h2 class="wow fadeIn text-center">Contactez-nous</h2>
                        <div class="de-separator"></div>
                        <p class="lead text-center">
                            Si vous avez des questions, n'hésitez pas à nous envoyer un message.

                        </p>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Succès!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Erreur!</strong> {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif


                        <form name="contactForm" id="contact_form" class="form-border position-relative z1000"
                            method="post" action="{{ route('contact') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb10">
                                    <div class="field-set">
                                        <label for="name">Nom <span class="required">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            required>
                                        <span class="small">Entrez votre nom</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb10">
                                    <div class="field-set">
                                        <label for="prenom">Prénom <span class="required">*</span></label>
                                        <input type="text" name="prenom" id="prenom" class="form-control"
                                            required>
                                        <span class="small">Entrez votre prénom</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb10">
                                    <div class="field-set">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            required>
                                        <span class="small">Exemple: user@website.com</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb10">
                                    <div class="field-set">
                                        <label for="telephone">Téléphone <span class="required">*</span></label>
                                        <input type="text" name="phone" id="telephone" class="form-control"
                                            required>
                                        <span class="small">Entrez votre téléphone</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb10">
                                    <div class="field-set">
                                        <label for="adresse">Adresse <span class="required">*</span></label>
                                        <input type="text" name="adresse" id="adresse" class="form-control"
                                            required>
                                        <span class="small">Entrez votre Adresse</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb10">
                                    <div class="field-set">
                                        <label for="objet">Objet <span class="required">*</span></label>
                                        <input type="text" name="objet" id="objet" class="form-control"
                                            required>
                                        <span class="small">Comment pouvons-nous vous aider?</span>
                                    </div>
                                </div>
                            </div>

                            <div class="field-set mb20">
                                <label for="message">Message <span class="required">*</span></label>
                                <textarea name="message" id="message" class="form-control" required></textarea>
                            </div>
                            <div id='submit' class="mt20">
                                <input type='submit' id='send_message' value='Envoyer' class="btn-main">
                            </div>

                        </form>

                        <div class="d-deco"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="de-gradient-edge-bottom"></div>
    </section>
    <section aria-label="section" class="no-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Vous serez toujours le bienvenu dans notre salle d’exposition</h3>
                    <div class="spacer-20"></div>
                    <div class="col-lg-12">
                        <div class="map-container map-fullwidth">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d376.74170791348934!2d4.496963!3d50.956126!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3e7176d84c21d%3A0x8d823504d1fd7ab6!2sYour%20Cars!5e1!3m2!1sen!2sus!4v1745484975483!5m2!1sen!2sus"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="spacer-20"></div>
                    <div class="social-icons big">
                        <a href="https://www.facebook.com/yourcarsperk/" target="_blank"><i
                                class="fa fa-facebook fa-lg"></i></a>
                        <a href="javascript:void(0)"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a href="javascript:void(0)"><i class="fa fa-instagram fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- content close -->
<a href="#" id="back-to-top"></a>
<!-- footer begin -->
@include('footer.footer')
