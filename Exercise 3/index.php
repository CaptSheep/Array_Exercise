<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_REQUEST["input"];
    $check = $_REQUEST["check"];
    $error = [];
    if (empty($input)) {
        $error["input"] = " Vui lòng nhập chuỗi";
        $error["check"] = " Vui long nhap tu can kiem tra";
    }

    function checkInput($input): string
    {
        for ($i = 0; $i < strlen($input); $i++) {
            if (is_numeric($input[$i])) {
                $input .= $input[$i];
            }
        }
        return $input;
    }

    $checkInput = checkInput($input);


    function checkUpperCase($input)
    {
        for ($i = 0; $i < strlen($input); $i++) {
            if ($input[$i] === strtoupper($input[$i])) {
                echo " Tu vua nhap co chu in hoa la : " . $input[$i];
            }
        }
        return $input[$i];

    }

    $upper = checkUpperCase($input);


    function checkExist($input, $check)
    {
        for ($i = 0; $i < strlen($input); $i++) {
            if ($check === $input[$i]) {
                return " Tu : " . $check . " co ton tai o trong chuoi :" . $input;
            }
        }
    }

    $exist = checkExist($input, $check);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="input" placeholder="Nhap du lieu vao day">
    <p style="color: red"> <?php echo $error["input"] ?> </p>
    <input type="text" name="check" placeholder="Nhap tu can kiem tra">
    <p style="color: red"> <?php echo $error["check"] ?> </p>
    <button> Check</button>
</form>
<p style="color: aqua"><?php echo $checkInput ?? ""?></p>
<p style="color: blue"><?php echo $upper ?? ""?></p>
<p style="color: deepskyblue"><?php echo $exist ?? ""?></p>
</body>
</html>

