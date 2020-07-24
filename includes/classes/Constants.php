<?php 

class Constants {

    public static $pass_err_ma = "Your password don't match";
    public static $pass_err_co = "Your password can only contain numbers and letters";
    public static $pass_err_le = "Your password must be between 5 and 30 Chars";
    public static $email_err_ma = "Your Emails don't match";
    public static $email_err_va = "Email is Invalid";
    public static $ln_err_le = "Last name must be between 2 and 25";
    public static $fn_err_le = "First name must be between 2 and 25";
    public static $us_err_le = "Username must be between 5 and 25";
    public static $usernameTaken = "This username Already Exist";
    public static $emailTaken = "Email is Already in Use";
    public static $loginFailed = "Your username or password was Incorrect";

    public static function getUsername($un){
        global $db;
        $checkUsernameQuery = $db->prepare('
                SELECT username from users WHERE username = ?
            ');
        $checkUsernameQuery->execute([$un]);
        return $checkUsernameQuery->rowCount();
      
}

public static function getEmail($em){

    global $db;
    $query = $db->prepare('
    SELECT email from users WHERE email = ?
    ');
    $query->execute([$em]);
    return $query->rowCount();
}

    public static function insertUserDetails($un, $fn, $ln, $em, $pwd)
    {

        global $db;
        $encryptedpwd = password_hash($pwd, PASSWORD_BCRYPT);
        $img = "assets/images/pr.png";
        $date = date("Y-m-d");

        $reqInsert = $db->prepare('
        
              INSERT INTO users (username,firstname,lastname,email,password,date,img) VALUES (?,?,?,?,?,?,?)
              ');

        $result = $reqInsert->execute([$un, $fn, $ln, $em, $encryptedpwd, $date, $img]);
        return $result;
    }



    public static function IfisLogged($un, $pw)
    {
        global $db;
        
        $pw=password_hash($pw,PASSWORD_BCRYPT);

        $query = $db->prepare('
        
        SELECT * FROM users WHERE username = ? and password = ?
        
        ');

        $query->execute([$un,$pw]);
        return $query->rowCount();
        
    }
}



?>