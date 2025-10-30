<?php
// Language Switcher Endpoint

require_once 'config/lang.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_GET['lang'])) {
    $lang = $_POST['lang'] ?? $_GET['lang'] ?? 'en';
    
    if (setLanguage($lang)) {
        // If it's an AJAX request, return JSON
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            header('Content-Type: application/json');
            echo json_encode(['success' => true, 'lang' => $lang]);
            exit;
        }
        
        // Otherwise redirect back to the referring page or home
        $redirect = $_SERVER['HTTP_REFERER'] ?? '/';
        header('Location: ' . $redirect);
        exit;
    }
}

// If language switch failed, redirect to home
header('Location: /');
exit;
