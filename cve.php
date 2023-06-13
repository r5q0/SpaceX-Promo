<?php

    session_start();

    if ($_SERVER['REQUEST_METHOD'] != 'GET') {
        $redirect = true;
        
        if (isset($_COOKIE['csrf']) && isset($_SESSION['csrf'])) {
            if ($_COOKIE['csrf'] === $_SESSION['csrf']) {
                $redirect = false;
            }
        }

        header('Location: /');
        exit(0);
    }

    // CSRF
    if (!isset($_SESSION['csrf'])) {
        $token = base64_encode(random_bytes(128));
        setcookie('csrf', $token, time() + (3600 * 48));
        $_SESSION['csrf'] = $token;
    }
