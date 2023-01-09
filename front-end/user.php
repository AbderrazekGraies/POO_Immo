<?php

class User{

    public $conn;

    function __construct($conn)
    {
        $this->conn=$conn;
    }

    function register($fname,$lname,$email,$tel,$pword){
        try{
        $stmt = $this->conn->prepare('INSERT INTO user (firstName,lastName,email,telephone,password) VALUE(?,?,?,?,?)');
    
        $stmt->bindValue(1, $fname, PDO::PARAM_STR);
        $stmt->bindValue(2, $lname, PDO::PARAM_STR);
        $stmt->bindValue(3, $email, PDO::PARAM_STR);
        $stmt->bindValue(4, $tel, PDO::PARAM_STR);
        $stmt->bindValue(5, password_hash($pword,PASSWORD_DEFAULT), PDO::PARAM_STR);
        
        $stmt->execute();

        header('location:Register.php');
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function login($email,$password){
        $stmt = $this->conn->prepare('SELECT * FROM user where email=?');
    
        $stmt->bindValue(1, $email, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        if($row){
            if(password_verify($password,$row['password'])){
                session_start();
                $_SESSION['user_ID']=$row['user_ID'];
        
                header('location:espace-user.php');
            }else{
                echo 'mauvais email ou mot de passe';
            }
        }else{
            echo 'mauvais email ou mot de passe';
        }
    }



    

    

}

?>