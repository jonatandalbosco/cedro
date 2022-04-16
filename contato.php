<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contato | Cedro Tecnologia</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/android-icon-36x36.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>

<!--Start Preloader -->
<div class="preloader"></div> 

<!--Start mainmenu area-->
<?php include ("includes/nav.php");?>

<!--Start breadcrumb area-->     
<section class="breadcrumb-area">
	<div class="container text-center">
		<h1>Contato</h1>
	</div>
</section>
<!--End breadcrumb area-->

<!--Start breadcrumb bottom area-->
<section class="breadcrumb-botton-area">
    <div class="container">
        <div class="left pull-left">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
                <li>Contato</li>
            </ul>    
        </div>
        <div class="right pull-right">
            <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Compartilhe</a>
        </div>  
    </div>
</section>
<!--End breadcrumb bottom area-->

<!--Start contact area-->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info">
                    <div class="title">
                        <h2>Detalhes de Contato</h2>
                    </div>
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active"><h4>Informações da Empresa</h4></div>
                            <div class="accord-content collapsed">
                                <ul class="contact-info-list">
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-home-page"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>São Paulo, SP, Rua Barão De Duprat, 323</span><br> 5° Andar, Loja 536, Centro</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-call-answer"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>Entre em contato</span><br>(11) 95949-3700 </h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-envelope"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>E-mail</span><br>cedrotecnologia10@gmail.com</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="flaticon-clock"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5><span>Horário de Funcionamento</span><br>Segunda a Sexta - 08:00 às 17:00 <br> Sábado das 08:00 ás 13:00</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                       
                        <!--End single accordion box--> 
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <div class="title">
                        <h2>Detalhes de Contato</h2>
                    </div>
                    <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="form_name" value="" placeholder="Seu Nome*" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="form_email" value="" placeholder="Seu E-mail" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="form_phone" value="" placeholder="Telefone">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="form_subject" value="" placeholder="Assunto">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="form_message" placeholder="Sua mensagem..." required=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="thm-btn bg-1" type="submit" data-loading-text="Por favor espere...">Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End contact area-->

<!--Start Google map area-->
<section class="google-map-area">
    <iframe
  width="100%"
  height="450"
  style="border:0"
  loading="lazy"
  allowfullscreen
  referrerpolicy="no-referrer-when-downgrade"
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648396.146772705!2d-51.16590189281846!3d-26.747986263160094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5967d6dd4c6f%3A0xa1cc5b93e998b2a1!2sCedro%20Tecnologia!5e0!3m2!1spt-BR!2sbr!4v1650123586076!5m2!1spt-BR!2sbr%22%20width=%22600%22%20height=%22450%22%20style=%22border:0;%22%20allowfullscreen=%22%22%20loading=%22lazy%22%20referrerpolicy=%22no-referrer-when-downgrade%22%3E">
</iframe>
</section>
<!--End Google map area-->     

<?php include ("includes/footer.php");?>


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- main jQuery -->
<script src="js/jquery.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="js/validation.js"></script>
<!-- mixit up -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
<!-- video responsive script -->
<script src="js/jquery.fitvids.js"></script>
<!-- jQuery ui js -->
<script src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- fancy box -->
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="js/isotope.js"></script>
<script src="js/jquery.prettyPhoto.js"></script> 
<!-- jQuery timepicker js -->
<script src="assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>                               


<!-- revolution slider js -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>



<!-- thm custom script -->
<script src="js/custom.js"></script>






</body>
</html>