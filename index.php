<h2>Login</h2>
<hr>

<?php
session_start();
if (isset($_SESSION['error'])) {
    echo "<p style='color:red'>" . $_SESSION['error'] . "</p>";
    unset($_SESSION['error']);
}
?>

<form action="ceklogin.php" method="POST">
    Username <br> <input type="text" name="user"> <br>
    Password <br> <input type="password" name="pass">
    <hr>
    <input type="submit" value="Login">
</form>