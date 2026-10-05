// Array Data 50 Produk
const products = [
  {
    id: 1,
    name: "Smartphone Apex X1",
    category: "Elektronik",
    price: 3500000,
    description:
      "Smartphone canggih dengan kamera 64MP dan baterai tahan lama.",
  },
  {
    id: 2,
    name: "Laptop Ultrabook Pro",
    category: "Elektronik",
    price: 9800000,
    description:
      "Laptop tipis dan ringan bertenaga tinggi untuk produktivitas harian.",
  },
  {
    id: 3,
    name: "Headphone Wireless ANC",
    category: "Elektronik",
    price: 750000,
    description: "Peredam bising aktif dengan kualitas suara bass mendalam.",
  },
  {
    id: 4,
    name: "Smartwatch Sport Series",
    category: "Elektronik",
    price: 1200000,
    description:
      "Jam tangan pintar pemantau kesehatan dan aktivitas olahraga harian.",
  },
  {
    id: 5,
    name: "Kamera Mirrorless Alpha",
    category: "Elektronik",
    price: 6500000,
    description: "Kamera digital mirrorless hasil jepretan tajam profesional.",
  },
  {
    id: 6,
    name: "Powerbank Fast Charge 20k",
    category: "Elektronik",
    price: 350000,
    description:
      "Kapasitas besar 20.000 mAh dengan pengisian daya super cepat.",
  },
  {
    id: 7,
    name: "Speaker Bluetooth Bass",
    category: "Elektronik",
    price: 450000,
    description: "Speaker portabel tahan air dengan suara menggelegar.",
  },
  {
    id: 8,
    name: "Mouse Gaming RGB",
    category: "Elektronik",
    price: 275000,
    description:
      "Mouse ergonomis dengan pencahayaan RGB dan sensor presisi tinggi.",
  },
  {
    id: 9,
    name: "Keyboard Mechanical Blue",
    category: "Elektronik",
    price: 600000,
    description:
      "Keyboard mekanis dengan sakelar taktil untuk kenyamanan mengetik.",
  },
  {
    id: 10,
    name: "Monitor LED 24 Inch",
    category: "Elektronik",
    price: 1750000,
    description: "Layar IPS jernih dengan refresh rate 75Hz bebas kedip.",
  },

  {
    id: 11,
    name: "Kaos Polos Katun Premium",
    category: "Pakaian",
    price: 95000,
    description: "Kaos berbahan katun 30s adem dan lembut di kulit.",
  },
  {
    id: 12,
    name: "Jaket Hoodie Fleece",
    category: "Pakaian",
    price: 220000,
    description: "Hoodie hangat dan bergaya kasual untuk segala cuaca.",
  },
  {
    id: 13,
    name: "Celana Jeans Slim Fit",
    category: "Pakaian",
    price: 280000,
    description: "Jeans denim lentur dengan potongan modern yang pas di badan.",
  },
  {
    id: 14,
    name: "Kemeja Flanel Kotak",
    category: "Pakaian",
    price: 175000,
    description: "Kemeja flanel tebal nyaman dipakai formal maupun kasual.",
  },
  {
    id: 15,
    name: "Blazer Formal Pria",
    category: "Pakaian",
    price: 450000,
    description: "Blazer elegan untuk acara formal dan profesional.",
  },
  {
    id: 16,
    name: "Rok Plisket Panjang",
    category: "Pakaian",
    price: 130000,
    description: "Rok lipit anggun berbahan hyget premium yang jatuh.",
  },
  {
    id: 17,
    name: "Cardigan Rajut Oversize",
    category: "Pakaian",
    price: 160000,
    description: "Cardigan rajutan lembut model longgar kekinian.",
  },
  {
    id: 18,
    name: "Celana Chino Panjang",
    category: "Pakaian",
    price: 210000,
    description: "Celana bahan katun twill fleksibel dan nyaman dipakai.",
  },
  {
    id: 19,
    name: "Sweater Crewneck Polos",
    category: "Pakaian",
    price: 185000,
    description: "Sweater hangat bergaya minimalis gaya streetwear.",
  },
  {
    id: 20,
    name: "Dress Pesta Elegan",
    category: "Pakaian",
    price: 350000,
    description: "Gaun malam menawan dengan detail bahan premium.",
  },

  {
    id: 21,
    name: "Sepatu Sneakers Casual",
    category: "Sepatu",
    price: 350000,
    description: "Sneakers ringan bergaya trendy untuk jalan-jalan.",
  },
  {
    id: 22,
    name: "Sepatu Running Sport",
    category: "Sepatu",
    price: 550000,
    description: "Sepatu lari empuk dengan sol anti selip berteknologi tinggi.",
  },
  {
    id: 23,
    name: "Sepatu Pantofel Kulit",
    category: "Sepatu",
    price: 420000,
    description: "Sepatu formal kulit asli untuk kerja dan acara resmi.",
  },
  {
    id: 24,
    name: "Sandal Kulit Casual",
    category: "Sepatu",
    price: 150000,
    description: "Sandal harian empuk dan kuat dengan bahan kulit sintetis.",
  },
  {
    id: 25,
    name: "Sepatu Loafers Pria",
    category: "Sepatu",
    price: 380000,
    description: "Loafers slip-on praktis berdesain klasik elegan.",
  },
  {
    id: 26,
    name: "Sepatu Flats Wanita",
    category: "Sepatu",
    price: 165000,
    description: "Sepatu teplek wanita cantik nyaman untuk aktivitas seharian.",
  },
  {
    id: 27,
    name: "Sepatu Safety Boots",
    category: "Sepatu",
    price: 500000,
    description: "Sepatu pelindung kerja ujung besi tahan banting.",
  },
  {
    id: 28,
    name: "Sandal Gunung Outdoor",
    category: "Sepatu",
    price: 220000,
    description: "Sandal penjelajah alam kuat segala medan jalur pendakian.",
  },
  {
    id: 29,
    name: "Sepatu Futsal Elastis",
    category: "Sepatu",
    price: 290000,
    description: "Sepatu lapangan indoor dengan daya cengkeram optimal.",
  },
  {
    id: 30,
    name: "Slip On Canvas",
    category: "Sepatu",
    price: 175000,
    description: "Sepatu kanvas praktis tanpa tali gaya santai.",
  },

  {
    id: 31,
    name: 'Tas Ransel Laptop 15"',
    category: "Aksesori",
    price: 275000,
    description:
      "Ransel punggung multifungsi muat laptop dan banyak kompartemen.",
  },
  {
    id: 32,
    name: "Dompet Kulit Asli",
    category: "Aksesori",
    price: 140000,
    description: "Dompet lipat kulit sapi asli awet dan banyak slot kartu.",
  },
  {
    id: 33,
    name: "Tas Selempang Mini",
    category: "Aksesori",
    price: 120000,
    description: "Sling bag kasual praktis untuk bawa gawai dan dompet.",
  },
  {
    id: 34,
    name: "Topi Baseball Polos",
    category: "Aksesori",
    price: 65000,
    description: "Topi gaya urban kasual dengan pengait ukuran praktis.",
  },
  {
    id: 35,
    name: "Ikat Pinggang Kulit",
    category: "Aksesori",
    price: 95000,
    description: "Sabuk gesper formal bahan kulit tahan lama.",
  },
  {
    id: 36,
    name: "Kacamata Hitam Polarized",
    category: "Aksesori",
    price: 180000,
    description: "Kacamata pelindung silau UV anti radiasi matahari.",
  },
  {
    id: 37,
    name: "Tas Tote Bag Kanvas",
    category: "Aksesori",
    price: 75000,
    description: "Tas jinjing kanvas luas muat banyak barang bawaan.",
  },
  {
    id: 38,
    name: "Jam Tangan Chronograph",
    category: "Aksesori",
    price: 850000,
    description: "Jam tangan analog mewah berlapis baja tahan karat.",
  },
  {
    id: 39,
    name: "Payung Lipat Otomatis",
    category: "Aksesori",
    price: 70000,
    description: "Payung anti angin kokoh praktis masuk tas.",
  },
  {
    id: 40,
    name: "Gantungan Kunci Kulit",
    category: "Aksesori",
    price: 35000,
    description: "Gantungan kunci elegan minimalis eksklusif.",
  },

  {
    id: 41,
    name: "Botol Minum Termos 500ml",
    category: "Rumah Tangga",
    price: 110000,
    description: "Termos stainless steel jaga suhu panas dan dingin seharian.",
  },
  {
    id: 42,
    name: "Kotak Bekal Makan Set",
    category: "Rumah Tangga",
    price: 85000,
    description: "Lunch box sekat kedap udara bebas BPA aman microwave.",
  },
  {
    id: 43,
    name: "Lampu Meja Belajar LED",
    category: "Rumah Tangga",
    price: 135000,
    description: "Lampu meja sentuh dengan tingkat kecerahan bisa diatur.",
  },
  {
    id: 44,
    name: "Bantal Sofa Estetik",
    category: "Rumah Tangga",
    price: 65000,
    description: "Bantal empuk dekorasi ruang tamu atau kamar tidur.",
  },
  {
    id: 45,
    name: "Sapu Elektrik Otomatis",
    category: "Rumah Tangga",
    price: 290000,
    description: "Alat pembersih lantai praktis dorong tanpa kabel.",
  },
  {
    id: 46,
    name: "Set Piring Keramik 6pcs",
    category: "Rumah Tangga",
    price: 210000,
    description: "Piring makan keramik cantik tahan panas berkualitas tinggi.",
  },
  {
    id: 47,
    name: "Dispenser Sabun Otomatis",
    category: "Rumah Tangga",
    price: 150000,
    description: "Dispenser sabun cair sensor gerak nirsentuh higienis.",
  },
  {
    id: 48,
    name: "Rak Sepatu Susun Plastik",
    category: "Rumah Tangga",
    price: 90000,
    description: "Rak penyimpanan alas kaki modular hemat tempat.",
  },
  {
    id: 49,
    name: "Gantungan Baju Dinding",
    category: "Rumah Tangga",
    price: 55000,
    description: "Hook gantungan pakaian minimalis stainless kokoh.",
  },
  {
    id: 50,
    name: "Set Pisau Dapur Stainless",
    category: "Rumah Tangga",
    price: 195000,
    description: "Aneka pisau tajam anti karat lengkap dengan dudukan.",
  },
];

// State Aplikasi
let currentCategory = "Semua";
let searchQuery = "";
let currentSort = "default";
let cart = [];

// Inisialisasi halaman saat pertama kali dimuat
document.addEventListener("DOMContentLoaded", () => {
  renderCategories();
  filterAndRenderProducts();
});

// Format angka ke format Rupiah
function formatRupiah(number) {
  return new Intl.NumberFormat("id-ID", {
    style: "currency",
    currency: "IDR",
    minimumFractionDigits: 0,
  }).format(number);
}

// Render tombol kategori di sidebar
function renderCategories() {
  const categoriesContainer = document.getElementById("category-filters");
  const uniqueCategories = [
    "Semua",
    ...new Set(products.map((p) => p.category)),
  ];

  categoriesContainer.innerHTML = uniqueCategories
    .map((cat) => {
      const isActive = cat === currentCategory;
      return `
                    <button onclick="setCategory('${cat}')" 
                        class="w-full text-left px-4 py-2.5 rounded-xl text-sm font-medium transition flex items-center justify-between ${
                          isActive
                            ? "bg-indigo-600 text-white shadow-md shadow-indigo-100 font-semibold"
                            : "text-slate-600 hover:bg-slate-100 hover:text-slate-900"
                        }">
                        <span>${cat}</span>
                        ${isActive ? '<i class="fa-solid fa-chevron-right text-xs"></i>' : ""}
                    </button>
                `;
    })
    .join("");
}

// Pilih kategori filter
function setCategory(category) {
  currentCategory = category;

  // Tampilkan tombol reset jika kategori bukan "Semua" atau ada search/sort aktif
  const resetBtn = document.getElementById("reset-filter");
  if (
    currentCategory !== "Semua" ||
    searchQuery !== "" ||
    currentSort !== "default"
  ) {
    resetBtn.classList.remove("hidden");
  } else {
    resetBtn.classList.add("hidden");
  }

  renderCategories();
  filterAndRenderProducts();
}

// Handle Input Pencarian
function handleSearch() {
  searchQuery = document
    .getElementById("search-input")
    .value.toLowerCase()
    .trim();
  const resetBtn = document.getElementById("reset-filter");

  if (
    searchQuery !== "" ||
    currentCategory !== "Semua" ||
    currentSort !== "default"
  ) {
    resetBtn.classList.remove("hidden");
  } else {
    resetBtn.classList.add("hidden");
  }

  filterAndRenderProducts();
}

// Handle Pilihan Pengurutan (Sorting)
function handleSort() {
  currentSort = document.getElementById("sort-select").value;
  const resetBtn = document.getElementById("reset-filter");

  if (
    currentSort !== "default" ||
    currentCategory !== "Semua" ||
    searchQuery !== ""
  ) {
    resetBtn.classList.remove("hidden");
  } else {
    resetBtn.classList.add("hidden");
  }

  filterAndRenderProducts();
}

// Reset semua filter
function resetFilters() {
  currentCategory = "Semua";
  searchQuery = "";
  currentSort = "default";

  document.getElementById("search-input").value = "";
  document.getElementById("sort-select").value = "default";
  document.getElementById("reset-filter").classList.add("hidden");

  renderCategories();
  filterAndRenderProducts();
}

// Proses Filter & Sorting Data Produk
function filterAndRenderProducts() {
  let result = [...products];

  // 1. Filter Kategori
  if (currentCategory !== "Semua") {
    result = result.filter((p) => p.category === currentCategory);
  }

  // 2. Filter Pencarian Nama
  if (searchQuery !== "") {
    result = result.filter((p) => p.name.toLowerCase().includes(searchQuery));
  }

  // 3. Pengurutan (Sorting)
  if (currentSort === "name-asc") {
    result.sort((a, b) => a.name.localeCompare(b.name));
  } else if (currentSort === "name-desc") {
    result.sort((a, b) => b.name.localeCompare(a.name));
  } else if (currentSort === "price-asc") {
    result.sort((a, b) => a.price - b.price);
  } else if (currentSort === "price-desc") {
    result.sort((a, b) => b.price - a.price);
  }

  renderProducts(result);
}

// Render Kartu Produk ke UI
function renderProducts(items) {
  const grid = document.getElementById("product-grid");
  const emptyState = document.getElementById("empty-state");
  const countLabel = document.getElementById("product-count");

  countLabel.textContent = `Menampilkan ${items.length} produk`;

  if (items.length === 0) {
    grid.innerHTML = "";
    emptyState.classList.remove("hidden");
    return;
  }

  emptyState.classList.add("hidden");

  grid.innerHTML = items
    .map(
      (product) => `
                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col overflow-hidden group">
                    <div class="bg-slate-100 h-48 relative overflow-hidden flex items-center justify-center text-slate-400 group-hover:bg-slate-200 transition">
                        <i class="fa-solid fa-box text-4xl text-slate-300"></i>
                        <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-indigo-600 text-xs font-semibold px-2.5 py-1 rounded-lg shadow-sm">
                            ${product.category}
                        </span>
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <h3 class="font-bold text-slate-800 text-base mb-1 line-clamp-1 group-hover:text-indigo-600 transition">${product.name}</h3>
                        <p class="text-slate-500 text-xs mb-4 line-clamp-2 leading-relaxed flex-grow">${product.description}</p>
                        <div class="flex items-center justify-between pt-3 border-t border-slate-100 mt-auto">
                            <div>
                                <span class="block text-[10px] text-slate-400 font-medium uppercase tracking-wider">Harga</span>
                                <span class="font-bold text-indigo-600 text-base">${formatRupiah(product.price)}</span>
                            </div>
                            <button onclick="addToCart(${product.id})" class="bg-indigo-50 hover:bg-indigo-600 text-indigo-600 hover:text-white p-2.5 rounded-xl transition flex items-center justify-center shadow-sm">
                                <i class="fa-solid fa-cart-plus text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
            `,
    )
    .join("");
}

// Tambah produk ke keranjang
function addToCart(productId) {
  const product = products.find((p) => p.id === productId);
  if (!product) return;

  const existingItem = cart.find((item) => item.id === productId);
  if (existingItem) {
    existingItem.quantity += 1;
  } else {
    cart.push({ ...product, quantity: 1 });
  }

  updateCartBadge();
  renderCartItems();
  showToast(`Berhasil menambahkan ${product.name}`);
}

// Update badge jumlah item keranjang
function updateCartBadge() {
  const count = cart.reduce((sum, item) => sum + item.quantity, 0);
  const badge = document.getElementById("cart-count");
  badge.textContent = count;
}

// Buka / Tutup Modal Keranjang
function toggleCartModal() {
  const modal = document.getElementById("cart-modal");
  if (modal.classList.contains("hidden")) {
    modal.classList.remove("hidden");
    renderCartItems();
  } else {
    modal.classList.add("hidden");
  }
}

// Render isi keranjang
function renderCartItems() {
  const container = document.getElementById("cart-items");
  const totalContainer = document.getElementById("cart-total");

  if (cart.length === 0) {
    container.innerHTML = `
                    <div class="text-center py-12 text-slate-400">
                        <i class="fa-solid fa-cart-shopping text-4xl mb-3 text-slate-300"></i>
                        <p class="text-sm font-medium">Keranjang belanja Anda masih kosong</p>
                    </div>
                `;
    totalContainer.textContent = formatRupiah(0);
    return;
  }

  let totalPrice = 0;
  container.innerHTML = cart
    .map((item) => {
      totalPrice += item.price * item.quantity;
      return `
                    <div class="py-3 flex items-center justify-between">
                        <div class="pr-2">
                            <h4 class="font-semibold text-sm text-slate-800 line-clamp-1">${item.name}</h4>
                            <p class="text-xs text-indigo-600 font-bold mt-0.5">${formatRupiah(item.price)}</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="flex items-center border border-slate-200 rounded-lg overflow-hidden bg-slate-50">
                                <button onclick="updateQuantity(${item.id}, -1)" class="px-2 py-1 text-xs text-slate-600 hover:bg-slate-200 transition">-</button>
                                <span class="px-2.5 text-xs font-bold text-slate-800">${item.quantity}</span>
                                <button onclick="updateQuantity(${item.id}, 1)" class="px-2 py-1 text-xs text-slate-600 hover:bg-slate-200 transition">+</button>
                            </div>
                            <button onclick="removeFromCart(${item.id})" class="text-slate-400 hover:text-rose-500 p-1.5 transition">
                                <i class="fa-solid fa-trash-can text-xs"></i>
                            </button>
                        </div>
                    </div>
                `;
    })
    .join("");

  totalContainer.textContent = formatRupiah(totalPrice);
}

// Update kuantitas item keranjang
function updateQuantity(productId, amount) {
  const item = cart.find((i) => i.id === productId);
  if (!item) return;

  item.quantity += amount;
  if (item.quantity <= 0) {
    cart = cart.filter((i) => i.id !== productId);
  }

  updateCartBadge();
  renderCartItems();
}

// Hapus item dari keranjang
function removeFromCart(productId) {
  cart = cart.filter((i) => i.id !== productId);
  updateCartBadge();
  renderCartItems();
}

// Simulasi Checkout
function checkout() {
  if (cart.length === 0) {
    showToast("Keranjang masih kosong!");
    return;
  }
  showToast("Checkout berhasil! Terima kasih telah berbelanja.");
  cart = [];
  updateCartBadge();
  toggleCartModal();
}

// Tampilkan Toast Notifikasi
function showToast(message) {
  const toast = document.getElementById("toast");
  const msg = document.getElementById("toast-message");
  msg.textContent = message;

  toast.classList.remove("translate-y-24", "opacity-0");
  setTimeout(() => {
    toast.classList.add("translate-y-24", "opacity-0");
  }, 3000);
}
