<?php
//koneksi ke database
$conn = new mysqli("localhost", "root", "", "db_sim");
if ($conn->connect_errno) {
    echo die("Failed to connect to MySQL: " . $conn->connect_error);
}
 
$rows = array();
$table = array();
$table['cols'] = array(
	//membuat label untuk nama nya, tipe string
	array('label' => 'Pilihan', 'type' => 'string'),
	//membuat label untuk jumlah siswa, tipe harus number untuk kalkulasi persentasenya
	array('label' => 'Jumlah siswa', 'type' => 'number')
);
 
//melakukan query ke database select
$sql = $conn->query("SELECT * FROM tb_poling");
//perulangan untuk menampilkan data dari database
while($data = $sql->fetch_assoc()){
	//membuat array
	$temp = array();
	//memasukkan data pertama yaitu nama kelasnya
	$temp[] = array('v' => (string)$data['pilihan']);
	//memasukkan data kedua yaitu jumlah siswanya
	$temp[] = array('v' => (int)$data['nilai']);
	//memasukkan data diatas ke dalam array $rows
	$rows[] = array('c' => $temp);
}
 
//memasukkan array $rows dalam variabel $table
$table['rows'] = $rows;
//mengeluarkan data dengan json_encode. silahkan di echo kalau ingin menampilkan data nya
$jsonTable = json_encode($table);
 
?>
 <script type="text/javascript" src="chart/loader.js"></script>
    <script type="text/javascript">
 
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);
 
	function drawChart() {
 
		// membuat data chart dari json yang sudah ada di atas
		var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);
 
		// Set options, bisa anda rubah
		var options = {'title':'',
					   'width':500,
					   'height':400};
 
		var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
		chart.draw(data, options);
	}
    </script>
	
<div id="content" class="clearfix">
<div class="page-title">DATA POLING</div>

	<center></br>
	<p><h3>Data Poling Tingkat Kepuasan Terhadap Website SMK Manbael Huda</h3></p>
	<div id="chart_div"></div></center>

</div>