<?php
 
$links = file('recipeswhoola.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if ($links === false || empty($links)) {
    die('Tidak ada link yang tersedia.');
}

 
$links = array_filter($links);

if (empty($links)) {
    die('invalid.');
}

// Memutar array link secara acak
shuffle($links);


$selectedLink = $links[0];


header("Location: $selectedLink");
exit();
?>
