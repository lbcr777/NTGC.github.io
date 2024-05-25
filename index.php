<?php

// Define your website's base URL
define('BASE_URL', 'http://localhost/');

// Define your website's title
define('SITE_TITLE', 'My Website');

// Include the necessary files
require_once 'includes/header.php';
require_once 'includes/navbar.php';

// Determine the page to display
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Include the corresponding page file
switch ($page) {
    case 'home':
        require_once 'pages/home.php';
        break;
    case 'about':
        require_once 'pages/about.php';
        break;
    case 'contact':
        require_once 'pages/contact.php';
        break;
    default:
        require_once 'pages/404.php';
        break;
}

// Include the footer
require_once 'includes/footer.php';

// Define the subpages
$subpages = array(
    'home' => 'Home',
    'about' => 'About',
    'contact' => 'Contact'
);

// Check if the requested page is a valid subpage
if (array_key_exists($page, $subpages)) {
    // Include the corresponding subpage file
    require_once 'pages/' . $page . '.php';
} else {
    // Include the 404 page
    require_once 'pages/404.php';
}

// Redirect to home.html
header('Location: home.html');
exit;
?>
<h1>This should redirect automatically to the page...</h1> <p>if not, <a href="home.html">click here</a></p>
<html></html>