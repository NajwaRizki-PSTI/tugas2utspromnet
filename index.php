<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UTS Tugas 2</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="navbar-container">
      <h1>Seraphine Studio</h1>
    </header>

    <section id="home">
      <h1>Where elegance finds its shine✨</h1>
      <p>Pilih produk favoritmu!</p>

      <div class="filter-btns">
        <button onclick="tampilkanSemua()">Tampilkan Semua</button>
        <button onclick="filterKategori('Kalung')">Kalung</button>
        <button onclick="filterKategori('Cincin')">Cincin</button>
      </div>
    </section>

    <!-- section card -->
    <div class="container">
      <div class="produk-container" id="produkContainer">
        <?php
        $produk = [
        ["nama" =>"Blue Dawn", "kategori" => "Cincin", "harga" => 250000, "gambar" =>"Blue Dawn"], 
        ["nama" => "Blush Petal", "kategori" => "Kalung", "harga"=> 320000, "gambar" => "Blush Petal"], 
        ["nama" => "Butterfly Grace", "kategori" => "Kalung", "harga" => 300000, "gambar" => "Butterfly Grace"], 
        ["nama" => "Crystal Mist", "kategori" => "Cincin", "harga" => 220000, "gambar" => "Crystal Mist"], 
        ["nama" => "Heart of Spring", "kategori" => "Cincin", "harga" => 330000, "gambar" => "Heart of Spring"], 
        ["nama" => "Moonlit Stardust", "kategori" => "Kalung", "harga"=> 270000, "gambar" => "Moonlit Stardust"], 
        ["nama" => "Sakura Bloom", "kategori" => "Cincin", "harga" => 300000, "gambar" => "Sakura Bloom"], 
        ["nama" => "Snow Petal", "kategori" => "Cincin", "harga" => 320000, "gambar" => "Snow Petal"], 
        ["nama" => "Stellar Layers", "kategori" => "Kalung", "harga" => 300000, "gambar" => "Stellar Layers"], 
        ["nama" => "Winter Spark", "kategori" => "Kalung", "harga" => 270000, "gambar" => "Winter Spark"], 
      ]; 
      
      foreach ($produk as $p) { echo '
        <div class="card" data-kategori="' . $p['kategori'] . '">
          <img src="img/' . $p['gambar'] . '.jpg" alt="' . $p['nama'] . '" />
          <h3>' . $p['nama'] . '</h3>
          <p class="harga">
            Rp ' . number_format($p['harga'], 0, ',', '.') . '
          </p>
          <button onclick=\"beliProduk('{$p['nama']}')\">Beli</button>
        </div>
        '; } ?>
      </div>
    </div>

    <!-- section keranjang -->
     <section id="keranjang">
      <h2>Keranjang Belanja</h2>
      <table id="tabelKeranjang">
        <thead>
          <tr>
            <th>Produk</th>
            <th>Harga</th>
            <th>Keputusan</th>
          </tr>
        </thead>
        <tbody id="isiKeranjang"></tbody>
      </table>
      <p id="totalHarga">Total : Rp 0</p>
     </section>

     <!-- footer -->
      <footer>
        <p>&copy; 2025 Seraphine Studio | UTS Pemrograman Internet</p>
      </footer>

    <script src="script.js"></script>
  </body>
</html>
