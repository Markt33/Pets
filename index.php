<?php
/*
 * Mark Tsvyan
 * 05/11/23
 * 328/Pets/index.php
 * Controller for Pets project
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

//Create an F3 (Fat-Free Framework) object
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function (){

    //echo '<h1>Welcome to my diner!</h1>';

    //Display view page
    $view = new Template();
    echo $view->render('views/pets.html');
});



// Run Fat-Free
$f3->run();

?>