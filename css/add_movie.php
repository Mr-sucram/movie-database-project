<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $director = $_POST['director'];
    $release_year = $_POST['release_year'];
    $rating = $_POST['rating'];

    $sql = "INSERT INTO movie_database_project (title, genre, director, release_year, rating)
            VALUES ('$title', '$genre', '$director', '$release_year', '$rating')";

    if ($conn->query($sql) === TRUE) {
        echo "Movie added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Movie</title>
</head>
<body>

<h1>Add Movie</h1>

<form method="POST">

    <label>Title:</label><br>
    <input type="text" name="title"><br><br>

    <label>Genre:</label><br>
    <input type="text" name="genre"><br><br>

    <label>Director:</label><br>
    <input type="text" name="director"><br><br>

    <label>Release Year:</label><br>
    <input type="number" name="release_year"><br><br>

    <label>Rating:</label><br>
    <input type="number" step="0.1" name="rating"><br><br>

    <input type="submit" value="Add Movie">

</form>

<br>

<a href="index.php">Back to Home</a>

</body>
</html>