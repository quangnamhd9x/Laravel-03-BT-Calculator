<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    table {
        border: 2px solid black;
        margin-top: 100px;
        width: 500px;
        height: 400px;
    }
    td {
        text-align: center;
    }
    input {
        width: 500px;
        height: 100px;
    }
    button {
        width: 70px;
        height: 70px}
</style>
<body>
<table align="center">
    <tr>
        <td colspan="5">
            <input id="inputNumber" onclick="text" placeholder="0">
        </td>
    </tr>
    <tr>
        <td><button onclick="button(7)">7</button></td>
        <td><button onclick="button(8)">8</button></td>
        <td><button onclick="button(9)">9</button></td>
        <td><button onclick="button('/')">/</button></td>
        <td><button type="submit">CE</button></td>
    </tr>
    <tr>
        <td><button onclick="button(4)">4</button></td>
        <td><button onclick="button(5)">5</button></td>
        <td><button onclick="button(6)">6</button></td>
        <td><button onclick="button('*')">*</button></td>
        <td><button onclick="button(C)">C</button></td>
    </tr>
    <tr>
        <td><button onclick="button(1)">1</button></td>
        <td><button onclick="button(2)">2</button></td>
        <td><button onclick="button(3)">3</button></td>
        <td><button onclick="button('-')">-</button></td>
        <td rowspan="2"><button style="height: 150px" onclick="calculator()">=</button></td>
    </tr>
    <tr>
        <td colspan="2"><button style="width:180px" onclick="button(0)">0</button></td>
        <td><button onclick="button('.')">.</button></td>
        <td><button onclick="button('+')">+</button></td>
    </tr>
</table>

<script>
    function button(value) {
        document.getElementById('inputNumber').value +=value;
    }
    function calculator() {
        let tinh = document.getElementById('inputNumber').value;
        let result = eval(tinh);
        document.getElementById('inputNumber').value = result;
    }
</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
