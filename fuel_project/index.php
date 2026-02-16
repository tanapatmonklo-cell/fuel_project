<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>คำนวณค่าน้ำมัน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="mb-4 text-center">โปรแกรมคำนวณค่าน้ำมัน</h3>

        <form action="calculate.php" method="post">
            
            <div class="mb-3">
                <label>ระยะทาง (กม.)</label>
                <input type="number" name="distance" class="form-control" step="0.01" required>
            </div>

            <div class="mb-3">
                <label>อัตราสิ้นเปลือง (กม./ลิตร)</label>
                <input type="number" name="fuel_rate" class="form-control" step="0.01" required>
            </div>

            <div class="mb-3">
                <label>ราคาน้ำมัน (บาท/ลิตร)</label>
                <input type="number" name="price" class="form-control" step="0.01" required>
            </div>

            <button type="submit" name="calculate" class="btn btn-primary w-100">
                คำนวณ
            </button>
        </form>

    </div>
</div>

</body>
</html>