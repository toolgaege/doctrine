<?php
/**
* @Entity @Table("user")
**/
class User{
      
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @Column(type="string", length=50) */ 
    protected $username;
    /** @Column(type="string") */ 
    protected $password;
    /** @Column(type="string", length=50) */ 
    protected $email;
    
    function getId(){
        return $this->id;
    }
    function getUsername(){
        return $this->username;
    }
    
    function setUsername($name){
        $this->username = $name;
    }
    function setPassword($name){
        $this->password = $name;
    }
    
    function setEmail($name){
        $this->email = $name;
    }
    
   
    
}

//vendor/bin/doctrine orm:schema-tool:create
