<html lang="id" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Portal Guru - Sistem Absensi</title>
    <link rel="icon" type="image/x-icon" href="https://smkn1intan.com/assets/sneat/img/favicon/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://smkn1intan.com/assets/sneat/vendor/fonts/boxicons.css">
    <link rel="stylesheet" href="https://smkn1intan.com/assets/sneat/vendor/css/core.css">
    <link rel="stylesheet" href="https://smkn1intan.com/assets/sneat/vendor/css/theme-default.css">
    <link rel="stylesheet" href="https://smkn1intan.com/assets/sneat/css/demo.css">
    <link rel="stylesheet" href="https://smkn1intan.com/assets/sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <!-- Boxicons CDN Fallback -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        :root {
            --bs-primary: #28a745;
            --bs-primary-rgb: 40, 167, 69;
        }
        .bg-menu-theme .menu-inner > .menu-item.active > .menu-link {
            background-color: rgba(40, 167, 69, 0.16) !important;
            color: #28a745 !important;
        }
        .bg-menu-theme .menu-inner > .menu-item.active > .menu-link .menu-icon {
            color: #28a745 !important;
        }
        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Sidebar -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="https://smkn1intan.com/guru/dashboard" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <i class="bx bx-user-check bx-md text-success"></i>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Portal Guru</span>
                    </a>
                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>
                
                <div class="menu-inner-shadow"></div>
                
                <ul class="menu-inner py-1">
                    <li class="menu-item active">
                        <a href="https://smkn1intan.com/guru/dashboard" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="https://smkn1intan.com/guru/riwayat" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-history"></i>
                            <div>Riwayat Absensi</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="https://smkn1intan.com/guru/cuti" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-calendar-x"></i>
                            <div>Cuti &amp; Izin</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="https://smkn1intan.com/guru/profile" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div>Profil Saya</div>
                        </a>
                    </li>
                    
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Bantuan</span>
                    </li>
                    <li class="menu-item ">
                        <a href="https://smkn1intan.com/guru/bantuan" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-help-circle"></i>
                            <div>Panduan</div>
                        </a>
                    </li>
                </ul>
            </aside>
            
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
                    
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                                                                <img src="https://smkn1intan.com/uploads/foto/guru_134_1768369685.jpeg" alt="" class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="https://smkn1intan.com/uploads/foto/guru_134_1768369685.jpeg" alt="" class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">M Najib</span>
                                                    <small class="text-muted">199406032022211006</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li><div class="dropdown-divider"></div></li>
                                    <li>
                                        <a class="dropdown-item" href="https://smkn1intan.com/guru/profile">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">Profil Saya</span>
                                        </a>
                                    </li>
                                    <li><div class="dropdown-divider"></div></li>
                                    <li>
                                        <a class="dropdown-item" href="https://smkn1intan.com/guru_auth/logout">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                
                <!-- Content wrapper -->
                <div class="content-wrapper">
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Dashboard</h4>
    
        
        
    <div class="row">
        <!-- Absensi Card -->
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="bx bx-check-circle me-2"></i>Absensi Hari Ini</h5>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <p class="text-muted mb-1">Thursday, 15 January 2026</p>
                        <h2 class="mb-0" id="currentTime">09.01.45</h2>
                    </div>
                    
                                        <div class="d-flex justify-content-around text-center mb-4">
                        <div>
                            <p class="text-muted mb-1">Jam Masuk</p>
                            <h5 class="text-success">07:30</h5>
                        </div>
                        <div>
                            <p class="text-muted mb-1">Jam Pulang</p>
                            <h5 class="text-info">15:00</h5>
                        </div>
                        <div>
                            <p class="text-muted mb-1">Batas Terlambat</p>
                            <h5 class="text-warning">07:45</h5>
                        </div>
                    </div>
                                        
                    <!-- Status Hari Ini -->
                    <div class="bg-light rounded p-3 mb-4">
                        <div class="row text-center">
                            <div class="col-6">
                                <p class="text-muted small mb-1">Absen Masuk</p>
                                                                <h5 class="text-success mb-0">
                                    <i class="bx bx-check-circle"></i> 07:23                                </h5>
                                <small class="badge bg-success">
                                    Hadir                                </small>
                                                            </div>
                            <div class="col-6">
                                <p class="text-muted small mb-1">Absen Pulang</p>
                                                                <h5 class="text-muted mb-0"><i class="bx bx-minus-circle"></i> Belum</h5>
                                                            </div>
                        </div>
                    </div>
                    
                    <!-- Absensi Buttons -->
                    <div class="d-grid gap-2">
					                                                <button type="button" class="btn btn-lg btn-info" onclick="doAbsensi('masuk')">
                            <i class="bx bx-log-in-circle me-2"></i> Absen Masuk
                        </button>
                                                <button type="button" class="btn btn-lg btn-info" onclick="doAbsensi('pulang')">
                            <i class="bx bx-log-out-circle me-2"></i> Absen Pulang
                        </button>
                                            </div>
                    
                    <!-- Location Info -->
                    <div class="mt-3 text-center">
                        <small class="text-muted" id="locationStatus"><i class="bx bx-error-circle text-danger"></i> Gagal mendapatkan lokasi: User denied Geolocation</small>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Statistics Card -->
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0"><i class="bx bx-bar-chart me-2"></i>Statistik Bulan Ini</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-lg me-3">
                                    <span class="avatar-initial rounded bg-label-success">
                                        <i class="bx bx-check"></i>
                                    </span>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Hadir</small>
                                    <h4 class="mb-0">0</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-lg me-3">
                                    <span class="avatar-initial rounded bg-label-warning">
                                        <i class="bx bx-time"></i>
                                    </span>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Terlambat</small>
                                    <h4 class="mb-0">0</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-lg me-3">
                                    <span class="avatar-initial rounded bg-label-info">
                                        <i class="bx bx-calendar-x"></i>
                                    </span>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Izin/Cuti</small>
                                    <h4 class="mb-0">0</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-lg me-3">
                                    <span class="avatar-initial rounded bg-label-danger">
                                        <i class="bx bx-x"></i>
                                    </span>
                                </div>
                                <div>
                                    <small class="text-muted d-block">Alfa</small>
                                    <h4 class="mb-0">0</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recent Attendance -->
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="mb-0"><i class="bx bx-history me-2"></i>Absensi Terakhir</h5>
                    <a href="https://smkn1intan.com/guru/riwayat" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Masuk</th>
                                <th>Pulang</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                                                        <tr>
                                <td colspan="4" class="text-center text-muted">Belum ada data</td>
                            </tr>
                                                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Absensi Confirmation Modal -->
<div class="modal fade" id="absensiModal" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="absensiModalTitle">Konfirmasi Absensi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="absensiForm" method="POST" action="">
                <input type="hidden" name="csrf_token" value="d705bca246f2f87ad85ad774c0fd2a8d">
                <div class="modal-body">
                    <input type="hidden" name="latitude" id="form_latitude">
                    <input type="hidden" name="longitude" id="form_longitude">
                    <input type="hidden" name="foto" id="form_foto">
                    <input type="hidden" name="kode_qr" id="form_kode_qr">
                    <input type="hidden" name="gps_accuracy" id="form_gps_accuracy">
                    <input type="hidden" name="fake_gps_check" id="form_fake_gps_check">
                    
                    <div class="row">
                        <!-- Left: Camera/Photo -->
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-header py-2">
                                    <small class="fw-bold"><i class="bx bx-camera me-1"></i> Foto Selfie</small>
                                </div>
                                <div class="card-body p-2 text-center">
                                    <video id="cameraPreview" class="w-100 rounded d-none" autoplay="" playsinline="" style="max-height: 200px;"></video>
                                    <canvas id="photoCanvas" class="w-100 rounded d-none" style="max-height: 200px;"></canvas>
                                    <div id="cameraPlaceholder" class="bg-light rounded d-flex align-items-center justify-content-center" style="height: 150px;">
                                        <div class="text-center text-muted">
                                            <i class="bx bx-camera bx-lg"></i>
                                            <p class="mb-0 small">Kamera akan aktif</p>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <button type="button" class="btn btn-sm btn-outline-primary d-none" id="btnStartCamera" onclick="startCamera()">
                                            <i class="bx bx-video"></i> Aktifkan Kamera
                                        </button>
                                        <button type="button" class="btn btn-sm btn-success d-none" id="btnCapturePhoto" onclick="capturePhoto()">
                                            <i class="bx bx-camera"></i> Ambil Foto
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary d-none" id="btnRetakePhoto" onclick="retakePhoto()">
                                            <i class="bx bx-refresh"></i> Ulang
                                        </button>
                                    </div>
                                    <div id="photoStatus" class="mt-2">
                                        <span class="badge bg-secondary"><i class="bx bx-minus"></i> Belum ada foto</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Right: QR Scanner & Location -->
                        <div class="col-md-6">
                            <!-- QR Scanner -->
                            <div class="card mb-3">
                                <div class="card-header py-2">
                                    <small class="fw-bold"><i class="bx bx-qr-scan me-1"></i> Scan QR Code (Opsional)</small>
                                </div>
                                <div class="card-body p-2 text-center">
                                    <video id="qrPreview" class="w-100 rounded d-none" style="max-height: 120px;"></video>
                                    <div id="qrPlaceholder" class="bg-light rounded d-flex align-items-center justify-content-center" style="height: 80px;">
                                        <span class="text-muted small"><i class="bx bx-qr"></i> QR Scanner</span>
                                    </div>
                                    <div id="qrStatus" class="mt-2">
                                        <button type="button" class="btn btn-sm btn-outline-info" id="btnScanQR" onclick="toggleQRScanner()">
                                            <i class="bx bx-qr-scan"></i> Scan QR
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Location Status -->
                            <div class="card">
                                <div class="card-header py-2">
                                    <small class="fw-bold"><i class="bx bx-map me-1"></i> Status Lokasi</small>
                                </div>
                                <div class="card-body p-2">
                                    <div id="locationInfo" class="text-center">
                                        <i class="bx bx-loader-alt bx-spin"></i>
                                        <small class="d-block">Memvalidasi lokasi...</small>
                                    </div>
                                    
                                    <div id="locationValid" class="d-none text-center">
                                        <i class="bx bx-check-circle text-success bx-sm"></i>
                                        <small class="text-success d-block">Lokasi valid!</small>
                                        <small class="text-muted" id="distanceInfo"></small>
                                        <small class="text-muted d-block" id="accuracyInfo"></small>
                                    </div>
                                    
                                    <div id="locationInvalid" class="d-none text-center">
                                        <i class="bx bx-x-circle text-danger bx-sm"></i>
                                        <small class="text-danger d-block" id="locationError">Lokasi tidak valid</small>
                                    </div>
                                    
                                    <!-- Fake GPS Warning -->
                                    <div id="fakeGpsWarning" class="d-none mt-2 alert alert-warning py-1 px-2 mb-0">
                                        <small><i class="bx bx-error"></i> Terdeteksi kemungkinan GPS palsu!</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Verification Checklist -->
                    <div class="card mt-3">
                        <div class="card-body py-2">
                            <div class="row text-center small">
                                <div class="col-3">
                                    <span id="checkLocation" class="badge bg-secondary"><i class="bx bx-loader-alt bx-spin"></i> Lokasi</span>
                                </div>
                                <div class="col-3">
                                    <span id="checkPhoto" class="badge bg-secondary"><i class="bx bx-minus"></i> Foto</span>
                                </div>
                                <div class="col-3">
                                    <span id="checkAccuracy" class="badge bg-secondary"><i class="bx bx-minus"></i> Akurasi</span>
                                </div>
                                <div class="col-3">
                                    <span id="checkFakeGps" class="badge bg-secondary"><i class="bx bx-minus"></i> GPS Check</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" onclick="stopAllMedia()">Batal</button>
                    <button type="submit" class="btn btn-success" id="submitAbsensi" disabled="">
                        <i class="bx bx-check me-1"></i> Konfirmasi Absensi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- QR Code Scanner Library -->
<script src="https://unpkg.com/@aspect-build/aspect-qrcode/dist/aspect-qrcode.min.js" onerror="console.log('QR library not loaded')"></script>
<script src="https://unpkg.com/html5-qrcode" onerror="console.log('html5-qrcode library not loaded')"></script>

<script>
let userLatitude = null;
let userLongitude = null;
const lokasiValid = [{"id_lokasi":"25","nama_lokasi":"Smkn 1 intan","latitude":"-3.31064700","longitude":"104.66704800","radius":"50","status":"Aktif","created_at":"2026-01-12 02:05:24","updated_at":"2026-01-13 13:19:59"}];

// Update clock
setInterval(function() {
    const now = new Date();
    document.getElementById('currentTime').textContent = 
        now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
}, 1000);

// Get user location
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
        function(position) {
            userLatitude = position.coords.latitude;
            userLongitude = position.coords.longitude;
            
            // Check if location is valid
            let isValid = false;
            let nearestLoc = null;
            let minDistance = Infinity;
            
            lokasiValid.forEach(function(lok) {
                const distance = calculateDistance(userLatitude, userLongitude, parseFloat(lok.latitude), parseFloat(lok.longitude));
                if (distance < minDistance) {
                    minDistance = distance;
                    nearestLoc = lok;
                }
                if (distance <= parseFloat(lok.radius)) {
                    isValid = true;
                }
            });
            
            if (isValid) {
                document.getElementById('locationStatus').innerHTML = 
                    '<i class="bx bx-check-circle text-success"></i> Lokasi terdeteksi (' + Math.round(minDistance) + 'm dari ' + nearestLoc.nama_lokasi + ')';
            } else {
                document.getElementById('locationStatus').innerHTML = 
                    '<i class="bx bx-x-circle text-danger"></i> Di luar jangkauan lokasi (' + Math.round(minDistance) + 'm)';
            }
        },
        function(error) {
            document.getElementById('locationStatus').innerHTML = 
                '<i class="bx bx-error-circle text-danger"></i> Gagal mendapatkan lokasi: ' + error.message;
        },
        { enableHighAccuracy: true, timeout: 10000 }
    );
} else {
    document.getElementById('locationStatus').innerHTML = 
        '<i class="bx bx-error-circle text-danger"></i> Browser tidak mendukung geolocation';
}

function calculateDistance(lat1, lon1, lat2, lon2) {
    const R = 6371000; // Earth's radius in meters
    const dLat = (lat2 - lat1) * Math.PI / 180;
    const dLon = (lon2 - lon1) * Math.PI / 180;
    const a = Math.sin(dLat/2) * Math.sin(dLat/2) +
              Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
              Math.sin(dLon/2) * Math.sin(dLon/2);
    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
    return R * c;
}

function doAbsensi(tipe) {
    const modal = new bootstrap.Modal(document.getElementById('absensiModal'));
    
    document.getElementById('absensiModalTitle').textContent = 'Konfirmasi Absen ' + (tipe === 'masuk' ? 'Masuk' : 'Pulang');
    document.getElementById('absensiForm').action = 'https://smkn1intan.com/guru/absen_' + tipe;
    
    // Reset modal state
    document.getElementById('locationInfo').classList.remove('d-none');
    document.getElementById('locationValid').classList.add('d-none');
    document.getElementById('locationInvalid').classList.add('d-none');
    document.getElementById('fakeGpsWarning').classList.add('d-none');
    document.getElementById('submitAbsensi').disabled = false;
    
    // Reset photo
    document.getElementById('cameraPreview').classList.add('d-none');
    document.getElementById('photoCanvas').classList.add('d-none');
    document.getElementById('cameraPlaceholder').classList.remove('d-none');
    document.getElementById('form_foto').value = '';
    document.getElementById('form_kode_qr').value = '';
    
    modal.show();
    
    // Get location with enhanced accuracy
    navigator.geolocation.getCurrentPosition(
        function(position) {
            userLatitude = position.coords.latitude;
            userLongitude = position.coords.longitude;
            
            // Run fake GPS detection
            detectFakeGPS(position);
            
            // Validate location
            validateLocation();
        },
        function(error) {
            document.getElementById('locationInfo').classList.add('d-none');
            document.getElementById('locationInvalid').classList.remove('d-none');
            document.getElementById('locationError').textContent = 'Gagal mendapatkan lokasi: ' + error.message;
            document.getElementById('checkLocation').innerHTML = '<i class="bx bx-x"></i> Lokasi';
            document.getElementById('checkLocation').className = 'badge bg-danger';
        },
        { 
            enableHighAccuracy: true, 
            timeout: 15000,
            maximumAge: 0  // Force fresh location
        }
    );
}

// ==========================================
// CAMERA & PHOTO CAPTURE
// ==========================================
let cameraStream = null;
let photoTaken = false;

async function startCamera() {
    try {
        const video = document.getElementById('cameraPreview');
        const placeholder = document.getElementById('cameraPlaceholder');
        
        cameraStream = await navigator.mediaDevices.getUserMedia({
            video: { facingMode: 'user', width: { ideal: 640 }, height: { ideal: 480 } }
        });
        
        video.srcObject = cameraStream;
        video.classList.remove('d-none');
        placeholder.classList.add('d-none');
        
        document.getElementById('btnStartCamera').classList.add('d-none');
        document.getElementById('btnCapturePhoto').classList.remove('d-none');
        
    } catch (err) {
        console.error('Camera error:', err);
        document.getElementById('photoStatus').innerHTML = 
            '<span class="badge bg-danger"><i class="bx bx-error"></i> Kamera tidak tersedia</span>';
    }
}

function capturePhoto() {
    const video = document.getElementById('cameraPreview');
    const canvas = document.getElementById('photoCanvas');	
    const ctx = canvas.getContext('2d');
    
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    ctx.drawImage(video, 0, 0);
    
    // Convert to base64
    const photoData = canvas.toDataURL('image/jpeg', 0.8);
    document.getElementById('form_foto').value = photoData;
    
    // Show canvas, hide video
    video.classList.add('d-none');
    canvas.classList.remove('d-none');
    
    document.getElementById('btnCapturePhoto').classList.add('d-none');
    document.getElementById('btnRetakePhoto').classList.remove('d-none');
    
    photoTaken = true;
    document.getElementById('photoStatus').innerHTML = 
        '<span class="badge bg-success"><i class="bx bx-check"></i> Foto diambil</span>';
    document.getElementById('checkPhoto').innerHTML = '<i class="bx bx-check"></i> Foto';
    document.getElementById('checkPhoto').className = 'badge bg-success';
    
    checkAllRequirements();
    
    // Stop camera after capture
    if (cameraStream) {
        cameraStream.getTracks().forEach(track => track.stop());
    }
}

function retakePhoto() {
    photoTaken = false;
    document.getElementById('form_foto').value = '';
    document.getElementById('photoCanvas').classList.add('d-none');
    document.getElementById('photoStatus').innerHTML = 
        '<span class="badge bg-secondary"><i class="bx bx-minus"></i> Belum ada foto</span>';
    document.getElementById('checkPhoto').innerHTML = '<i class="bx bx-minus"></i> Foto';
    document.getElementById('checkPhoto').className = 'badge bg-secondary';
    
    document.getElementById('btnRetakePhoto').classList.add('d-none');
    startCamera();
    checkAllRequirements();
}

function stopAllMedia() {
    if (cameraStream) {
        cameraStream.getTracks().forEach(track => track.stop());
        cameraStream = null;
    }
    if (qrStream) {
        qrStream.getTracks().forEach(track => track.stop());
        qrStream = null;
    }
}

// ==========================================
// QR CODE SCANNER
// ==========================================
let qrStream = null;
let qrScanning = false;

async function toggleQRScanner() {
    if (qrScanning) {
        stopQRScanner();
    } else {
        startQRScanner();
    }
}

async function startQRScanner() {
    try {
        const video = document.getElementById('qrPreview');
        const placeholder = document.getElementById('qrPlaceholder');
        
        qrStream = await navigator.mediaDevices.getUserMedia({
            video: { facingMode: 'development' }
        });
        
        video.srcObject = qrStream;
        video.classList.remove('d-none');
        placeholder.classList.add('d-none');
        
        document.getElementById('btnScanQR').innerHTML = '<i class="bx bx-stop"></i> Stop Scan';
        document.getElementById('btnScanQR').classList.replace('btn-outline-info', 'btn-danger');
        
        qrScanning = true;
        scanQRCode(video);
        
    } catch (err) {
        console.error('QR Scanner error:', err);
        document.getElementById('qrStatus').innerHTML = 
            '<span class="badge bg-warning"><i class="bx bx-error"></i> Kamera tidak tersedia</span>';
    }
}

function stopQRScanner() {
    if (qrStream) {
        qrStream.getTracks().forEach(track => track.stop());
        qrStream = null;
    }
    
    document.getElementById('qrPreview').classList.add('d-none');
    document.getElementById('qrPlaceholder').classList.remove('d-none');
    document.getElementById('btnScanQR').innerHTML = '<i class="bx bx-qr-scan"></i> Scan QR';
    document.getElementById('btnScanQR').classList.replace('btn-danger', 'btn-outline-info');
    
    qrScanning = false;
}

function scanQRCode(video) {
    if (!qrScanning) return;
    
    // Simple QR detection using canvas
    const canvas = document.createElement('canvas');
    const ctx = canvas.getContext('2d');
    
    canvas.width = video.videoWidth || 320;
    canvas.height = video.videoHeight || 240;
    
    if (video.readyState === video.HAVE_ENOUGH_DATA) {
        ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
        
        // Check if html5-qrcode is available
        if (typeof Html5Qrcode !== 'undefined') {
            // Use library for scanning
        }
    }
    
    // Continue scanning
    if (qrScanning) {
        requestAnimationFrame(() => scanQRCode(video));
    }
}

function onQRCodeDetected(code) {
    document.getElementById('form_kode_qr').value = code;
    document.getElementById('qrStatus').innerHTML = 
        '<span class="badge bg-success"><i class="bx bx-check"></i> QR: ' + code.substring(0, 10) + '...</span>';
    stopQRScanner();
}

// ==========================================
// FAKE GPS DETECTION
// ==========================================
let gpsAccuracy = null;
let fakeGpsScore = 0;

async function detectFakeGPS(position) {
    fakeGpsScore = 0;
    const checks = [];
    
    // Check 1: GPS Accuracy
    gpsAccuracy = position.coords.accuracy;
    document.getElementById('form_gps_accuracy').value = gpsAccuracy;
    
    if (gpsAccuracy > 100) {
        fakeGpsScore += 30;
        checks.push('Akurasi rendah: ' + Math.round(gpsAccuracy) + 'm');
    }
    
    // Check 2: Altitude (fake GPS often has null altitude)
    if (position.coords.altitude === null) {
        fakeGpsScore += 10;
        checks.push('Altitude tidak tersedia');
    }
    
    // Check 3: Speed (should be null or 0 if stationary)
    if (position.coords.speed !== null && position.coords.speed > 5) {
        fakeGpsScore += 20;
        checks.push('Kecepatan mencurigakan');
    }
    
    // Check 4: Timestamp consistency
    const timestamp = position.timestamp;
    const now = Date.now();
    if (Math.abs(now - timestamp) > 30000) {
        fakeGpsScore += 30;
        checks.push('Timestamp tidak konsisten');
    }
    
    // Check 5: Multiple position requests consistency
    // This would require storing previous positions
    
    // Update UI
    document.getElementById('form_fake_gps_check').value = fakeGpsScore;
    
    if (fakeGpsScore >= 50) {
        document.getElementById('fakeGpsWarning').classList.remove('d-none');
        document.getElementById('checkFakeGps').innerHTML = '<i class="bx bx-error"></i> GPS?';
        document.getElementById('checkFakeGps').className = 'badge bg-warning';
    } else {
        document.getElementById('fakeGpsWarning').classList.add('d-none');
        document.getElementById('checkFakeGps').innerHTML = '<i class="bx bx-check"></i> GPS OK';
        document.getElementById('checkFakeGps').className = 'badge bg-success';
    }
    
    // Update accuracy badge
    if (gpsAccuracy <= 30) {
        document.getElementById('checkAccuracy').innerHTML = '<i class="bx bx-check"></i> ' + Math.round(gpsAccuracy) + 'm';
        document.getElementById('checkAccuracy').className = 'badge bg-success';
    } else if (gpsAccuracy <= 100) {
        document.getElementById('checkAccuracy').innerHTML = '<i class="bx bx-minus"></i> ' + Math.round(gpsAccuracy) + 'm';
        document.getElementById('checkAccuracy').className = 'badge bg-warning';
    } else {
        document.getElementById('checkAccuracy').innerHTML = '<i class="bx bx-error"></i> ' + Math.round(gpsAccuracy) + 'm';
        document.getElementById('checkAccuracy').className = 'badge bg-danger';
    }
    
    document.getElementById('accuracyInfo').textContent = 'Akurasi GPS: ' + Math.round(gpsAccuracy) + ' meter';
    
    return fakeGpsScore < 50;
}

// ==========================================
// VALIDATION
// ==========================================
let locationValid = false;

function validateLocation() {
    document.getElementById('form_latitude').value = userLatitude;
    document.getElementById('form_longitude').value = userLongitude;
    
    let isValid = false;
    let nearestLoc = null;
    let minDistance = Infinity;
    
    lokasiValid.forEach(function(lok) {
        const distance = calculateDistance(userLatitude, userLongitude, parseFloat(lok.latitude), parseFloat(lok.longitude));
        if (distance < minDistance) {
            minDistance = distance;
            nearestLoc = lok;
        }
        if (distance <= parseFloat(lok.radius)) {
            isValid = true;
        }
    });
    
    document.getElementById('locationInfo').classList.add('d-none');
    
    if (isValid) {
        document.getElementById('locationValid').classList.remove('d-none');
        document.getElementById('distanceInfo').textContent = 'Jarak: ' + Math.round(minDistance) + ' meter dari ' + nearestLoc.nama_lokasi;
        document.getElementById('checkLocation').innerHTML = '<i class="bx bx-check"></i> Lokasi';
        document.getElementById('checkLocation').className = 'badge bg-success';
        locationValid = true;
    } else {
        document.getElementById('locationInvalid').classList.remove('d-none');
        document.getElementById('locationError').textContent = 'Anda berada ' + Math.round(minDistance) + ' meter dari lokasi terdekat (' + nearestLoc.nama_lokasi + '). Maksimal ' + nearestLoc.radius + ' meter.';
        document.getElementById('checkLocation').innerHTML = '<i class="bx bx-x"></i> Lokasi';
        document.getElementById('checkLocation').className = 'badge bg-danger';
        locationValid = false;
    }
    
    checkAllRequirements();
}

function checkAllRequirements() {
    const requirePhoto = true;
    const requireFakeGpsCheck = false;
    
    let canSubmit = locationValid;
    
    if (requirePhoto && !photoTaken) {
        canSubmit = false;
    }
    
    if (requireFakeGpsCheck && fakeGpsScore >= 50) {
        canSubmit = false;
    }
    
    document.getElementById('submitAbsensi').disabled = !canSubmit;
}

// ==========================================
// MODAL INITIALIZATION
// ==========================================
document.getElementById('absensiModal').addEventListener('show.bs.modal', function() {
    // Reset states
    photoTaken = false;
    locationValid = false;
    
    // Reset UI
    document.getElementById('checkPhoto').innerHTML = '<i class="bx bx-minus"></i> Foto';
    document.getElementById('checkPhoto').className = 'badge bg-secondary';
    document.getElementById('checkLocation').innerHTML = '<i class="bx bx-loader-alt bx-spin"></i> Lokasi';
    document.getElementById('checkLocation').className = 'badge bg-secondary';
    
    // Auto-start camera if face verification enabled
    const requirePhoto = true;
    if (requirePhoto) {
        setTimeout(startCamera, 500);
    } else {
        document.getElementById('btnStartCamera').classList.remove('d-none');
        document.getElementById('photoStatus').innerHTML = 
            '<span class="badge bg-info"><i class="bx bx-info-circle"></i> Foto opsional</span>';
    }
});

document.getElementById('absensiModal').addEventListener('hidden.bs.modal', function() {
    stopAllMedia();
});
</script>

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                © 2026 Portal Guru - Smkn 1 Indralaya Selatan
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <script src="https://smkn1intan.com/assets/sneat/vendor/libs/jquery/jquery.js"></script>
    <script src="https://smkn1intan.com/assets/sneat/vendor/libs/popper/popper.js"></script>
    <script src="https://smkn1intan.com/assets/sneat/vendor/js/bootstrap.js"></script>
    <script src="https://smkn1intan.com/assets/sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="https://smkn1intan.com/assets/sneat/vendor/js/menu.js"></script>
    <script src="https://smkn1intan.com/assets/sneat/js/main.js"></script>


</body></html>
