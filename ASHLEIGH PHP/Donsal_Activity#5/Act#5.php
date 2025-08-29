<?php
$initial_numb =1 ; 
$max = 10;
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Math Tables</title>
    <style>
       
       <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: white;  
        background-image: url('data:image/jpeg;base64,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');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;      
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 28px;
            font-weight: bold;
            margin: 0;
            color: #ffffff; 
        }
        .tables {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            
        }
        table {
            border-collapse: collapse;
            width: 220px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
            background: white;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Mathematical Table</h1>
    </div>

    <div class="tables">
        <!-- Addition Table -->
        <table>
            <tr><th colspan="3">Addition Table</th></tr>
            <?php for ($i = 1; $i <= $max; $i++): ?>
                <tr>
                    <td><?= $initial_numb ?> + <?= $i ?></td>
                    <td>=</td>
                    <td><?= $initial_numb + $i ?></td>
                </tr>
            <?php endfor; ?>
        </table>

        <!-- Subtraction Table -->
        <table>
            <tr><th colspan="3">Subtraction Table</th></tr>
            <?php for ($i = 1; $i <= $max; $i++): ?>
                <tr>
                    <td><?= $initial_numb ?> - <?= $i ?></td>
                    <td>=</td>
                    <td><?= $initial_numb - $i ?></td>
                </tr>
            <?php endfor; ?>
        </table>

        <!-- Multiplication Table -->
        <table>
            <tr><th colspan="3">Multiplication Table</th></tr>
            <?php for ($i = 1; $i <= $max; $i++): ?>
                <tr>
                    <td><?= $initial_numb ?> × <?= $i ?></td>
                    <td>=</td>
                    <td><?= $initial_numb * $i ?></td>
                </tr>
            <?php endfor; ?>
        </table>

        <!-- Division Table -->
        <table>
            <tr><th colspan="3">Division Table</th></tr>
            <?php for ($i = 1; $i <= $max; $i++): ?>
                <tr>
                    <td><?= $initial_numb ?> ÷ <?= $i ?></td>
                    <td>=</td>
                    <td><?= round($initial_numb / $i, 2) ?></td>
                </tr>
            <?php endfor; ?>
        </table>
    </div>
</body>
</html>