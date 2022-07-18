<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf08">
        <title>FizzBuss</title>
        <style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Result</th>
            </tr>
            @foreach ($arr as $element)
                <tr>
                    <td><p>{{$element}}</p></td>
                </tr>
            @endforeach

        </table>
    </body>

</html>
