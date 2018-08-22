<?php
class User extends Db_object {
    protected static $db_table = "form";
    protected static $db_table_fields = array('first_name', 'last_name', 'email', 'password', 'phone', 'no_of_days');
    public $user_id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $phone;
    public $no_of_days;

    public static function verify_user($email,$password){
        global $database;
        $email = $database->escape_string($email);
        $password = $database->escape_string($password);

        $sql = "SELECT * FROM " .self::$db_table . " WHERE ";
        $sql.= "email = '{$email}' ";
        $sql.= "AND password = '{$password}' ";
        $the_result_array = self::find_by_query($sql);
        return !empty($the_result_array) ? array_shift($the_result_array):false;
        }


    public function find_user_by_id($user_id){
        $the_result_array = static::find_by_query("SELECT * FROM " .static::$db_table . " WHERE id = $user_id");
        return $the_result_array;
    }


}











?>