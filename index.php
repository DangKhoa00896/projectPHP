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