<?php
class Connection{
    /*==========================
    Informacion de la base de datos*/
    static public function infoDatabase(){
        $infoDB=array(
            "database"=>"himnario_db",
            "user"=>"root",
            "pass"=>""
        );
        return $infoDB;

    }
    static public function connect(){
try {
    $link=new PDO(
        "mysql:host=localhost;dbname=".Connection::infoDatabase()["database"],
        Connection::infoDatabase()["user"],
        Connection:: infoDatabase()["pass"]
    );
} catch (PDOException $e) {
    die("Error:".$e.getMessage());
}
return $link;

    }
}
