<?php
/**
* @Entity @Table("tlg_uyeler")
**/
class tlg_uyeler{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @Column(type="string", length=50) */ 
    protected $adi;
    /** @Column(type="string", length=50) */ 
    protected $k_adi;
    /** @Column(type="string", length=50) */ 
    protected $parola;
    /** @Column(type="string", length=50) */ 
    protected $eposta;
    /** @Column(type="integer") */ 
    protected $yetki;
    /** @Column(type="string", length=50) */ 
    protected $presmi;
    /** @Column(type="string", length=50) */ 
    protected $tarih;
    
    function getId(){
        return $this->id;
    }
    function getAdi(){
        return $this->adi;
    }
    function setAdi($name){
        $this->adi = $name;
    }
    function setKadi($name){
        $this->k_adi = $name;
    }
    function setParola($name){
        $this->parola = $name;
    }
    function setEposta($name){
        $this->eposta = $name;
    }
    function setYetki($name){
        $this->yetki = $name;
    }
   function setPresmi($name){
        $this->presmi = $name;
    }
    function setTarih($name){
        $this->tarih = $name;
    }
}

//vendor/bin/doctrine orm:schema-tool:create
