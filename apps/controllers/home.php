<?php

class home extends Controller
{
    private $dt;
    private $df;
    public function __construct()
    {
        $this->dt = $this->loadModel("Barang");
        $this->df = $this->loadModel("DaftarBarang");
    }
    public function home($data1, $data2)
    {
        echo " anda memanggil home dengan data1 =$data1 dan data2 = $data2";
    }
    public function index()
    {
        echo " anda memanggil index";
    }
    public function lihatData($id)
    {
        $data =   $this->df->getDatabyId($id);
        $this->loadView('templates/header', ['title' => 'Detail Barang']);
        $this->loadView('home/detailBarang', $data);
        $this->loadView('templates/footer');
    }
    public function listBarang()
    {
        $data = $this->df->getDataAll();
        $this->loadView('templates/header', ['title' => 'List Barang']);
        $this->loadView('home/listBarang', $data);
        $this->loadView('templates/footer');
        // foreach ($this->df->getDataAll() as $item){
        //     echo $item['id']. " ". $item['nama'] . " " . $item['qty'];
        //     echo "<br>";
        // }
    }
    public function insertbarang()
    {
        if (!empty($_POST)) {
            var_dump($_POST);
            if ($this->df->tambahBarang($_POST)) {
                header('Location :' . BASE_URL . 'index.php?r=home/listBarang');
                exit;
            }
        }
        $this->loadView('templates/header', ['title' => 'Masukan Data Barang']);
        $this->loadView('home/form');
        $this->loadView('templates/footer');
    }
    public function updatebarang()
    {
        $this->loadView('templates/header', ['title' => 'Masukan Data Barang']);
        $this->loadView('home/update');
        $this->loadView('templates/footer');  
    }
}
