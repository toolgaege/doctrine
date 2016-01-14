<?php
/**
* @Entity @Table("tlg_diller")
**/
class tlg_diler{
      
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @Column(type="string", length=50) */ 
    protected $dil;
    
    function getId(){
        return $this->id;
    }
    function getDil(){
        return $this->dil;
    }
    function setId($name){
        $this->id = $name;
    }
    function setDil($name){
        $this->dil = $name;
    }
    
}

//vendor/bin/doctrine orm:schema-tool:create
