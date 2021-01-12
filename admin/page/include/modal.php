

<!-- Modal add project -->
<div class="modal fade" id="tambah_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="./include/simpan-produk.php" enctype="multipart/form-data" >
          <div class="form-group row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="input" placeholder="nama produk" name="nama" required="">
              </div>
          </div>
          <div class="form-group row">
            <label for="link" class="col-sm-3 col-form-label">Harga</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="input" placeholder="Rp." name="harga" required="">
              </div>
          </div>
          <div class="form-group row">
            <label for="link" class="col-sm-3 col-form-label">no WA Penjual</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="input" placeholder="+62..." name="wa" required="">
              </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Gambar (jpg,png)</label>
              <div class="col-sm-9">
                <input type="file" class="form-control-file" id="input" name="gambar" required="">
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="simpan" class="btn btn-primary pl-4 pr-4 p-2" style="border-radius:50px;"><i class="fa fa-save"><div></div></i> Simpan</button>
        </div>
      </form>  
    </div>
  </div>
</div>

