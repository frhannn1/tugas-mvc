<a href="<?= BASE_URL . 'index.php?r=home/insertbarang' ?>" class="btn btn-primary">Tambah Barang</a>
<table class="table">

    <tr scope="row">
    <thead class="table-dark">
            <th>ID</th>
            <th>Nama Barang</th>
            <th>kuantitas</th>
            <th></th>
            <th></th>
        
    </tr>
    </thead>
    <?php foreach ($data as $item) : ?>
        <tr scope="row">
            <td><?= $item['id'] ?>

            <td><?= $item['nama'] ?>

            <td><span class="badge text-bg-<?= $item['qty'] > 50 ? 'success' : 'danger' ?>"><?= $item['qty'] ?></span></td>
            <td><a href="<?= BASE_URL .'index.php?r=home/updatebarang/' . $item['id'] ?>" class="badge text-bg-primary" >update</a></td>
            <td><a href="<?= BASE_URL .'index.php?r=home/updatebarang/' . $item['id'] ?>" class="badge text-bg-danger" >delete</a></td>
        </tr>
    
    <?php endforeach ?>
</table>