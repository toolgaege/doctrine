<?php
/**
* @Entity @Table("ip_sayaci")
**/
class ip_sayaci{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @Column(type="integer") */ 
    protected $tiklama;
    /** @Column(type="string") */ 
    protected $ip;
    /** @Column(type="string") */ 
    protected $tarih;
    
    function getId(){
        return $this->id;
    }
    function setId($name){
        $this->id = $name;
    }
    function setTiklama($name){
        $this->tiklama = $name;
    }
    function setIp($name){
        $this->ip = $name;
    }
    function setTarih($name){
        $this->tarih = $name;
    }
    
}

//vendor/bin/doctrine orm:schema-tool:create
