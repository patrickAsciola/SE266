<?php
$table = "<table>";
for($rows = 1; $rows <= 9; $rows++)
{
    $table .= "\t<tr>";
    for($column = 1; $column <= 9; $column++)
    {
        $table .="<td>" . $rows * $column . "</td>";


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
