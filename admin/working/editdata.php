<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>View Records</title>
    </head>
    <body>
    <?php
        /*
        VIEW.PHP
        Displays all data from 'players' table
        */
        // connect to the database
        include('usersDBcon.php');
        // get results from database
        $result = mysql_query("SELECT * FROM users")
        or die(mysql_error());
        // display data in table
        echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th>ID</th> <th>email</th> <th>Name</th> <th></th> <th></th></tr>";
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
            // echo out the contents of each row into a table
            echo "<tr>";
            echo '<td>' . $row['userid'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['username'] . '</td>';
            echo '<td><a href="edit.php?id=' . $row['userid'] . '">Edit</a></td>';
            echo '<td><a href="delete.php?id=' . $row['userid'] . '">Delete</a></td>';
            echo "</tr>";
        }
        // close table>
        echo "</table>";
    ?>
    <p><a href="new.php">Add a new record</a></p>
    </body>
</html>