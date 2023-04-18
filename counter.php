<?php
$file = "count.txt"; // Path to the text file that stores the count
$count = file_get_contents($file); // Get the current count from the file
$count++; // Increment the count
file_put_contents($file, $count); // Save the new count to the file
?>
