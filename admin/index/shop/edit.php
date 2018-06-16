<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `products` where id='$id'");
    $row=mysqli_fetch_array($query);
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
                    <li class="visited">
                        <a href="../shop">Pood</a>
                    </li>
                    <li>
                        <a href="../calendar">Kalender</a>
                    </li>
                    <li>
                        <a href="../galery">Galerii</a>
                    </li>
                    <li>
                        <a href="">Kasutajad</a>
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
                                                <label for="name-input" class="col-2 col-form-label">nimetus</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" value="<?php echo $row['name']; ?>" id="name-input" name="name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="description-input" class="col-2 col-form-label">kirjeldus</label>
                                                <div class="col-10">
                                                    <textarea class="form-control" type="text"  id="description-input" name="description" rows="3"><?php echo $row['description']; ?></textarea>
                                                </div>    
                                            </div>
                                            <div class="form-group row">
                                                <label for="price-input" class="col-2 col-form-label">hind</label>
                                                <div class="col-10">
                                                    <input class="form-control" type="number" value="<?php echo $row['price']; ?>" id="price-input" name="price">
                                                </div>    
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label" for="category">kategooria</label>
                                                <div class="col-10">
                                                    <select name="category" class="form-control" id="category">
                                                        <option <?php if($row['category'] == 'm_s'){echo("selected");} ?> value="m_s">Meeste standardtants </option>
                                                        <option <?php if($row['category'] == 'm_l'){echo("selected");} ?> value="m_l">Meeste Ladina</option>
                                                        <option <?php if($row['category'] == 'm_S'){echo("selected");} ?> value="m_s">Meeste standardtants </option>
                                                        <option <?php if($row['category'] == 'm_l'){echo("selected");} ?> value="m_l">Meeste ladina</option>
                                                        <option <?php if($row['category'] == 'm_h'){echo("selected");} ?> value="m_h">Meeste harrastustants</option>
                                                        <option <?php if($row['category'] == 'm_a'){echo("selected");} ?> value="m_a">Meeste argentiina tango</option>
                                                        <option <?php if($row['category'] == 'm_t'){echo("selected");} ?> value="m_t">Meeste treeninguks</option>
                                                        <option <?php if($row['category'] == 'm_p'){echo("selected");} ?> value="m_p">Meeste pidulikud</option>
                                                        <option <?php if($row['category'] == 'n_s'){echo("selected");} ?> value="n_s">Naise standardtants </option>
                                                        <option <?php if($row['category'] == 'n_l'){echo("selected");} ?> value="n_l">Naise ladina</option>
                                                        <option <?php if($row['category'] == 'n_h'){echo("selected");} ?> value="n_h">Naise harrastustants</option>
                                                        <option <?php if($row['category'] == 'n_a'){echo("selected");} ?> value="n_a">Naise argentiina tango</option>
                                                        <option <?php if($row['category'] == 'n_t'){echo("selected");} ?> value="n_t">Naise treeninguks</option>
                                                        <option <?php if($row['category'] == 'n_p'){echo("selected");} ?> value="n_p">Naise pidulikud</option>
                                                        <option <?php if($row['category'] == 'l'){echo("selected");} ?> value="l">Lastele</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label" for="heel">konts</label>
                                                <div class="col-10">
                                                    <select name="heel" class="form-control">
                                                        <option value="5cm peenkonts" <?php if($row['heel'] == '5cm peenkonts'){echo("selected");} ?>>5cm peenkonts</option>
                                                        <option value="7cm peenkonts" <?php if($row['heel'] == '7cm peenkonts'){echo("selected");} ?>>7cm peenkonts</option>
                                                        <option value="8cm peenkonts" <?php if($row['heel'] == '8cm peenkonts'){echo("selected");} ?>>8cm peenkonts</option>
                                                        <option value="5cm alt laienev konst" <?php if($row['heel'] == '5cm alt laienev konst'){echo("selected");} ?>>5cm alt laienev konst</option>
                                                        <option value="7cm alt laienev konst" <?php if($row['heel'] == '7cm alt laienev konst'){echo("selected");} ?>>7cm alt laienev konst</option>
                                                        <option value="8cm alt laienev konst" <?php if($row['heel'] == '8cm alt laienev konst'){echo("selected");} ?>>8cm alt laienev konst</option>
                                                    </select>
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