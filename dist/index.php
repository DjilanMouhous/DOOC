<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DOOC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pattaya" rel="stylesheet">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/style.scss">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    
</head>
<body>
<section class="firstpage" id="first" onclick="$('#first').fadeOut();">
    <div class="main">
    <img class="main_logo" src="assets/icones/logo_dooc.svg" alt="DOOC">
    <p class="baseline">What's up Dooc ?</p>
    </div>
  
    

</section>
<section id="page2" class="secondpage">
        <!-- <p>Pour débloquer les 70% des cours manquant, inscrivez vous !</p> -->
        
        <article class="secondpage__inscription">
                <img class="secondpage__inscription--main_logo" src="assets/icones/logo_dooc.svg" alt="DOOC">
            <div class="secondpage__inscription--boxlog" id="inscription" onclick="
            $('#inscription').html('');
            $('#inscription').css({
                'margin-top': '0px',
                'top': '0',
                'left': '0',
                'position': 'absolute',
                'border-radius': '0%',
            });
            $('#inscription').animate({
                width: '375px',
            },1000);
            $('#inscription').animate({
                height: '100vh',
            },500);
            setTimeout(function(){
                $('#page2').html($('#inscriptionpart').html());
            }, 1500);
            
            ">
                <p class="secondpage__inscription--txtlog" ><?php 
        echo 'salut';
        ?></p>
            </div>
            <div class="secondpage__inscription--boxlog" id='try'>
                <p class="secondpage__inscription--txtlog">Essayer Gratuitement</p>
            </div>
            <div class="secondpage__inscription--boxlog connecter" id="connexion" onclick="
            $('#connexion').html('');
            $('#connexion').css({
                'margin-top': '0px',
                'top': '0',
                'left': '0',
                'position': 'absolute',
                'border-radius': '0%',
            });
            $('#connexion').animate({
                width: '375px',
            },1000);
            $('#connexion').animate({
                height: '100vh',
            },500);
            setTimeout(function(){
                $('#page2').html($('#connexionpart').html());
            }, 1500);
            
            ">
                <p class="secondpage__inscription--txtlog" >Se connecter</p>
            </div>
        </article>
        <!-- <div class="points">
            <div class="rond active"></div>
            <div class="rond"></div>
            <div class="rond"></div>
        </div> -->
    </section>
    <main style="display: none;"  id="connexionpart">
    <section  class="thirdpage">
            <div class="thirdpage__top">
                <img class="thirdpage__top--img" src="assets/icones/logo_dooc.svg" alt="DOOC">
                <p class="thirdpage__top--title">Connexion</p>
            </div>
            <article class="thirdpage__main">
                <form action="accueil.html" method="POST">
                    <p class="thirdpage__main--label">E-mail</p>
                    <input type="text" class="thirdpage__main--input" required name="mail">
                    <p class="thirdpage__main--label">Mot de passe</p>
                    <input type="password" class="thirdpage__main--input" required name="password">
                    <div class="thirdpage__main--buttoncontenair"><input type="submit" class="thirdpage__main--button" value="C'est parti"></div>
                </form>
                <a class="back" href="index2.html" ><p class="back">Back</p></a>
            </article>    
            
            <!-- <div class="points">
                <div class="rond active"></div>
                <div class="rond"></div>
                <div class="rond"></div>
            </div> -->
        </section>
    </main>
    <main style="display: none;"  id="inscriptionpart">
        <section id="ipart1" class="thirdpage">
            <div class="thirdpage__top">
                <img class="thirdpage__top--img" src="assets/icones/logo_dooc.svg" alt="DOOC">
                <p class="thirdpage__top--title">Inscription</p>
            </div>
            <article class="thirdpage__main">
                <form action="inscription.html" method="POST">
                    <p class="thirdpage__main--label">E-mail</p>
                    <input type="text" class="thirdpage__main--input" required name="mail">
                    <p class="thirdpage__main--label">Mot de passe</p>
                    <input type="password" class="thirdpage__main--input" required name="password">
                    <p class="thirdpage__main--label">Confirmer le mot de passe</p>
                    <input type="password" class="thirdpage__main--input" required name="password2">
                    <div class="fourthpage__main--buttoncontenair"><input onclick="$('#ipart1').html($('#ipart2').html())" class="thirdpage__main--button" value="Suivant"></div>
                
                <a class="back" href="index2.html" ><p class="back">Back</p></a>
            </article>    
                
            <div class="points">
                <div class="rond active"></div>
                <div class="rond"></div>
                <div class="rond"></div>
            </div>
        </section>
        <section style="display:none;" id="ipart2" class="thirdpage">
                <div class="thirdpage__top">
                    <img class="thirdpage__top--img" src="assets/icones/logo_dooc.svg" alt="DOOC">
                    <p class="thirdpage__top--title">Inscription</p>
                </div>
                <article class="thirdpage__main">
                    
                        <p class="thirdpage__main--label">Prénom</p>
                        <input type="text" class="thirdpage__main--input" required name="prenom">
                        <p class="thirdpage__main--label">Nom</p>
                        <input type="password" class="thirdpage__main--input" required name="nom">
                        
                        <div class="fourthpage__main--buttoncontenair"><input onclick="switchpart()" class="thirdpage__main--button" value="Suivant"></div>
                    
                    <a class="back"  href="index2.html" ><p class="back">Back</p></a>
                </article>    
                    
                <div class="points">
                    <div class="rond"></div>
                    <div class="rond active"></div>
                    <div class="rond"></div>
                </div>
            </section>
            <section style="display:none;" id="ipart3" class="fourthpage">

                    <article class="fourthpage__slider">
                        <div class="swiper-container">
                            <!-- <img src="" class="arrow left"> -->
                            <ul class="swiper-wrapper">
                                <li class="fourthpage__slider--bloc swiper-slide decouverte1" >
                                    <p class="fourthpage__slider--title">Découverte</p>
                                    <p class="fourthpage__slider--stitle">GRATUIT</p>
                                    <p class="fourthpage__slider--stitle">Accès limité</p>
                                    <p class="fourthpage__slider--txt">Accès au niveau 1 uniquement</p>
                                </li>
                                <li class="fourthpage__slider--bloc swiper-slide certifie1" id="certifié">
                                    <p class="fourthpage__slider--title">Certifié</p>
                                    <p class="fourthpage__slider--stitle">4,99€/mois </p>
                                    <p class="fourthpage__slider--stitle">Accès illimité</p>
                                    <p class="fourthpage__slider--txt">Accès aux exercices et à leurs correction<br>Accès à tous les niveaux</p>
                                </li>
                                <li class="fourthpage__slider--bloc swiper-slide diplome1" id="diplomé">
                                    <p class="fourthpage__slider--title">Diplomé</p>
                                    <p class="fourthpage__slider--stitle">Demander un RDV</p>
                                    <p class="fourthpage__slider--stitle">Accès illimité</p>
                                    <p class="fourthpage__slider--txt">Accès aux exercices et à leurs correction<br>Accès à tous les niveaux<br>Suivi par des professionnels <br>Un diplome reconnu par l'Etat de niveau II</p>
                                </li>
                            </ul>
                            <!-- <img src="" class="arrow right"> -->
                        </div>
                    </article>

                    <div class="fourthpage__slider--points">
                            <div id="découverte" class="fourthpage__slider--rond"></div>
                            <div id="certifié" class="fourthpage__slider--rond"></div>
                            <div id="diplomé" class="fourthpage__slider--rond"></div>
                        </div>
                    <p class="fourthpage__stitle">Choix de formule</p>
                        <div class="fourthpage__choix">
                            <div id="choix1" onclick="surbrillance('1');" class="fourthpage__choix--bloc choix1">
                                <p>Découverte</p>
                            </div>
                            <div  onclick="surbrillance('2');"id="choix2" class="fourthpage__choix--bloc choix2">
                                <p>Certifié</p>
                            </div>
                            <div onclick="surbrillance('3');" id="choix3" class="fourthpage__choix--bloc choix3">
                                <p>Diplomé</p>
                            </div>
                        </div>
                    <article class="fourthpage__main">                            
                            <div class="fourthpage__main--buttoncontenair"><input type="submit" class="thirdpage__main--button" value="Suivant"></div>
                        </form>
                        <a class="back"  href="index2.html" ><p class="back">Back</p></a>
                    </article>    
                        
                    <div class="points">
                        <div class="rond"></div>
                        <div class="rond "></div>
                        <div class="rond active"></div>
                    </div>
                </section>
            </main>
    <script type="text/javascript">
    
    $(document).ready(function () {
        
        
        
        
    })
    function surbrillance(i){
        document.getElementById('choix'+ i).style.color = '';

        if (i ==1){
            document.getElementById('choix'+ i).classList.toggle('decouverte');
            document.getElementById('choix'+ i).classList.toggle('whitecolor');
            document.getElementById('choix2').classList.remove('certifie');
            document.getElementById('choix2').style.color = '#FFD10F';
            document.getElementById('choix3').classList.remove('diplome');
            document.getElementById('choix3').style.color = '#EC9DFF';
        } else if( i == 2){
            document.getElementById('choix'+ i).classList.toggle('certifie');
            document.getElementById('choix'+ i).classList.toggle('whitecolor');
            document.getElementById('choix1').style.color = '#55C73A';
            document.getElementById('choix3').style.color = '#EC9DFF';
            document.getElementById('choix1').classList.remove('decouverte');
            document.getElementById('choix3').classList.remove('diplome');
        } else{
            document.getElementById('choix'+ i).classList.toggle('diplome');
            document.getElementById('choix1').classList.remove('decouverte');
            document.getElementById('choix'+ i).classList.toggle('whitecolor');
            document.getElementById('choix1').style.color = '#55C73A';
            document.getElementById('choix2').style.color = '#FFD10F';
            document.getElementById('choix2').classList.remove('certifie');
            
        }
    }
    function switchpart(){
            $('#ipart1').html($('#ipart3').html());
            var swiper = new Swiper ('.swiper-container', {
            pagination: '.swiper-pagination', 
            slidesPerView: 1,
            paginationClickable: true,
            height: 343,
            spaceBetween: 0,
            on: {
                init: function () {
                console.log('swiper initialized');
                },
            },
        });
        }
    </script>
    
    </body>