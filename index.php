<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>projectPHP</title>
</head>
<body>
    <h1>Hello PHP - Trương Hoàng Đăng Khoa</h1>
    <p>DH52300896 - D23_TH06</p>
    <p>Deploy tự động bằng GitHub Actions - lần 2</p>
    <p>Thời gian server: <span id="time"><?php echo date("d/m/Y H:i:s"); ?></span></p>

<script>
    let serverTime = <?php echo time() * 1000; ?>;
    const pad = n => String(n).padStart(2, "0");

    function showTime() {
        const d = new Date(serverTime);
        document.getElementById("time").textContent =
            pad(d.getDate()) + "/" + pad(d.getMonth() + 1) + "/" + d.getFullYear() + " " +
            pad(d.getHours()) + ":" + pad(d.getMinutes()) + ":" + pad(d.getSeconds());
        serverTime += 1000;
    }
    setInterval(showTime, 1000);
</script>
    <p>PHP version: <?php echo phpversion(); ?></p>
</body>
</html>