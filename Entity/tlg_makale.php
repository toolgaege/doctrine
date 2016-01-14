<?php
/**
* @Entity @Table("tlg_makale")
**/
class tlg_makale{
      
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @OneToMany(targetEntity="tlg_makaledil", mappedBy="tlg_makale")  */
    private $mak_id;
    /** @ManyToOne(targetEntity="tlg_kategori", inversedBy="tlg_makale") */ 
    protected $kat;
    /** @Column(type="integer") */ 
    protected $ust_kat_id;
    /** @Column(type="integer") */ 
    protected $goster;
    /** @Column(type="integer") */ 
    protected $hit;
    /** @Column(type="string", length=50) */ 
    protected $tarih;
        
    function getId(){
        return $this->id;
    }
    function getKatid(){
        return $this->kat_id;
    }
    function setId($name){
        $this->id = $name;
    }
    function setKatid($name){
        $this->kat_id = $name;
    }
    function setUstkatid($name){
        $this->ust_kat_id = $name;
    }
    function setGoster($name){
        $this->goster = $name;
    }
    function setHit($name){
        $this->hit = $name;
    }
    function setTarih($name){
        $this->tarih = $name;
    }
}

//vendor/bin/doctrine orm:schema-tool:create
