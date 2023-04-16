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

    public static function instantiate($record)
    {
        $object = new self();
        foreach ($record as $key => $value) {
            if($object->has_the_attribute($key)){
                $object->$key = $value;
            }
        }

        return $object;
    }

    private function has_the_attribute($key){
        $object_properties = get_object_vars($this);

        return array_key_exists($key,$object_properties);
    }

}



?>