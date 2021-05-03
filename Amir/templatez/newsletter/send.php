<?php
require 'inc/Database.class.php';
require 'inc/Newsletter.class.php';

if (!empty($_POST)) {
    $signup_email_address = $_POST['signup_email_address'];

    Newsletter::register($signup_email_address);
} 