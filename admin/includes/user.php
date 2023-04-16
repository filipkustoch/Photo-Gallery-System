<?php

class User
{
    public $id;
    public $username;
    public $password;
    public $firstname;
    public $lastname;

    public static function find_all_users()
    {
        return self::find_this_query("SELECT * FROM users");

    }

    public static function find_user_by_id($user_id)
    {
        global $database;

        $result_set = self::find_this_query("SELECT * FROM users WHERE id = $user_id LIMIT 1");
        $found_user = mysqli_fetch_array($result_set);
        return $found_user;
    }

    public static function find_this_query($sql)
    {
        global $database;

        $result_set = $database->query($sql);
        return $result_set;
    }

    public static function instantiate($found_user)
    {
        $object = new self();
        $object->username = $found_user['username'];
        $object->password = $found_user['password'];
        $object->firstname = $found_user['first_name'];
        $object->lastname = $found_user['last_name'];

        return $object;
    }

}



?>