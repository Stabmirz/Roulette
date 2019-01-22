<?php include "partials/i-header.php"; ?>


<div class="container text-center" id="main">
    <?php if($error) { ?>
        <div class="alert"><?= $error ?></div>
    <?php } ?>
    <h1>Log In</h1>
    <form class="form" action="loginsubmit.php" method="post" >
        Email*<br><input class="input" type="text" name="email" placeholder="Email address" required><br><br>
        Password*<br><input class="input" id="myInput" type="password" name="pass" placeholder="Password" required><br><br>
        <input type="checkbox" onclick="myFunction()">Show Password<br><br>
        <input class="form-submit-button" type="submit" name="submit" value="Submit">
    </form>
    <p class="index">Do not have an account? <button class="abutton" type="button"><a class="button" href="signup.php">Sign Up</a></button></p>
</div>

<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

<?php include "partials/footer.php"; ?>
