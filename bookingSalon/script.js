// === Update tahun otomatis di footer ===
document.addEventListener("DOMContentLoaded", () => {
  const yearEl = document.getElementById("year");
  yearEl.textContent = new Date().getFullYear();
});

// === Event listener tombol booking (artist) ===
const bookingBtns = document.querySelectorAll(".btn.btn-primary");
bookingBtns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    if (btn.closest("#artists")) {
      alert("Silakan isi form booking di bawah 👇");
    }
  });
});

// === Fitur Form Booking ===
const bookingForm = document.getElementById("bookingForm");
const hasilBooking = document.getElementById("hasilBooking");

if (bookingForm) {
  bookingForm.addEventListener("submit", function (e) {
    e.preventDefault(); // supaya tidak reload halaman

    const nama = document.getElementById("nama").value;
    const layanan = document.getElementById("layanan").value;
    const tanggal = document.getElementById("tanggal").value;
    const jam = document.getElementById("jam").value;

    hasilBooking.textContent =
      `✅ Booking atas nama ${nama} berhasil untuk layanan "${layanan}" ` +
      `pada tanggal ${tanggal} jam ${jam}.`;

    bookingForm.reset(); // kosongkan form setelah submit
  });
}

// === Tombol Dark Mode ===
const toggleBtn = document.createElement("button");
toggleBtn.textContent = "🌙 Dark Mode";
toggleBtn.className = "btn btn-primary";
document.querySelector("header").appendChild(toggleBtn);

toggleBtn.addEventListener("click", () => {
  document.body.classList.toggle("dark-mode");
  toggleBtn.textContent = document.body.classList.contains("dark-mode")
    ? "☀️ Light Mode"
    : "🌙 Dark Mode";
});

// === Styling dark mode via JS ===
const styleDark = document.createElement("style");
styleDark.textContent = `
  body.dark-mode {
    background: #222;
    color: #eee;
  }
  body.dark-mode header,
  body.dark-mode footer {
    background: #111;
    color: #fff;
  }
  body.dark-mode .card,
  body.dark-mode .artist-card,
  body.dark-mode #how-it-works ol,
  body.dark-mode #testimonials blockquote,
  body.dark-mode #contact address,
  body.dark-mode #booking form {
    background: #333;
    color: #eee;
  }
`;
document.head.appendChild(styleDark);
