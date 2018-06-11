<!DOCTYPE html>
<html>

<head>

</head>

<body>
	<!--Menüü-->
    <nav class="navbar navbar-dark navbar-expand-xl fixed-top clean-navbar menu">
        <div class="container-fluid"><a class="navbar-brand logo" href="#" style="background-image:url(&quot;assets/img/tantsumeka_hele.png&quot;);"></a>
            <button
                class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse menu-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation" style="padding-right:31px;">
                        	<a class="nav-link active menu-link" href="#">KURSUSED</a>
                        </li>
                        <li class="nav-item" role="presentation">
                        	<a class="nav-link menu-link active" href="#">HOBITANTS</a>
                        </li>
                        <li class="nav-item" role="presentation">
                        	<a class="nav-link menu-link active" href="#">Võistlustants</a>
                        </li>
                        <li class="nav-item" role="presentation">
                        	<a class="nav-link menu-link active" href="#">eratunnid</a>
                        </li>
                        <li class="nav-item" role="presentation">
                        	<a class="nav-link menu-link active" href="#">eratunnid</a>
                        </li>
                        <li class="nav-item" role="presentation" style="padding-right:0px;">
                        	<a class="nav-link menu-link active" href="#">TANTSUTARBED</a>
                        </li>   
                    </ul>
                </div>
        </div>
    </nav>
    <main class="page landing-page">
    	<!--Video-->
		<?php include('views/pages/'.$view.'.php'); ?>
		<!--Tutvustus-->
        <section id="info" class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2>Info</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3>Lorem impsum dolor sit amet</h3>
                        <div class="getting-started-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Lorem impsum dolor sit amet</h3>
                        <div class="getting-started-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Tantsustiilid-->
        <section id="tantsud" class="clean-block clean-info dark">
            <div class="container">
                <h2 class="text-center">Tantsututvustused</h2>
              
            </div>
        </section>
		
		<!--  !!! -->
        
    </main>
    <!--Footer-->
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col item social">
                        <p class="copyright">TANTSUMEKA: Rocca Al Mare Kool, Vabaõhumuuseumi tee 8, 13521 Tallinn; telefon 5919 0800; e-post info@tantsumeka.ee&nbsp;</p><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>