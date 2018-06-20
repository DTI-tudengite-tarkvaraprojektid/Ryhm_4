<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `users` where userid='$id'");
    $row=mysqli_fetch_array($query);
     //only admin is allowed here
        require("../functions.php");

        //LOG OUT
        if(isset($_GET["logout"])){
            session_destroy(); 
            header("Location: ../login.php");
        }

        // Create connection
        include('../functions/Create_connection.php');
        //IF NOT LOGGED IN , logout
        if(!isset($_SESSION["userId"])){
            header("Location: ../login.php");
            exit();
        }
        //only admin is allowed here
        if(($_SESSION["userId"])!==1){
            header("Location: ../");
            exit();
        }
        //Managing users
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tantsumeka | admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/admin.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="../">
                            <img src="../assets/img/tantsumeka_hele.png" alt="logo" height="80" width="133">
                        </a>
                    </li>
                    <br>
                    <li>
                        <a href="../shop">Pood</a>
                    </li>
                    <li>
                        <a href="../calendar">Kalender</a>
                    </li>
                    <li>
                        <a href="../galery">Galerii</a>
                    </li>
                    <li class="visited">
                        <a href="">Kasutajad</a>
                    </li>
                    <li >
                        <a href="../teachers">Treenerid</a>
                    </li>
                    <li>
                        <a href="../content">Sisu</a>
                    </li>
                    <li>
                        <a href="?logout=1">Logi välja</a>
                    </li>
                </ul>
            </div>
            <div id="page-content-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <section>
                            <row>
                                <div class="col-12">
                                    <div>
                                        <h2>Muuda</h2>
                                        <form method="POST" action="update.php?id=<?php echo $id; ?>">
                                            <div class="form-group row">
                                                <label for="username-input" class="col-2 col-form-label">kasutaja</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" value="<?php echo $row['username']; ?>" id="username-input" name="username">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email-input" class="col-2 col-form-label">email</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="email" value="<?php echo $row['email']; ?>" id="email-input" name="email">
                                                </div>    
                                            </div>
                                            <div class="form-group row">
                                                <label for="password-input" class="col-2 col-form-label">Parool</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="password" value="" id="password-input" name="password" placeholder="Sisestage uus salasõna">
                                                </div>
                                            </div>
                                            <input type="submit" name="submit" class="btn btn-primary" type="button" value="Salvesta">
                                            <a href="index.php"  type="button" class="btn btn-dark" role="button">tagasi</a>    
                                        </form>
                                    </div>
                                </div>
                            </row>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>