<?php
$table = "<table>";
$number = " ";


for($rows = 1; $rows <= 9; $rows++)
{
    $table .= "\t<tr>";



    for($column = 1; $column <= 10; $column++)
    {
        $number  = "";
        $number .= mt_rand(1,9);
        for($y = 0; $y <= 5; $y++)
        {
            $number .= mt_rand(0,9);
            $hexNum = dechex($number);
        }

        $table .="<td style='background-color:#$hexNum'>$hexNum<br /><span style='color:#ffffff;'>$hexNum</span> " . "</td>";




    }
    $table .= "</tr>\n";
}
$table .="</table>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
</head>
<body>
<?php echo $table; ?>
</body>
</html>
