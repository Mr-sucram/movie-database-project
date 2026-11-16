<?php

include 'db_connect.php';

$search = $_GET['search'] ?? '';

$sql = "SELECT * FROM movies WHERE title LIKE ?";

$stmt = $conn->prepare($sql);

$searchTerm = "%" . $search . "%";

$stmt->bind_param("s", $searchTerm);

$stmt->execute();

$result = $stmt->get_result();

while($row = $result->fetch_assoc()) {

    echo "<p>";
    echo htmlspecialchars($row['title']) . " | ";
    echo htmlspecialchars($row['genre']) . " | ";
    echo htmlspecialchars($row['director']);
    echo "</p>";
}

?>