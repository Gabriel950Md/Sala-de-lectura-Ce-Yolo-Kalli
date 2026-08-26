<?php
class DataAccess {  
    private $server = 'localhost';
    private $database = 'ceyolokalli';
    private $user = 'root';
    private $password = '';
    private $conn = "";

    function connect(){
        $this->conn = mysqli_connect($this->server, $this->user, $this->password, $this->database);
        if($this->conn){
            return $this->conn;
        }else{
            die("Conexion Fallida. " . mysqli_connect_error());
        }
        return false;
    }
    
    function disconnect(){
        if($this->conn){
            mysqli_close($this->conn);
        }
    }

    function execQuery($query){
        if($this->conn){
            $result = mysqli_query($this->conn, $query);

            if(!$result){
                return -1;
            }

            return mysqli_affected_rows($this->conn);
        }
        return false;
    }

    function execGetQuery($query){
        if($this->conn){
            $arrData = mysqli_query($this->conn, $query);
            if($arrData){
                $datos = array();
                if(mysqli_num_rows($arrData) > 0){
                    while($row = mysqli_fetch_assoc($arrData)){
                        $datos[] = $row;
                    }
                    return $datos;
                } else {
                    return array(); // Devolver un array vacío si no hay resultados
                }
            }
        }
        return false;
    }
}
?>

