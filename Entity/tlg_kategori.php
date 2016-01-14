<?php
/**
* @Entity @Table("tlg_kategori")
**/
class tlg_kategori{
      
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @OneToMany(targetEntity="tlg_kategoridil", mappedBy="tlg_kategori")  
        @OneToMany(targetEntity="tlg_makale", mappedBy="tlg_kategori")     */
    private $kat_id;
    /** @Column(type="integer") */ 
    protected $ust_kat_id;
    /** @Column(type="integer") */ 
    protected $ana_kat;
   /** @Column(type="integer") */ 
    protected $goster;
        
    function getId(){
        return $this->id;
    }
    function getUstkatid(){
        return $this->ust_kat_id;
    }
    function getAnakat(){
        return $this->ana_kat;
    }
    function setId($name){
        $this->id = $name;
    }
    function setUstkatid($name){
        $this->ust_kat_id = $name;
    }
    function setAnakat($name){
        $this->ana_kat = $name;
    }
    function setGoster($name){
        $this->goster = $name;
    }
   
}

//vendor/bin/doctrine orm:schema-tool:create
