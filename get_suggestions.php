<?php
include 'connect.php';

// Simulated backend processing
$query = isset($_GET['query']) ? $_GET['query'] : '';

try {
    $stmt = $conn->prepare("SELECT location FROM properties_tbl WHERE location LIKE ?");
    $stmt->bind_param("s", $likeParam);

    $likeParam = "%$query%";
    $stmt->execute();

    $result = $stmt->get_result();

    $suggestions = array();
    while ($row = $result->fetch_assoc()) {
        $suggestions[] = $row['location'];
    }

    $matchingSuggestions = array_filter($suggestions, function ($suggestion) use ($query) {
        return stripos($suggestion, $query) !== false;
    });

    echo json_encode($matchingSuggestions);
} catch (Exception $e) {
    echo json_encode(array('error' => 'Database error'));
}

$stmt->close();
$conn->close();
?>
