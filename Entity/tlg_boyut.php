<?php
/**
* @Entity @Table("tlg_boyut")
**/
class tlg_boyut{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @Column(type="integer") */ 
    protected $width;
    /** @Column(type="integer") */ 
    protected $height;
    
    function getId(){
        return $this->id;
    }
    function getWidth(){
        return $this->width;
    }
    function getHeight(){
        return $this->height;
    }
    function setId($name){
        $this->id = $name;
    }
    function setWidth($name){
        $this->width = $name;
    }
    function setHeight($name){
        $this->height = $name;
    }
    
}

//vendor/bin/doctrine orm:schema-tool:create
