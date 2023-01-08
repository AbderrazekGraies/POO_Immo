<?php 

enum build{
    case house;
    case appartement;
    case garage;
    case parcking;
}

class Building{

    public $conn;

    function __construct(string $conn)
    {
        $this->conn = $conn;
    } 

    function add($adress,build $type,$area,$price){
        try{
            $stmt = $this->conn->prepare('INSERT INTO building');
        }
    }
}

?>