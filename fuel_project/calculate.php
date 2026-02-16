<?php
include "config.php";

if(isset($_POST['calculate'])){

    $distance = $_POST['distance'];
    $fuel_rate = $_POST['fuel_rate'];
    $price = $_POST['price'];

    if($fuel_rate > 0){

        $fuel_used = $distance / $fuel_rate;
        $total_cost = $fuel_used * $price;

        // บันทึกลงฐานข้อมูล
        $sql = "INSERT INTO fuel_history 
                (distance, fuel_rate, price, fuel_used, total_cost)
                VALUES ('$distance', '$fuel_rate', '$price', '$fuel_used', '$total_cost')";
        $conn->query($sql);
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
        <p>ใช้น้ำมัน: <strong><?php echo number_format($fuel_used,2); ?></strong> ลิตร</p>
        <p>ค่าน้ำมัน: <strong><?php echo number_format($total_cost,2); ?></strong> บาท</p>
        <a href="index.php" class="btn btn-success">กลับหน้าแรก</a>
    </div>
</div>

</body>
</html>
<?php
    } else {
        echo "อัตราสิ้นเปลืองต้องมากกว่า 0";
    }
}
?>