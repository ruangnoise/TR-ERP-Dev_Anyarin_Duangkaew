
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz-1</title>
</head>
<body>
    <form method="POST" action="">
    <label for="num">Number of Star: </label>
    <input type="text" id="num" name="num" min="1" required>
    <button type="submit">Go</button>
</form>

<?php
if (isset($_POST['num'])) {
    $num = (int)$_POST['num'];
    
    echo "<br>";
echo "<pre>";
if ($num % 2 == 0) {
    //เลขคู่ => ปกติ
    for ($i = 1; $i <= $num; $i++) {
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "\n";
    }
} else {
    //เลขคี่ => กลับหัว 
    for ($i = $num; $i >= 1; $i--) {
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "\n";
    }
}
   
    }
?>
</body>
</html>