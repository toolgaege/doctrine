<?php
/**
* @Entity @Table("tlg_ebulten")
**/
class tlg_ebulten{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;    
    /** @Column(type="string") */ 
    protected $adi;
    /** @Column(type="string") */ 
    protected $eposta;
    /** @Column(type="string") */ 
    protected $tarih;
    
    function getId(){
        return $this->id;
    }
    function setId($name){
        $this->id = $name;
    }
    function setAdi($name){
        $this->adi = $name;
    }
    function setEposta($name){
        $this->eposta = $name;
    }
    function setTarih($name){
        $this->tarih = $name;
    }    
}

//vendor/bin/doctrine orm:schema-tool:create
