<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 80px;
        }

        input {
            padding: 10px;
            font-size: 16px;
            margin: 10px;
            width: 150px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 5px;
            cursor: pointer;
        }

        #result {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }

        #error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h2>Calculator</h2>

    <input type="number" id="num1" placeholder="ตัวเลขที่ 1">
    <input type="number" id="num2" placeholder="ตัวเลขที่ 2">
    <br>

    <button onclick="calculate('+')">+</button>
    <button onclick="calculate('-')">-</button>
    <button onclick="calculate('*')">*</button>
    <button onclick="calculate('/')">/</button>
    <br>

    <button onclick="clearData()">Clear</button>

    <div id="error"></div>
    <div id="result"></div>

    <script>
        function calculate(operator) {
            let n1 = document.getElementById("num1").value;
            let n2 = document.getElementById("num2").value;

            // ตรวจสอบข้อมูล
            if (n1 === "" || n2 === "") {
                document.getElementById("error").innerText = "กรุณากรอกข้อมูลให้ครบ";
                document.getElementById("result").innerText = "";
                return;
            }

            let num1 = parseFloat(n1);
            let num2 = parseFloat(n2);

            if (isNaN(num1) || isNaN(num2)) {
                document.getElementById("error").innerText = "กรุณากรอกตัวเลขให้ถูกต้อง";
                document.getElementById("result").innerText = "";
                return;
            }

            let result;

            if (operator === '+') result = num1 + num2;
            else if (operator === '-') result = num1 - num2;
            else if (operator === '*') result = num1 * num2;
            else if (operator === '/') {
                if (num2 === 0) {
                    document.getElementById("error").innerText = "ห้ามหารด้วยศูนย์";
                    document.getElementById("result").innerText = "";
                    return;
                }
                result = num1 / num2;
            }

            document.getElementById("error").innerText = "";
            document.getElementById("result").innerText = "ผลลัพธ์: " + result;
        }

        function clearData() {
            document.getElementById("num1").value = "";
            document.getElementById("num2").value = "";
            document.getElementById("result").innerText = "";
            document.getElementById("error").innerText = "";
        }
    </script>

</body>
</html>