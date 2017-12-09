<?php
/**
 * Created by PhpStorm.
 * User: Pat
 * Date: 12/8/2017
 * Time: 9:41 PM
 */
include_once ('assets/header.php');
?>

    <h3>This form adds a valid URL to the database.</h3>

    <form method="post" action="#">
        <input type="text" placeholder="URL" name="site" value="<?php if (isset($_POST['site'])) echo $_POST['site']; ?>">
        <input type="submit" name="action" value="Add">
    </form>

<?php
include_once ('assets/footer.php');