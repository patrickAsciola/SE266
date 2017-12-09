<?php
/**
 * Created by PhpStorm.
 * User: 001351643
 * Date: 10/16/2017
 * Time: 12:02 PM
 */
?>
<!-- the header for all the web pages -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<header>
    <nav>
        <section><form method='get' action='index.php'>
                <label for='col'>Sort Column: </label>
                <select name='col' id='col'>
                    <option value='id'>id</option>
                    <option value='corp'>corp</option>
                    <option value='incorp_dt'>incorp_dt</option>
                    <option value='email'>email</option>
                    <option value='zipcode'>zipcode</option>
                    <option value='owner'>owner</option>
                    <option value='phone'>phone</option>
                </select>
                <label for='asc'>Ascending: </label>
                <input type='radio' name='dir' value='ASC' id = 'asc' />
                <label for='desc'>Descending: </label>
                <input type='radio' name='dir' value='DESC' id = 'desc' />
                <input type='hidden' name='action' value='sort' />
                <input type='submit' />
                <input type='submit' name='action' value='Reset' />
            </form></section>

        <section><form method='get' action='index.php'>
                <label for='col'>Search Column: </label>
                <select name='col' id='col'>
                    <option value='id'>id</option>
                    <option value='corp'>corp</option>
                    <option value='incorp_dt'>incorp_dt</option>
                    <option value='email'>email</option>
                    <option value='zipcode'>zipcode</option>
                    <option value='owner'>owner</option>
                    <option value='phone'>phone</option>
                </select>
                <label for='term'>Term: </label>
                <input type='text' name='term' id = 'term' />
                <input type='hidden' name='action' value='search' />
                <input type='submit' />
                <input type='submit' name='action' value='Reset' />
            </form></section>

    </nav>
</header>
<section> <h1> Corporation Data</h1>