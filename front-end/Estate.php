<?php 


class Estate{

    public $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
    } 

    function add($adress,$type,$area,$rooms,$isHeated,$Garage){
        try{
            $stmt = $this->conn->prepare('INSERT INTO estate() VALUE ()');
        }catch(PDOException $e){
            
        }
    }
}

?>