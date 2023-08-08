<?php
    $money = filter_input(INPUT_POST, 'input_money');
    $lai = filter_input(INPUT_POST, 'PT_Lai');
    $Years = filter_input(INPUT_POST, 'So_Nam');


    
    // tinh tien
    
    for ($i=1; $i <= $Years; $i++) { 
        $Tien_Lai = $money * pow((1+($lai*0.01)), $i);
        
    }
   
    // chuyen doi hien thi thanh 2 so thap phan va
    $So_Tien = "$" . number_format($money, 2);
    // them phan tram
    $laiPT = $lai . "%";

    $Tien_LaiPT = "$" . number_format($Tien_Lai, 2);

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    .header {
        border: 2px solid blue;
        text-align: center;
        width: 450px;
        margin: auto;
    }

    .header_text {
        color: blue;
    }

    .header_form {
        display: flex;
        justify-content: space-evenly;
    }
</style>

<body>

    <div class="header">
        <div class="header_text">
            <h1>Future Value Calculator</h1><br>

        </div>
        <label class="header_form" for="">Số tiền đầu tư:</label>
        <span><?php echo htmlspecialchars($So_Tien); ?></span><br>
        <label class="header_form" for="">Lãi xuất hằng năm:</label>
        <span> <?php echo htmlspecialchars($laiPT); ?></span><br>
        <label class="header_form" for="">Số năm gửi:</label>
        <span><?php echo htmlspecialchars($Years); ?></span><br>
        <label class="header_form" for="">Số tiền lãi sau <?php echo htmlspecialchars($Years); ?> năm gửi </label>
        <span><?php echo htmlspecialchars($Tien_LaiPT); ?></span><br>
    </div>
</body>

</html>