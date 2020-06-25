
<!-- ISI -->
<div class="row">
    <div class="col-lg-12">
	<center></br>
        <h3 class="page-header" style="margin-top:-5px;">
            Input Data Siswa
        </h3>
	</center>	
    </div>
</div>

				<div class="row">
                    <div class="col-md-12">
                        <form action="post">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Nim:</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="nis" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Nama:</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="nama_siswa" class="form-control">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Jenis Kelamin:</label>
                                            <div class="col-lg-9">
													<select name="jenis_kelamin" class="form-control" required>
														<option value="">Jenis Kelamin</option>
														<option value="Laki-laki">Laki-laki</option>
														<option value="Perempuan">Perempuan</option>
													</select>
											</div>		
										</div>											
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Alamat:</label>
                                            <div class="col-lg-9">
                                                <textarea rows="5" name="alamat" cols="5" class="form-control" placeholder="Alamat"></textarea>
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Agama:</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="agama" placeholder="Agama" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
									
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Tempat Lahir:</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="tempat_lahir" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Tgl Lahir:</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="tanggal_lahir" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Nama Ortu:</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="nama_ortu" class="form-control">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Kontak Ortu:</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="no_ortu" class="form-control">
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Kelas:</label>
                                            <div class="col-lg-9">
													<select name="kelas" class="form-control" required>
														<option value="">Pilih Kelas</option>
														<?php 
															$query=mysqli_query($koneksi,"select * from tb_kelas order by kelas asc");
															while($row=mysqli_fetch_array($query))
															{
														?>
														<option value="<?php  echo $row['id_kelas']; ?>"><?php  echo $row['kelas']; ?></option>
													<?php }?>
													</select>
											</div>		
										</div>	
                                       
                                    </div>
                                </div>
                                <div class="text-right">
									<input type="submit" name="input" class="btn btn-primary" value="Input"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


    <!-- Script Input -->
    <?php 
    if(@$_POST['input']){
        function ubahformatTgl($tanggal) {
            $pisah = explode('/',$tanggal);
            $urutan = array($pisah[2],$pisah[0],$pisah[1]);
            $satukan = implode('-',$urutan);
            return $satukan;
        }

        $nis=$_POST['nis'];
        $nama_siswa=strtoupper($_POST['nama_siswa']);
        $jenis_kelamin=strtoupper($_POST['jenis_kelamin']);
        $tempat_lahir=strtoupper($_POST['tempat_lahir']);
        $tgl=@$_POST['tanggal_lahir'];
        $alamat=strtoupper($_POST['alamat']);
        $agama=strtoupper($_POST['agama']);
        $nama_ortu=strtoupper($_POST['nama_ortu']);
        $no_ortu=strtoupper($_POST['no_ortu']);
        $kelas=strtoupper($_POST['kelas']);

        $tanggal_lahir = ubahformatTgl($tgl);
        
        $query=mysqli_query($koneksi,"insert into tb_siswa(nis, nama_siswa, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, agama, nama_ortu, no_ortu, id_kelas) values('$nis','$nama_siswa', '$jenis_kelamin',  '$tempat_lahir', '$tanggal_lahir', '$alamat', '$agama', '$nama_ortu', '$no_ortu', '$kelas')") or die (mysqli_error());
        
        if($query){
        ?>
            <script type="text/javascript">
            alert("Input Data Sukses !")
            window.location="inde.php?page=inputsiswa";
            </script>
        <?php
        }else{
        ?>
            <script type="text/javascript">
            alert("Input Data Gagal !")
            window.location="inde.php?page=inputsiswa";
            </script>
        <?php
        } 
    }
    ?>
</div>
