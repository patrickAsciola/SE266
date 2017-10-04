<?php
// Patrick Asciola SE266.15 10/4/17
$table = "<table>"; // creates table
$number = " "; // initliazes number variable as a string


for($rows = 1; $rows <= 9; $rows++) // for loop start for making a 10X10 table
{
    $table .= "\t<tr>"; //adds a row for each loop



    for($column = 1; $column <= 10; $column++)// generates the columns
    {
        $number  = "";  // resets number variable to 0 to allow it to concatinate
        $number .= mt_rand(1,9); // generates first number excluding 0's
        for($y = 0; $y <= 5; $y++) // for loop generating the rest of the numbers
        {
            $number .= mt_rand(0,9);

        }
        $hexNum = dechex($number);// changes random number string to a hex number
        $table .="<td style='background-color:#$hexNum'>$hexNum<br /><span style='color:#ffffff;'>$hexNum</span> " . "</td>"; // creates the cells and styles them




    }
    $table .= "</tr>\n";// ending tag for the rows
}
$table .="</table>";// ending tag for the table

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
</head>
<body>
<?php echo $table; ?> <!-- shows the table on the page -->
</body>
</html>
