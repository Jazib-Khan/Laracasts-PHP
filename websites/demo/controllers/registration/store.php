<?php

use Core\Validator;
use Core\Database;
use Core\App;

$email = $_POST['email'];
$password = $_POST['password'];

// Validate the form inputs.
$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password of at least 7 characters.';
}

if (!empty($errors)) {
    view('registration/create.view.php', [
        'errors' => $errors
    ]);
    exit;
}

$db = App::resolve(Database::class);

// Check if the account already exists
$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

// If it does, redirect back to the registration page with an error message
if ($user) {
    view('registration/create.view.php', [
        'errors' => [
            'email' => 'An account with this email address already exists.'
        ]
    ]);
    exit;
} else {
    // Otherwise, create the account and redirect to the home page
    $db->query('INSERT INTO users (email, password) VALUES (:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);

    $_SESSION['user'] = [
        'email' => $email
    ];

    header('location: /');
    exit();

}

