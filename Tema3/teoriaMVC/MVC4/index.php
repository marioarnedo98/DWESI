<?php
require_once 'model.php';
require_once 'controllers.php';
define('ROOT', '/Unit3/MVC4/');
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if (ROOT === $uri) {
    list_action();
} elseif ((ROOT . 'index.php/show/') === $uri && isset($_GET['id'])) {
    show_action($_GET['id']);
} elseif (explode('/', $_SERVER['REQUEST_URI'])[4] == "show") {
    show_action(explode('/', $_SERVER['REQUEST_URI'])[5]);

} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page not found</h1></body></html>';
}
