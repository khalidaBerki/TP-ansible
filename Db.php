<?php
class Db {
    private $conn;
    public function getCon() {
        if (!$this->conn) {
            // Connexion à la base de données avec le mot de passe root_password
            $this->conn = mysqli_connect('localhost', 'root', 'root_password', 'exam_seat_db');

            if (mysqli_connect_error()) {
                die('Connection failed: ' . mysqli_connect_error());
            }
        }
        return $this->conn;
    }
}
