<?php

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
                    <a href="">Pood</a>
                </li>
                <li>
                    <a href="../calendar">Kalender</a>
                </li>
                <li>
                    <a href="../galery">Galerii</a>
                </li>
                <li>
                    <a href="../users">Kasutajad</a>
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
                                    <form method="POST" action="add.php" enctype='multipart/form-data'>
                                        <div class="form-group row">
                                            <label for="name-input" class="col-2 col-form-label">nimetus</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" value="" id="name-input" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description-input" class="col-2 col-form-label">Kirjeldus</label>
                                            <div class="col-10">
                                                <textarea class="form-control" type="text" value="" id="description-input" name="description" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="price-input" class="col-2 col-form-label">hind</label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" value="" id="price-input" name="price">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label" for="category">kategooria</label>
                                            <div class="col-10">
                                                <select name="category" class="form-control">
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
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label" for="heel">konts</label>
                                            <div class="col-10">
                                                <select name="heel" class="form-control">
                                                    <option value="5cm peenkonts">5cm peenkonts</option>
                                                    <option value="7cm peenkonts">7cm peenkonts</option>
                                                    <option value="8cm peenkonts">8cm peenkonts</option>
                                                    <option value="5cm alt laienev konst">5cm alt laienev konst</option>
                                                    <option value="7cm alt laienev konst">7cm alt laienev konst</option>
                                                    <option value="8cm alt laienev konst">8cm alt laienev konst</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label" for="files">Pildit</label>
                                            <div class="col-10">
                                                <input type="file" class="form-control-file" id="files" multiple aria-describedby="fileHelp" name="file[]">
                                                <small id="fileHelp" class="form-text text-muted">Lubatud on jpg, jpeg ja png failid.</small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-2 col-form-label" for="main-file">Peamine pilt</label>
                                            <div class="col-10">
                                                <input type="file" class="form-control-file" id="main-file" aria-describedby="fileHelp" name="mainFile">
                                                <small id="fileHelp" class="form-text text-muted">Lubatud on jpg, jpeg ja png failid.</small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-10"></div>
                                            <div class="col-2">
                                                <input type="submit" name="add" value="Lisa" class="btn btn-block" style="border-radius: 4px; background-color:black; color:white;">
                                            </div>
                                        </div>                                      
                                    </form>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <th scope="col" style="width: 10%">nimetus</th>
                                            <th scope="col" style="width: 30%">kirjeldus</th>
                                            <th scope="col" style="width: 5%">hind</th>
                                            <th scope="col" style="width: 5%">kategooria</th>
                                            <th scope="col" style="width: 30%">konts</th>
                                            <th scope="col" style="width: 15%"></th>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include('conn.php');
                                                $query=mysqli_query($conn,"select * from `products`");
                                                while($row=mysqli_fetch_array($query)){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><?php echo $row['description']; ?></td>
                                                        <td><?php echo $row['price']; ?></td>
                                                        <td><?php echo $row['category']; ?></td>
                                                        <td><?php echo $row['heel']; ?></td>
                                                        <td>
                                                            <a type="button" role="button" class="btn btn-primary" href="edit.php?id=<?php echo $row['id']; ?>">Muuda</a>
                                                            <a type="button" role="button" class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Kustuta</a>
                                                        </td>
                                                    </tr>
                                                        <?php
                                                    }
                                            ?>
                                        </tbody>
                                    </table>
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