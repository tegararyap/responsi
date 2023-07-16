<!DOCTYPE html>
<html>
<head>
	 <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f1f1f1;
      font-family: Arial, sans-serif;
    }

    .container {
      width: 400px;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    h1 {
      margin-bottom: 20px;
      text-align: center;
    }

    button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }
     </style>
<title>SUKSES ANTRI</title>
</head>

<body>
  <div class="container">
    <h1>DATA TELAH TERSIMPAN</h1>
    <br>
    	<button type="submit" id="awal">Kembali Ke Halaman Awal</button>
	</div>


	<script>
		
		const awal = document.getElementById('awal');

		
		awal.addEventListener('click', function() {
			window.location.href = 'index.html';
		});
	</script>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = $_POST['nama'];
  $modelRambut = $_POST['modelRambut'];

  $data = "Nama: $nama\nModel Rambut: $modelRambut\n\n";

  // Buka file antri.txt dan simpan data
  $file = fopen("antri.txt", "a");
  fwrite($file, $data);
  fclose($file);
}
?>
