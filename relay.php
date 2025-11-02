<?php
$status_file = "relay_status.txt";

// Jika ada perintah dari URL (misal ?set=on)
if (isset($_GET['set'])) {
    $set = $_GET['set'];
    if ($set == "on" || $set == "off") {
        file_put_contents($status_file, $set);
    }
}

// Baca status terakhir
if (file_exists($status_file)) {
    echo file_get_contents($status_file);
} else {
    echo "off";
}
?>
