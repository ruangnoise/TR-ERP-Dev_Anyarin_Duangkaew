<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz-3</title>
</head>
<body>
    <?php 
    
    $array1=[
        101=>"AAA",
        102=>"BBB",
        103=>"CCC"
        ];
    
    $array2=[
        101=>"Bangkok",
        102=>"Tokyo",
        103=>"Singpore"
        ];

    foreach ($array1 as $key => $value) {
        if (isset($array2[$key])) {
            $array3[$key] = [
                'name' => $value,
                'city' => $array2[$key],
            ];
        }
    }
    //ตารางแสดงผล array1
    echo "<h4 style='margin-bottom: 5px;'>Array1</h4>";
    echo "<table border='1'>";
    echo "<thead>
        <tr>
            <th>Code</th>
            <th>Name</th>
        </tr>
        </thead>";
    echo "<tbody>";
    foreach ($array1 as $key => $value) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $value . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

    //ตารางแสดงผล array2
    echo "<h4 style='margin-bottom: 5px;'>Array2</h4>";
    krsort($array2); 
    echo "<table border='1'>";
    echo "<thead>
        <tr>
            <th>Code</th>
            <th>City</th>
        </tr>
        </thead>";
    echo "<tbody>"; 
    foreach ($array2 as $key => $value) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $value . "</td>";
        echo "</tr>";
    }
    echo"</tbody>";
    echo "</table>";

    echo "<hr>";

    //ตารางแสดงผล array3
    echo "<h4 style='margin-bottom: 5px;'>Output</h4>";
    echo "<table border='1'>";
    echo "<thead>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>City</th>
        </tr>
    </thead>";

    echo "<tbody>";
    foreach ($array3 as $key => $value) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $value['name'] . "</td>";
        echo "<td>" . $value['city'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>

</body>
</html>