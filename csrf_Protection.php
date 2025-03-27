<?php
class CSRF_Protection {
    public function echoInputField() {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        echo '<input type="hidden" name="csrf_token" value="' . $_SESSION['csrf_token'] . '">';
    }
}
?>
