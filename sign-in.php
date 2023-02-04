<?php

include 'assets/headerlog.php';

if (isset($_SESSION["username"])) {
    header("location: index.php");
}

?>

<ul class="navi">
    <a href="signup.php">
        <li>Lag Konto</li>
    </a>
    <a href="index.php">
        <li>Hjem</li>
    </a>
</ul>
<div class="wrapper">
    <div class="rec-prism">
        <div class="face face-front">
            <div class="content">
                <h2>Logg Inn</h2>
                <form action="assets/login.inc.php" method="post">
                    <div class=" field-wrapper">
                        <input type="text" name="email" placeholder="E-post">
                        <label>E-post</label>
                    </div>
                    <div class="field-wrapper">
                        <input type="password" name="pwd" placeholder="Password">
                        <label>Passord</label>
                    </div>
                    <div class="field-wrapper">
                        <input type="submit" name="submit">
                    </div>
                    <span class="signup" onclick="showSignup()">Not a user? Sign up</span>
                </form>
            </div>
        </div>

    </div>
</div>
<?php
include_once 'footer.php';
?>
</body>

</html>