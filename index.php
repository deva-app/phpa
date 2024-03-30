<?php

$links = array(
    "https://t.me/omar4app",
    "https://t.me/omar_tic"
);


$randomLink = $links[array_rand($links)];


header("Location: " . $randomLink);
exit;
?>
