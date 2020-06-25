<?php
include "koneksi.php";
$kode = @$_GET['id'];

mysqli_query($koneksi,"delete from tb_kelas where id_kelas = '$kode'") or die (mysqli_error());
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="inde.php?page=kelas";
</script>