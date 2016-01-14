<?php
/**
* @Entity @Table("online_ziyaretci")
**/
class online_ziyaretci{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;    
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
    function setIp($name){
        $this->ip = $name;
    }
    function setTarih($name){
        $this->tarih = $name;
    }    
}

//vendor/bin/doctrine orm:schema-tool:create
