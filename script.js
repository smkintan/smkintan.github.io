// Ambil nilai counter dari localStorage
let counter = parseInt(localStorage.getItem("total_visited")) || 0;
counter++;

// Simpan/update di localStorage
localStorage.setItem("total_visited", counter);

// Tampilkan jumlah kunjungan
function updateDisplay() {
    document.getElementById('result').innerHTML = `
        <h3>Anda telah mengunjungi halaman ini 
            <label style='font-size:40px;' class='text-info'>${counter}</label> kali.
        </h3>`;
}

updateDisplay();

// Tambahkan fungsi reset
document.getElementById('resetBtn').addEventListener('click', function() {
    counter = 0;
    localStorage.setItem("total_visited", counter);
    updateDisplay();
});
