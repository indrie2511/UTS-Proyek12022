<?php

class pasien{

    public $id;
    private $kode;
    public $nama;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;
    public $gender;

    function __construct($kode, $nama, $gender){
        $this->kode = $kode;
        $this->nama = $nama;
        $this->gender = $gender;
    }
    

    public function getKode(){
        return$this->kode;
    }

    public function getNama(){
        return$this->nama;
    }

    public function getGender(){
       return $this->gender;
    }
}