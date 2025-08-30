<?php
// ================== SERVER-SIDE HANDLER ==================
session_start();

// Endpoint AJAX: index.php?action=send
if (($_GET['action'] ?? '') === 'send' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json; charset=utf-8');

    // --- Ambil token & chat ID dari environment (disarankan) ---
    $BOT_TOKEN = getenv('TELEGRAM_BOT_TOKEN') ?: 'REPLACE_WITH_YOUR_BOT_TOKEN';
    $CHAT_ID   = getenv('TELEGRAM_CHAT_ID')   ?: 'REPLACE_WITH_YOUR_CHAT_ID';

    if ($BOT_TOKEN === 'REPLACE_WITH_YOUR_BOT_TOKEN' || $CHAT_ID === 'REPLACE_WITH_YOUR_CHAT_ID') {
        http_response_code(500);
        echo json_encode(['ok' => false, 'error' => 'Server belum dikonfigurasi (bot token / chat id).']);
        exit;
    }

    // --- Rate limit sederhana: 1 request per 10 detik per sesi ---
    $now = time();
    $cooldown = 10; // detik
    if (isset($_SESSION['last_submit']) && ($now - $_SESSION['last_submit']) < $cooldown) {
        $wait = $cooldown - ($now - $_SESSION['last_submit']);
        http_response_code(429);
        echo json_encode(['ok' => false, 'error' => "Terlalu cepat. Coba lagi dalam {$wait} detik."]);
        exit;
    }

    // --- Baca JSON body ---
    $raw = file_get_contents('php://input');
    $data = json_decode($raw, true);
    $phone   = trim($data['phone'] ?? '');
    $message = trim($data['message'] ?? '');

    // --- Validasi ---
    if ($phone === '' || $message === '') {
        http_response_code(400);
        echo json_encode(['ok' => false, 'error' => 'Nomor WA dan pesan wajib diisi.']);
        exit;
    }
    if (!preg_match('/^\d{10,15}$/', $phone)) {
        http_response_code(400);
        echo json_encode(['ok' => false, 'error' => 'Nomor WA tidak valid (hanya angka, 10–15 digit).']);
        exit;
    }

    // (Opsional) Sanitasi pesan agar aman
    $safeMsg = strip_tags($message);

    // (Opsional) Info pengirim minimal (IP dipendekkan untuk privasi)
    $ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
    // Mask sebagian IP
    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
        $parts = explode('.', $ip);
        $ipMasked = $parts[0].'.'.$parts[1].'.x.x';
    } else {
        $ipMasked = 'masked';
    }

    // --- Susun teks ke Telegram ---
    $text = "📩 <b>Pesan baru dari WEB Meka</b>\n"
          . "📞 <b>WA</b>: <code>{$phone}</code>\n"
          . "💬 <b>Pesan</b>:\n"
          . htmlspecialchars($safeMsg, ENT_QUOTES, 'UTF-8')
          . "\n\n🔒 IP: {$ipMasked}";

    // --- Kirim ke Telegram ---
    $apiUrl = "https://api.telegram.org/bot{$BOT_TOKEN}/sendMessage";
    $post   = [
        'chat_id'    => $CHAT_ID,
        'text'       => $text,
        'parse_mode' => 'HTML'
    ];

    $ch = curl_init($apiUrl);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_HTTPHEADER     => ['Content-Type: application/x-www-form-urlencoded'],
        CURLOPT_POSTFIELDS     => http_build_query($post)
    ]);
    $resp = curl_exec($ch);
    $err  = curl_error($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($err || $code < 200 || $code >= 300) {
        http_response_code(500);
        echo json_encode(['ok' => false, 'error' => 'Gagal mengirim ke Telegram.']);
        exit;
    }

    // Sukses: simpan timestamp rate limit
    $_SESSION['last_submit'] = $now;

    echo json_encode(['ok' => true, 'message' => 'Pesan terkirim!']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SMK Negeri 1 Indralaya Selatan - Jurusan Mekatronika</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    * { margin:0; padding:0; box-sizing:border-box; font-family:'Poppins', sans-serif; }
    body { background:#f8f9fa; line-height:1.6; }
    header { background:linear-gradient(90deg,#B22222,#8B0000); color:#fff; text-align:center; padding:40px 10px; }
    header h1 { margin-bottom:10px; font-size:32px; }
    nav { background:#8B0000; display:flex; justify-content:center; gap:18px; padding:12px 0; position:sticky; top:0; z-index:1000; }
    nav a { color:#fff; text-decoration:none; font-weight:600; font-size:16px; position:relative; }
    nav a::after { content:""; width:0; height:2px; background:#fff; position:absolute; left:0; bottom:-5px; transition:0.3s; }
    nav a:hover::after { width:100%; }
    .container { width:90%; max-width:1200px; margin:auto; padding:30px 0; }
    .section-title { text-align:center; font-size:28px; margin-bottom:20px; color:#B22222; }
    section { background:#fff; border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,.08); padding:20px; margin-bottom:30px; }
    .program-list, .facility-list, .career-list, .achievement-list { display:grid; grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:18px; list-style:none; }
    .program-list li, .facility-list li, .career-list li, .achievement-list li { background:#ffe6e6; padding:15px; border-radius:8px; font-weight:500; border-left:6px solid #B22222; }
    .gallery { display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:15px; }
    .gallery img { width:100%; height:180px; object-fit:cover; border-radius:10px; }
    footer { background:#B22222; color:#fff; text-align:center; padding:12px; }

    /* Floating & Chat */
    .floating-nav { position:fixed; bottom:20px; right:20px; background:#B22222; color:#fff; padding:16px 18px; border-radius:50%; font-size:22px; cursor:pointer; box-shadow:0 6px 15px rgba(0,0,0,.3); z-index:2000; }
    .floating-nav:hover { background:#8B0000; transform:rotate(90deg); }
    .chat-box-container {
        position:fixed; bottom:90px; right:20px; width:320px; background:#fff; padding:15px;
        border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,.2); display:none; z-index:3000;
    }
    .chat-box-container h3 { text-align:center; margin-bottom:10px; font-size:18px; color:#B22222; }
    .chat-box-container input, .chat-box-container textarea {
        width:100%; border:1px solid #ccc; border-radius:8px; padding:10px; margin-bottom:10px;
    }
    .chat-box-container textarea { height:90px; resize:none; }
    .chat-box-container button { width:100%; padding:10px; border:none; background:#28a745; color:#fff; font-size:16px; border-radius:8px; cursor:pointer; }
    .chat-box-container button[disabled] { opacity:.6; cursor:not-allowed; }
    .chat-box-container button:hover:not([disabled]) { background:#218838; }
    .status { text-align:center; font-size:14px; margin-top:8px; min-height:18px; }
</style>
</head>
<body>
<header>
    <h1><i class="fas fa-robot"></i> SMK Negeri 1 Indralaya Selatan</h1>
    <p>Jurusan Mekatronika - Teknologi Masa Depan</p>
</header>

<nav>
    <a href="#tentang">Tentang</a>
    <a href="#program">Kompetensi</a>
    <a href="#fasilitas">Fasilitas</a>
    <a href="#prestasi">Prestasi</a>
    <a href="#karir">Karir</a>
    <a href="#kontak">Kontak</a>
</nav>

<div class="container">
    <section id="tentang">
        <h2 class="section-title">Tentang Jurusan Mekatronika</h2>
        <p><strong>Sejarah Singkat:</strong> Jurusan Mekatronika di SMK Negeri 1 Indralaya Selatan berdiri untuk mendukung perkembangan teknologi industri yang semakin maju. Dengan memadukan mekanika, elektronika, dan pemrograman, jurusan ini menghasilkan lulusan yang siap bersaing di era industri 4.0.</p>
        <ul>
            <li>Menyelenggarakan pendidikan berbasis teknologi terbaru.</li>
            <li>Meningkatkan keterampilan praktis melalui pembelajaran berbasis proyek.</li>
            <li>Menjalin kerja sama dengan industri dan dunia kerja.</li>
        </ul>
    </section>

    <section id="program">
        <h2 class="section-title">Kompetensi Keahlian</h2>
        <ul class="program-list">
            <li><strong>Dasar Listrik & Elektronika</strong><br>Memahami konsep dasar kelistrikan, rangkaian analog & digital, serta alat ukur.</li>
            <li><strong>Pemrograman Mikrokontroler (Arduino, PLC)</strong><br>Membuat dan memprogram sistem otomatis untuk industri.</li>
            <li><strong>Sistem Pneumatik & Hidrolik</strong><br>Operasi & perawatan aktuator berbasis udara/cairan.</li>
            <li><strong>Desain Mekanik & CAD</strong><br>Merancang komponen 2D/3D dengan perangkat lunak CAD.</li>
            <li><strong>Robotika & Otomasi Industri</strong><br>Merakit & mengendalikan robot berbasis sensor/aktuator.</li>
        </ul>
    </section>

    <section id="fasilitas">
        <h2 class="section-title">Fasilitas Laboratorium</h2>
        <ul class="facility-list">
            <li>Laboratorium Mekatronika</li>
            <li>Laboratorium Pneumatik & Hidrolik</li>
            <li>Laboratorium PLC & Otomasi</li>
            <li>Workshop Robotika</li>
            <li>Peralatan CAD & CNC</li>
        </ul>
    </section>

    <section id="prestasi">
        <h2 class="section-title">Kegiatan & Prestasi</h2>
        <ul class="achievement-list">
            <li>Juara 1 LKS Tingkat Provinsi (Bidang Mekatronika)</li>
            <li>Proyek Inovasi Robot Cerdas</li>
            <li>Kerja sama magang industri nasional</li>
        </ul>
    </section>

    <section id="karir">
        <h2 class="section-title">Peluang Karir Lulusan</h2>
        <ul class="career-list">
            <li><strong>Teknisi Mekatronika</strong> — Perakitan & perawatan sistem.</li>
            <li><strong>Operator Otomasi Industri</strong> — Mengoperasikan lini otomatis.</li>
            <li><strong>Programmer PLC & Robotika</strong> — Pengembangan logic control.</li>
            <li><strong>Maintenance Engineer</strong> — Reliability & troubleshooting.</li>
            <li><strong>Wirausaha Teknologi</strong> — Produk & jasa otomasi.</li>
        </ul>
    </section>

    <section>
        <h2 class="section-title">Galeri Kegiatan</h2>
        <div class="gallery">
            <img src="https://via.placeholder.com/200x150" alt="Lab Mekatronika">
            <img src="https://via.placeholder.com/200x150" alt="Siswa Praktikum">
            <img src="https://via.placeholder.com/200x150" alt="Kompetisi Robot">
        </div>
    </section>

    <section id="kontak">
        <h2 class="section-title">Kontak</h2>
        <p>Alamat: Jl. Raya Indralaya, Kabupaten Ogan Ilir, Sumatera Selatan</p>
        <p>Email: smkn1indralayaselatan@gmail.com</p>
        <p>Telepon: 0711-xxxxxxx</p>
    </section>
</div>

<!-- Tombol buka chat -->
<div class="floating-nav" onclick="toggleChat()"><i class="fas fa-comments"></i></div>

<!-- Chat Box -->
<div class="chat-box-container" id="chatBox">
    <h3>Chat Anonim</h3>
    <input type="text" id="phone" placeholder="Nomor WA (10–15 digit)">
    <textarea id="message" placeholder="Tulis pesan Anda..."></textarea>
    <button id="sendBtn" onclick="sendMessage()">Kirim ke Telegram</button>
    <div class="status" id="status"></div>
</div>

<footer>
    <p>&copy; 2025 SMK Negeri 1 Indralaya Selatan - Jurusan Mekatronika</p>
</footer>

<script>
function toggleChat() {
    const chat = document.getElementById('chatBox');
    chat.style.display = chat.style.display === 'block' ? 'none' : 'block';
}

async function sendMessage() {
    const phoneEl  = document.getElementById('phone');
    const msgEl    = document.getElementById('message');
    const statusEl = document.getElementById('status');
    const btn      = document.getElementById('sendBtn');

    const phone = phoneEl.value.trim();
    const message = msgEl.value.trim();

    // Validasi client-side
    if (!/^\d{10,15}$/.test(phone)) {
        statusEl.textContent = 'Nomor WA tidak valid (hanya angka, 10–15 digit).';
        statusEl.style.color = 'red';
        return;
    }
    if (message.length === 0) {
        statusEl.textContent = 'Pesan tidak boleh kosong.';
        statusEl.style.color = 'red';
        return;
    }

    btn.disabled = true;
    statusEl.textContent = 'Mengirim...';
    statusEl.style.color = 'black';

    try {
        const res = await fetch('?action=send', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ phone, message })
        });

        const data = await res.json().catch(() => ({}));

        if (!res.ok || !data.ok) {
            throw new Error(data.error || 'Gagal mengirim pesan.');
        }

        statusEl.textContent = data.message || 'Pesan terkirim!';
        statusEl.style.color = 'green';
        phoneEl.value = '';
        msgEl.value = '';
    } catch (e) {
        statusEl.textContent = e.message;
        statusEl.style.color = 'red';
    } finally {
        btn.disabled = false;
    }
}
</script>
</body>
</html>
