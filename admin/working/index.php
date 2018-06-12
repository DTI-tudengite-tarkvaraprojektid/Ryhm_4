<?php

require("functions.php");

$database = "if17_Tantsumeka";

	//väljalogimine
	if(isset($_GET["logout"])){
		session_destroy(); //lõpetab sessiooni
		header("Location: login.php");
	}

    // Create connection
    $mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);

	if(isset($_POST["but_upload"])){

		if(isset($_POST["description"]) and isset($_POST["price"]) and isset($_POST["category"]) and isset($_POST["heel"]) ){
			// Photo upload 
			$name = $_FILES['file']['name'];
			$target_dir = "shop/upload/";
			$target_file = $target_dir . basename($_FILES["file"]["name"]);

			// Select file type
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Valid file extensions
			$extensions_arr = array("jpg","jpeg","png","gif");

			// Check extension
			if( in_array($imageFileType,$extensions_arr) ){			
				// Upload file
				move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
			}	
		
			$stmt = $mysqli->prepare("INSERT INTO  products (name, description, price, category, heel, image) VALUES (?,?,?,?,?,'$name')");
			echo $mysqli->error;
			$stmt->bind_param("sssss", $_POST["name"],$_POST["description"], $_POST["price"],$_POST["category"],$_POST["heel"]);
			$stmt->execute();
			echo $stmt->error;
			
		}
		$stmt->close();
		$mysqli->close();
		
	}

	//kui pole sisseloginud, siis sisselogimise lehele
	if(!isset($_SESSION["userId"])){
		header("Location: login.php");
		exit();
	}

	//kui logib välja
	if (isset($_GET["logout"])){
		//lõpetame sessiooni
		session_destroy();
		header("Location: login.php");
	}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/admin.css">
        <script src="js/admin.js"></script>
    </head>
    <body>
    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Bootstrap 3
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-folder"></i> Page one</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-file-o"></i> Second page</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-cog"></i> Third page</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-plus"></i> Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Dropdown heading</li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-bank"></i> Page four</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-dropbox"></i> Page 5</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-twitter"></i> Last page</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
          </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h1 class="page-header">Awesome Bootstrap 3 Sidebar Navigation</h1>  
                        <p class="lead">Originally authored by <a href="https://bootsnipp.com/maridlcrmn">maridlcrmn</a> on Bootsnipp and then converted to Less and customized further by <a href="http://twiter.com/j_holtslander">j_holtslander</a> who is building a <a href="https://codepen.io/collection/nJGkWV" target="_new">collection</a> of great Bootstrap 3 navbars.</p>
                        <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue.</p>
                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum.</p>
                        <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <h3>A heading in the mix.</h3>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                        <blockquote>Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue.</blockquote>
                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum.</p>
                        <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <h3>Another heading for typography's sake.</h3>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                        <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla sed consectetur. Nulla vitae elit libero, a pharetra augue.</p>
                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum.</p>
                        <p>Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper --><!--
        <div class="sidenav">
            <a href="#" onclick="ShowShop()">Pood</a>
            <a href="#" onclick="ShowCalendar()">calender</a>
            <a href="#" onclick="ShowChangeInfo()">Muuda info</a>
        </div>
        <div class="main" id="shop" style="display: block; " >
            <div id="upload"> 
                <h2>Uploader</h2>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype='multipart/form-data'>
                    <input placeholder="nimetus" name="name" type="text" required="">
                    <input placeholder="kirjeldus" name="description" type="text" required="">
                    <input placeholder="hind" name="price" type="text" required="">
                    <select name="category">
                        <option value="m_s">Meeste standardtants </option>
                        <option value="m_l">Meeste Ladina</option>
                        <option value="m_s">Meeste standardtants </option>
                        <option value="m_l">Meeste ladina</option>
                        <option value="m_h">Meeste harrastustants</option>
                        <option value="m_a">Meeste argentiina tango</option>
                        <option value="m_t">Meeste treeninguks</option>
                        <option value="m_p">Meeste pidulikud</option>
                        <option value="n_s">Naise standardtants </option>
                        <option value="n_l">Naise ladina</option>
                        <option value="n_h">Naise harrastustants</option>
                        <option value="n_a">Naise argentiina tango</option>
                        <option value="n_t">Naise treeninguks</option>
                        <option value="n_p">Naise pidulikud</option>
                        <option value="l">Lastele</option>
                    </select>
                    <select name="heel">
                        <option value="5cm peenkonts">5cm peenkonts</option>
                        <option value="7cm peenkonts">7cm peenkonts</option>
                        <option value="8cm peenkonts">8cm peenkonts</option>
                        <option value="5cm alt laienev konst">5cm alt laienev konst</option>
                        <option value="7cm alt laienev konst">7cm alt laienev konst</option>
                        <option value="8cm alt laienev konst">8cm alt laienev konst</option>
                    </select>
                    <input type='file' name='file' />
                    <input type='submit' value='Save' name='but_upload'>
                </form>
            </div>
        </div>
        <div class="main" id="calendar" style="display: none; " >
            <h1>calender</h1>
        </div>
        <div class="main" id="info" style="display: none; " >
            <h1>info</h1>
        </div>-->
        
    </body>
</html> 