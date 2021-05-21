<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            padding: 20px;
        }

        th, td {
            border: 1px solid black;
            background-color: grey;
            text-align: center;
        }

        button {
            background-color: yellow;
        }

        input {
            text-align: right;
        }

        #AC {
            text-decoration: none;
        }
    </style>
</head>
<body>
<form action="{{ route('calculate') }}" method="post">
    @csrf
    <table>
        <tr>
            <th colspan="4">
                <input
                    type="text"
                    id="screen"
                    name="screen"
                    value="@if (isset($result))
                    {{ $result }}
                    @endif"
                >
            </th>
        </tr>
        <tr>
            <td>
                <button type="button" onclick="operator('(')">(</button>
            </td>
            <td>
                <button type="button" onclick="operator(')')">)</button>
            </td>
            <td>
                <button type="button" onclick="operator('%')">%</button>
            </td>
            <td>
                <button type="button"><a href="index.php" id="AC">AC</a></button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="button" onclick="num(7)" value="7">7</button>
            </td>
            <td>
                <button type="button" onclick="num(8)" value="8">8</button>
            </td>
            <td>
                <button type="button" onclick="num(9)" value="9">9</button>
            </td>
            <td>
                <button type="button" onclick="operator('/')">/</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="button" onclick="num(4)" value="4">4</button>
            </td>
            <td>
                <button type="button" onclick="num(5)" value="5">5</button>
            </td>
            <td>
                <button type="button" onclick="num(6)" value="6">6</button>
            </td>
            <td>
                <button type="button" onclick="operator('*')">*</button>
            </td>

        </tr>
        <tr>
            <td>
                <button type="button" onclick="num(1)" value="1">1</button>
            </td>
            <td>
                <button type="button" onclick="num(2)" value="2">2</button>
            </td>
            <td>
                <button type="button" onclick="num(3)" value="3">3</button>
            </td>
            <td>
                <button type="button" onclick="operator('-')">-</button>
            </td>
        </tr>
        <tr>
            <td>
                <button type="button" onclick="num(0)" value="0">0</button>
            </td>
            <td>
                <button type="button" onclick="operator('.')">.</button>
            </td>
            <td>
                <button type="submit">=</button>
            </td>
            <td>
                <button type="button" onclick="operator('+')">+</button>
            </td>
        </tr>
    </table>
</form>
<script>
    function num(number) {
        document.getElementById("screen").value += number;
    }

    function operator(op) {
        document.getElementById("screen").value += op;
    }
</script>
</body>
</html>
