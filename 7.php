<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Time</title>
</head>
<body>

    <h2>Text Time (hh:mm:ss)</h2>
    
    <input type="text" id="timeInput" placeholder="Ex. 12:30:45">
    <button onclick="convertTime()">Submit</button>

    <p id="result"></p>

    <script>
        function convertTime() {
            let input = document.getElementById("timeInput").value;
            let parts = input.split(":");

            if (parts.length !== 3) {
                document.getElementById("result").innerText = "รูปแบบไม่ถูกต้อง";
                return;
            }

            let hh = parts[0];
            let mm = parts[1];
            let ss = parts[2];

            document.getElementById("result").innerText =
                hh + " hh " + mm + " mm " + ss + " ss ";
        }
    </script>

</body>
</html>