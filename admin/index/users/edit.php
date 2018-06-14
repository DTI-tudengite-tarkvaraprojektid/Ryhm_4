<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `users` where userid='$id'");
	$row=mysqli_fetch_array($query);
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
                <h2>Edit</h2>
                <form method="POST" action="update.php?id=<?php echo $id; ?>">
                    <label>kasutaja</label><input type="text" value="<?php echo $row['username']; ?>" name="username">
                    <label>email</label><input type="text" value="<?php echo $row['email']; ?>" name="email">
                    <input type="submit" name="submit">
                    <a href="index.php">Back</a>
                </form>
            </div>
        </div>
    </body>
</html>