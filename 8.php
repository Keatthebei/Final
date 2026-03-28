<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Change Colorbackground</title>
    <style>
        body {
            text-align: center;
            margin-top: 100px;
            font-family: Arial, sans-serif;
        }

        button {
            padding: 15px 25px;
            font-size: 18px;
            margin: 10px;
            cursor: pointer;
            border: none;
            border-radius: 8px;
        }

        .green { background-color: green; color: white; }
        .orange { background-color: orange; color: white; }
        .purple { background-color: purple; color: white; }
        .clear { background-color: gray; color: white; }
    </style>
</head>
<body>

    <h2>Change Colorbackground</h2>

    <button class="green" onclick="changeColor('green')">เขียว</button>
    <button class="orange" onclick="changeColor('orange')">ส้ม</button>
    <button class="purple" onclick="changeColor('purple')">ม่วง</button>
    <button class="clear" onclick="changeColor('white')">Clear</button>

    <script>
        function changeColor(color) {
            document.body.style.backgroundColor = color;
        }
    </script>

</body>
</html>