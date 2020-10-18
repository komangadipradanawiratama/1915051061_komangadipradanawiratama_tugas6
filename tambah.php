<div id="content-wrapper">
    <div class="container mt-2">
                <div class="pull-md-left">
                    <h4>Daftar Produk</h4>
                </div>
<form action="index.php?mod=produk&page=save" method="POST">
    <div class="container mt-2">
    
        <div class="form-group">
            <label for="">Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Harga Produk</label>
            <input type="text" name="harga_produk" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Deskripsi Produk</label>
        <input type="text" name="deskripsi" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>
</form>