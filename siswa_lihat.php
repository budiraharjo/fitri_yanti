
<!-- ISI -->
 <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="card-title">Daftar Siswa</h4>

       <?php
        $kelas1 = mysqli_query($koneksi,"select * from tb_kelas");
        ?>
        <ul class="nav nav-tabs">
            <?php
                while($row1=mysqli_fetch_array($kelas1)){
            ?>
            <li class="nav-item"><a class="nav-link" href="#<?php echo $row1['kelas']; ?>"> Kelas <?php echo $row1['kelas']; ?></a></li>
			 
            <?php
                }
            ?>
        </ul>
  


        <div class="tab-content">
            <?php
                $kelas2 = mysqli_query($koneksi,"select * from tb_kelas");
                while($row2=mysqli_fetch_array($kelas2)){
                    $kelasid=$row2['id_kelas'];

                    $siswa=mysqli_query($koneksi,"select * from tb_siswa where id_kelas='$kelasid'");
                    $jumlah=mysqli_num_rows($siswa);
            ?>
            <div class="tab-pane show active" id="<?php echo $row2['kelas']; ?>">
                <br>
                <label>Kelas : <?php echo $row2['kelas']; ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Jumlah Siswa : <?php echo $jumlah; ?></label>
                <div class="table-responsive">
                     <table class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>J Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Agama</th>
                                <th>Nama Orang Tua</th>
                                <th>No Telepon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row3=mysqli_fetch_array($siswa)){
                            ?>
                            <tr>
                                <td><?php echo $row3['nis']; ?></td>
                                <td><?php echo $row3['nama_siswa']; ?></td>
                                <td><?php echo $row3['jenis_kelamin']; ?></td>
                                <td><?php echo $row3['tanggal_lahir']; ?></td>
                                <td><?php echo $row3['alamat']; ?></td>
                                <td><?php echo $row3['agama']; ?></td>
                                <td><?php echo $row3['nama_ortu']; ?></td>
                                <td><?php echo $row3['no_ortu']; ?></td>
                                <td><i><a href="?page=editsiswa&id=<?php echo $row3['id_siswa'];?>"><i class="fa fa-edit"></i></a> / 
								<a onclick="return confirm('Yakin akan hapus data ini ?')" href="siswa_hapus.php?id=<?php echo $row3['id_siswa'];?>">
								<i class="fa fa-trash"></i></a></i></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        </div>
      </div>
</div>
