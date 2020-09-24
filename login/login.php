<?php

    const host = '';
    const database ='';
    const user = '';
    const passwd = '';

    class Conexion {
        
        public function conect(){
            mysqli_conect(host,user,passwd,database);            
        }
    }
    
    Conexion::conect();
?>
