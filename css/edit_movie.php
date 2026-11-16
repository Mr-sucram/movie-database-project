<?php

include 'db_connect.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $director = $_POST['director'];
    $release_year = $_POST['release_year'];
    $rating = $_POST['rating'];

    $sql = "UPDATE movie_database_project
            SET title='$title',
                genre='$genre',
                director='$director',
                release_year='$release_year',
                rating='$rating'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: view_movies.php");
        exit();
    } else {
        echo "Error updating movie.";
    }
}

$sql = "SELECT * FROM movie_database_project WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Movie</title>
</head>

<body>

<h1>Edit Movie</h1>

<form method="POST">

    <label>Title:</label><br>
    <input type="text" name="title" value="<?php echo $row['title']; ?>"><br><br>

    <label>Genre:</label><br>
    <input type="text" name="genre" value="<?php echo $row['genre']; ?>"><br><br>

    <label>Director:</label><br>
    <input type="text" name="director" value="<?php echo $row['director']; ?>"><br><br>

    <label>Release Year:</label><br>
    <input type="number" name="release_year" value="<?php echo $row['release_year']; ?>"><br><br>

    <label>Rating:</label><br>
    <input type="number" step="0.1" name="rating" value="<?php echo $row['rating']; ?>"><br><br>

    <input type="submit" value="Update Movie">

</form>

<br>

<a href="view_movies.php">Back to Movies</a>

</body>
</html>