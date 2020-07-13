<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Số TT</th>
                <th>Họ và Tên</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i=1;
                while($i<=10){
                    echo '
                    <tr>
                        <td>'.$i.'</td>
                        <td>Chào bạn '.$i.'</td>
                    </tr>
                    ';
                    $i++;
                }
            ?>
        </tbody>

    </table>
</body>

</html>