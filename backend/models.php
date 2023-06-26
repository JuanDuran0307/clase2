


<?php
    class Alquiler extends Conectar{

        public function get_clientes(){
            try {
                $conectar=parent::Conexion();
                parent::set_name();
                $stm = $conectar -> prepare("SELECT * FROM clientes");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_ASSOC);
            } catch (Exception $e){
                return $e->getMessage(); 
            }
        }

        public function insert_clientes($ClienteID,$Compania,$Contacto,$Direccion){
            $conectar = parent::Conexion();
            parent::set_name();
            $stm = "INSERT INTO clientes(ClienteID,Compania,Contacto,Direccion) VALUES (?,?,?,?)";

            return $stm;

        }
    }
?>