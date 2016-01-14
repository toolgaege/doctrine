<?php
/**
* @Entity @Table("tlg_kategoridil")
**/
class tlg_kategoridil{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @ManyToOne(targetEntity="tlg_kategori", inversedBy="tlg_kategoridil") */
    private $kat;
    /** @Column(type="integer") */
    private $dil_id;
    /** @Column(type="string", length=250) */  
    protected $adi;
    /** @Column(type="string", length=10000) */  
    protected $icerik;
    /** @Column(type="string", length=250) */  
    protected $title;
    /** @Column(type="string", length=500) */  
    protected $keywords;
    /** @Column(type="string", length=250) */  
    protected $seflink;
    /** @Column(type="string", length=500) */  
    protected $aciklama;
        
    function getId(){
        return $this->id;
    }
    function getKatid(){
        return $this->kat_id;
    }
    function getDilid(){
        return $this->dil_id;
    }
    function setKatid($name){
        $this->kat_id = $name;
    }
    function setDilid($name){
        $this->dil_id = $name;
    }
    function setBaslik($name){
        $this->baslik = $name;
    }
    function setIcerik($name){
        $this->icerik = $name;
    }
    function setTitle($name){
        $this->title = $name;
    }
    function setKeywords($name){
        $this->keywords = $name;
    }
    function setSeflink($name){
        $this->seflink = $name;
    }
    function setAciklama($name){
        $this->aciklama = $name;
    }
}
//vendor/bin/doctrine orm:schema-tool:create
