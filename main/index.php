<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tantsumeka</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="http://greeny.cs.tlu.ee/~ttaevik/test/Ryhm_4/main/assets/css/style.css" rel="stylesheet">
	<script>
		
		function collapsePanels(){
			jQuery('.collapse').collapse('hide');
		}

	</script>
</head>
<body>
<div id="wrapper">
<!-- Navigation -->
<<<<<<< HEAD:main/index.php

<?php
	require("header.php");
?>

=======
<header id="topofpage">
<nav class="navbar navbar-expand-lg d-flex navbar-light bg-logo fixed-top">
<div class="container">
	<a class="navbar-brand logo" href="#tutvustus" target="_self" style="background-image:url(&quot;assets/img/tantsumeka_hele.png&quot;);" onclick="showHeaderText()"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
			    <a class="nav-link" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" style="color: #ffef8f;">KURSUSED</a>
			    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			     <a class="dropdown-item" href="#algkursus" target="_self" onclick="hideHeaderText()">Algkursus</a>
			      <a class="dropdown-item" href="#jatkukursus" target="_self" onclick="hideHeaderText()">Jätkukursus</a>
			      <a class="dropdown-item" href="#edasijoudnud" target="_self" onclick="hideHeaderText()">Edasijõudnute kursus</a>
			      <a class="dropdown-item" href="#kursused_calendar" target="_self" onclick="hideHeaderText()">Kalender</a>
			      <a class="dropdown-item" href="#kursus_registration" target="_self" onclick="hideHeaderText()">Registreerimine</a>
			    </div>
			</li>
			<li class="nav-item dropdown">
			    <a class="nav-link"  data-toggle="dropdown" href="#" style="color: #ffef8f;">HOBITANTS</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="#hobiklubi" target="_self" onclick="hideHeaderText()">Hobiklubi</a>
			      <a class="dropdown-item" href="#hobitants_calendar" target="_self">Kalender</a>
			      <a class="dropdown-item" href="#" target="_self">Registreerimine</a>
			    </div>
			</li>
			<li class="nav-item dropdown">
			    <a class="nav-link" data-toggle="dropdown" href="#" style="color: #ffef8f;">VÕISTLUSTANTS</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="#voistlustants" target="_self">Võistlusttants täiskasvanutele</a>
			      <a class="dropdown-item" href="#voistlustants_calendar" target="_self">Kalender</a>
			      <a class="dropdown-item" href="#" target="_self">Registreerimine</a>
			    </div>
			</li>
			<li class="nav-item dropdown">
			    <a class="nav-link" data-toggle="dropdown" href="#" style="color: #ffef8f;">ERATUNNID</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="#" target="_self">Pulmatants</a>
			      <a class="dropdown-item" href="#" target="_self">Seltskonnatants</a>
			      <a class="dropdown-item" href="#" target="_self">Võistlustants</a>
			      <a class="dropdown-item" href="#" target="_self">Kalender</a>
			      <a class="dropdown-item" href="#" target="_self">Registreerimine</a>
			    </div>
			</li>
			<li class="nav-item dropdown">
			    <a class="nav-link" data-toggle="dropdown" href="#" style="color: #ffef8f;">TANTSUTARBED</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="#" target="_self">Tantsukingad</a>
			      <a class="dropdown-item" href="#" target="_self">Tantsurõivad</a>
			    </div>
			</li>
			<li class="nav-item dropdown">
			    <a class="nav-link" data-toggle="dropdown" href="#" style="color: #ffef8f;">LISAKS</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="#" target="_self">Galerii</a>
			      <a class="dropdown-item" href="#" target="_self">Kontakt</a>
			      <a class="dropdown-item" href="#" target="_self">Something else here</a>
			    </div>
			</li>
		</ul>
	</div>
</div>
</nav>
>>>>>>> 26076ceda92ed8107547099e26b86e977a67afe9:main/index.html
<section id="tutvustus">
<div class="video-header wrap">
	<div class="fullscreen-video-wrap active">
		<video autoplay muted loop id="myVideo">
			<source src="assets/video/video.mp4" type="video/mp4">
		</video>
	</div>
</div>

<!--- Tantsumeka -->
<div class="container-fluid padding">
<div class="row welcome text-center padding">
	<div class="col-12">
		<h1 class="display-4">TANTSUMEKA</h1>
	</div>
	<hr>
	<div class="col-12">
		<p class="moto">Tants aitab elust rõõmu tunda!</p>
	</div>
</div>
</div>

<!--Tutvustus põhjalik-->
<div class="container-fluid col-lg-10">
<div class="row padding">
	<div class="col-lg-6 about-1">
		<p>Tantsumeka on loodud 2011. aastal ja välja kasvanud Ants Taela legendaarsest Taela Tantsukoolist, mis tegutses 1965-2011 Mustpeade Majas. Tantsumeka eesmärgiks on olla sõltumatu tantsukeskus Eestis ning teha tantsualast koostööd rahvusvahelisel tasemel. Tantsumeka on avatud kõikidele tantsuhuvilistele, nii algajatele, edasijõudnutele kui ka professionaalsetele tantsijatele, arendamaks oma tantsualaseid oskusi.</p>
	</div>
	<div class="col-lg-6 about-1">
		<p>Tantsumeka viib läbi täiskasvanute võistlustantsutreeninguid, seltskonnatantsu kursusi, samuti eratunde ja individuaalset nõustamist seltskonnatantsu algtasemest kuni võistlustantsu tipptasemeni. Tantsumeka tuumikuks on hobiklubi, kuhu on koondunud paarid, kes harrastavad tantsu juba aastaid. Tantsumeka tegutseb Tallinnas Rocca Al Mare Koolis ja Haabersti Vene Gümnaasiumis.</p>
	</div>
</div>
</div>

<div class="page-slicer">
	<hr>
</div>
<!--Treenerid-->

<div class="container-fluid col-lg-10 padding">
<div class="row padding">
	<div class="col-12" id="tantsud">
		<h2 class="text-center">Tantsuõpetajad / assistendid</h2>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="card">
			<div class="card-body">
				<img class="card-img-top" src="assets/img/treenerid/atreener1.jpg">
				<a data-toggle="collapse" class="btn btn-block" onclick="collapsePanels()" href="#treener1" aria-expanded="false" aria-controls="treener1">
				<h2 class="card-title text-center">Matis Toome</h2></a>
                <div class="collapse" id="treener1">
				<div class="card card-body" id="tabp">
				<p class="card-text">
Tantsumeka juht ja tantsuõpetaja Matis Toome on tegelenud võistlustantsuga üle 25 aasta. 1995. aastal sooritas ta Eesti Tantsuõpetajate Liidus esimesed tantsuõpetaja eksamid ja alustas võistlemist Helen Klandorf-Sadamaga elukutselise võistluspaarina.Nende parimad saavutused on tantsuspordis EM 5. koht ja MM 9. koht. Tallinna Ülikoolis on ta lõpetanud baccalaureus artiumi koreograafia-tantsuõpetaja erialal ning kunstide magistriõppe koreograaf-lavastaja erialal. Matis Toome on ainus rahvusvahelise elukutselisi tantsijaid ja tantsuõpetajaid ühendava organisatsiooni (World Dance Council) tantsuõpetajate koolitaja ja eksaminaator Eestis. Eesti Olümpiakomitee poolt on talle väljastatud tähtajatu meistertreeneri kutsetunnistus. Samuti on ta Eesti Tantsuõpetajate Liidu president.</p>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="card">
			<div class="card-body">
<<<<<<< HEAD:main/index.php
				<img class="card-img-top" src="assets/img/treenerid/atreener2.jpg">
				<a data-toggle="collapse" class="btn btn-block" onclick="collapsePanels()" href="#treener2" aria-expanded="false" aria-controls="treener2">
				<h2 class="card-title text-center">Liina-Liis Liiv-Toome</h2></a>
=======
				<img class="card-img-top" src="assets/img/treenerid/treener2.jpg">
				
				<h2 class="card-title text-center">Liina-Liis Liiv-Toome</h2>
>>>>>>> 26076ceda92ed8107547099e26b86e977a67afe9:main/index.html
				<div class="collapse" id="treener2">
				<div class="card card-body" id="tabp">
				<p class="card-text">
Liina-Liis Liiv-Toome on Tantsumeka asutajaliige ja üks tantsukooli eestvedajatest. Liina-Liis on õppinud paljusid tantsustiile alates võistlustantsust kuni klassikalise ning kaasaegse tantsuni välja. Liina-Liis on lõpetanud Tallinna Ülikooli koreograafia erialal, töötanud repetiitori ja õpetjana Eesti Tantsuagentuuris ning etendusproduktsioonifirmas Dance Factory, olnud Kaie Kõrbi Balletistuudio juhataja ning juhtinud mitmeid teisi tantsuprojekte. Liina-Liis peab tantsu  elus väga tähtsaks, kuna see tekitab hea meeleolu ja annab positiivset energiat.</p>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="card">
			<div class="card-body">
				<img class="card-img-top" src="assets/img/treenerid/atreener3.jpg">
				<a data-toggle="collapse" class="btn btn-block" onclick="collapsePanels()" href="#treener3" aria-expanded="false" aria-controls="treener3">
				<h2 class="card-title text-center">Käthe Kobin</h2></a>
				<div class="collapse" id="treener3">
				<div class="card card-body" id="tabp">
				<p class="card-text">
Käthe Kobin on tegelenud tantsuga peaaegu kogu oma elu, alustades 4. aastasena balletitundides ning sealt edasi võistlustantsutreeningutega. Pärast aktiivset võistlustantsijakarjääri sooritas Käthe Eesti Tantsuõpetajate Liidu seltskonna-ja võistlustantsuõpetaja kutseeksami. 16. aastat töötas Käthe Taela Tantsukoolis legendaarse tantsuõpetaja Ants Taela assistenina ning jätkas seejärel Tantsumekas.
				</p>
				</div>
				</div> 
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="card">
			<div class="card-body">
				<img class="card-img-top" src="assets/img/treenerid/atreener4.jpg">
				<a data-toggle="collapse" class="btn btn-block" onclick="collapsePanels()" href="#treener4" aria-expanded="false" aria-controls="treener4">
				<h2 class="card-title text-center">Elery Kiviberg</h2></a>
				<div class="collapse" id="treener4">
				<div class="card card-body" id="tabp">
				<p class="card-text">
Elery Kiviberg alustas treeninguid lapsepõlves kujundrulluisutajana. Armastus võistlustantsu vastu tekkis Eleryl 4. klassi lõpupeol, kus esines võistlustantsupaar ja juba järgmisel nädalal läks ta esimesse tantsutundi. Elery on treeninud mitmetes tantsukoolides nii Eestis kui Soomes, sealhulgas Revalia Tantsukoolis ja Harri Antikaineni stuudios ning olnud pikka aega Matis Toome õpilane. 
				</p>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="card">
			<div class="card-body">
				<img class="card-img-top" src="assets/img/treenerid/atreener5.jpg">
				<a data-toggle="collapse" class="btn btn-block" onclick="collapsePanels()" href="#treener5" aria-expanded="false" aria-controls="treener5">
				<h2 class="card-title text-center">Anna Kustova</h2></a>
				<div class="collapse" id="treener5">
				<div class="card card-body" id="tabp">
				<p class="card-text">
Anna Kustova on tegelenud võistlustantsuga alates 7. eluaastast. Kogu tema tantsijakarjäär on olnud täis huvitavaid tutvumisi, praktikat, võstlusi ja esinemisi ning see lõppes ülikooli õppima asumisega. Ülikoolis õppides alustas Anna tantsuõpetajana. Praegu tegeleb Anna enda jaoks Bailatino trennidega ning aitab kaasa ka seltskonnatantsijate õpetamisel. Tantsu õpetamine on Annale huvitav kogemus, mis annab võimaluse oma teadmisi tantsust teistega jagada.
				</p>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="card">
			<div class="card-body">
				<img class="card-img-top" src="assets/img/treenerid/atreener6.jpg">
				<a data-toggle="collapse" class="btn btn-block" onclick="collapsePanels()" href="#treener6" aria-expanded="false" aria-controls="treener6">
				<h2 class="card-title text-center">Timo Alavere</h2></a>
				<div class="collapse" id="treener6">
				<div class="card card-body" id="tabp">
				<p class="card-text">
Timo Alavere on tegelenud võistlustantsuga 9 aastat ning õppinud Matis Toome, Helen Klandorf-Sadama, Heili Klandorfi ja teiste Revalia Tantsukooli õpetajate käe all. Timo sportlaskarjäär lõppes kodupubliku ees Rakveres aastal 2011.	Juba tantsusportlasena alustas Timo tantsutreeningute läbiviimist oma kodukohas Rakveres. 2014. aastal sooritas Timo edukalt Eesti Tantsuõpetajate Liidu tantsuõpetaja kutseeksami. Lisaks tantsutreeningutele Tallinnas viib Timo kursusi läbi ka kodukandis Lääne-Virumaal.
				</p>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="page-slicer">
	<hr>
</div>

<!--Tantsustiilid-->
<section id="tantsud" class="clean-block clean-info dark">
    <div class="container-fluid col-lg-10 tabl-heading padding">
        <h2 class="text-center">Tantsututvustused</h2>
            <ul class="nav nav-tabs text-center">
                <li class="nav-item tabl"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Aeglane valss</a></li>
                <li class="nav-item tabl"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Tango</a></li>
                <li class="nav-item tabl"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">Viini valss</a></li>
                <li class="nav-item tabl"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-4">Fokstrott</a></li>
                <li class="nav-item tabl"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-5">Quickstep</a></li>
                <li class="nav-item tabl"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-6">Samba</a></li>
                <li class="nav-item tabl"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-7">Tša-tša-tša</a></li>
                <li class="nav-item tabl"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-8">Rumba</a></li>
                <li class="nav-item tabl"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-9">Dšaiv</a></li>
                <li class="nav-item tabl"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-10">Rock</a></li>
            </ul>
            <br>
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="tab-1">
                    <p id="tabp" class="card card-body">Aeglase valsi e inglise valsi sünnilugu on seotud vanima paaristantsu VIINI VALSIGA, millest said alguse teisedki valsid nagu DŽÄSS VALSS, BEAT VALSS ja BOSTON VALSS. Boston oli Aeglase Valsi eelkäija, pikkade ja libisevate liigutustega tants, mis saabus Euroopasse 1874.aastal.Umbes samal ajal loodi Inglismaal mõjukas Bostoni klubi. 1920-ndail kujunes Inglismaa seltskonnatantsu suunanäitajaks. <a data-toggle="collapse" href="#aeglane_valss" aria-expanded="false" aria-controls="aeglane_valss">loe edasi..</a></p>
                    <div class="collapse" id="aeglane_valss">
					<div class="card card-body" id="tabp">
1922.aastal võitsid Victor Silvester ja Phyllis Clarke Londonis toimunud Maailma Meistrivõistlused, kasutades esmakordselt Aeglases Valsis jalgade paralleelasendit. Algselt tantsiti Inglise valsis vaid paremale, vasakule pöördeid ja vahetussammu. Aeg oli muutusteks küps. Inglise valss saavutas sarnase populaarsuse tangoga. 1924.aastal alustas Inglise Tantsuõpetajate Ühingu juures tööd 5-liikmeline tantsuõpetajate grupp, et ühtlustada seltskonnatantsu õpetust. Tolleaegsed järeldused ja põhitõed on standardtantsudes aktuaalsed tänagi, nii nagu pöidade paralleelsus, keha kallutused, tõusud ja laskumised, vastandliikumine. 1924-1926. aastal levis tants Inglismaalt Euroopa mandriosale .Algselt tantsiti Aeglast Valssi analoogselt Viini Valsiga, ainult aeglasemas tempos. Tolleaegne suurim inglise valsi muusikameister oli Irving Berlin sellise igihalja meloodiaga, nagu True Love. 1926-27.aastal arenes aeglane valss märkimisväärselt. Põhiliikumise muutumine tänasega sarnaseks võimaldas erinevate figuuride teostamist. Paras tempo aeglaseks valsiks on 30-33TM, taktimõõt on ¾. Kuna esimene löök on enam aktsentueeritud, antakse ka tantsides hoogu just esimesel sammul, mille tulemusel saavutatakse suurem liikumine 2. s. Liikumine sarnaneb kellapendli või kiige liikumisega. Tõusud ja laskumised ongi valsside tunnussõnaks. Kui sooviksime anda igale sammule kindla ülesande, siis kõlaks see nii: 1) hoog, 2) liikumine, 3) laskumine. Iga takt algab kas parema või vasaku jalaga.
					</div>
					</div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-2">
                    <p id="tabp" class="card card-body">Tango päritolu üle vaieldakse. Omaks tantsuks peetakse Argentiinas, Brasiilias, Mehhikos, Boliivias, Paraguais, Hispaanias. Tants sündis u. 500 aastat tagasi Tang-Ho linnas, kust mustlastega rändas Hispaaniasse. Kui 16.saj. hispaanlased koloniseerisid Argentiina, võeti paljud rahvatantsud kaasa. Hispaania Flamenco on Tango kujunemise inspiratsiooniallikas. T ongi Kuuba habaneera, Brasiilia milonga ja orjade tantsitud tangano hübriid, mida 19.saj. lõpul tantsiti Buenos Airese getodes. <a data-toggle="collapse" href="#tango" aria-expanded="false" aria-controls="tango">loe edasi..</a></p>
                    <div class="collapse" id="tango">
					<div class="card card-body" id="tabp">
19. ja 20. saj. vahetusel aktsepteeriti tantsu, mis seni oli levinud vaid alamkihtide seas, ka kõrgklassi poolt. Boenos Airese dändid muutsid tantsu kahes suunas, esiteks rütm muutus habaneralikumaks ja teiseks nimetati milonga ümber tangoks. Algul tantsisid ainult mehed, kuni 1916.a keelati Buenos Aireses T ära. Asjaarmastajad püüdsid eksportida Tangot Pariisi, kuid edutult sest sama palju kui oli tantsijaid oli ka vastaseid. Sellele vaatamata oli T 1909.a. Pariisi Maailma Meistrivõistluste kavas ja 1910.a. esitles Prantsuse tuntud tantsuteatrite solist Robert Mistinguett T Pariisis. Tekib plahvatuslik  T huvi nn. tangomaania, mis levib Pariisist Londonisse, sealt New Yorki. 1912-1913 oligi T Euroopa moetants. Samaaegselt jõuab T Soome, kus ühe trio ja tantsupaariga 20-ndate lõpuks kujunes see Soomes nn. Tamara tantsuks. Vastukaaluks populaarsusele leidus skeptikuid: prantsuse piiskopkond vihjates T sensuaalsusele ja ahvatlustele väitis, et T tantsijad rüvetavad teoloogilisi tõekspidamisi. New Yorgi doktor Boheme avastas aga uue haiguse nimega tango-jalg. 1915.a New York Times avaldas artikli pealkirja all “Tango oht- suurem kui Saksa imperialism.” 1921.a oma filmis “The Four Horsemen of the Apocalypse” populariseeris Rudolf Valentino T.Tantsu populariseeris ka Prantsuse helilooja ja koreograaf Kamill de Rinalc. Euroopas, eriti aga Inglismaal peeti argentiina tangot liiga erootiliseks. Seetõttu töödeldi teda veidi ümber seltskonnas tantsimiseks.Argentiinas aga hakati T mõjul riietuma prantsusepäraselt ja rohkem kasutama prantsuse keelt. I ja II MS vahelisel perioodil, kui mehi liikus seltskonnas vähem olid populaarsed “Tango-teas” e. tango-teeõhtud. Nendel õhtutel istusid 5-6 elukutselist tantsijat nii härrat kui daami laua ääres pilet näpus. Iga 5- naelane pilet andis peokülalistele võimaluse  tantsuks koos “taxi-danceriga”. Raha eest võis endale partneri tellida ka restorani või nn. kabareesse minekuks. Täiesti välistatud oli konservatiivsel Inglismaal partneri kutsumine koju või muul moel lähenemine talle. Küll oli normaalne aga hinnaliste kingituste tegemine. Näiteks kinkis üks naisklient oma heale tantsupartnerile poe. Sellistel suurtel teeõhtutel, kas siis Plaza tantsusaalis või mujal said moodsad ja julgemad tantsijad võimaluse end demonstreerida ja eksperimenteerida. Paljud T ja ka teiste tantsude figuurid on kujunenud läbi tehtud vigade. Näiteks lahtine promenaad või chase tekkis tasakaalu kaotamise tulemusena. Eelpool oli juttu, et üks T eelkäijatest on milonga. Milonga on iseloomult pehme, privaatne tants omapärase jalgade tööga. 1930.a Pariisis muutus see dramaatiliseks, kuna lisandusid uhke ülakeha hoid ja staccato tegevus. Tähelepanu läks jalgadelt enam üle ülakeha ja pea omapärasele liikumisele, mis on tänapäevani säilinud. T on üheks irratsionaalse tantsu näiteks.
Tänapäevasematest filmidest on Tangot esile toodud 1992.a filmis “Scent of a Woman” ning 1994.a “True Lies” Arnold Schwarzeneggeri ja Tia Carrere’ga. Taktimõõt on 2/4 või 4/4. Tempo 31-34 t/min. Aeglased sammud on kahe, kiired ühelöögilised.
					</div>
					</div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-3">
                    <p id="tabp" class="card card-body">1797.a on Wolf öelnud “Valsi tantsimine on tõestus meie generatsiooni keha ja vaimu nõrkusest. Sellegipoolest on W juba üle 100 aasta olnud ballide ava-ja tihti ka lõputants. Ükski naine ei saa tanu alla, ega mees naist majja, kui pruutpaari valss selge pole. W on vanim paaris tantsitav seltskonnatants. Juured ulatuvad 1500.a tantsitud Austria-Saksa rahvatantsuni LANDLER. Palju on vaieldud selle üle, millisest tantsust täpselt tuleneb W. <a data-toggle="collapse" href="#viini_valss" aria-expanded="false" aria-controls="viini_valss">loe edasi..</a></p>
                    <div class="collapse" id="viini_valss">
					<div class="card card-body" id="tabp">
Sadu aastaid tagasi väitsid Prantsuse kirjanikud eesotsas Castil-Blaze’ga, et W on Galliard’i või veelgi tõenäolisemalt Itaalia rahvatantsu Volta järeltulija, mis oli moes Prantsusmaa õukonnas ja Inglismaal. Seda tantsiti 1178.a Pariisis. 16.saj. saavutab Volta Lääne-Euroopa õukondades suure populaarsuse. Seda tantsiti lähestikku, daam härra vasakul küljel, härra käsivars ümber daami piha. 
Shakespeare on kirjutanud: “They bid us to the English dancing schools and teach lavoltas high and swift corantos.” Nii kuninganna Elisabeth I kui ka Šoti kuninganna Mary olid kirglikud Volta tantsijad.(maal-Penshursti Palus Kendis- Kuninganna Elisabeth tantsib Voltat Leicesteri Hertsogiga). Louis XIII keelas Volta kui moraalitu tantsu oma õukonnas aastatel 1610-1613.
Vahepeal, 12-13. sajandil jõudis sündida Baieris tants nimega German, e. valsi eelkäija. Viin on W sünnilinn ,kuid nimetati seda Saksa tantsuks või lihtsalt “Deutscher”. 1760.a. valsilaadsed tantsud keelati, kuid valssimine oli juba nii populaarne, et 1765.a. noor Goethe olles Strassburgi tudeng, tundis karjuvat vajadust see selgeks õppida, kuna Valssi e. Deutscherit oskamata ei olnud võimalik sattuda kõrgemasse seltskonda. Oma romaanis “Noore Wertheri kannatused” ta kirjeldab kuidas Werther ja Lotte tantsides veeresid nagu kera. Sel ajal oli tegu veel ka käte kasutamisega tantsus. Esimesed W meloodiad loodi 1770.a ja 1775.a tutvustati W Pariisis. Lord Byron kritiseeris tantsu kui sündsusetut. Vaatamata sellele avati Viinis saalid Apollo ja Sperl 6000-le tantsijale. Valsi võidukäik sabus Viini heliloojate Joseph Lanneri ning Johann ja Joseph Straussi loominguga. Schubert on kirjutanud üle 250 valsi klaverile ja Schopin 14 valssi. Mozart kirjutas 50 Deutscherit ja 6 Landlerit. Beethoven komponeeris 1795.a. novembris 12 Deutscherit Redoutensaali jaoks. Esmakordselt jõudis W lavale tõenäoliselt 1787.a.Vincent Martin’i ooperiga “Una Causa Rara” ja 1800.a. tantsiti W-i balletis “La Dansomanie”. Populaarne W muusika enne 18.saj. lõppu oli “Ach! Du lieber Augustin”. Tolleaegsed valsimeloodiad olid 3/8 või 6/8 t/m ja võrdlemisi aeglased. Katkendlikud triaadid ja pausid iseloomustavad klassikalist valsimuusikat nagu Weber’i “Kutse tantsule” ja “Sinine Doonau” ning Bach’i “Talupoja Cantaat”. 1816.a aktsepteeriti W-i ka Inglismaal SAKSA VALSI nime all. Valsi algelist vormi tunti Inglismaal ammu enne 1812.a. Cotillonis e. Kontratantsus kasutati üht põimitud kätehoiuga valsi elementi. Sõna Waltzen tähendab saksa keeles “pöörlema”. Pöörlevateks tantsudeks olid veel Dreher, mida tantsiti Bavarias, landler mis pärineb Landl’ist ehk “väikeselt maalt” Austria lääneosas. Dr. Eduard Reeser on andnud välja “Story of the Waltz” milles ta  kirjeldab 18. saj. teise poole Saksamaal tantsitud W. Sel ajal loobutakse W-s Landlerile iseloomulikest liikumistest nagu daami pöörlemine partneri tõstetud käte all, samal ajal kui härra tammub paigal. Konservatiivsel Inglismaal oli tohutu vastuseis uue tantsu suhtes. Näiteks 1833.a avaldas Miss Celbart raamatu käitumisest, milles väidetavalt ainult abielunaised võivad W tantsida. W. oli  revolutsiooniline tants 18. saj. lõpus kuna erinevalt varasematega oli selles vähem ettekirjutusi. Tantsija vaid tiirles ümber saali ja iseenda ümber. See tants oli nagu osake inimkonna üldisest filosoofiast ja elust. Veel XIX saj. algul oli W-i suhtumine ettevaatlik ja üle 10 min. ballidel ei soovitatud seda tantsida. Eesti labajalavalss on W folkloriseeritud teisend. W taktimõõt on ¾, tempo 56-62 T/M. Seega sekundis tuleb meil astuda umbes 3 sammu. Tõusud ja laskumised toimuvad põhiliselt tänu keha swingile, mitte päkkadele tõusu tõttu. Kui vanasti valssi tantsides pööras daam igal taktil pead, siis tänapäeval pole see kombeks.
					</div>
					</div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-4">
                    <p id="tabp" class="card card-body">Fokstroti nime kujunemisel on tegemist sõnademänguga. Harry Fox (tõlkes rebane)- ameerika koomik kasutas oma vodevillides omapärast kõndimisviisi. Ka rebast ennast süüdistatakse tantsu nime tekkes, kuna see loomake kõnnib jalad enda all selliselt, et tekib ainult üks rida jälgi. Nii tantsitigi, jalg jala ette astudes kuni 1950.a pakub “Täiustatud Tantsutehnika õpik” mugavama, kahel liinil astumisviisi. <a data-toggle="collapse" href="#fokstrott" aria-expanded="false" aria-controls="fokstrott">loe edasi..</a></p>
                    <div class="collapse" id="fokstrott">
					<div class="card card-body" id="tabp">
Tegelikult on tants vanem kui AV, mistõttu F figuure kanti üle ka AV-i. Tants sündis 1912.a Põhja-Ameerikas, peale I MS levis Euroopasse koos ragtime muusikaga (džässi eelkäija). Populaarseks said Charleston, Shimmy, Black Bottom, mis ka kadusid kiiresti, kuid  F jäi. 1927.a kirjeldatakse viimast kui libisevat ja tasast tantsu olles kõige enam sarnane loomulikule kõnnile. I MS lõpuaastatel koosnes F peamiselt kõnnist, kolmiksammust ja spinpöördest, 1918.a lisandus laine (wave-“jazz roll” nime all). 1920.a tänu Miss Josephine Bradley ja Mr. G.K.Andersonile lisanduvad sulgsamm ja suunamuutmissamm.Et 1925-1926 tabas Lääne- Euroopat tšaarlstoni hullus, siis koos F-ga „sünnitasid” need kaks kvikstepi.Tol ajal oli Fokstroti tempo 32-50 t/m. Paljud bändid patustasid selle tempo vastu ja mängisid liiga kiirelt. Kriitika selle vastu avaldati isegi ajalehtedes ja ajakirjades. Rahvas rääkis quick-time fokstroti e. taaskord kvikstepi tekkest.Sellest aiendatuna muutuski F tänapäevaga sarnaselt aeglaseks 28-29 t/m. Seltskonnatantsu F ja Q on sarnase skeemiga tantsud, mille mugavaim tempo on 36-46 t/m, taktimõõduga 4/4. Aeglased sammud sooritatakse kahe-, kiired sammud ühelöögilistena ning viimaseid tuleb tantsida paaris arv. Seega aeglast sammu võib sooritada vaid 1-2-le või 3-4-le taktilöögile mitte aga 2-3-le või 4-1-le.
F on 1. ja 3. löök rõhulised.
					</div>
					</div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-5">
                    <p id="tabp" class="card card-body">Q eellased olid one-step, two-step mida tantsiti  Victoria aegses lääne õukonnas ja tšaarlston. One-step, two-step olid Harry Foxi lavašõu “Ziegfeld Follies” õhtunaelaks Vernon ja Irene Castle esituses 1913. a. New Yorgi ööklubides.Esimese Maailmasõja aegu oli Q eriti populaarne NY afroameeriklaste hulgas.
					1923.a.võib pidada Q sünniaastaks, kui Paul Whitemani ansambel külastas Inglismaad. <a data-toggle="collapse" href="#quickstep" aria-expanded="false" aria-controls="quickstep">loe edasi..</a></p>
                    <div class="collapse" id="quickstep">
					<div class="card card-body" id="tabp">
Nende poolt esitatud muusika koondas ühise nimetaja- Quickstepi alla varasemad pop tantsud Shimmy, Black-Bottomi ja Charlestoni. 1927.a. toimus Londonis “Star Championships” tantsuturniir, kus esitati eraldi fokstrotti ja quickstepi, milles olid veel charlestoni elemendid. Edaspidi charlestoni elemendid taanduvad quickstepist ja järele jäävad kõnni- ja jooksusammud, šasseed ja pöörded, mis on tuttavad juba originaal fokstrotist. Lisanduvad sellised kiired elemendid nagu ristsammud ja hüpped. Tänane quickstep on 4/4 taktimõõduga, tempoga 50 takti minutis tantsitav küllaltki populaarne seltskonnatants, mida võib kohandada erinevate muusikastiilidega countryst rockini. Rõhk on 1. ja 3. löögil.
					</div>
					</div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-6">
                	<p id="tabp" class="card card-body">Kuni 1914a-ni tantsiti Brasiilias tantsu maxix.
					16.saj. importisid portugallased orje Angolast ja Kongost Brasiiliasse. Samba pärineb Aafrika orjade tantsust kuid on ümber töödeldud Brasiilia karnevalitantsu versioon. Portugalikeelne sõna “Zambo” tähendab neegri mehe ja brasiillanna järeltulijat. Tõepoolest on Samba tants, mis kütab kirgi üles ekstaasini. <a data-toggle="collapse" href="#samba" aria-expanded="false" aria-controls="samba">loe edasi..</a></p>
                	<div class="collapse" id="samba">
					<div class="card card-body" id="tabp">
Veel praegugi tantsitakse Rio karnevalidel Samba sugulastantse nagu BAION, MARCHA JA MAXIXE. Samba arengule on oma pitseri pannud Fred Astaire filmis “Flying Down to Rio”, mis esilinastus Inglismaal 1934.a, milles ta tantsis  üht Samba vormi- CARIOCA’T. Samba moodsat seltskonnatantsu versiooni esitleti New Yorgi maailmanäitustel 1934.a ja peale II Maailmasõda muutus tants populaarseks kogu Euroopas. 1950-ndatel populariseeris printsess Margareth Sambat Briti kõrgemas seltskonnas. Samba taktimõõt on 2/4 või 4/4, tempo 50-60 T/M. Kahelöögilise takti puhul on teine löök rõhutatum. Samba on ladina-ameerika tantsudest üks universaalsemaid, kuna seda saab tantsida paljude erinevate rütmiliste muusikapalade saatel. Kõige iseloomulikum sellele tantsule on kerge vetrumine põlvedest ja hüppeliigesest, samuti rotatsioon puusadest. Tänu samba erinevatele rütmivariantidele, 9 tk, kujunesid sellest hiljem veel lambada ja makarena ja bachata.						
					</div>
					</div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-7">
                    <p id="tabp" class="card card-body">Tša-tša-tša - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi. <a data-toggle="collapse" href="#tsa-tsa-tsa" aria-expanded="false" aria-controls="tsa-tsa-tsa">loe edasi..</a></p>
                    <div class="collapse" id="tsa-tsa-tsa">
					<div class="card card-body" id="tabp">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.		
					</div>
					</div>	
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-8">
                    <p id="tabp" class="card card-body">Rumba on Aafrika päritoluga Kuuba rahvatants.
					Umbes 400 aastat tagasi  randusid Kuuba rannikul laevad Aafrika mustade orjadega. Orjad tegid kohvi- ja puuvillaistandustes sunnitööd ning olid aheldatud omavahel jalakettidega. Olles tööl nad laulsid ja tantsisid, et unustada oma kurba saatust, aga ahelad ei lubanud neil kuigi palju liikuda, vaid kolm sammu paremale või vasakule. <a data-toggle="collapse" href="#rumba" aria-expanded="false" aria-controls="rumba">loe edasi..</a></p>
                    <div class="collapse" id="rumba">
					<div class="card card-body" id="tabp">
Nii sündiski rumba põhirütm oma 1/8 löökide grupeerimise 3+3+2 ja rõhuasetusega 4.ndale taktilöögile. Muusika on 4/4 taktimõõdus tempoga 27 -30 takti minutis. Nimetus R pärineb tõenäoliselt tantsuorkestri Rumboso Orquestra nimest 1807.a-st ja hispaaniakeelsest sõnast „rhum”, mis viitab alkohoolsele joogile. Neegerorjad kandsid istandustes kogutud saaki anumates pea peal, mistõttu sai liikuda vaid lühikese sammuga, jalga libistades ja puusavöö vajus kaasa. Orjade isandad hispaanlased, samuti musikaalne ja tantsuline rahvas, mõjutasid omakorda rumba kujunemist. 19.sajandi keskel hakkas rahvatants rumba tungima Havanna tantsusaalidesse ja kujunes seltskonnatantsuks. Sealt rändas tants Põhja-Ameerikasse ning 1930.a. jõudis Euroopasse, kus ta küll eriti moes ei olnud, küll aga võeti Saksamaal 1932.a. tantsuturniiride kavva. Peale II Maailmasõda1947.a. levis Kuubalt Euroopasse tänu Inglise tantsuõpetajale, Pierre Lavelle, veel üks rumba teisend-kuuba rumba, mis põhjustas tantsuõpetajate vahel nn. “rumbasõja”. Selle lõpetas 3.juunil 1962.a. Pariisis sõlmitud kokkulepe, et Kuuba rumba (e. single-mambo e. mambo-bolero) jääb võistlustantsuks ning seltskonnatantsukursustel õpetatakse tuntud ameerika rumbat e. ruutrumbat. Üldine kirjeldus: kõik sammud toimuvad päkalt tallale, sammu lõpuks on põlv sirge ja puusaga vajutakse tugijalale. Samm on lühike ja tõusud, laskumised puuduvad. Rumba Karikavõistlusi peeti tallinnas 1963-1969. Herbert Rachmani eestvedamisel. Need olid ühtlasi esimesed sõjajärgsed  ametlikud LA-AM võistlused, milliste ainuvõitjad olid Aare ja Piia Orb. Esimesel aastal võisteldi vaid ühes , 7 a. hiljem juba 3-s klassis.28 a hiljem taaselustas Revalia Tantsukool 1997.a.22.novembril ( 1997.a.võitsid lätlased Agnis Ruja-Sandra Suhharevska, 1998.a. võitsid soomlased Jussi Väänanen- Katja Koukkula) selle traditsiooni, mis jätkub tänapäevani.
					</div>
					</div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-9">
                    <p id="tabp" class="card card-body">Jive’il on palju ühist Rock”n Roll-ga, Jaterburgiga. Et J on ka swing tants, võib kohata ka nimetust American Swing.Tants kujunes 1927.a. Põhja –Ameerikas. Võistlustantsude hulgas on J noorim. Esmakordselt esitati J-I Maailma meistrivõistluste kavas 1976. aastal. <a data-toggle="collapse" href="#jive" aria-expanded="false" aria-controls="jive">loe edasi..</a></p>
                    <div class="collapse" id="jive">
					<div class="card card-body" id="tabp">
J-i taktimõõt on 4/4, tants on tugevalt punktueeritud. 2. ja 4. löök on rõhutatud. Mugavaim temposeltskonnatantsus on siiski kuni 40 t/min. Kui tempo tundub liiga kiire võiks kasutada mitte J vaid RR-I põhiliikumisi. Figuurid on sarnased RR-ga kuid üks erinevus on selles, et kahe aeglase sammu asemel sooritatakse 3-sammuline chasse.
					</div>
					</div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-10">
                    <p id="tabp" class="card card-body">Tekkis 1950-ndatel aastatel USA-s. Inglise keeles tähendab RR kõikuma, keerlema. Tants tugineb Ameerika mustade kultuurist pärit bluusile ja kantrimuusikale. RR-ga  on sarnased ja ühtlasi tema eelkäijad peale bluusi veel swing, bugi ning 1930- ndatel aastatel moodi tulnud lindi hop.Viimane on 10 aastaga ka Eestis populaarsust kogunud. 1922.a. salvestati Trixie Smithi bluus „My Baby Rocks Me With One Steady Roll” ( mis iseenesest on vihje seksile). <a data-toggle="collapse" href="#rock" aria-expanded="false" aria-controls="rock">loe edasi..</a></p>
                    <div class="collapse" id="rock">
					<div class="card card-body" id="tabp">
Arvatakse , et termin on just sellest laulust võetud kasutusele alates  1953.a. Samuti väidetakse, et Bill Haley olla 1953.a. ühes Alan Freedi raadiosaates lauale hüpanud ja karjuud :”Its rock”n roll” ning inspireerinud Freedi oma saatele nimeks panema „Moondogs rock”n roll party” Bill Haley bändikaaslane ja kaasautor Marshall Lytle meenutab, kuidas nad kirjutasid kahepeale laulu „Crazy man Crazy” ja kuidas seda reklaamiti fokstrotina, mida rahvas ju teadis, kui plaat 1953.a. müüki ilmus.(Tõnis Erilaid) 50-ndate teisel poolel jõudis RR Euroopasse ja mõjutas biitmuusika sündi.Tuntuimateks Rocki lauljateks peetakse Elvis Presleyt ja Little Richardit-  üht tooremat ja lärmakamast neist. „Rock Around the Clock”, loodud 1955., oli 1.ülipopulaarne lugu, mida mängitakse tänapäevalgi. Frankie Lymon populariseeris RR looga “Goody Goody” ansambliga Teenagers, mille liikmed kõik olid 12- 16 aastased. 1970.a. tõi uuendusi rockmuusikasse ansamblite “Sha na na” ja “Hurricanes” muusika. Eestis on vaieldamatuks parimaks vanema rockmuusika ansambliks olnud “Rock-Hotel” ja ilmselt noorema põlvkonna jaoks „ The Sun” koos Tanel Padariga. RR-s võisteldakse ka eraldi tantsuna maailma meistrivõistlustel. Seal on tants eriti palju füüsilist koormust nõudev, trikkide rohke ja akrobaatikaga põimunud.Eriti populaarne Saksa Spordikanalites. RR on punktueeritud rütmiga 4/4 tm hoogne seltskonnatants. Sobivaimaks on tempo 42-48 t/m. 2 ja 4 löök on rõhutatumad. Iga figuur algab siiski ainult 1. või 3. löögil. R tantsimisviise on erinevaid ja tants on heaks ettevalmistuseks algajale Jive õppijaleSingle time RR ehk one beat RR, löök-samm RR ja hüppe RR on levinumad.
					</div>
					</div>
                </div>
        	</div>
 	</div>
</section>
</section>
</header>
<<<<<<< HEAD:main/index.php
=======
<main>
<!---  KURSUSED beginning -->

<section id="algkursus">
<div class="container-fluid padding">
<div class="row padding">
	<div class="col-xl-3 col-lg-2 col-md-1">
    </div>
	<div class="col-xl-6 col-lg-8 col-md-10 about-1">
		<h3 class="display-4 text-center">Algkursus</h3>
		<p>Seltskonnatantsu ALGKURSUS on mõeldud neile, kel puudub tantsuoskus või, kes on tantsukursustel õpitust palju unustanud. Algkursustel taastate või omandate esmase hädavajaliku tantsuoskuse kaheksas tantsus: fokstrot, aeglane valss, valss, tango, samba, rumba, jive ja cha cha cha.</p> 
		<p>
ALGKURSUS KEVADEL esmaspäeviti kl 20:00-21:30<br>
Rocca al Mare Koolis (Vabaõhumuuseumi tee 8)<br>
26.03.2018 - 14.05.2018 (8 korda)<br>
Maksumus paarile: 170 €<br>
		</p>
	</div>
	<div class="col-xl-3 col-lg-2 col-md-1">
    </div>
</div>
</div>	
</section>

<section id="jatkukursus">				
<div class="container-fluid padding">
<div class="row padding">
	<div class="col-xl-3 col-lg-2 col-md-1">
    </div>
	<div class="col-xl-6 col-lg-8 col-md-10 about-1">
		<h3 class="display-4 text-center">Jätkukursus</h3>
		<p>JÄTKUKURSUS on niiöelda algkursuse pikendus ja sobib neile, kes soovivad oma tantsuoskust lihvida ja mõned tantsusammud juurde õppida. Põhitantsud on samad. Lisaks õpime buggi.</p> 
		<p>
JÄTKUKURSUS KEVADEL neljapäeviti kl 18:30-20:00<br>
Haabersti Vene Gümnaasiumis (Õismäe tee 132)<br>
22.03.2018 - 17.05.2018 (9 korda)<br>
Maksumus paarile: 180 €<br>
		</p>
	</div>
	<div class="col-xl-3 col-lg-2 col-md-1">
    </div>
</div>
</div>
</section>

<section id="edasijoudnud">				
<div class="container-fluid padding">
<div class="row padding">
	<div class="col-xl-3 col-lg-2 col-md-1">
    </div>
	<div class="col-xl-6 col-lg-8 col-md-10 about-1">
		<h3 class="display-4 text-center">Edasijõudnute kursus</h3>
		<p>EDASIJÕUDNUTE KURSUS on veel üks võimalus jätkata tantsu õppimist. Need kursused on hoojapõhised ja kestavad sügisest kevadeni. Sealt edasi saab liikuda hobiklubisse.</p>
		<p>
EDASIJÕUDNUTE KURSUS KEVADEL neljapäeviti kl 20:00-21:30<br>
Haabersti Vene Gümnaasiumis (Õismäe tee 132)<br>
22.03.2018 - 17.05.2018 (9 korda)<br>
Maksumus paarile: 171 €<br>
		</p>
	</div>
	<div class="col-xl-3 col-lg-2 col-md-1">
    </div>
</div>
</div>	
</section>
<!---  KALENDRID!!!!! -->
<section  id="kursused_calendar">				
<div class="container-fluid padding d-none d-sm-block">
<div class="row padding">
	<div class="col-xl-2 col-lg-2 col-md-1">
    </div>
	<div class="col-xl-8 col-lg-8 col-md-10 about-1">
		<h3 class="display-4 text-center">Kalender</h3>
		<div class="googleCalendar text-center">
              <iframe src="https://calendar.google.com/calendar/embed?showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=2kkmj0m33sbnkee7o90lmhttsk%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=Australia%2FBrisbane" style="border-width:0" width="800" height="400" frameborder="0" scrolling="no"></iframe>
		</div>
	</div>
	<div class="col-xl-2 col-lg-2 col-md-1">
    </div>
</div>
</div>
	<div class="container-fluid padding d-block d-sm-none">
	<div class="row padding">
		<div class="col-xl-2 col-lg-2 col-md-1">
		</div>
		<div class="col-xl-8 col-lg-8 col-md-10 about-1">
			<h3 class="display-4 text-center">Kalender</h3>
			<div class="googleCalendar text-center">
				  <iframe src="https://calendar.google.com/calendar/embed?mode=AGENDA&amp;showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=2kkmj0m33sbnkee7o90lmhttsk%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=Australia%2FBrisbane" style="border-width:0" width="800" height="400" frameborder="0" scrolling="no"></iframe>
			</div>
		</div>
		<div class="col-xl-2 col-lg-2 col-md-1">
		</div>
	</div>
	</div>
</section>

<section  id="hobitants_calendar">				
	<div class="container-fluid padding d-none d-sm-block">
	<div class="row padding">
		<div class="col-xl-2 col-lg-2 col-md-1">
		</div>
		<div class="col-xl-8 col-lg-8 col-md-10 about-1">
			<h3 class="display-4 text-center">Kalender</h3>
			<div class="googleCalendar text-center">
				  <iframe src="https://calendar.google.com/calendar/embed?showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=2kkmj0m33sbnkee7o90lmhttsk%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=Australia%2FBrisbane" style="border-width:0" width="800" height="400" frameborder="0" scrolling="no"></iframe>
			</div>
		</div>
		<div class="col-xl-2 col-lg-2 col-md-1">
		</div>
	</div>
	</div>
		<div class="container-fluid padding d-block d-sm-none">
		<div class="row padding">
			<div class="col-xl-2 col-lg-2 col-md-1">
			</div>
			<div class="col-xl-8 col-lg-8 col-md-10 about-1">
				<h3 class="display-4 text-center">Kalender</h3>
				<div class="googleCalendar text-center">
					  <iframe src="https://calendar.google.com/calendar/embed?mode=AGENDA&amp;showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=2kkmj0m33sbnkee7o90lmhttsk%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=Australia%2FBrisbane" style="border-width:0" width="800" height="400" frameborder="0" scrolling="no"></iframe>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-1">
			</div>
		</div>
		</div>
	</section>
	
	<section  id="voistlustants_calendar">				
		<div class="container-fluid padding d-none d-sm-block">
		<div class="row padding">
			<div class="col-xl-2 col-lg-2 col-md-1">
			</div>
			<div class="col-xl-8 col-lg-8 col-md-10 about-1">
				<h3 class="display-4 text-center">Kalender</h3>
				<div class="googleCalendar text-center">
					  <iframe src="https://calendar.google.com/calendar/embed?showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=2kkmj0m33sbnkee7o90lmhttsk%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=Australia%2FBrisbane" style="border-width:0" width="800" height="400" frameborder="0" scrolling="no"></iframe>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-1">
			</div>
		</div>
		</div>
			<div class="container-fluid padding d-block d-sm-none">
			<div class="row padding">
				<div class="col-xl-2 col-lg-2 col-md-1">
				</div>
				<div class="col-xl-8 col-lg-8 col-md-10 about-1">
					<h3 class="display-4 text-center">Kalender</h3>
					<div class="googleCalendar text-center">
						  <iframe src="https://calendar.google.com/calendar/embed?mode=AGENDA&amp;showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=2kkmj0m33sbnkee7o90lmhttsk%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=Australia%2FBrisbane" style="border-width:0" width="800" height="400" frameborder="0" scrolling="no"></iframe>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-1">
				</div>
			</div>
			</div>
		</section>
<!---  KALENDRID lõpp!!!!! -->
<section id="kursus_registration">				
<div class="container-fluid padding">
<div class="row padding">
	<div class="col-xl-3 col-lg-2 col-md-1">
    </div>
    <div class="col-xl-6 col-lg-8 col-md-10 about-1">
		
		<div class="contact-clean">
			<form action="https://formspree.io/robert.shev.spam@gmail.com" method="POST">
				<h3 class="display-4 text-center">Registreeri</h3>
				<div class="form-group"><input class="form-control" type="text" name="nimi" placeholder="Name" /></div>
				<div class="form-group"><input class="form-control is-invalid" type="email" name="_replyto" placeholder="Email" /><small class="form-text text-danger">Please enter a correct email address.</small></div>
				<div class="form-group"><textarea class="form-control" rows="14" name="sõnum" type="text" placeholder="Message"></textarea></div>
				<input type="hidden" name="_next" value="http://www.tlu.ee/~shev/eesrakenduse/sayings-offline-app/" />
            	<input type="hidden" name="_subject" value="Registreerimine" />
            	<input type="hidden" name="_format" value="plain" />
            	<input type="text" name="_gotcha" style="display:none" />
				<div class="form-group"><input class="btn btn-primary" value="Send" type="submit"/></div>
			</form>
		</div>
	</div>
	<div class="col-xl-3 col-lg-2 col-md-1">
    </div>
</div>
</div>	
</section>
<!--- KURSUSED end -->
<!--- HOBITANTS beginning -->
<section id="hobiklubi">				
<div class="container-fluid padding">
<div class="row padding">
	<div class="col-xl-3 col-lg-2 col-md-1">
    </div>
    <div class="col-xl-6 col-lg-8 col-md-10 about-1">
		<h3 class="display-4 text-center">Hobiklubi</h3>
		<p>HOBIKLUBI on tantsuharrastus nendele, kellele tants, muusika ja liikumine on saanud osaks elustiilist. Hobiklubi õhtutel tantsitakse ja veedetakse koos aega heas seltskonnas, õppides uusi huvitavaid tantsukombinatsioone. </p>
		<br>
		<p>2017/2018 hooajal toimuvad tunnid järgmiselt:</p>
		<p>
HOBIKLUBI I teisipäeviti kl 18:30-20.00<br>
Rocca al Mare Kooli aulas (Vabaõhumuuseumi tee 8)<br>
SÜGIS 19.09.2017 - 12.12.2017<br>
TALV 09.01.2018 - 13.03.2018<br>
KEVAD 20.03.2018 - 15.05.2018<br>
Tasumine paarile 3. osamaksena:<br>
1. osa 185 € (sügis), 2. osa 160 € (talv), 3. osa 128 € (kevad)<br>
<br>
HOBIKLUBI II teisipäeviti kl 20:00-21:30<br>
Rocca al Mare Kooli aulas (Vabaõhumuuseumi tee 8)<br>
SÜGIS 19.09.2017 - 12.12.2017<br>
TALV 09.01.2017 - 13.03.2018<br>
KEVAD 20.03.2017 - 15.05.2018<br>
Tasumine paarile 3. osamaksena:<br>
1. osa 185 € (sügis), 2. osa 160 € (talv), 3. osa 128 € (kevad)<br>
<br>					
HOBIKLUBI III kolmapäeviti kl 20.00-21.30<br>
Rocca al Mare Kooli aulas (Vabaõhumuusumi tee 8)<br>
SÜGIS 20.09.2017 - 13.12.2017<br>
TALV 10.01.2018 - 14.03.2018<br>
KEVAD 21.03.2018 - 16.05.2018<br>
Tasumine paarile 3. osamaksena:<br>
1. osa 185 € (sügis), 2. osa 160 € (talv), 3. osa 144 € (kevad)<br>
<br>					
HOBIKLUBI IV kolmapäeviti kl 20.00-21.30<br>
Haabersti Vene Gümnaasiumi aulas (Õismäe tee 132)<br>
SÜGIS 13.09.2017 - 13.12.2017<br>
TALV 10.01.2018 - 14.03.2018<br>
KEVAD 21.03.2018 - 16.05.2018<br>
Tasumine paarile 3. osamaksena:<br>
1. osa 200 € (sügis), 2. osa 160 € (talv), 3. osa 144 € (kevad)<br>
		</p>
	</div>
	<div class="col-xl-3 col-lg-2 col-md-1">
    </div>
</div>
</div>	
</section>
>>>>>>> 26076ceda92ed8107547099e26b86e977a67afe9:main/index.html

<!--- Footer -->
<?php
	require("footer.php");
?>
</div>
</body>
</html>