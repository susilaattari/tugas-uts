

<div class="container mx-auto">
    <div class=" mx-auto p-2" style="width: 450px;">

    <h3>Tambah Data Karyawan</h3>
    
    <form action="" method="post"  enctype="multipart/from-data" class="border shadow p-3 mb-5 bg-body rounded-2 mt-2">
        <div class="row p-3">
           
            <div class="col-6">
                <label for="">Nama Lengkap</label><br>
                <input type="text" name="nama"><br>
                <div class="form-text text-danger"><?=form_error('nama')?></div>

                <label for="">Tempat Lahir</label><br>
                <input type="text" name="tempat"><br>
                <div class="form-text text-danger"><?=form_error('tempat')?></div>
            
                <label for="">Tanggal Lahir</label><br>
                <input type="date" name="tanggal"><br>
                <div class="form-text text-danger"><?=form_error('tanggal')?></div>

                <label for="">Jenis Kelamin</label><br>
                <input type="texts" name="jenisKelamin"><br>

                <label for="">Lulusan</label><br>
                <input type="text" name="lulusan"><br>
                
                <label for="">Agama</label><br>
                <input type="text" name="agama"><br>
                
                <label for="">Alamat</label><br>
                <textarea name="alamat" id="" cols="30" rows="5"></textarea><br>
            </div>
            <div class="col-6">
                <label for="">No Hp</label><br>
                <input type="text" name="hp"><br>

                <label for="">Foto</label><br>
                <input type="text" name="foto"><br>
                
               
                <select name="jabatan" id="" style="height: 30px;" class="my-3">
                <option>Jabatan</option>
                    <?php foreach ($jabatan as $j): ?>
                            <option value="<?=$j?>" ><?=$j?></option>
                    <?php endforeach;?>
                </select><br>
                
                <label for="">Email</label><br>
                <input type="text" name="email"><br>
            </div>
        </div>

        <button type="submit" class="btn btn-success mt-2">Tambah</button>
    </form>
    </div>
</div>