<?php

require_once('../Classes/Anime.php');

$rootDir = '../Anime';
$title = $_POST['title'];
$type = $_POST['type'];
$genre = $_POST['genre'];
$image = $_FILES['image'];

if(Anime::createDataFile($rootDir, $title, $type, $genre, $image)) {
	header("Location: ../anime.php?title=" . $title);
}else{
	die('An error occured');
}