// Set cookie berlaku 6 bulan ke depan
let expiration = new Date();
expiration.setMonth(expiration.getMonth() + 6);

// Ambil nilai cookie "total_visited"
let counter = parseInt(getCookie("total_visited")) || 0;
counter++;

// Simpan/update cookie
document.cookie = "total_visited=" + counter + ";expires=" + expiration.toUTCString() + ";path=/";

// Fungsi untuk membaca nilai cookie berdasarkan nama
function getCookie(cookieName) {
    let cookies = document.cookie.split("; ");
    for (let i = 0; i < cookies.length; i++) {
        let pair = cookies[i].split("=");
        if (pair[0] === cookieName) {
            return pair[1];
        }
    }
    return 0;
}

// Tampilkan jumlah kunjungan
document.getElementById('result').innerHTML = `
    <h3>Anda telah mengunjungi halaman ini 
        <label style='font-size:40px;' class='text-info'>${counter}</label> kali.
    </h3>`;
