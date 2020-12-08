<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of gestionBDD
 *
 * @author sgibert
 */
class gestionBDD {
    
    private $cnx;       /* @var $cnx PDO */
    private $user;      /* @var $user string */
    private $pass;      /* @var $pass string */
    private $base;      /* @var $base string */
    
    
    
    function __construct($user, $pass, $base) {
        
        $this->user = $user;
        $this->pass = $pass;
        $this->base = $base;
        $dsn  ='pgsql:host=localhost;dbname='. $base .';';
        $this->cnx   = new PDO($dsn,$user,$pass);
        /* @var $dsn string */
        
    }
    
    

    /** @return PDO */
    function getCnx() {
     
        return $this->cnx;
    }

    function getUser() {
        return $this->user;
    }

    function getPass() {
        return $this->pass;
    }

    function getBase() {
        return $this->base;
    }

    function setCnx($cnx) {
        $this->cnx = $cnx;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setBase($base) {
        $this->base = $base;
    }



    
}
