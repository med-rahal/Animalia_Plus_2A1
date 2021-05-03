<?php
class Newsletter
{
    private static $signup_email_address;
    private static $signup_date = null;

    private static $valid = true;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function register($signup_email_address) {
        if (!empty($_POST)) {
            self::$signup_email_address = $_POST['signup_email_address'];
            self::$signup_date = date('Y-m-d H:i:s');

            if (empty(self::$signup_email_address)) {
                $status  = "error";
                $message = "The signup email address field must not be blank";
                self::$valid = false;
            } else if (!filter_var(self::$signup_email_address, FILTER_VALIDATE_EMAIL)) {
                $status  = "error";
                $message = "You must fill the field with a valid signup_email_address address";
                self::$valid = false;
            }

            if (self::$valid) {
                $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $existingSignup = $pdo->prepare("SELECT COUNT(*) FROM signups WHERE signup_email_address='$signup_email_address'");
                $existingSignup->execute();
                $data_exists = ($existingSignup->fetchColumn() > 0) ? true : false;

                if (!$data_exists) {
                    $sql = "INSERT INTO signups (signup_email_address, signup_date) VALUES (:signup_email_address, :signup_date)";
                    $q = $pdo->prepare($sql);

                    $q->execute(
                        array(':signup_email_address' => self::$signup_email_address, ':signup_date' => self::$signup_date));

                    if ($q) {
                        $status  = "success";
                        $message = "You have been successfully subscribed";
                    } else {
                        $status  = "error";
                        $message = "An error occurred, please try again";
                    }
                } else {
                    $status  = "error";
                    $message = "This signup_email_address is already subscribed";
                }
            }

            $data = array(
                'status'  => $status,
                'message' => $message
            );

            echo json_encode($data);

         
        }
    }
}