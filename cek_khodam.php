<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cek_khodam']) && isset($_POST['nama'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $khodams = [
        "Jin", "Malaikat", "Roh Leluhur", "Penjaga Gaib", "Khodam Pendamping", 
        "Dewa", "Dewi", "Peri", "Siluman", "Naga", 
        "Bidadari", "Sundel Bolong", "Pocong", "Wewe Gombel", "Tuyul",
        "Gandarwa", "Banaspati", "Kuntilanak", "Genderuwo", "Palasik",
        "Buto Ijo", "Kuntilanak Merah", "Nyai Roro Kidul", "Jaka Tarub", "Jaka Tingkir",
        "Mak Lampir", "Nyai Blorong", "Sang Kuriang", "Ratu Kidul", "Ratu Laut Selatan",
        "Ratu Pantai Selatan", "Kyai Slamet", "Nyai Panas", "Nyai Loreng", "Nyai Dandang",
        "Kyai Cempaka", "Kyai Brojo", "Nyai Gandrung", "Nyai Kuning", "Kyai Segoro",
        "Nyai Manis", "Nyai Ramping", "Kyai Linglung", "Kyai Wungkal", "Kyai Nyamplung",
        "Nyai Sumilir", "Nyai Sumirah", "Nyai Juminten", "Nyai Kinayung", "Kyai Kendit"
    ];
    $result = $khodams[array_rand($khodams)];
    echo json_encode(["nama" => $nama, "khodam" => $result]);
} else {
    echo json_encode(["error" => "Invalid request"]);
}
?>
