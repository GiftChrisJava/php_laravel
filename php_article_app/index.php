<?php

require_once __DIR__ . '/controllers/ArticleController.php';

$controller = new ArticleController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_GET['action'] === 'store') {
        $controller->store();
    } elseif ($_GET['action'] === 'destroy') {
        $controller->destroy($_GET['id']);
    }
} else {
    $controller->index();
}
?>
