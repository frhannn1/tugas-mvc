<?php

class Barang {
    private $id;
    private $nama;
    private $qty;

        public function __construct() {
            $this->id ="1";
            $this->nama = "beras";
            $this->qty = "50";
        }
    public function getData() {
        return "Data yang diminta dari model barang : $this->id, $this->nama, $this->qty ";
        
    }
    public function getDataOne(){
        $data = [
            'id' => $this->id,
            'nama' => $this->nama,
            'qty' => $this->qty
        ];
        return $data;
    }
}