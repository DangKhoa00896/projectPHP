<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projectPHP - Trương Hoàng Đăng Khoa</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            background: linear-gradient(135deg, #4f5b93, #777bb4 50%, #c4b5fd);
            background-attachment: fixed;
            color: #1f2937;
        }

        .page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
        }

        .card {
            width: 100%;
            max-width: 520px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, .25);
            overflow: hidden;
            animation: pop .6s ease;
        }

        @keyframes pop {
            from { opacity: 0; transform: translateY(20px) scale(.97); }
            to   { opacity: 1; transform: none; }
        }

        .header {
            padding: 32px 28px 24px;
            text-align: center;
            background: linear-gradient(135deg, #777bb4, #4f5b93);
            color: #fff;
        }

        .avatar {
            width: 84px; height: 84px;
            margin: 0 auto 14px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 32px; font-weight: 700;
            background: rgba(255, 255, 255, .15);
            border: 3px solid rgba(255, 255, 255, .6);
        }

        .header h1 { font-size: 24px; margin-bottom: 4px; }
        .header p  { opacity: .85; font-size: 14px; }

        .clock {
            margin: 24px 28px 8px;
            padding: 18px;
            text-align: center;
            border-radius: 14px;
            background: #f1f5f9;
        }

        .clock .time {
            font-size: 40px;
            font-weight: 700;
            letter-spacing: 2px;
            color: #4f5b93;
            font-variant-numeric: tabular-nums;
        }

        .clock .date { color: #64748b; margin-top: 4px; }

        .info { padding: 8px 28px 4px; }

        .row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #e5e7eb;
            font-size: 15px;
        }

        .row:last-child { border-bottom: none; }
        .row span:first-child { color: #64748b; }
        .row span:last-child  { font-weight: 600; text-align: right; }

        .badges {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
            padding: 16px 28px 28px;
        }

        .badge {
            padding: 6px 12px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 600;
        }

        .b-html   { background: #ede9fe; color: #6d28d9; }
        .b-git    { background: #dcfce7; color: #15803d; }
        .b-host   { background: #dbeafe; color: #1d4ed8; }

        .dot {
            display: inline-block;
            width: 8px; height: 8px;
            margin-right: 6px;
            border-radius: 50%;
            background: #22c55e;
            animation: blink 1.5s infinite;
        }

        @keyframes blink { 50% { opacity: .2; } }
    </style>
</head>
<body>
    <div class="page">
        <div class="card">
            <div class="header">
                <div class="avatar">ĐK</div>
                <h1>Trương Hoàng Đăng Khoa</h1>
                <p>Lab Git &amp; GitHub – CI/CD Deploy</p>
            </div>

            <div class="clock">
                <div class="time" id="time"><?php echo date("H:i:s"); ?></div>
                <div class="date" id="date">Giờ server: <?php echo date("d/m/Y"); ?></div>
            </div>

            <div class="info">
                <div class="row"><span>MSSV</span><span>DH52300896</span></div>
                <div class="row"><span>Lớp</span><span>D23_TH06</span></div>
                <div class="row"><span>Project</span><span>projectPHP (PHP)</span></div>
                <div class="row"><span>PHP version</span><span><?php echo phpversion(); ?></span></div>
                <div class="row"><span>Trạng thái</span><span><i class="dot"></i>Deploy tự động – lần 2</span></div>
            </div>

            <div class="badges">
                <span class="badge b-html">PHP <?php echo PHP_MAJOR_VERSION . "." . PHP_MINOR_VERSION; ?></span>
                <span class="badge b-git">GitHub Actions</span>
                <span class="badge b-host">InfinityFree Hosting</span>
            </div>
        </div>
    </div>

    <script>
        const pad = n => String(n).padStart(2, "0");
        const days = ["Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"];

        
        let serverTime = <?php echo time() * 1000; ?>;

        function showTime() {
            const d = new Date(serverTime);
            document.getElementById("time").textContent =
                pad(d.getHours()) + ":" + pad(d.getMinutes()) + ":" + pad(d.getSeconds());
            document.getElementById("date").textContent =
                "Giờ server · " + days[d.getDay()] + ", " + pad(d.getDate()) + "/" + pad(d.getMonth() + 1) + "/" + d.getFullYear();
            serverTime += 1000;
        }
        showTime();
        setInterval(showTime, 1000);
    </script>
</body>
</html>