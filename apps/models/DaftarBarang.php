<?php

class DaftarBarang extends model
{
    private $daftar = [];


    public function getDataAll()
    {
        $stmt = "select * from daftar_barang";
        $query = $this->db->query($stmt);
        $data = [];
        while ($result = $this->db->fetch_array($query)) {
            $data[] = $result;
        }
        return $data;
    }
    public function getDatabyId($id)
    {
        $stmt = "select * from daftar_barang where id = $id";
        $query = $this->db->query($stmt);
        $data =$this->db->fetch_array($query);

        return $data;
    }
    public function tambahBarang($param){
        $stmt = "insert into daftar_barang (nama,qty) values(:nama,:qty)";
        $query = $this->db->query($stmt,$param);
        if($this->db->last_id()>0){
            return true;
        }
        else{
            return false;
        }
    }
}
