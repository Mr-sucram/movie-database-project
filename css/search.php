<?php

include 'db_connect.php';

// prevent SQL Injection attacks by separating user input from SQL commands.

$search = "";

if(isset($_GET['search'])) {
    $search = $_GET['search'];
}

$sql = "SELECT * FROM movie_database_project WHERE title LIKE ?";

$stmt = $conn->prepare($sql);

$searchTerm = "%" . $search . "%";

$stmt->bind_param("s", $searchTerm);

$stmt->execute();

$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Movies</title>
</head>
<body>

<h1>Search Movies</h1>

<form method="GET">
    <input type="text" name="search" placeholder="Enter movie title">
    <input type="submit" value="Search">
</form>

<br>

<table border="1">

<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Genre</th>
    <th>Director</th>
    <th>Release Year</th>
    <th>Rating</th>
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
    echo "</tr>";
}

?>

</table>

<br>

<a href="index.php">Back to Home</a>

</body>
</html>