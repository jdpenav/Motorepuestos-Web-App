<?php
class bd{
    private $host;
    private $db;
    private $usuario;
    private $pass;
    private $caracteres;
    
    function __construct(){
        $this->host='localhost';
        $this->db='motorepuestos';
        $this->usuario = 'jdpenav';
        $this->pass='jdpenav';
        $this->caracteres='utf8';


    }

    function conectar(){
       try{

          
             $conex= 'mysql:host='.$this->host.';port=3306;dbname='.$this->db.';charset='.$this->caracteres;
             $opcs=[
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_EMULATE_PREPARES=>false
             ];
          $pdo =new PDO($conex,$this->usuario,$this->pass,$opcs);                    
          return $pdo;

        }
        catch(PDOException $e){
        print_r('Error de Conexion: '.$e->getMessage());
        phpinfo();
    }



}
}
?>