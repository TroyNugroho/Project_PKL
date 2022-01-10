<div class="main-panel">
    <div class="content-wrapper">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Setting</h4>
                        <?= form_open('Admin/HomeAdmin/edit_setting')?>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Provinsi</label>
                                    <select name="provinsi" class="form-control"></select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Kota</label>
                                    <select name="kota" class="form-control"></select>
                                    <option value=""></option>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Nama Toko</label>
                                    <input name="nama_toko" class="form-control" value="<?= $setting->nama_toko?>"
                                        required></input>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">No Telp</label>
                                    <input name="no_telp_toko" class="form-control" value="<?= $setting->no_telp_toko?>"
                                        required></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input name="alamat_toko" class="form-control" value="<?= $setting->alamat_toko?>"
                                    required></input>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                            </div>
                        </div>
                        <?= form_close()?>
                    </div>
                </div>
            </div>
        </div>
        <script>
        $(document).ready(function() {
            // input Provinsi
            $.ajax({
                type: "POST",
                url: "<?= base_url('./user/rajaongkir/provinsi')?>",
                success: function(hasil_provinsi) {
                    // console.log(hasil_provinsi);
                    $("select[name=provinsi]").html(hasil_provinsi);
                }
            });

            // input Kota
            $("select[name=provinsi]").on("change", function() {
                var select_id_provinsi = $("option:selected", this).attr("id_provinsi");

                $.ajax({
                    type: "POST",
                    url: "<?= base_url('./user/rajaongkir/kota')?>",
                    data: 'id_provinsi=' + select_id_provinsi,
                    success: function(hasil_kota) {
                        // console.log(hasil_kota);
                        $("select[name=kota]").html(hasil_kota);
                    }
                });
            });
        });
        </script>