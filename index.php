<?php

// Define your controllers directory
$controllersDir = __DIR__ . '/controllers/';

// Check if controller and action are set
if(isset($_GET['controller']) && isset($_GET['action'])) {
    $controllerName = $_GET['controller'];
    $action = $_GET['action'];

    // Construct controller file path
    $controllerFile = $controllersDir . $controllerName . '.php';

    // Check if the controller file exists
    if(file_exists($controllerFile)) {
        // Include the controller file
        require_once($controllerFile);

        // Check if the controller class exists
        if(class_exists($controllerName)) {
            // Create an instance of the controller
            $controller = new $controllerName();

            // Switch statement to handle different actions
            switch($action) {
                case 'view':
                case 'edit':
                case 'delete':
                    // Call the action method
                    $controller->$action();
                    break;
                default:
                    // Action method not found
                    echo 'Action not found';
                    break;
            }
        } else {
            // Controller class not found
            echo 'Controller class not found';
        }
    } else {
        // Controller file not found
        echo 'Controller file not found';
    }
} else {
    // Redirect to default controller and action
    header("location:/?controller=index&action=view"); 
    exit; // You should exit after redirecting
}
?>
