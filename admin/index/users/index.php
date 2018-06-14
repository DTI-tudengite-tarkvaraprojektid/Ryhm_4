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
    //Managing users
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tantsumeka | admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../assets/css/admin.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                <li>
                    <a href="?logout=1">Logi välja</a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div>
                <form method="POST" action="add.php">
                    <label>email:</label><input type="email" name="email">
                    <label>kasutaja:</label><input type="text" name="username">
                    <label>parool:</label><input type="password" name="password">
                    <input type="submit" name="add">
                </fsorm>
            </div>
            <br>
            <div>
                <table border="1">
                    <thead>
                        <th>kasutaja</th>
                        <th>email</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                            include('conn.php');
                            $query=mysqli_query($conn,"select * from `users`");
                            while($row=mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?php echo $row['username']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
                                        <a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
                                    </td>
                                </tr>
                                    <?php
                                }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
