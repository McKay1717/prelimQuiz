<?php

class UserModel {

    public static function doesUsersExist() {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM info";
        $query = $database->prepare($sql);
        $query->execute();

        if ($query->rowCount() != 0) {
            return true;
        }
        return false;
    }

    public static function getUsersByPoints() {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM info ORDER BY points DESC";
        $query = $database->prepare($sql);
        $query->execute();

        if ($query->rowCount() != 0) {
            return $query->fetchAll();
        }
        return false;

    }

    public static function getUserByID($userID) {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM info WHERE id = :userID";
        $query = $database->prepare($sql);
        $query->execute(array(':userID' => $userID));

        if ($query->rowCount() == 1) {
            return $query->fetch();
        }
        return false;
    }

    public static function getUserByEmail($email) {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM info WHERE email = :email";
        $query = $database->prepare($sql);
        $query->execute(array(':email' => $email));

        if ($query->rowCount() == 1) {
            return $query->fetch();
        }
        return false;
    }

    public static function getUserByUsername($userName) {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM info WHERE username = :username";
        $query = $database->prepare($sql);
        $query->execute(array(':username' => $userName));

        if ($query->rowCount() == 1) {
            return $query->fetch();
        }
        return false;
    }

    public static function incrementPoints($points) {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE info SET points = points + :points WHERE username = :user_name LIMIT 1");
        $query->execute(array(
            ':points' => $points,
            ':user_name' => Session::get('user_name')
        ));
        $count = $query->rowCount();
        if ($count == 1) {
            return true;
        }
        return false;
    }

    public static function incrementLevel() {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("UPDATE info SET level = level + 1 WHERE username = :user_name LIMIT 1");
        $query->execute(array(
            ':user_name' => Session::get('user_name')
        ));
        $count = $query->rowCount();
        if ($count == 1) {
            return true;
        }
        return false;
    }

    public static function getUserLevel() {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT level FROM info WHERE username = :username";
        $query = $database->prepare($sql);
        $query->execute(array(
            ':username' => Session::get('user_name')
        ));

        if ($query->rowCount() == 1) {
            return $query->fetch()->level;
        }
        return false;
    }

    public static function isAdmin() {
        $database = DatabaseFactory::getFactory()->getConnection();

        $query = $database->prepare("SELECT role FROM info WHERE username = :username");
        $query->execute(array(
            ':username' => Session::get('user_name')
        ));

        if ($query->role == "admin") {
            return true;
        }
        return false;
    }
}