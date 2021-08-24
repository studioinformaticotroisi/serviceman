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
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,400italic,700italic' rel='stylesheet' type='text/css'>
		
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
	<div id="parallax" class="parallax_tessuti" style="max-height: 350px"></div>
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
			  <img src="assets/images/logo.png" alt="Trattamento pavimenti industriali Avellino" />
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
					  <a onclick="javascript:location.href='#sanity_system'">Sanificazione con Ozono</a>
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
	<section id="features" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Title -->
					<div class="overview animate" data-animate="flipInX">
						<h1>TRATTAMENTO TESSUTI</h1>
						<p class="lead" style="margin-bottom:0;">
							Quando si parla di tessuti, si parla di un ricettacolo di polveri, batteri, funghi, muffe, acari, ecc.
							<br />
							La pulizia, il lavaggio e la manutenzione dei tessuti è un lavoro delicato che necessità di estrema professionalità, esperienza e soprattutto cura e attenzione. Attraverso i nostri trattamenti garantiamo una perfetta igienizzazione.
							<br />
							Service Man propone pulizia, igienizzazione, disinfestazione e sanificazione per l’eliminazione di qualsiasi forma di parassiti, acari e batteri che possono mettere in pericolo la propria salute.
						
                        	<br><br>
                            Si eseguono <strong>sanificazione con ozono</strong> e <strong>trattamento cimici da letto</strong> anche presso alberghi, strutture ricettive e case di riposo
                        </p>
                        
                        
                        
                        <!--<div>
                        
                        	Sanificazione con ozono
                            
                            Trattamento cimici da letto
                        	
                        </div>-->
                        
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
					<a href="assets/images/tessuti/1.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/tessuti/1.jpg" alt="Trattamento pavimenti industriali Benevento" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/tessuti/2.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/tessuti/2.jpg" alt="Trattamento pavimenti industriali Caserta" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/tessuti/3.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/tessuti/3.jpg" alt="Trattamento pavimenti industriali Napoli" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/tessuti/4.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/tessuti/4.jpg" alt="Trattamento pavimenti industriali Salerno" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/tessuti/tessuto1.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/tessuti/tessuto1.jpg" alt="Trattamento pavimenti Napoli" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/tessuti/tessuto2.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/tessuti/tessuto2.jpg" alt="Trattamento pavimenti Salerno" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/tessuti/tessuto3.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/tessuti/tessuto3.jpg" alt="Impresa di pulizie Avellino" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
				
                <div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/tessuti/5.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/tessuti/5.jpg" alt="Impresa di pulizie Avellino" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
                 <div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/tessuti/6.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/tessuti/6.jpg" alt="Impresa di pulizie Avellino" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
                 <div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/tessuti/7.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/tessuti/7.jpg" alt="Impresa di pulizie Avellino" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
                <div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/tessuti/8.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/tessuti/8.jpg" alt="Impresa di pulizie Avellino" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
                <div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/tessuti/9.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/tessuti/9.jpg" alt="Impresa di pulizie Avellino" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
                <div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/tessuti/12.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/tessuti/12s.jpg" alt="Impresa di pulizie Avellino" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
                <div class="col-md-3 col-sm-4 col-xs-6">
					<a href="assets/images/tessuti/13.jpg" title="" rel="prettyPhoto[gallery-1]">
						<img src="assets/images/tessuti/13.jpg" alt="Impresa di pulizie Avellino" class="img-rounded image-responsive animate" data-animate="fadeIn">
					</a>
				</div>
                
                
                
				
			</div>
		</div>
	</section>
	
	<!-- ==================================================
	End Gallery Blcok -->
    
	<!-- Start Image Block
	================================================== -->
	<section id="tappeti" class="section" style="background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<img class="animate img-responsive" data-animate="fadeInLeft" src="assets/images/serviceman_lavaggio_tappeti.jpg" alt="Impresa di pulizie Benevento" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"/>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="content-block animate" data-animate="fadeInRight">
						<h2>Lavaggio TAPPETI e MOQUETTE</h2>
						<!--<p class="lead">Adatta anche per lavaggio materassi, moquette e tappeti.</p>-->
						<!--<hr />-->
						<p>
							Tappeti e moquettes si possono considerare le “calamite” dei quattro elementi esterni che, col tempo provocano una cattiva igiene e sono:
							<br />
							- <b>particelle aeree</b> cioè le particelle grasse, dell’inquinamento atmosferico che oltre a provocare la perdita del colore dei tessuti, permettono l’adesione di altri elementi di sporco, facendone da collante
							<br />
							- <b>particelle solide</b>: queste rappresentano la maggior parte della sporcizia: granelli di polvere, terra e sabbia vengono schiacciati all’interno del tessuto dal calpestio delle nostre suole.
							<br />
							- <b>rifiuti organici</b>, provocati dal nostro vivere quotidiano negli ambienti domestici: si tratta infatti di briciole di cibo, capelli, peli di animale e dell’uomo, particelle di pelle, residui di unghie, forfora, ecc.,
							<br />
							- <b>elementi allo stato liquido</b>: sono i più dannosi: entrano in profondità del tessuto trascinando con sé particelle aeree, solide e rifiuti organici, causando una grave minaccia per i tessuti sia igienicamente , sia esteticamente .
						</p>
						<a href="#estimation"class="btn btn-md btn-primary">Richiedi maggiori informazioni</a>
						<!--<button class="btn btn-md btn-default">Purchase Now</button>-->
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- ==================================================
	End Image Blcok -->
	<!-- Start Image Block
	================================================== -->
	<section id="divani" class="section" style="background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<img class="animate img-responsive" data-animate="fadeInLeft" src="assets/images/serviceman_lavaggio_divani.jpg" alt="Impresa di pulizie Caserta" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"/>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="content-block animate" data-animate="fadeInRight">
						<h2>Lavaggio DIVANI e POLTRONE</h2>
						<!--<p class="lead">Adatta anche per lavaggio materassi, moquette e tappeti.</p>-->
						<!--<hr />-->
						<p>
							Il divano e/o la poltrona sono i posti ideali dove si annidano polveri, peli di animale e dove vivono e si riproducono acari e molti altri agenti allergenici.
							<br />
							A volte capita anche di fare uno spuntino e bere sul divano e/o poltrona, spargendo così briciole e provocando macchie, finendo col rendere questi arredi fra i più sporchi ed anti-igienici che abbiamo all’interno della nostra abitazione, oltre ai materassi.
							<br />
							Sbattere i cuscini o passare l’aspirapolvere, non bastano per liberare divani e poltrone da acari, polveri, batteri, macchie, ecc.
							E’ fondamentale far pulire periodicamente, igienizzare e sanificare divani e poltrone soprattutto per chi convive con animali, bambini, anziani e persone predisposte o soggette a disturbi respiratori. Ed allora è bene contare periodicamente sull'esperienza e competenza di Service Man che con macchinari ad alta tecnologia e prodotti anallergici provvederà a liberarci da tutte le presenze invisibili ma fastidiose.
						</p>
                        
                        
                        
						<a href="#estimation"class="btn btn-md btn-primary">Richiedi maggiori informazioni</a>
						<!--<button class="btn btn-md btn-default">Purchase Now</button>-->
					</div>
				</div>
                
                <div class="col-md-4 col-sm-12">
                	<iframe width="100%" height="315" src="https://www.youtube.com/embed/DDDoykLR7b8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="width: 100%; max-width: 600px; margin: 25px 0;"></iframe>
                </div>
                <div class="col-md-4 col-sm-12">
                	<iframe width="560" height="315" src="https://www.youtube.com/embed/DDDoykLR7b8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="width: 100%; max-width: 600px; margin: 25px 0;"></iframe>
                </div>
                <div class="col-md-4 col-sm-12" style="margin-top: 25px">
                	<video width="100%" height="315" controls>
					  <source src="assets/images/tessuti/video_tessuto.mp4" type="video/mp4">
					</video> 
                </div>
           </div>
           <div class="row">
                <div class="col-md-4 col-sm-12" style="margin-top: 25px">
                	<video width="100%" height="315" controls>
					  <source src="assets/images/tessuti/video_tessuto2.mp4" type="video/mp4">
					</video> 
                </div>
                <div class="col-md-4 col-sm-12" style="margin-top: 25px">
                	<video width="100%" height="315" controls>
					  <source src="assets/images/tessuti/video_tessuto3.mp4" type="video/mp4">
					</video> 
                </div>
                
                
			</div>
		</div>
	</section>
	
	<!-- ==================================================
	End Image Blcok -->
	
    <!-- Start Image Block
	================================================== -->
	<section id="materassi" class="section" style="background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12"><img class="animate img-responsive" data-animate="fadeInLeft" src="assets/images/serviceman_lavaggio_materassi.jpg" alt="Impresa di pulizie Napoli"/></div>
				<div class="col-md-6 col-sm-12">
					<div class="content-block animate" data-animate="fadeInRight">
						<h2>Lavaggio MATERASSI e CUSCINI</h2>
						<p>
							Sul materasso e sul cuscino trascorriamo più o meno un terzo della nostra vita (6/8 ore per notte).
							In ogni tipo di materasso anche in quelli in lattice, prolificano gli acari, parassiti e batteri che con i loro escrementi
							e con le polveri che si annidano in ogni recesso, sono responsabili di svariati problemi di salute come forme di allergie,
							asma, eczemi, dermatiti, ecc.
							<br />
							Da recenti studi si è appurato che ogni mese si lascia un intero strato di pelle nelle imbottiture del materasso che,
							grazie all’umidità provocata dal sudore, genera un lauto banchetto per gli acari della polvere.
							<br />
							E’ quindi importante, per un nostro vivere meglio, far pulire, igienizzare e sanificare i nostri materassi con scadenza
							periodica, perché è di fondamentale importanza per la nostra stessa salute.
							Poiché il sonno è fondamentale per il nostro benessere, non solo fisico ma anche psichico, è importante che avvenga
							su di un materasso pulito e igienizzato.
						</p>
						<a href="#estimation"class="btn btn-md btn-primary">Richiedi maggiori informazioni</a>
						<!--<button class="btn btn-md btn-default">Purchase Now</button>-->
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==================================================
	End Image Blcok -->

	<!-- Start Features
	================================================== -->
	<section id="features_end" class="section" style="background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);padding-top:0;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Title -->
					<div class="overview animate" data-animate="flipInX" style="margin-top: 30px">
						<h1>I TRATTAMENTI</h1>
						<p class="lead" style="margin-bottom:0;">
							Oltre alla neutralizzazione e polverizzazione degli acari e tutti i parassiti con accurata aspirazione dello sporco
							in superficie, si procede con il lavaggio e lo smacchiamento dei tessuti.
							<br />
							Successivamente si procede con la disinfestazione per evitare l'insorgere o la proliferazione delle allergie.
							<br />
							A trattamento completato, la ditta Service Man effettua una sanificazione completa dell'ambiente attraverso
							l'Ozono, che elimina definitivamente batteri, acari, muffe, macchie e cattivi odori.
							<br />
							L’uso dell’Ozono evita l’utilizzo di prodotti chimici che, se assorbiti, potrebbero rilasciare
							esalazioni dannose con gravi danni per la nostra salute. Ecco perchè Service Man si avvale di questa tecnica,
							che basa la sua operatività sull’utilizzo di prodotti anallergici, assolutamente non nocivi e non dannosi,
							ma soprattutto a basso impatto ambientale.
							<br />
							Su richiesta, per le strutture ricettive, Service Man rilascia un attestato che certifica una migliore qualità
							del servizio attrarverso la completa sanificazione e igienizzazione dell'ambiente.
							<br />
							L'attestato può essere esposto nei vari ambienti sanificati e igienizzati della struttura, ben visibile a chiunque,
							e può essere inserito in qualsiasi pubblicità.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ==================================================
	End Features -->

	<section id="sanity_system" class="section" style="background: rgb(38, 80, 140);">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<img src="assets/images/Sanity-System.jpg" style="width: 100%; border-radius: 8px;" alt="Impresa di pulizie Salerno"/>
				</div>

				<div class="col-md-9" style="color: #ffffff;">
					<h3>Sanifica ambienti e superfici con l'ozono</h3>
					<p>
						L’ozono è il più potente disinfettante naturale conosciuto. Aggredisce ed elimina circa il 99,98% di batteri, muffe, funghi, lieviti, virus, pollini ed acari. È un potente aiuto nella lotta contro allergie, asme e infezioni perché abbatte la carica microbica presente negli ambienti e sulle superfici. Grazie alle sue proprietà ossidanti, l’ozono igienizza, ossigena e rigenera l’aria che respiriamo e l’acqua che utilizziamo.
					</p>
					<a class="btn btn-info pull-left" href="sanificazione.pdf" target="_blank">DETTAGLI SUL SISTEMA DI SANIFICAZIONE</a>
					<a href="https://youtu.be/oaGprsPMB_A" class="btn btn-info pull-right" target="_blank">Visualizza Video</a>
				</div>
			</div>
		</div>
	</section>
	
    <!-- Inizio blocco Rcihiedi preventivo
	================================================== -->
    <section id="estimation" class="section">
        <div class="container">
            <div class="row">
                <div id="promo" class="col-md-12 animate" data-animate="fadeInUp">
                    <div class="overview">
                        <h1><strong>Richiedi il tuo preventivo gratuito!</strong></h1>
                        <p class="lead">
							Se vuoi avere ulteriori dettagli o vuoi avere una stima per la prestazione di cui hai bisogno,
							compila il modulo seguente.
							Service Man sarà al tuo servizio per ogni dettaglio!
						</p>
                    </div>
                    <!--<form id="estimation_form">-->
                        <!--<div class="input-group">-->
                            <!--<span class="input-group-addon" style="background-color: #34495e"><i class="glyphicon glyphicon-user"></i></span>-->
                            <!--<input id="estimation_form_user_name" type="text" class="form-control" name="user_name" placeholder="inserisci il tuo nome">-->
                        <!--</div>-->

                        <!--<div class="input-group">-->
                            <!--<span class="input-group-addon" style="background-color: #34495e"><i class="glyphicon glyphicon-envelope"></i></span>-->
                            <!--<input id="estimation_form_user_email" type="email" class="form-control" name="user_email" placeholder="inserisci la tua e-mail">-->
                        <!--</div>-->

                        <!--<div class="input-group">-->
                            <!--<span class="input-group-addon" style="background-color: #34495e"><i class="glyphicon glyphicon-earphone"></i></span>-->
                            <!--<input id="estimation_form_user_phone" type="number" class="form-control" name="user_phone" placeholder="inserisci il tuo numero di telefono">-->
                        <!--</div>-->

                        <!--<p align="right">-->
                            <!--<button id="estimation_form_send_message" class="btn btn-default">INVIA</button>-->
                        <!--</p>-->
                    <!--</form>-->

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
						
						<?php if(($preferenze_clion!=0)&&($preferenze_clion!="0")){ ?><div class="g-recaptcha" data-sitekey="6LfJf78UAAAAAG5pwOCWqs_6eLbjfKjKukBdBMiX" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div><?php } ?>
                        </div>
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
						<a href="http://www.preventivi-imprese-di-pulizia.it/" target="_blank">
							<img src="assets/images/logo_partner_code.jpg" alt="Lavaggio divani Benevento" border="0">
						</a>
					</div>
					<div style="font-family:verdana;font-size:14px">
						<a style="color:#fff" href="http://www.preventivi-imprese-di-pulizia.it/clienti.html/partner-12841/service-man" target="_blank">Service Man ar.l.</a>
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
