<?php 
/* clion_cookie -------------------------------------------------- */
if(!isset($_COOKIE['clion_cookie'])) $gdpr="1-1-0"; 
else $gdpr=@$_COOKIE['clion_cookie'];

$sep="-";
$str=explode($sep,$gdpr);

$preferenze_clion=$str[0];
$statistiche_clion=$str[1];
$marketing_clion=$str[2];

/* //clion_cookie -------------------------------------------------- */
?>


<!DOCTYPE html>
<html lang="en">
	<head>
	    <!-- Meta, title, CSS, favicons, etc. -->
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Impresa Pulizie</title>


        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png"/>

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,400italic,700italic' rel='stylesheet' type='text/css'>
		
		<!-- Rocket extras -->
		<link href="assets/css/animate.css" rel="stylesheet">
		<link href="assets/css/prettyPhoto.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->

        <script src="assets/js/analytics.js"></script>

		<!-- Global site tag (gtag.js) - Google AdWords: 863549369 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-863549369"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'AW-863549369');
		</script>

		<!-- Event snippet for Campagna Service Man conversion page -->
		<script>
			gtag('event', 'conversion', {'send_to': 'AW-863549369/Brq9CJPR8G4Que_imwM'});
		</script>

		<!-- Favicons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="docs-assets/ico/apple-touch-icon-144-precomposed.html">
		                               <link rel="shortcut icon" href="docs-assets/ico/favicon.html">

		<style type="text/css">
			#footer-contacts a {
				text-decoration: none;
				color: #ffffff;
			}
		</style>
	</head>
	<body>
	
	<!-- Start Rocket -->
	<!-- ********************* -->
	
	<!-- Parallax Background
	================================================== -->
	<!-- image is set in the CSS as a background image -->
	<div id="parallax" class="parallax_pavimenti" style="max-height: 350px"></div>
	<!-- End Parallax Background
	================================================== -->
	
	<!-- Start Header
	================================================== -->
	<header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
	  <div class="container">
	    <div class="navbar-header">
	      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <!-- Your Logo -->
	      <a href="index.php" class="navbar-brand">
			  <img src="assets/images/logo.png" alt="Impresa di pulizie Avellino"  />
		  </a>
	    </div>
	    <!-- Start Navigation -->
		  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
			  <ul class="nav navbar-nav">
                  <li class="nav-item dropdown">
					  <a onclick="javascript:location.href='index.php#features'">Chi siamo</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="pulizia_industriale.php">Pulizia industriale</a>
                        <a class="dropdown-item" href="pulizia_civile.php">Pulizia civile</a>
                      </div>
				  </li>
<li class="nav-item dropdown">
					  <a href="">SERVIZI</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="sanificazione-con-ozono-ad-avellino.php">Sanificazione con Ozono</a>
                        <a class="dropdown-item" href="pulizia-tappeti-ad-avellino.php">Pulizia Tappeti</a>
<a class="dropdown-item" href="trattamento-pavimenti-ad-avellino.php">Trattamento Pavimenti</a>
                      </div>
				  </li>
				  <li>
					  <a href="lavaggio-tessuti.php">Trattamento tessuti</a>
				  </li>
				  <li>
					  <a href="trattamento-pavimenti.php">Trattamento pavimenti</a>
				  </li>
                  <li>
                      <a onclick="javascript:location.href='index.php#sanity_system'">Sanificazione con Ozono</a>
                  </li>
                  <li>
				  <a href="https://draacol.com/">Shop</a>
			  </li>
                  <li>
              		<a href="te:+393207531008"><i class="glyphicon glyphicon-earphone"></i> 320 753 1008</a>
                  </li>
                  <!--<li class="offerte">
                    <a href="assets/images/popup.jpg" rel="prettyPhoto">Offerte</a>
                  </li>-->
			  </ul>
			  <ul class="nav navbar-nav navbar-right header-button">
				  <li>
					  <button type="button" class="request_estimation btn btn-primary">Richiedi preventivo gratuito</button>
				  </li>
			  </ul>
		  </nav>
	  </div>
	</header>
	<!-- ==================================================
	End Header -->
	
	<!-- Start Features
	================================================== -->
	<section id="features" class="section" style="background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Title -->
					<div class="overview animate" data-animate="flipInX">
						<h1>TRATTAMENTO DEI PAVIMENTI</h1>
						<p class="lead" style="margin-bottom:0;">
							Ridiamo vita a qualsiasi tipo di superficie senza usare cere e senza levigare!<br />
							La Service Man offre servizi per la manutenzione e il trattamento dei pavimenti sia civili che industriali, in particolare su superfici come pavimenti in cotto,
							pavimenti in cemento, pavimenti in marmo e graniglia, pavimenti in linoleum e pvc.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- ==================================================
	End Features -->
	
    
     <!-- Start Gallery Block
	================================================== -->
	<section id="gallery" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/pavimenti/1.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/pavimenti/1.jpg" alt="Trattamento pavimenti industriali Benevento" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/pavimenti/2.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/pavimenti/2.jpg" alt="Trattamento pavimenti industriali Caserta" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/pavimenti/3.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/pavimenti/3.jpg" alt="Trattamento pavimenti industriali Napoli" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/pavimenti/4.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/pavimenti/4.jpg" alt="Trattamento pavimenti industriali Salerno" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/pavimenti/5.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/pavimenti/5.jpg" alt="Trattamento pavimenti Napoli" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
                
                
                
				
                
                
                
				
			</div>
		</div>
	</section>
	
	<!-- ==================================================
	End Gallery Blcok -->
    
	<!-- Start Image Block
	================================================== -->
	<section id="pavimenti_cotto" class="section" style="background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12"><img class="animate img-responsive" data-animate="fadeInLeft" src="assets/images/pavimento-cotto.jpg" alt="Impresa di pulizie Benevento"/></div>
				<div class="col-md-6 col-sm-12">
					<div class="content-block animate" data-animate="fadeInRight" style="margin-top: 0px">
						<h2>Trattamento pavimenti in cotto</h2>
						<p>
							La superficie viene lavata con detergente a bassa schiuma, a base di acido fosforico e altri acidi ad azione sinergica che rimuove le efflorescenze bianche dovute alla risalita capillare nel cotto.

							Sul pavimento lavato e pulito viene applicata una miscela di resine, cere, oli e sostanze specifiche ad azione antimacchia formulata per il trattamento oleo-idrorepellente. Il prodotto rende la superficie fortemente idrofoba ed oleofoba, impedendo la risalita per capillarità di acqua e sali (causa delle efflorescenze biancastre) e l’assorbimento dell’olio e delle macchie.

							La superficie asciutta inoltre non permette il formarsi di alghe e licheni evitandone le tipiche macchie scure. Le macchie di sostanze a base acquosa (vino, succhi di frutta, caffè, ecc.) e quelle a base oleose (olio, grassi, cibi) sono molto più facilmente removibili perché non penetrano nella struttura della superficie, ma rimangono “a galla”. I pavimenti e le superfici trattati possono essere in seguito puliti con detersivi normali.
						</p>
						<a onclick="javascript:location.href='#estimation'" class="btn btn-md btn-primary">Richiedi maggiori informazioni</a>
						<!--<button class="btn btn-md btn-default">Purchase Now</button>-->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="pavimenti_gres" class="section" style="background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12"><img class="animate img-responsive" data-animate="fadeInLeft" src="assets/images/pavimento-gres.jpg" alt="Impresa di pulizie Caserta"/></div>
				<div class="col-md-6 col-sm-12">
					<div class="content-block animate" data-animate="fadeInRight" style="margin-top: 0px">
						<h2>Trattamento pavimenti in gres e ceramica</h2>
						<p>
							Il trattamento per superfici in Gres e Ceramica viene utilizzato per rimuovere depositi di calcio, grassi corporei, sporco ostinato e la maggior parte delle contaminazioni
							delle superfici, sia interne che esterne, dovute al traffico pedonale.
							<br />
							&Egrave; destinato al rinnovo e al ripristino della struttura e dell’aspetto estetico originali delle superfici dure senza alterare il substrato e senza danneggiare il
							materiale cementizio o gli agenti di fissaggio.
						</p>
						<a onclick="javascript:location.href='#estimation'" class="btn btn-md btn-primary">Richiedi maggiori informazioni</a>
						<!--<button class="btn btn-md btn-default">Purchase Now</button>-->
					</div>
				</div>
			</div>
		</div>
	</section>

   


	<section id="pavimenti_marmo" class="section" style="background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12"><img class="animate img-responsive" data-animate="fadeInLeft" src="assets/images/pavimento-marmo.jpg" alt="Impresa di pulizie Napoli"/></div>
				<div class="col-md-6 col-sm-12">
					<div class="content-block animate" data-animate="fadeInRight" style="margin-top: 0px">
						<h2>Trattamento pavimenti in marmo</h2>
						<p>
							Sul pavimento viene effettuata la procedura di cristallizzazione che consolida e leviga la superficie, chiude i pori e crea l’effetto lucidante.
							<br />
							Il pavimento viene lavato con detergente alcalino o decerante per eliminare lo sporco ed ogni eventuale residuo di cere. Una volta che il pavimento è ben secco,
							si effettua la cristallizzazione con un prodotto specifico spruzzato in piccole quantità e lavorato con monospazzola munita di disco in lana d’acciaio.
						</p>
						<a onclick="javascript:location.href='#estimation'" class="btn btn-md btn-primary">Richiedi maggiori informazioni</a>
						<!--<button class="btn btn-md btn-default">Purchase Now</button>-->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="pavimenti_resina" class="section" style="background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12"><img class="animate img-responsive" data-animate="fadeInLeft" src="assets/images/pavimento-resina.jpg" alt="Impresa di pulizie Salerno"/></div>
				<div class="col-md-6 col-sm-12">
					<div class="content-block animate" data-animate="fadeInRight" style="margin-top: 0px">
						<h2>Trattamento pavimenti linoleum e resina</h2>
						<p>
							La superficie viene lavata a fondo con un detersolvente-decerante per lo sgrassaggio di pavimenti con vecchie incrostazioni di cere al solvente o di unto in generale.
							<br />
							Viene risciacquata accuratamente e in seguito viene trattata con una cera metallizzata ad alta resistenza al traffico ed ai lavaggi anche con detergenti forti e all’alcool.
							Il pavimento risulta di facile pulitura dai segni del traffico mediante semplice lavaggio o lucidato con la macchina ad alta velocit&agrave;.
							Il film “copre” le imperfezioni del pavimento, chiude completamente i pori ed uniforma la superficie. &Egrave; adatto in locali a forte traffico, nonch&egrave; in ospedali e case di cura.
							&Egrave; adatto alla protezione dei pavimenti antistatici di cui non altera la conducibilit&agrave;.
						</p>
						<a onclick="javascript:location.href='#estimation'" class="btn btn-md btn-primary">Richiedi maggiori informazioni</a>
						<!--<button class="btn btn-md btn-default">Purchase Now</button>-->
					</div>
				</div>
             </div>
             <div class="row">
              
                <div class="col-md-3">
                	<video width="100%" height="315" controls style="margin: 35px 0;">
					  <source src="assets/images/pavimenti/pavimento.mp4" type="video/mp4">
					</video>
                </div>
                <div class="col-md-3">
                	<video width="100%" height="315" controls style="margin: 35px 0;">
					  <source src="assets/images/pavimenti/video_pavimenti1.mp4" type="video/mp4">
					</video>
                </div>
                <div class="col-md-3">
                	<video width="100%" height="315" controls style="margin: 35px 0;">
					  <source src="assets/images/pavimenti/video_pavimenti2.mp4" type="video/mp4">
					</video>
                </div>
                <div class="col-md-3">
                	<video width="100%" height="315" controls style="margin: 35px 0;">
					  <source src="assets/images/pavimenti/video_pavimenti3.mp4" type="video/mp4">
					</video>
                </div>
			</div>
		</div>
	</section>
	
	<!-- ==================================================
	End Image Blcok -->

    <!-- Inizio blocco Rcihiedi preventivo
	================================================== -->
    <section id="estimation" class="section" style="background-color:#fff;">
        <div class="container">
            <div class="row">
                <div id="promo" class="col-md-12 animate" data-animate="fadeInUp">
                    <div class="overview">
                        <h1><strong>Richiedi il tuo preventivo gratuito!</strong></h1>
                        <p class="lead">Se vuoi avere una stima per la prestazione di cui hai bisogno, compila il modulo seguente. Service Man sarà al tuo servizio per ogni dettaglio!</p>
                    </div>
					<form action="sendmail.php" method="POST" id="contact_form">
						<div class="input-group">
							<span class="input-group-addon" style="background-color: #34495e"><i class="glyphicon glyphicon-user"></i></span>
							<input id="contact_form_user_name" name="nome" type="text" class="form-control" placeholder="inserisci il tuo nome">
						</div>

						<div class="input-group">
							<span class="input-group-addon" style="background-color: #34495e"><i class="glyphicon glyphicon-envelope"></i></span>
							<input id="contact_form_user_email" name="email" type="email" class="form-control" placeholder="inserisci la tua e-mail">
						</div>

						<div class="input-group">
							<span class="input-group-addon" style="background-color: #34495e"><i class="glyphicon glyphicon-earphone"></i></span>
							<input id="contact_form_user_phone" required name="telefono" type="number" class="form-control" placeholder="inserisci il tuo numero di telefono">
						</div>

						<div class="input-group">
							<span class="input-group-addon" style="background-color: #34495e"><i class="glyphicon glyphicon-pencil"></i></span>
							<textarea id="contact_form_message" name="messaggio" class="form-control" placeholder="inserisci il tuo messaggio"></textarea>
						</div>
						
                        <div class="input-group">
                        
                        	<!-- privacy -->
                            <p style="font-size: 12px; line-height:12px; color: #333;">
                                <input type="checkbox" required class="required" /> Letta e compresa l'informativa privacy presente in questo <a href="https://privacy.clion.agency/privacy.php?id=b9f6df0c3b6faf637c8d99250252eea2&dom=2514" target="_blank">LINK</a>, ai sensi dell’art. 6 del Regolamento Europeo in materia di Protezione dei Dati n. 679/2016, dichiaro di essere maggiore di 16 anni e presto il consenso all’utilizzo dei miei dati.
                            </p>
                            <p style="font-size: 12px; line-height:12px; color: #333;">
                                <input name="spunta_marketing" type="checkbox" /> Presto il mio consenso all'utilizzo dei miei dati personali forniti in questo modulo a questo sito internet per finalit&agrave; promozionali, comunicazioni aventi contenuto promozionale, informativo, inviti, sconti dedicati, annunci sulle ultime novit&agrave; di prodotti e servizi.
                            </p>  
                        <!-- / privacy -->
                        
						</div>
						
						<?php if(($preferenze_clion!=0)&&($preferenze_clion!="0")){ ?><div class="g-recaptcha" data-sitekey="6LfJf78UAAAAAG5pwOCWqs_6eLbjfKjKukBdBMiX" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div><?php } ?>
                        
						<p align="right">
							<button id="contact_form_send_message" class="btn btn-default">INVIA</button>
						</p>
					</form>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================================================
	Fine blocco Richiedi preventivo -->

	<footer class="section" style="background-color:#34495e;color:#ffffff;">
		<div class="container">
			<div class="row">
				<div id="footer-contacts" class="col-md-8 sol-sm-8">
					<span style="display:block;text-align:center">
						Service Man ar.l. - C.F. e P. IVA 02621940648
					</span>
					<span style="display:block;text-align:center">
						Via Carbonara, 24 - 83048 Montella (AV)
					</span>
					<span style="display:block;text-align:center">
						Tel. e Fax. <a href="tel:+390827601691">(+39) 0827 601 691</a>
					</span>
					<span style="display:block;text-align:center">
						Cell. <a href="tel:+393207531008">(+39) 320 753 1008</a>
						&nbsp;-&nbsp;
						<a href="tel:+393207531008">(+39) 345 156 8425</a>
					</span>
					<span style="display:block;text-align:center">
						E-mail. <a href="mailto:info@serviceman.it">info@serviceman.it</a><br>
                        <a href="https://privacy.clion.agency/privacy.php?id=b9f6df0c3b6faf637c8d99250252eea2&dom=2514" target="_blank">Privacy Policy</a> - 
						<a href="https://privacy.clion.agency/cookie_gdpr.php?id=b9f6df0c3b6faf637c8d99250252eea2&dom=2514" target="_blank">Cookie Policy</a>
					</span>
				</div>
				<div class="col-md-4 sol-sm-4">
                	<a href="https://www.prontopro.it/pro/serviceman" target="_blank">
                        <img src="assets/images/logo_partner_code2.jpg" alt="Lavaggio divani Avellino" border="0">
                    </a>
					<!--<div style="border:#ACB4BF 1px solid;width:118px;">
						<a href="https://www.preventivi-imprese-di-pulizia.it/" target="_blank">
							<img src="assets/images/logo_partner_code.jpg" alt="Lavaggio divani Benevento" border="0">
						</a>
					</div>
					<div style="font-family:verdana;font-size:14px">
						<a style="color:#fff" href="https://www.preventivi-imprese-di-pulizia.it/clienti.html/partner-12841/service-man" target="_blank">Service Man ar.l.</a>
					</div>-->
				</div>
			</div>
		</div>
	</footer>
	
	
	
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.scrollto.min.js"></script>
	<script src="assets/js/jquery.localscroll.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
	<script src="assets/js/scripts.js"></script>
    

    <!--Start Cookie Script-->
    <script type="text/javascript" charset="UTF-8" src="../chs03.cookie-script.com/s/5bd076a51edb0f45dba00eaa9b244de3.js"></script>
    <!--End Cookie Script-->
	
	<!-- ********************* -->
	<!-- Start Rocket -->
	<script src="https://privacy.clion.agency/cookie.php?id=b9f6df0c3b6faf637c8d99250252eea2&dom=2514"></script>
	<?php if(($preferenze_clion!=0)&&($preferenze_clion!="0")){ ?><script src='https://www.google.com/recaptcha/api.js'></script><?php } ?>
	</body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105577727-8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-105577727-8');
</script>

</html>
