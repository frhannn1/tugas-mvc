<form action="<?=BASE_URL."index.php?r=home/insertbarang"?>" method="post">
  <div class="mb-3">
    <label for="inputNama" class="form-label">Nama Barang</label>
    <input name="nama" type="text" class="form-control" id="inputNama" aria-describedby="namaHelp">
    <div id="namaHelp" class="form-text">isikan nama barang</div>
  </div>
  <div class="mb-3">
    <label for="inputJumlah" class="form-label">Kuantitas</label>
    <input name="qty" type="text" class="form-control" id="inputJumlah" aria-describedby="jumlahHelp">
    <div id="jumlahHelp" class="form-text">isikan jumlah</div>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>