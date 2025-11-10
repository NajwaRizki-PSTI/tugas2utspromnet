// Fungsi untuk menampilkan semua produk
function tampilkanSemua() {
  const cards = document.querySelectorAll(".card");
  cards.forEach((card) => (card.style.display = "block"));
}

// Fungsi untuk filter produk berdasarkan kategori
function filterKategori(kategori) {
  const cards = document.querySelectorAll(".card");
  cards.forEach((card) => {
    if (card.getAttribute("data-kategori") === kategori) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });
}

let keranjang = [];

function beliProduk(nama) {
  const card = [...document.querySelectorAll(".card")].find(
    (el) => el.querySelector("h3").textContent === nama
  );
  const hargaText = card
    .querySelector(".harga")
    .textContent.replace("Rp", "")
    .replace(/\./g, "");
  const harga = parseInt(hargaText);

  keranjang.push({ nama, harga });
  tampilkanKeranjang();
}

function tampilkanKeranjang() {
  const tbody = document.getElementById("isiKeranjang");
  tbody.innerHTML = "";

  let total = 0;

  keranjang.forEach((item, index) => {
    total += item.harga;
    const row = `
    <tr>
    <td>${item.nama}</td>
    <td>Rp ${item.harga.toLocalString("id-ID")}</td>
    <td><button onclick="hapusItem(${index})">Batalkan</button></td>
    </tr>
    `;
    tbody.innerHTML += row;
  });

  document.getElementById("totalHarga").textContent =
    "total : Rp " + total.toLocaleString("id-ID");
}

function hapusItem(index) {
  keranjang.splice(index, 1);
  tampilkanKeranjang();
}
