<?php 
include_once "O class tripnotify.php";
include_once "observer.php";
include_once "notify.php";
include_once "updateobserver.php";
$patternGossiper = new PatternSubject();
$patternGossipFan = new iobserver();
$patternGossiper->attach($patternGossipFan);
//$patternGossiper->updateFavorites('abstract factory, decorator, visitor');
//$patternGossiper->updateFavorites('abstract factory, observer, decorator');
//$patternGossiper->detach($patternGossipFan);
//$patternGossiper->updateFavorites('abstract factory, observer, paisley');
?>