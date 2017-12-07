<?php
/**
 * Created by PhpStorm.
 * User: Pat
 * Date: 12/7/2017
 * Time: 5:51 PM
 */function getColumnNames($db, $tbl)
{
    $column_names = "";
    $sql = "select column_name from information_schema.columns where lower(table_name)=lower('" . $tbl . "')";
    $stmt = $db->prepare($sql);
    try {
        if ($stmt->execute()) {
            $raw_column_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($raw_column_data as $outer_key => $array) {
                foreach ($array as $inner_key => $value) {
                    if (!(int)$inner_key) {
                        $column_names[] = $value;
                    };
                };
            };
        };
    } catch (Exception $e) {
        die("There was a problem retrieving the column names");
    }
    return $column_names;
}
    ?>