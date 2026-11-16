<?php
include 'db_connect.php';

$sql = "SELECT * FROM movie_database_project";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Movies</title>
</head>
<body>

<h1>All Movies</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Genre</th>
        <th>Director</th>
        <th>Release Year</th>
        <th>Rating</th>
        <th>Actions</th>
    </tr>

    <?php
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['title']."</td>";
        echo "<td>".$row['genre']."</td>";
        echo "<td>".$row['director']."</td>";
        echo "<td>".$row['release_year']."</td>";
        echo "<td>".$row['rating']."</td>";

        echo "<td>";
        echo "<a href='edit_movie.php?id=".$row['id']."'>Edit</a> | ";
        echo "<a href='delete_movie.php?id=".$row['id']."'>Delete</a>";
        echo "</td>";

        echo "</tr>";
    }
    ?>

</table>

<br>

<a href="index.php">Back to Home</a>

</body>
</html>