<?php 


class Propriete{

    public $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
    } 

    function add($adress,$ville,$type,$surface,$nbPieces,$chauffer,$aGarage){
        try{
            $stmt = $this->conn->prepare('INSERT INTO proprietes(adress,ville,surface,nbPieces,chauffer,aGarage) VALUE (:adress,:ville,:surface,:nbPieces,:chauffer,:aGarage)');
            $stmt->bindValue('adress',$adress, PDO::PARAM_STR);
            $stmt->bindValue('ville',$ville, PDO::PARAM_STR);
            $stmt->bindValue('type',$type, PDO::PARAM_STR);
            $stmt->bindValue('surface',$surface, PDO::PARAM_STR);
            $stmt->bindValue('nbPieces',$nbPieces, PDO::PARAM_STR);
            $stmt->bindValue('chaffer',$chauffer, PDO::PARAM_STR);
            $stmt->bindValue('aGarage',$aGarage, PDO::PARAM_STR);
            $stmt->execute();
            
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function addImage($propriete_ID,$image){

        try{
            $stmt = $this->conn->prepare('INSERT INTO images(propriete_ID,image) VALUE (:propriete_ID,:image)');
            $stmt->bindValue('propriete_ID',$propriete_ID, PDO::PARAM_STR);
            $stmt->bindValue('image',$image, PDO::PARAM_STR);
            $stmt->execute();
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

    }

}

?>