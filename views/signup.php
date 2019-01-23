<?php include "partials/i-header.php"; ?>

<div class="container text-center" id="main">
    <?php if($error) { ?>
        <div class="alert"><?= $error ?></div>
    <?php } ?>
    <h1>Sign Up</h1>
    <form class="form"action="signupsubmit.php" method="post" >
        Username*<br><input class="input"type="text" name="uname" placeholder="Username" required><br><br>
        Email*<br><input class="input" type="text" name="email" placeholder="Email address" required><br><br>
        Password*<br><input class="input" type="password" name="pass" id="myInput" placeholder="Password" required><br><br>
        Re-enter Password*<br><input class="input" type="password" name="repass" placeholder="Re-enter Password"required><br><br>
        <input type="checkbox" onclick="myFunction()">Show Password<br><br>
        <input class="form-submit-button" type="submit" name="submit" value="Submit">
    </form>
    <div>
        <p class="index">Already have an account?</p>
        <button class="abutton" type="button"><a class="button" href="login.php">Login</a></button>
    </div>
	<br>
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