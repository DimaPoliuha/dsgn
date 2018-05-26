<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 23:42
 */
?>

<h2>login page</h2>
<form action="/<?php echo \application\core\ROOT_URL?>account/login" method="post">

    <p>login</p>
    <p><input type="text" name="login"></p>
    <p>password</p>
    <p><input type="text" name="password"></p>
    <b><button type="submit" name="enter">log in</button></b>

</form>
