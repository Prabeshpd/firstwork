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
    public  function create(){
        $sql = "INSERT INTO " .self::$db_table . " SET ";
        $sql .= "user_id=:user_id, first_name=:first_name, last_name=:last_name, email=:email, password=:password, no_of_days=:no_of_days";
        $resultt = self::find_by_query($sql);
        $this->user_id = htmlspecialchars(strip_tags($this->user_id));
        $this->first_name = htmlspecialchars(strip_tags($this->first_name));
        $this->last_name = htmlspecialchars(strip_tags($this->last_name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->phone= htmlspecialchars(strip_tags($this->phone));
        $this->no_of_days = htmlspecialchars(strip_tags($this->no_of_days));
        $type =array(":user_id", ":first_name", ":last_name", ":email", ":password", ":phone", ":no_of_days");
        $params = array($this->user_id, $this->first_name, $this->last_name, $this->email, $this->password, $this->phone, $this->no_of_days);
        call_user_func_array(array($resultt, "bind_param"), array_merge($type, $params));
        if($resultt){
            return true;
        }else{
            return false;
        }
    }
    public function find_user_by_id($user_id){
        $sql = "SELECT * FROM " .self::$db_table . " WHERE ";
        $sql .= "user_id = '{$user_id}' ";
        $res = self::find_by_query($sql);
        $typ = array("first_name", "last_name", "email", "password", "phone", "no_of_days");
        $par = array($this->first_name, $this->last_name, $this->email, $this->password, $this->phone, $this->no_of_days);
        call_user_func_array(array($res,"bind_param"), array_merge($typ,$par));
    }



}











?>