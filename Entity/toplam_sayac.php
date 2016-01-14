<?php
/**
* @Entity @Table("toplam_sayac")
**/
class toplam_sayac{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;    
    /** @Column(type="string") */ 
    protected $toplam_tekil;
     /** @Column(type="string") */ 
    protected $toplam_cogul;
        
    function getId(){
        return $this->id;
    }
    function setToplamcogul($name){
        $this->toplam_cogul = $name;
    }
    function setToplamtekil($name){
        $this->toplam_tekil = $name;
    }
}

//vendor/bin/doctrine orm:schema-tool:create
