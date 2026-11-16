<?php

include 'db_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM movie_database_project WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: view_movies.php");
    exit();
} else {
    echo "Error deleting movie.";
}

?>