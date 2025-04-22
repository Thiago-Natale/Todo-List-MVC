<?php

require_once __DIR__ . '/../config/config.php';

require_once __DIR__ . '/../app/controllers/TaskController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controller = new TaskController();

if (method_exists($controller, $action)) {
    $controller->{$action}();
} else {
    echo "Ação não encontrada!";
}
