<?php



include 'assets/headerlog.php';

if (isset($_SESSION["username"])) {
    header("location: index.php");
}
?>

<ul class="navi">
    <a href="sign-in.php">
        <li>Logg Inn </li>
    </a>
    <a href="index.php">
        <li>Hjem</li>
    </a>
</ul>
<div class="wrapper">
    <div class="rec-prism">

        <div class="face face-front">
            <div class="content">
                <h2>Lag Konto</h2>
                <form action="assets/signup.inc.php" method="POST">

                    <div class="field-wrapper">
                        <input type="text" name="email" placeholder="email">
                        <label>E-post</label>
                    </div>
                    <div class="field-wrapper">
                        <input type="text" name="username" placeholder="username">
                        <label>Brukernavn</label>
                    </div>
                    <div class="field-wrapper">
                        <input type="password" name="pwd" placeholder="Passord">
                        <label>Passord</label>
                    </div>
                    <div class="field-wrapper">
                        <input type="password" name="pwdrepeat" placeholder="Gjenta Passord">
                        <label>Gjenta Passord</label>
                    </div>
                    <div class="field-wrapper">
                        <input type="submit" name="submit">
                    </div>
                    <span class="singin" onclick="showLogin()">Har konto allerede? Logg Inn</span>
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