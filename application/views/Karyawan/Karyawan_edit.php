<div class="container mx-auto">
    <div class=" mx-auto p-2" style="width: 450px;">

    <h3>Ubah Data Karyawan</h3>
    
    <form action="" method="post"  enctype="multipart/from-data" class="border shadow p-3 mb-5 bg-body rounded-2 mt-2">
        <div class="row p-3">
           <?php if(validation_errors()):?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors()?>
            </div>
            <?php endif;?>
            <div class="col-6">
                <label for="">Nama Lengkap</label><br>
                <input type="text" name="nama" readonly value="<?= $karyawan['id']?>">

                <label for="">Nama Lengkap</label><br>
                <input type="text" name="nama" value="<?= $karyawan['nama_lengkap']?>">

                <label for="">Tempat Lahir</label><br>
                <input type="text" name="tempat" value="<?= $karyawan['tempat_lahir']?>">
            
                <label for="">Tanggal Lahir</label><br>
                <input type="date" name="tanggal" value="<?= $karyawan['tanggal_lahir']?>">

                <label for="">Jenis Kelamin</label><br>
                <input type="texts" name="jenisKelamin" value="<?= $karyawan['jenis_kelamin']?>"><br>

                <label for="">Lulusan</label><br>
                <input type="text" name="lulusan" value="<?= $karyawan['lulusan']?>"><br>
                
                <label for="">Agama</label><br>
                <input type="text" name="agama" value="<?= $karyawan['agama']?>"><br>
                
                <label for="">Alamat</label><br>
                <textarea name="alamat" id="" cols="30" rows="5"><?= $karyawan['alamat']?></textarea><br>
            </div>
            <div class="col-6">
                <label for="">No Hp</label><br>
                <input type="text" name="hp" value="<?= $karyawan['no_hp']?>"><br>

                <label for="">Foto Url</label><br>
                <input type="text" name="foto" value="<?= $karyawan['foto']?>"><br>
                
               
                <select name="jabatan" id="" style="height: 30px;" class="my-4">
                    <?php foreach ($jabatan as $j): ?>
                        <?php if ($j == $karyawan['jabatan']): ?>
                            <option value="<?=$j?>" selected><?=$j?></option>
                        <?php else : ?> 
                            <option value="<?=$j?>" ><?=$j?></option>
                        <?php endif ?> 
                    <?php endforeach;?>
                </select>
                <br>
                <label for="">Email</label><br>
                <input type="text" name="email" value="<?= $karyawan['email']?>"><br>
            </div>
        </div>

        <button type="submit" class="btn btn-success mt-2">Ubah</button>
    </form>
    </div>
</div>