<?php
include "koneksi.php";
$kode = @$_GET['id'];

mysqli_query($koneksi,"delete from tb_mapel where id_mapel = '$kode'") or die (mysqli_error());
?>
<script type="text/javascript">
alert("Data berhasil dihapus")
window.location="inde.php?page=mapel";
</script>