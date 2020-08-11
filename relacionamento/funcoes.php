<?php

    //aaaa-mm-dd -> dd/mm/aaaa
    function dataTela($data){
        
        $data = explode("-",$data); //[aaaa][mm][dd]
        $data = array_reverse($data); //[dd][mm][aaaa]
        $data = implode("/",$data);
     
        return $data; //retorna para quem chamou a função
    }


    function dataBanco($data){
        
        $data = explode("/",$data); //[dd][mm][aaaa]
        $data = array_reverse($data); //[aaaa][mm][dd]
        $data = implode("-",$data); //aaaa-mm-dd
     
        return $data; //retorna para quem chamou a função
    }

?>