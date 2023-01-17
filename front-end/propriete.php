<?php 


class Propriete{

    public $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
    } 

    function add($adress,$ville,$type,$surface,$prix,$typeDannonce,$description,$images){
        try{
            $stmt = $this->conn->prepare('INSERT INTO proprietes(adress,ville,type,surface,typeDannonce,prix,description) VALUE (:adress,:ville,:type,:surface,:typeDannonce,:prix,:description)');
            $stmt->bindValue('adress',$adress, PDO::PARAM_STR);
            $stmt->bindValue('ville',$ville, PDO::PARAM_STR);
            $stmt->bindValue('type',$type, PDO::PARAM_STR);
            $stmt->bindValue('surface',$surface, PDO::PARAM_STR);
            $stmt->bindValue('prix',$prix, PDO::PARAM_STR);
            $stmt->bindValue('typeDannonce',$typeDannonce, PDO::PARAM_STR);
            $stmt->bindValue('description',$description, PDO::PARAM_STR);
            $stmt->execute();
            $propriete_ID=$this->conn->LastInsertId();
            $this->addImage($propriete_ID,$images);
            
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function addImage($propriete_ID,$images){

        foreach($images['name'] as $image){
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

    function afficheall(){

        $stmt=$this->conn->prepare('SELECT * FROM proprietes');
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            $req=$this->conn->prepare('SELECT image FROM images where propriete_ID = ' . $row['propriete_ID'] . ' LIMIT 1');
            $req->execute();
            $image=$req->fetch();
            include_once('template_affiche.php');



        }


    }

}

?>