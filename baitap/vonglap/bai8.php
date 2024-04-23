<!-- Tao Ban Co Vua -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    <style>
        td {
            width: 30px;
            height: 30px;
            border: 1px solid black;
        }
        .black {
            background-color: #000;
        }

    </style>
</head>

<body>
    <h3>Chess Board For Loop</h3>
    <table width=270 cellspacing=0 cellpadding=0 border=1>

    <?php
    for ($row = 1; $row < 8; $row++) {
        echo '<tr>';
        for ($col = 1; $col < 8; $col++) {
            $total = $row + $col;
            if ($total % 2 == 0) {
                echo '<td class="black"></td>';
            } else {
                echo '<td class="white"></td>';
            }
        }
        echo '</tr>';
    }

    ?>

    </table>
</body>

</html>