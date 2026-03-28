<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>FizzBuzz</title>
</head>
<body>

    <h2>FizzBuzz (1 - 100)</h2>
    <button onclick="runFizzBuzz()">แสดงผล</button>

    <ul id="result"></ul>

    <script>
        function runFizzBuzz() {
            let output = "";

            for (let i = 1; i <= 100; i++) {

                if (i % 3 === 0 && i % 5 === 0) {
                    output += "<li>FizzBuzz</li>";
                }
                else if (i % 3 === 0) {
                    output += "<li>Fizz</li>";
                }
                else if (i % 5 === 0) {
                    output += "<li>Buzz</li>";
                }
                else {
                    output += "<li>" + i + "</li>";
                }

            }

            document.getElementById("result").innerHTML = output;
        }
    </script>

</body>
</html>