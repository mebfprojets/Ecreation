<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>COLONIE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="image/AEEMB.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/formwizard/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontend/formwizard/css/bootstrap.min.css')}}">

  <link href="{{asset('frontend/formwizard/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/formwizard/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/formwizard/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/formwizard/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/formwizard/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{asset('frontend/formwizard/css/main.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/formwizard/css/themes.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/formwizard/css/plugins.css')}}">

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="{{asset('frontend/formwizard/css/step.css')}}">
  <link href="{{asset('frontend/formwizard/assets/css/style.css')}}" rel="stylesheet">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <!-- Pour wizard -->


 
 
 
  

  <!-- =======================================================
  * Template Name: BizLand
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+226 75 50 31 25</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h4 class="logo">
        <img src="{{asset('colonie/image/AEEMB.PNG')}}" alt="">
        A.E.E.M.B.
        <img src="{{asset('colonie/image/CERFI.PNG')}}"  alt="">
        CERFI</a></h4>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="">Accueil</a></li>
          <!-- <li><a class="nav-link scrollto" href="#about">A propos</a></li> -->
          <li><a class="nav-link scrollto" href="">S'inscrire</a></li>
          <li><a class="nav-link scrollto" href="">Payer/Recepissé</a></li>
          <li><a class="nav-link scrollto " href="#modal-terms" data-toggle="modal">Comment s'inscrire?</a></li>
          <!-- <li><a class="nav-link scrollto" href="">Recepissé</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#team">Contact</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" target="_blank" href="">Connexion</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="main">
  <div class="container" style="margin-top: 40px;">
<center><h2>Formulaire d'inscription</h2></center>
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <h4>Identification</h4>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <h4>Informations Sanitaires</h4>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <h4>Trousseau de l'enfant</h4>
        </div>
        <!-- <div class="stepwizard-step">
            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            <h4>Confirmation</h4>
        </div> -->
    </div>
</div><br><br>
<form role="form" action="" method="post" enctype="multipart/form-data">
@csrf        

    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
        @if ($errors->has('nom') || $errors->has('prenom') || $errors->has('sexe') || $errors->has('etablissement') || $errors->has('classe') || $errors->has('date_naissance'))
                                        <span class="help-block text-danger">
                                            <center><strong style="color:white; background:red;">Un colon a déja été enregistré avec ces informations</strong></center>
                                        </span>
                @endif
        <fieldset>       
            <center><legend><span class="legend-fieldest">Identité de l'enfant</span></legend> </center>
                <div class="col-lg-6">
                <!-- <h3> Identification</h3> -->
                                <div class="form-group">
                                    <label class="control-label" for="val_username">Nom hj(<span class="text-danger">*</span>)</label>
                                        <div class="input-group">
                                            <input type="text" id="nom" name="nom" class="form-control" placeholder="Votre nom.." required>
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="val_username">Prenom (<span class="text-danger">*</span>)</label>
                                        <div class="input-group">
                                            <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Votre prenom.." required>
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                        </div>
                                </div>
            </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="val_username">Etablissement fréquenté (<span class="text-danger">*</span>)</label>
                                            <div class="input-group">
                                                <input type="text" id="etablissement" name="etablissement" class="form-control" placeholder="Votre établissement.." required>
                                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="val_username">Classe (<span class="text-danger">*</span>)</label>
                                            <div class="input-group">
                                                <!-- <input type="text" id="classe" name="classe" class="form-control" placeholder="Votre classe.." required> -->
                                                <select name="classe" id="sexe" class="form-control" required>
											<option value="">Choisir</option>
											<option value="CP1">CP1</option>
											<option value="CP2">CP2</option>
                                            <option value="CE1">CE1</option>
											<option value="CE2">CE2</option>

											</select>
                                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            </div>
                                    </div> 
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="val_username">Date de naissance (<span class="text-danger">*</span>)</label>
                                            <div class="input-group">
                                                <input type="date" id="date_naissance" min="2008-01-01" max="2014-12-31" name="date_naissance" class="form-control" required>
                                                <span class="input-group-addon"><i class="gi gi-calendar"></i></span>
                                            </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="form-label" for="val_skill">Sexe (<span class="text-danger">*</span>)</label>
                                            <select id="sexe" name="sexe" class="form-control" required>
                                                <option value=""></option>
                                                <option value="M">Masculin</option>
                                                <option value="F">Feminin</option>
                                            </select>
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">                                
                                        <label class="form-label" for="val_skill">L'enfant a t-il dejà participé à la colonie? (<span class="text-danger">*</span>)</label>
                                            <select id="niveau" name="niveau" class="form-control"  title="Le champs est obligatoire" required>
                                                <option value=""></option>
                                                <option value="Oui">Oui</option>
                                                <option value="Non">Non</option>
                                            </select>
                                    </div> 
                                    <div class="form-group">                                
                                        <label class="form-label" for="val_skill">Région (<span class="text-danger">*</span>)</label>
                                            <select id="region" name="region" class="form-control"  title="Le champs region est obligatoire"  value="{{old("region")}}" onchange="changeValue('region', 'province', {{ env('PARAMETRE_ID_PROVINCE') }});" required>
                                            <option value="">Choisir</option>
                                                
                                                    <option value=""></option>
                                               
                                            </select>
                                    </div> 
                                    
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">                                
                                        <label class="form-label" for="val_skill">Province (<span class="text-danger">*</span>)</label>
                                            <select id="province" name="province" class="form-control"  title="Le champs region est obligatoire" data-placeholder="Choisir votre residence .."  onchange="changeValue('province', 'commune', {{ env('PARAMETRE_ID_COMMUNE') }});" required>
                                            <option value="">Choisir</option>
                                                <option  value="{{ old('province') }}" {{ old('province') == old('province') ? 'selected' : '' }}></option>                                        
                                            </select>
                                    </div> 
                                    <!-- <div class="form-group">                                
                                        <label class="form-label" for="val_skill">Comune (<span class="text-danger">*</span>)</label>
                                            <select id="commune" name="commune" class="form-control"  title="Le champs region est obligatoire" data-placeholder="Choisir votre residence .." onchange="changeValue('commune', 'arrondissement', {{ env('PARAMETRE_ID_ARRONDISSEMENT') }});" required>
                                            <option value="">Choisir</option>
                                            <option  value="{{ old('province') }}" {{ old('province') == old('province') ? 'selected' : '' }}></option>
                                            </select>
                                    </div> -->
                                    
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">                                
                                        <label class="form-label" for="val_skill">Commune (<span class="text-danger">*</span>)</label>
                                            <select id="commune" name="commune" class="form-control"  title="Le champs region est obligatoire" data-placeholder="Choisir votre residence .." onchange="changeValue('commune', 'arrondissement', {{ env('PARAMETRE_ID_ARRONDISSEMENT') }});" required>
                                            <option value="">Choisir</option>
                                            <option  value="{{ old('province') }}" {{ old('province') == old('province') ? 'selected' : '' }}></option>
                                            </select>
                                    </div>
                                    
                                </div>
            </fieldset>

            <fieldset>       
                <center><legend><span class="legend-fieldest">Identité du parent</span></legend> </center>
                            <div class="col-lg-6">
               
                                <div class="form-group">
                                    <label class="form-label" for="val_username">Nom (<span class="text-danger">*</span>)</label>
                                        <div class="input-group">
                                            <input type="text" id="parent_nom" name="parent_nom" class="form-control" placeholder="Votre nom.." required>
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="val_username">Prenom (<span class="text-danger">*</span>)</label>
                                        <div class="input-group">
                                            <input type="text" id="parent_prenom" name="parent_prenom" class="form-control" placeholder="Votre prenom.." required>
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                        </div>
                                </div>
                            </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="val_username">Téléphone (<span class="text-danger">*</span>)</label>
                                            <div class="input-group">
                                                <input type="text" id="parent_telephone" name="parent_telephone" class="form-control" placeholder="74 56 78 65" required>
                                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            </div>
                                    </div>  
                                    <div class="form-group">
                                        <label class="form-label" for="val_username">Téléphone (Whatsapp) (<span class="text-danger">*</span>)</label>
                                            <div class="input-group">
                                                <input type="text" id="parent_whatsapp" name="parent_whatsapp" class="form-control" placeholder="76 87 65 43" required>
                                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            </div>
                                    </div> 
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                            <label class="form-label" for="val_email">Email (<span class="text-danger">*</span>)</label>
                                            <div class="input-group">
                                                <input type="email" id="parent_email" name="parent_email" class="form-control" placeholder="test@example.com" required>
                                                <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="val_skill">Fonction (<span class="text-danger">*</span>)</label>
                                        <input type="text" id="parent_fonction" name="parent_fonction" class="form-control" placeholder="Votre profession.." required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="val_username">N° CNIB </label>
                                            <div class="input-group">
                                            <input type="text" id="parent_piece_identite" name="parent_piece_identite" class="form-control" placeholder="B5643456">
                                                <span class="input-group-addon"><i class="gi gi-calendar"></i></span>
                                            </div>
                                    </div>   
                                    <div class="form-group">
                                        <label class="form-label" for="val_username">Mobile Sécondaire </label>
                                            <div class="input-group">
                                            <input type="text" id="parent_mobile" name="parent_mobile" class="form-control" placeholder="78 79 67 54">
                                                <span class="input-group-addon"><i class="gi gi-calendar"></i></span>
                                            </div>
                                    </div> 
                                </div>
                              
            </fieldset>
            <fieldset>       
                <center><legend><span class="legend-fieldest">Personne à prévénir en cas de besoin</span></legend> </center>
                            <div class="col-lg-6">
               
                                <div class="form-group">
                                        <label class="form-label" for="val_username">Nom (<span class="text-danger">*</span>)</label>
                                            <div class="input-group">
                                                <input type="text" id="personne_nom" name="personne_nom" class="form-control" placeholder="Votre nom.." required>
                                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="val_username">Prenom (<span class="text-danger">*</span>)</label>
                                            <div class="input-group">
                                                <input type="text" id="personne_prenom" name="personne_prenom" class="form-control" placeholder="Votre prenom.." required>
                                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="form-label" for="val_username">Téléphone (<span class="text-danger">*</span>)</label>
                                        <div class="input-group">
                                            <input type="text" id="personne_telephone" name="personne_telephone" class="form-control" placeholder="Ex: 76 98 76 54.." required>
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                        </div>
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label" for="val_skill">Fonction (<span class="text-danger">*</span>)</label>
                                        <input type="text" id="personne_fonction" name="personne_fonction" class="form-control" placeholder="Votre profession.." required>
                                    </div>                                 
                                    <!-- <div class="form-group">
                                        <label class="form-label" for="val_username">Téléphone Whatsapp (<span class="text-danger">*</span>)</label>
                                            <div class="input-group">
                                            <input type="text" id="personne_whatsapp" name="personne_whatsapp" class="form-control" placeholder="78 67 54 34" >
                                                <span class="input-group-addon"><i class="gi gi-calendar"></i></span>
                                            </div>
                                    </div>  -->
                                    <div class="form-group">
                                        <label class="form-label" for="val_username">Mobile Sécondaire</label>
                                            <div class="input-group">
                                            <input type="text" id="personne_mobile" name="personne_mobile" class="form-control" placeholder="78 67 54 34">
                                                <span class="input-group-addon"><i class="gi gi-calendar"></i></span>
                                            </div>
                                    </div> 
                                </div>                              
                              
            </fieldset>

        </div>
        <center><button class="btn btn-primary nextBtn btn-next" type="button" >Suivant</button></center>

    </div>

    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
                
                <!-- <legend><span class="legend-fieldest">Vaccination dejà faite?</span></legend> -->
                <h3><span class="legend-fieldest"> Vaccination dejà faite?</span></h3> 
                    <div class="col-lg-6">
                                <div class="form-group">                                    
                                        <div class="form-check">
                                                <input class="form-check-input" name="vaccin[]" style="width: 20px;" type="checkbox" value="BCG" id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckChecked">BCG</label><br>
                                                <input class="form-check-input" name="vaccin[]" style="width: 20px;" type="checkbox" value="DT Coqu Polio" id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckChecked">DT Coqu Polio</label><br>
                                                <input class="form-check-input" name="vaccin[]" style="width: 20px;" type="checkbox" value="Fièvre Jaune" id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckChecked">Fièvre Jaune</label><br>
                                                <input class="form-check-input" name="vaccin[]" style="width: 20px;" type="checkbox" value="Rougeole" id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckChecked">Rougeole</label><br>
                                                <input class="form-check-input" name="vaccin[]" style="width: 20px;" type="checkbox" value="Hépatite" id="flexCheckDefault">
												<label class="form-check-label" for="flexCheckChecked">Hépatite</label> <br> 
                                                <input class="form-check-input" name="autre" style="width: 20px;" type="checkbox" value="1" id="valeur_autre" onchange="vaccin()">
                                                <label class="form-label" for="val_username">Autre <span class="text-danger"></span></label>
                                                <input type="text" id="vaccin_autre" name="vaccin_autre" class="form-control" placeholder="Saisir.." style="display:none"><br>                                    
										</div>
                                </div>                                
                    </div>
                    <h3><span class="legend-fieldest">Faites-vous fréquement le palut pendant l'hivernage?</span></h3> 
                    <div class="col-lg-6">                    
                            <div class="form-group">                                    
                                                    <div class="form-check">
                                                            <input class="form-check-input" name="palu_hivernage" style="width: 20px;" type="radio" value="Non" id="hiver_non" onchange="hiver()">
                                                            <label class="form-check-label" for="flexCheckChecked">Non</label>  <br>
                                                            <input class="form-check-input" name="palu_hivernage" style="width: 20px;" type="radio" value="Oui" id="hiver_oui" onchange="hiver()">
                                                            <label class="form-check-label" for="flexCheckChecked">Oui</label><br>                                                                                                      
                                                            <label class="form-label hiver" for="val_username" style="display:none">Traitement Ahbituel <span class="text-danger"></span></label>
                                                            <input type="text" id="val_username" name="palu_hivernage_traitement" class="form-control hiver" placeholder="Saisir.." style="display:none">
                                                            <label class="form-label hiver" style="display:none" for="val_username">Autre maladie et médicament à préciser <span class="text-danger"></span></label>
                                                            <input type="text" id="val_username" name="autre_maladie" class="form-control hiver" placeholder="Saisir.." style="display:none"><br>
                                                                                       
                                                    </div>
                                </div>
                                
                    </div>
                   

                                <div class="col-lg-6">
                                <h3><span class="legend-fieldest" >Avez vous l'une de ces maladies ?</span></h3> 

                                        <div class="form-group">                                    
                                                <div class="form-check">
                                                        <input class="form-check-input" name="maladie[]" style="width: 20px;" type="checkbox" value="Maladie Cardiaque" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckChecked">Maladie Cardiaque</label><br>
                                                        <input class="form-check-input" name="maladie[]" style="width: 20px;" type="checkbox" value="Maladie Rénale" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckChecked">Maladie Rénale</label><br>
                                                        <input class="form-check-input" name="maladie[]" style="width: 20px;" type="checkbox" value="Asthme" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckChecked">Asthme</label><br>
                                                        <input class="form-check-input" name="maladie[]" style="width: 20px;" type="checkbox" value="Epilepsie" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckChecked">Epilepsie</label><br>
                                                        <input class="form-check-input" name="maladie[]" style="width: 20px;" type="checkbox" value="Diabète" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckChecked">Diabète</label><br>
                                                        <input class="form-check-input" name="maladie[]" style="width: 20px;" type="checkbox" value="Drépanocytose" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckChecked">Drépanocytose</label><br>
                                                        <input class="form-check-input" name="maladie[]" style="width: 20px;" type="checkbox" value="Sinusite" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckChecked">Sinusite</label><br>
                                                        <input class="form-check-input" name="maladie[]" style="width: 20px;" type="checkbox" value="Ulcère" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckChecked">Ulcère</label><br>
                                                        <input class="form-check-input" name="maladie[]" style="width: 20px;" type="checkbox" value="Tuberculose" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckChecked">Tuberculose</label>  <br>
                                                        <input class="form-check-input" name="autre" style="width: 20px;" type="checkbox" value="1" id="maladie_autre" onchange="maladie()">
                                                        <label class="form-label maladie_autre" for="val_username">Autre <span class="text-danger"></span></label>
                                                        <input type="text" id="val_username" name="maladie_autre" class="form-control maladie_autre" placeholder="Saisir.." style="display:none"> 
                                                        <label class="form-label maladie_autre" for="val_username" style="display:none">Traitement <span class="text-danger"></span></label>
                                                        <input type="text" id="val_username" name="maladie_traitement" class="form-control maladie_autre" placeholder="Saisir.." style="display:none">                                    
                                                </div>
                                        </div>
                                </div>
                                <h3><span class="legend-fieldest">Êtes-vous actuellement sous régime?</span></h3> 

                                <div class="col-lg-6">

                                        <div class="form-group">                                    
                                                <div class="form-check">
                                                        <input class="form-check-input" name="sous_regime" style="width: 20px;" type="radio" value="Non" id="regime_non" onchange="regime()">
                                                        <label class="form-check-label" for="flexCheckChecked">Non</label><br>
                                                        <input class="form-check-input regime" name="sous_regime" style="width: 20px;" type="radio" value="Oui" id="regime_oui" onchange="regime()">
                                                        <label class="form-check-label" for="flexCheckChecked">Oui</label>   <br>                                        
                                                        <label class="form-label regime_autre" for="val_username" style="display:none">Le(s)quel(s) <span class="text-danger"></span></label>
                                                        <input type="text" id="val_username" name="sous_regime_autre" class="form-control regime_autre" placeholder="Saisir.." style="display:none">                                     
                                                </div>
                                        </div>
                                </div>
                                <h3><span class="legend-fieldest">Êtes-vous allergique à?</span></h3> 

                                <div class="col-lg-6">

                                        <div class="form-group">                                    
                                            <div class="form-check">
                                                    <input class="form-check-input alergie" name="allergie[]" style="width: 20px;" type="radio" value="Medicament" id="flexCheckDefault" onchange="alergie()">
                                                    <label class="form-check-label alergie" for="flexCheckChecked">Médicament(s)</label> <br>                                               
                                                    <input class="form-check-input" name="allergie[]" style="width: 20px;" type="radio" value="Nourriture" id="flexCheckDefault" onchange="alergie()">
                                                    <label class="form-check-label" for="flexCheckChecked">Nourriture(s)</label><br>                                                 
                                                    <label class="form-label allergie_autre" style="display:none" for="val_username">Citez les <span class="text-danger"></span></label>
                                                    <input type="text" id="val_username" name="allergie_autre" class="form-control allergie_autre" placeholder="Autre Allergie" style="display:none"> <br><br>                                    
                                            </div>
                                        </div>
                                </div>
                                <h3><span class="legend-fieldest"> Etes-vous sous traitement Actuellement ou précédemment (2 semaines)?</span></h3> 

                                <div class="col-lg-6">

                                <div class="form-group">                                    
                                        <div class="form-check">
                                                <input class="form-check-input" name="sous_traitement" style="width: 20px;" type="radio" value="Non" id="traitement_non" onchange="traitement()">
												<label class="form-check-label" for="flexCheckChecked">Non</label><br>
                                                <input class="form-check-input" name="sous_traitement" style="width: 20px;" type="radio" value="Oui" id="traitement_oui" onchange="traitement()">
												<label class="form-check-label" for="flexCheckChecked">Oui</label>     <br>                                          
                                                <label class="form-label traitement_autre" for="val_username" style="display:none">Maladie <span class="text-danger"></span></label>
                                                <input type="text" id="val_username" name="sous_traitement_maladie" class="form-control" placeholder="Saisir.." style="display:none">   
                                                <label class="form-label traitement_autre" for="val_username" style="display:none">Traitement <span class="text-danger"></span></label>
                                                <input type="text" id="val_username" name="sous_traitement_traitement" class="form-control traitement_autre" placeholder="Saisir.." style="display:none">                                                                                 
										</div>
                                </div>
                                </div>
        </div>
        <center><button type="button" class="btn btn-primary prevBtn btn-prev">Précédent</button>

        <button class="btn btn-primary nextBtn btn-next" type="button" >Suivant</button></center>

    </div>

    <div class="row setup-content" id="step-3">
        <!-- <div class="col-xs-5">
            <div class="col-md-12">
               
                <div class="form-group">
                                    <label class="control-label" for="val_username">Nom <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" id="val_username" name="nom" class="form-control" placeholder="Votre nom..">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="val_username">Prenom <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="text" id="val_username" name="prenom" class="form-control" placeholder="Votre prenom..">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                        </div>
                                </div>
            </div>
        </div> -->
        <div class="field_wrapper">
                    
                       <div class="row">                       
                         <label class="col-md-4 control-label" style="text-align: center; margin-left: 12px;" for="">Désignations</label> <label style="text-align: center;" class="col-md-2 control-label" for="">Quantité</label>
                       </div>
                            <div class="form-group row">
                                 <input class="col-md-4"  type="text" name="designation[]" value="" placeholder="Nom outil"  title="Champ obligatoire"/>
                                 <input class="col-md-2" type="number" name="quantite[]" value="" placeholder="Nombre"  title="Champ obligatoire"/>                           
                                <a href="javascript:void(0);" class="add_button" title="Ajouter une nouvelle ligne"><span><i class="gi gi-plus"></i></span></a>
                            </div>
                            <P>Il s'agit des habits, sac, nattes ou tout autre matériel que l'enfant va apporter</P>
                    </div> 
               <center> <button type="button" class="btn btn-primary prevBtn btn-prev">Précédent</button>
                <button class="btn btn-success btn-submit" type="submit">Valider</button></center>

                    <!-- <button class="btn btn-primary nextBtn btn-next" type="button" >Suivant</button></center> -->
        
        <!-- <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button> -->

    </div>

</form>
</div>
</main>
<footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6 footer-contact">
            <h3>
              Colonie de Vacance Islamique</h3>
            <p>
            Boulevard Charles de Gaule <br>
              <!-- New York, NY 535022<br>
              United States <br><br> -->
              <strong>Phone:</strong> 70 94 95 33<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Liens Utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">AEEMB</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">CERFI</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
            </ul>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Reseaux Sociaux</h4>
            <!-- <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> -->
            <div class="social-links mt-3">              
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>             
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              
            </div>
          </div>
          <div class="copyright">
              &copy; Copyright <strong><span>CVI</span></strong>. Tous droit réservés -- Designed by <a href="#" style="color: yellow;">IB 75503125</a>
          </div>
          <!-- <div class="credits">        
            Designed by <a href="#">BARRO</a>
          </div> -->
        </div>
      </div>
    </div>

    <!-- <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>CVI</span></strong>. Tous droit réservés
      </div>
      <div class="credits">
        
        Designed by <a href="#">BARRO</a>
      </div>
    </div> -->

  </footer>
<!-- Vendor JS Files -->
  <script src="{{asset('frontend/formwizard/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('frontend/formwizard/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/formwizard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/formwizard/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/formwizard/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/formwizard/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/formwizard/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
 

  <script src="{{asset('frontend/formwizard/assets/js/main.js')}}"></script>
  <!-- Pour le wizard -->
  <!-- <script src="{{asset('form_asset/js/app.js')}}"></script> -->
  <!-- <script src="{{asset('form_asset/assets/js/main.js')}}"></script> -->
  <!-- <script src="{{asset('form_asset/js/vendor/jquery.min.js')}}"></script> -->
  <script src="{{asset('frontend/formwizard/js/vendor/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/formwizard/js/plugins.js')}}"></script>

 
  
 
  <!-- Load and execute javascript code used only in this page -->
  <script src="{{asset('frontend/formwizard/js/pages/formsValidation.js')}}"></script>
 <script>$(function(){ FormsValidation.init(); });</script> 
  <script src="{{asset('frontend/formwizard/js/pages/formsWizard.js')}}"></script>
 <script>$(function(){ FormsWizard.init(); });</script> 
  </body>

</html>