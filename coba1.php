<head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,600;0,700;0,800;0,900;1,100&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="style1.css" />
</head>

<body>
  <nav class="nav-bar">
    <a href="index.html" class="desktop">WEB BELANJA ONLINE MURAH MERIAH</a>
    <a href="index.html" class="mobile">BELANJA ONLINE</a>
    <div class="nav-btn">
      <button id="ham-menu" class="menu" type="button">
        <hr />
        <hr />
        <hr />
      </button>
    </div>
  </nav>
  <div id="main">
    <div>
      <h2>Mari Belanja</h2>
      <p>Pengisian Form berlaku untuk costumer yang berbelanja ditempat kami</p>
    </div>
    <fieldset class="daftar-card">
      <legend>Form Pembelian Produk</legend>
      <form id="daftar-form" method="POST">
        <div class="daftar-container-1">
          <div class="form">
            <input class="form-control" name="customer" id="text" type="text" placeholder="Masukkan nama" />
            <label for="text">Customer</label>
          </div>
          <div class="option">
            <div class="checkbox">
                <input name="barang" id="radio_1" type="radio" class="custom-control-input" value="tv">
                <label for="radio_1" class="custom-control-label">TV</label>
                <input name="barang" id="radio_2" type="radio" class="custom-control-input" value="kulkas">
                <label for="radio_2" class="custom-control-label">Kulkas</label>
                <input name="barang" id="radio_3" type="radio" class="custom-control-input" value="mesin cuci">
                <label for="radio_3" class="custom-control-label">Mesin Cuci</label>
            </div>
            <label for="program" class="form-label">Pilih Produk</label>
          </div>
          <div class="form">
            <input class="form-control" name="jumlah" id="text" type="text" placeholder="Masukkan Jumlah" />
            <label for="text">Jumlah</label>
          </div>
          <div class="form">
            <div>
                <button name="proses" type="submit" class="btn btn-primary">Daftar</button>
            </div>
          </div>
        </div>
        <div class="daftar-container-2">

        </div>
      </form>
    </fieldset>
</body>

<?php
$tv = 4200000;
$kulkas = 3100000;
$mesin_cuci = 3800000;

if(isset($_POST['proses'])){
    $customer = $_POST['customer'];
    $barang = $_POST['barang'];
    $jumlah = intval($_POST['jumlah']);
    $total = 0;
    if($barang == 'tv'){ 
        $total = $tv * $jumlah;
    } else if($barang == 'kulkas'){
        $total = $kulkas * $jumlah;
    } else if($barang == 'mesin cuci'){
        $total = $mesin_cuci * $jumlah;
    }

    echo "Nama Customer : " .$_POST['customer']. "<br>";
    echo "Produk Pilihan : " .$_POST['barang']. "<br>";
    echo "Jumlah Beli : " .$_POST['jumlah']. "<br>";
    echo "Total Harga : Rp. " . number_format($total, 0, ',', '.') . ",00";
}
?>
