<?php 


class Estate{

    public $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
    } 

    function add($type,$area,$price){
        try{
            $stmt = $this->conn->prepare('INSERT INTO building() VALUE ()');
        }catch(PDOException $e){
            
        }
    }
}

?>