<!DOCTYPE html>

<html>

<head>

    <title>Make a Wish! Groupe Get</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--  Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Exo:300,300i,400,400i,500,700,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

</head>

<body>
    <div class="container">

        <header class="header" id="HOME">
            <img class="img-responsive" src="images/GET_header.png" id="image">
            
        </header>

    </div>
    <div id="box" class="box-shadow"></div>
    <section class="main">

        <div class="overlay">
            <div class="flex-container">
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Des abdos</p>
                </div>
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Des cupcakes cœur nutella</p>
                </div>
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Un château</p>
                </div>
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Maintien du FC Metz en ligue 1
                        <!--(Pour ça faites jouer Fernandez à la place de Roux, Oups)-->
                    </p>
                </div>
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Une grasse mat'</p>
                </div>



                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Une couronne</p>
                </div>
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Pouvoir faire 10 vœux</p>
                </div>
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Un renne volant</p>
                </div>
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Ouverture Groupe GET Malibu</p>
                </div>
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Des cheveux</p>
                </div>



                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Un tour du monde en traîneau</p>
                </div>
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Un bureau</p>
                </div>
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Grandir</p>
                </div>
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Un jet GET</p>
                </div>
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>L'hoverboard de Marty Mcfly</p>
                </div>



                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Une licorne</p>
                </div>
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Un réveil</p>
                </div>
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Un bon tarif sur le marbre</p>
                </div>
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>La téléportation (pour éviter les bouchons)</p>
                </div>
                <div>
                    <img class="img-responsive" src="images/140x135.png">
                    <p>Ouverture Groupe GET Belgique</p>
                </div>

                <div class="flex-container" id="goto">
                    <lo class="up_btn"> je veux envoyer <span id="redFont"> mon vœu ! </span>
                    </lo>
                </div>

            </div>

                    <a class="btn btn-form" href="#FORM"><i class="fa fa-arrow-down" id="arrow"></i></a>
              
             <div class=filler> <!-- petite astuce pour ajouter un marge entre le bouton et le renne --></div>
        </div>
        
       
    </section>

    <section>
        <div class="container" id="FORM">
            <div class="renne">

                <img class=img-responsive src="images/GET_renne.png">

            </div>
            <div class="cadre">

                <form class="cadreDeviant" id="ajax-contact" method="post" action="email.php">

                    <div class="formText">
                        <div class="title_form">
                            Vous souhaitez gagner le <span id="red2">cadeau surprise</span> que le Père Noël nous a déposé ?
                            <br>
                            <b>Alors faites-nous part de votre vœu extraordinaire pour 2018 ;) </b>
                        </div>


                        <input type="text" class="demi" name="form_nom" placeholder="Nom" id="form_nom" required>
                        <input type="text" class="demi" name="form_prenom" placeholder="Prénom" id="form_prenom" required>
                        <br>
                        <input type="email" class="full" name="form_email" placeholder="E-mail" id="form_email" required>
                        <br>
                        <input type="text" class="full " name="form_societe" placeholder="Société" id="form_societe">
                        <br> <label for="form_wish">Votre Vœu:</label>

                        <input type="text" class="wish" name="form_wish" id="form_wish">

                        <br>

                        <input type="submit" id="red" value=" envoyer mon vœu ">
                        <div > </div>
                        <br>
                        
                        <div id="sub_text" >
                            <p><em><b>Merci de nous avoir fait part de votre vœu pour 2018 ! <br>
                                        Tirage au sort le 31 janvier 2018!</b></em></p>
                        </div>

    
                    </div>
                    <div class=imageWrapper>
                        <img class="img-responsive" id="left_gift" src="images/GET_cadeau_01.png">
                        <img class="img-responsive" id="right_gift" src="images/GET_cadeau_02.png">
                    </div>

                </form>

            </div>
        </div>


    </section>


    <footer class=footer>
        <img src="images/GET_footer_sapin.png">
    </footer>


    <!-- Javascript -->
    <!-- j'ai préféré utiliser un cdn pour jquery-->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  
    <script src="js/script.js"></script>
    <script src="js/snow.js"></script>
</body>

</html>
