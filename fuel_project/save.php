<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $money = $_POST['money'];
    $price = $_POST['price'];
    $fuel_rate = $_POST['fuel_rate'];

    $liter = $money / $price;
    $distance = $liter * $fuel_rate;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ผลลัพธ์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4 text-center">
        <h3>ผลการคำนวณ</h3>
        <p>ได้น้ำมัน: <strong><?php echo number_format($liter,2); ?></strong> ลิตร</p>
        <p>วิ่งได้ระยะทาง: <strong><?php echo number_format($distance,2); ?></strong> กม.</p>
        <a href="index.php" class="btn btn-success">กลับหน้าแรก</a>
    </div>
</div>

</body>
</html>

<?php
}
?>