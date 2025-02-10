<?php
$year = $_GET['year'] ?? null;
$month = $_GET['month'] ?? null;
$day = $_GET['day'] ?? null;

if ($year && $month && $day) {
    // If year, month, and day are provided, return the image for that specific day
    $image = sprintf("%04d_%02d_%02d.jpg", $year, $month, $day);
} elseif ($year) {
    // If only the year is provided, pick a random month and day
    $month = rand(1, 12);
    $day = rand(1, 28);  // To avoid issues with different month lengths
    $image = sprintf("%04d_%02d_%02d.jpg", $year, $month, $day);
} else {
    // If no parameters are provided, pick a random image
    $year = rand(2000, 2010);
    $month = rand(1, 12);
    $day = rand(1, 28);  // To avoid issues with different month lengths
    $image = sprintf("%04d_%02d_%02d.jpg", $year, $month, $day);
}

// Call or return the image URL
echo "<img src='/images/$image' alt='Image for $image'>";
?>
