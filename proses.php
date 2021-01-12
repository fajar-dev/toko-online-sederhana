<!-- Modal contact -->
<div class="modal fade bd-example-modal-lg" id="pesan<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-body pt-5 pb-5">
                          <form role="form" method="post">
                            <h2 class="mb-4">Buat Pesanan</h2>
                            <div role="form" class="form-row">
                              <div class="form-group col-md-6">
                                <label for="barang">Nama Barang</label>
                                <input type="text" class="form-control" name="barang" id="nama"value="<?php echo $data['nama']; ?>" readonly>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="wa">Whatsapp Penjual</label>
                                <input type="text" class="form-control" name="wa" id="email" value="<?php echo $data['wa']; ?>" readonly>
                              </div>
                            </div>
                            <label>Pesanan :</label>
                            <div role="form" class="form-row">  
                              <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="pembeli" id="nama" placeholder="Name" required>
                              </div>
                              <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" name="alamat" id="subjek" placeholder="alamat" required>
                            </div>
                            <div class="form-group">
                              <pre><textarea class="form-control" name="pesan" id="pesan" style="white-space: pre-line;" placeholder="pesan untuk penjual ..." row="1" required></textarea></pre>
                            </div>
                            <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
                            <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                          </form>                    
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                  if(isset($_POST['kirim'])) {
                    $nomor=$_POST['wa'];
                    $barang=$_POST['barang'];
                    $pembeli=$_POST['pembeli'];
                    $email=$_POST['email'];
                    $alamat=$_POST['alamat'];
                    $pesan=$_POST['pesan'];                    
                    echo "<script>window.location.href = 'https://api.whatsapp.com/send?phone=$nomor&text=saya ingin membeli%0A$barang%0A%0Acatatan pesanan:%0ANama: $pembeli%0AEmail: $email%0AAlamat: $alamat%0Acatatan untuk penjual:%0A$pesan';</script>";
                  }
                  ?>