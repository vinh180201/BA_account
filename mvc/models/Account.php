<?php
class Account extends DB{
    //thuc hien truy van sql
    public function getAccount($username) {
        $account = "SELECT * FROM account WHERE username = '$username'";
        return mysqli_query($this->con, $account);
    }
    public function addAccount($username, $password) {
        $data = $this->getAccount($username);
        $account = "INSERT INTO `account` (`id`, `username`, `password`) VALUES (NULL, '$username', '$password');";

        mysqli_query($this->con, "ALTER TABLE account AUTO_INCREMENT = 1");
        return mysqli_query($this->con, $account);
        
    }
}
?>
