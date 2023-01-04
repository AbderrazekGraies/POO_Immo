<?php

class user{

    public $firstName;
    public $lastName;
    public $email;
    public $telephone;
    public $password;

    function __construct($fname,$lname,$email,$tel,$pword)
    {
        $this->firstName=$fname;
        $this->lastName=$lname;
        $this->email=$email;
        $this->telephone=$tel;
        $this->password=$pword;

    }

    function get_firstName(){
        return $this->firstName;
    }

    function get_lastName(){
        return $this->lastName;
    }

    function get_email(){
        return $this->email;
    }

    function get_telephone(){
        return $this->telephone;
    }

    

}

?>