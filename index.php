<?php
require_once('processa.php');
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Relacional</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/rotate-button.scss">
    <link rel="stylesheet" href="css/jquery.fancybox.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">



</head>

<body>

    <!--           sideMenu-->

    <!--            <div id="mySidenav" class="sidenav">-->
    <!--              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
    <!--
                      <a class="closebutton" href="javascript:void(0)" onclick="closeNav()">
                          <div id="nav-icon2">
                            <span></span>
                            <span></span>
                            <span></span>
                          </div>
                      </a>
                      <p id="menuSidebar">MENU</p>
                      <a href="#aboutUs_anchor" onclick="closeNav()">Sobre nós</a>
                      <a href="#oursServices" onclick="closeNav()">Nossos Serviços</a>
                      <a href="#cases_anchor" onclick="closeNav()">Cases</a>
                      <a href="#oracleAnchor" onclick="closeNav()">Parceria Oracle</a>
                      <a href="#contactsAnchor" onclick="closeNav()">Contato</a>
                      <div class="language">
                      <a id="language" href="index.html" hreflang="PT">PT</a>
                      <a id="language" href="#" hreflang="EN">EN</a>
                      </div>
                      
            </div>
-->
    <!--        menu icon-->
    <!-- Use any element to open the sidenav -->
    <!--            <span onclick="openNav()">-->
    <!--            <i class="fa fa-bars fa-2x" aria-hidden="true" id="nav-icon1"></i>-->


    <!--
            <div id="nav-icon1">
                <span></span>
                <span></span>
                <span></span>
            </div>
            </span>
-->
    <!--        menu icon-->

    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <!--
            <div id="main">
        </div>
                
-->
    <!--    Made by Erik Terwan    -->
    <!--   24th of November 2015   -->
    <!--    All rights reserved    -->
    <nav role="navigation" class="navHeader">
        <div id="menuToggle">
            <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
            <input type="checkbox" />

            <!--
    Some spans to act as a hamburger.
    
    They are acting like a real hamburger,
    not that McDonalds stuff.
    -->
            <span></span>
            <span></span>
            <span></span>

            <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->
            <ul id="menu" class="menuSidebar">
                <li id="menuTitle">MENU</li>
                <a href="#aboutUs_anchor" onclick="closeNav()">
                    <li>Sobre Nós</li>
                </a>
                <a href="#oursServices" onclick="closeNav()">
                    <li>Nossos Serviços</li>
                </a>
                <a href="#cases_anchor" onclick="closeNav()">
                    <li>Cases</li>
                </a>
                <a href="#oracleAnchor" onclick="closeNav()">
                    <li>Parceria Oracle</li>
                </a>
                <a href="#contactsAnchor" onclick="closeNav()">
                    <li>Contato</li>
                </a>
                <div class="language">
                    <a id="language" class="portugueseLanguage" href="index.html" hreflang="PT">
                        <li>PT</li>
                    </a>
                    <a id="language" class="englishLanguage" href="#" hreflang="EN">
                        <li>EN</li>
                    </a>
                </div>
            </ul>
        </div>
    </nav>


    <div id="background_1" class="container-fluid">
        <div id="" class="row">
            <!--linha um-->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 textBgOne">
                <div class="pull-left" id="top">
                    <img src="images/1x/Asset%201.png" alt="" class="logoRelacional">
                    <div class="pull-left slogan title">
                        <p>Alcance o sucesso empresarial que a Oracle foi projetada para oferecer com especialistas certificados.</p>
                        <!--                               <span>Alcance o sucesso empresarial que a Oracle foi projetada para oferecer com especialistas certificados. </span>-->

                    </div>


                </div>

            </div>
            <div id="columnFourBgOne" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <img src="images/firstImageGroup.png" class="pull-right img-responsive" alt="">
            </div>
        </div>
    </div>



    <!--menu-->

    <div id="background_bgTeste" class="container-fluid">
        <img src="images/bgTest.jpg" alt="" class="thirdImage">
        <div id="background_2" class="container-fluid">
            <div id="" class="row">
                <!--linha um-->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <!--                    <img src="/images/secondImageGroup.png" alt="" class="img-responsive secondImage">-->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 aboutUsImage">
                    <div class="container-fluid pull-left aboutUs">
                        <div class="text-right textAboutus">
                            <p id="aboutUs_anchor" class="title">SOBRE NÓS</p>
                            <span>
                            Na Relacional, ajudamos companhias globais <br> 
                            a compreender o crescimento empresarial <br>
                            que a Oracle foi projetada para entregar,<br>
                            oferecendo suporte completo para as <br>
                            soluções empresariais Oracle.</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--        background_2-->
        <!--        background_3-->
        <div id="background_3" class="container-fluid">
            <div id="" class="row services">
                <!--linha um-->
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="services pull-right">
                        <p id="oursServices" class="title">NOSSOS SERVIÇOS</p>

                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
                    <div class="pull-right thirdImage">
                        <!--                        <img src="/images/thirdImageGroup.png" alt="" class="img-responsive">                        -->
                    </div>

                </div>


            </div>
            <!--            <div id="" class="row cards1"> linha dois</div>-->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 serviceCards">

                <div class="container-fluid center-block z-depth-2" id="services">

                    <nav class="tabSelector-wrapper">
                        <div class="mcs-horizontal-example">
                            <!-- <div data-collapse> -->
                            <ul id="tabSelector" class="tabSelector">
                                <li>
                                    <div class="z-depth-2 cards">
                                        <!--                                       <img src="/photos/letra_caixa.png" alt="" class="img-responsive center-block">-->
                                        <h4 class="text-center">PROJECTOS</h4>
                                        <div class="center-block service_text">
                                            <p class="texto_paragrafo_service more">Sabe aquele projecto especializado, complexo e com prazo de implementação curtíssimo
                                                que a área de negócios necessita? Nós podemos lhe ajudar.

                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="z-depth-2 cards">
                                        <!--                                        <img src="/photos/eventos.png" alt="" class="img-responsive center-block">-->
                                        <h4 class="text-center">OUTSOURCING</h4>
                                        <div class="center-block service_text ">
                                            <p class="texto_paragrafo_service more">Quando a sua empresa se preocupa mais com a administração dos seus sistemas do
                                                que com a evolução e crescimento do seu próprio negócio, algo está errado.<br>                                                Disponibilizamos profissionais altamente qualificados com vasta experiência
                                                em projetos Oracle, para que sua companhia continue focada no que realmente
                                                importa.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="z-depth-2 cards">
                                        <!--                                        <img src="/photos/paineis_circle.png" alt="" class="img-responsive center-block">-->
                                        <h4 class="text-center">SUPORTE 24X7</h4>
                                        <div class="center-block service_text">
                                            <p class="texto_paragrafo_service more">Perdendo o sono para manter os seus sistemas Oracle a funcionar? Os nossos especialistas
                                                estão acordados para que você não esteja, cordados para que você não…
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="z-depth-2 cards">
                                        <!--                                        <img src="/photos/pdv.png" alt="" class="img-responsive center-block">-->
                                        <h4 class="text-center">PROJECTOS</h4>
                                        <div class="center-block service_text">
                                            <p class="texto_paragrafo_service more">Sabe aquele projecto especializado, complexo e com prazo de implementação curtíssimo
                                                que a área de negócios necessita? Nós podemos lhe ajudar.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="z-depth-2 cards">
                                        <!--                                        <img src="/photos/adesivos.png" alt="" class="img-responsive center-block">-->
                                        <h4 class="text-center">PROJECTOS</h4>
                                        <div class="center-block service_text">
                                            <p class="texto_paragrafo_service more">Sabe aquele projecto especializado, complexo e com prazo de implementação curtíssimo
                                                que a área de negócios necessita? Nós podemos lhe ajudar.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="z-depth-2 cards">
                                        <!--                                        <img src="/photos/toldos.png" alt="" class="img-responsive center-block">-->
                                        <h4 class="text-center">PROJECTOS</h4>
                                        <div class="center-block service_text">
                                            <p class="texto_paragrafo_service more">Sabe aquele projecto especializado, complexo e com prazo de implementação curtíssimo
                                                que a área de negócios necessita? Nós podemos lhe ajudar.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!--    </div> -->
                        </div>

                    </nav>
                </div>

            </div>

        </div>

    </div>
    <!--               background_3-->
    <!--background_cases-->
    <div id="background_cases" class="container-fluid">
        <div class="col-lg-12 clientes">
            <p id="cases_anchor" class="">NOSSOS CASES</p>
        </div>
        <div class="gallery">
            <div class="container-fluid verticalGallery">
                <div class="col-lg-4 col-md-4 col-xs-6 thumb img-thumb">
                    <div class="overlay">
                        <a class="thumbnail text-center" href="images/larges/cardDescription-04.png" data-fancybox="group" data-caption="Cliente">
                                 
                                        <img class="img-responsive" src="images/thumbs/logoRelacional.png" alt="">

                                  </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 thumb img-thumb">
                    <div class="overlay">
                        <a class="thumbnail text-center" href="images/larges/cardDescription-04.png" data-fancybox="group" data-caption="Cliente">

                                        <img class="img-responsive" src="images/thumbs/logoRelacional.png" alt="">

                            
                               </a>
                    </div>
                </div>
                <!--                novo-->
                <div class="col-lg-4 col-md-4 col-xs-6 thumb img-thumb">
                    <div class="overlay">
                        <a class="thumbnail text-center" href="images/larges/cardDescription-04.png" data-fancybox="group" data-caption="Cliente">
                                       
                                        <img class="img-responsive" src="images/thumbs/logoRelacional.png" alt="">
                                        
                           </a>
                    </div>
                </div>
                <!--                novo-->

                <div class="col-lg-4 col-md-4 col-xs-6 thumb img-thumb">

                    <div class="overlay">
                        <a class="thumbnail text-center" href="images/larges/cardDescription-04.png" data-fancybox="group" data-caption="Cliente">
                                       
                                        <img class="img-responsive" src="images/thumbs/logoRelacional.png" alt="">
                           
                           </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 thumb img-thumb">
                    <div class="overlay">
                        <a class="thumbnail text-center" href="images/larges/cardDescription-04.png" data-fancybox="group" data-caption="Cliente">
                                        <img class="img-responsive" src="images/thumbs/logoRelacional.png" alt="">
                            </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-6 thumb img-thumb">
                    <div class="overlay">
                        <a class="thumbnail text-center" href="images/larges/cardDescription-04.png" data-fancybox="group" data-caption="Cliente">

                                        <img class="img-responsive" src="images/thumbs/logoRelacional.png" alt="">
                            </a>
                    </div>
                </div>

                <!--                novo-->
                <div class="col-lg-4 col-md-4 col-xs-6 thumb img-thumb">
                    <div class="overlay">
                        <a class="thumbnail text-center" href="images/larges/cardDescription-04.png" data-fancybox="group" data-caption="Cliente">
                                       
                                        <img class="img-responsive" src="images/thumbs/logoRelacional.png" alt="">
                             </a>
                    </div>
                </div>
                <!--                novo-->
                <div class="col-lg-4 col-md-4 col-xs-6 thumb img-thumb">

                    <div class="overlay">
                        <a class="thumbnail text-center" href="images/larges/cardDescription-04.png" data-fancybox="group" data-caption="Cliente">
                                        <img class="img-responsive" src="images/thumbs/logoRelacional.png" alt="">
                            </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--background_cases-->
    <!--               background_4-->
    <div id="background_4" class="container-fluid">
        <div class="img-responsive">
            <img src="images/fourthImageGroup.png" alt="" class="pull-left fourthImage">

        </div>
        <div class="container-fluid oracle">
            <div id="oracleAnchor" class="pull-left">
                <p class="oraclePartner title">PARCERIA ORACLE</p>
            </div>
            <div id="" class="pull-left oracleLogo ">
                <img src="images/oracleIcon.png" alt="" class="img-responsive">
            </div>
            <div class="clearfix horizontalLine"></div>
            <div class="pull-left oracleDescription">
                <p class="oracleText">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
            </div>
            <div class="pull-right moreInfo">
                <div data-collapse>
                    <div class="knowMore">
                        <p class="text-center">Saiba Mais</p>
                    </div>
                    <div class="container-fluid oracleCertifications">
                        <div class="container-fluid imageCertifications">
                            <ul class="pull-left leftCertifications">
                                <li>
                                    <img src="images/oracle-05.png" alt="">
                                </li>
                                <li>
                                    <img src="images/oracle-06.png" alt="">
                                </li>
                                <li>
                                    <img src="images/oracle-07.png" alt="">
                                </li>
                                <li>
                                    <img src="images/oracle-08.png" alt="">
                                </li>
                            </ul>
                            <ul class="pull-right rightCertifications">
                                <li>
                                    <img src="images/oracle-09.png" alt="">
                                </li>
                                <li>
                                    <img src="images/oracle-10.png" alt="">
                                </li>
                                <li>
                                    <img src="images/oracle-11.png" alt="">
                                </li>
                                <li>
                                    <img src="images/oracle-12.png" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container contacts">
            <div id="contactsAnchor" class="contactBox">
                <p class="contactText text-center title">CONTATO</p>
            </div>
            <div class="bootstrap-iso">
                <div class="container-fluid">
                    <div class="row">
                        <form class="form-horizontal" method="post">
                            <input class="form-control nameForm" name="" placeholder="Nome" type="text" />
                            <input class="form-control emailForm" id="email" name="email" placeholder="E-mail" type="text" />
                            <div class="form-group messageBox">
                                <textarea class="form-control messageForm" cols="50" id="messageForm" name="messageForm" placeholder="Mensagem" rows="2"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-custom outline formButton" name="submit" type="submit">
                                        Enviar
                                       </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="background_5" class="container-fluid">
        <div id="map">



        </div>
    </div>
    <footer class="container-fluid footer">
        <div class="container footerInfo">
            <div class="container addressFooter pull-left">
                <img src="images/placeholder.svg" alt="">

                <p>
                    Av. 5 de Outubro, 70 – 6º Andar <br>1050 – 059 Lisboa</p>

            </div>
            <div class="container emailFooter">
                <img src="images/mail.svg" alt="">
                <p>+351 210 107 476 <br>info@relacional.pt</p>

            </div>
        </div>

    </footer>

    <!--
        38.737482, -9.147655
        
        AIzaSyBnRCFVBFpzOi6k_XmFldWOIFz8xog49JE
-->







    <!--backtotop-->
    <a href="#top" class="cd-top">top
        <img src="images/goUp.png" alt="">
    </a>
    <!--
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
-->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/start/jquery-ui.css" type="text/css" media="all" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/main_top.js"></script>
    <script type="text/javascript" src="js/jquery.collapse.js"></script>
    <script type="text/javascript" src="/js/card_collapse.js"></script>
    <script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
    <script type="text/javascript" src="js/mdb.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnRCFVBFpzOi6k_XmFldWOIFz8xog49JE&callback=initMap">

    </script>


     <script>
        

        $(document).ready(function() {
        var showChar = 100;
        var ellipsestext = "...";
        var moretext = "more";
        var lesstext = "less";
        $('.more').each(function() {
            var content = $(this).html();

            if(content.length > showChar) {

                var c = content.substr(0, showChar);
                var h = content.substr(showChar-1, content.length - showChar);

                //var html = c + '<span class="moreelipses ">'+ellipsestext+'</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">'+moretext+'</a></span>';
                var html = c + '<span class="moreelipses ">'+ellipsestext+'</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp; <div id="circle" class="circle-plus closed morelink rotate"><div class="circle"><i id="icon" class="fa fa-plus icon-plus"></i></span></div></div></div></span>';

                $(this).html(html);
            }

        });

        $(".morelink").click(function(){
            if($(this).hasClass("less")) {
                $(this).removeClass("less");                
            } else {
                $(this).addClass("less");
                document.getElementById('tabSelector').style.height = '460px'
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        });

        $(".rotate").click(function(){
            if($(this).hasClass("down")) {
                $(this).removeClass("down")
            } else {
                 $(this).addClass("down");
            }
           
        })
    });
    </script>







    <script>
        //    side menu

        /* Set the width of the side navigation to 300px and the left margin of the page content to 300px and add a black background color to body */
        function openNav() {
            document.getElementById("mySidenav").style.width = "300px";
            document.getElementById("main").style.marginLeft = "300px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.0)";
        }

        /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }

        //   menu icon

        $(document).ready(function () {
            $('#nav-icon1,#nav-icon2').click(function () {
                $(this).toggleClass('open');
                //        if (this.toggleClass('open')){
                //            openNav();
                //        }else{
                //            closeNav();
                //        }


            });
        });


        //        ========Smoothie scRolling========
        $('a[href^="#"]').click(function () {
            var the_id = $(this).attr("href");

            $('html, body').animate({
                scrollTop: $(the_id).offset().top
            }, 'slow');
            return false;
        });


        //		(function($){
        //			$(window).on("load",function(){
        //				
        //				$(".scrolljs").mCustomScrollbar({
        //					axis:"x",
        //					theme:"rounded-dark",
        //                    scrollButtons:{enable:true},
        //					autoExpandScrollbar:true,
        //					advanced:{autoExpandHorizontalScroll:true}
        //				});
        //			});
        //		})(jQuery);

        //            Horizontal Scrolling

        (function ($) {
            $(window).on("load", function () {
                //                $(".mcs-horizontal-example").mCustomScrollbar({
                $(".mcs-horizontal-example").mCustomScrollbar({

                    axis: "x",
                    theme: "rounded-dark",
                    autoExpandScrollbar: true,
                    scrollButtons: { enable: true },
                    advanced: {
                        autoExpandHorizontalScroll: true //optional (remove or set to false for non-dynamic/static elements)
                    }
                });
            });
        })(jQuery);

        //        =======Fancybox Gallery==========

        (function ($) {
            $(window).on("load", function () {

                $(".scrolljs").mCustomScrollbar({
                    axis: "x",
                    theme: "dark-thin",
                    scrollButtons: { enable: true },
                    autoExpandScrollbar: true,
                    advanced: { autoExpandHorizontalScroll: true }
                });
            });
        })(jQuery);


        //            MAPS GOOGLE

        function initMap() {
            var uluru = { lat: 38.737482, lng: -9.147655 };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>

</body>

</html>