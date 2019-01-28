<?php include "css/style.php"; ?>

<div class="container text-center" id="main">
    <h1>Result</h1>

    <p class="gift">Winning Number: <?= $win_number?></p>
    <p class="gift">Winning Color: <?= $win_color?></p>

    <p class="index">Your Bet Amount: <?= $amount?></p>
    <p class="index">Your Number: <?= $number?></p>
    <p class="index">Your Color: <?= $color?></p>

    <p class="gift"><?= $message?></p>
</div> 


<script>
    history.pushState(null, null, document.URL);
    window.addEventListener('popstate', function () {
       history.pushState(null, null, document.URL);
   });
   document.onkeydown = function(e) {
    var key;
    if (window.event) {
    key = event.keyCode
    }
    else {
    var unicode = e.keyCode ? e.keyCode : e.charCode
    key = unicode
    }

    switch (key) {//event.keyCode
    case 116: //F5 button
    key.returnValue = false;
    key = 0; //event.keyCode = 0;
    return false;
    case 82: //R button
    if (event.ctrlKey) {
    key.returnValue = false;
    key = 0; //event.keyCode = 0;
    return false;
    }
    case 91: // ctrl + R Button
    event.returnValue= false;
    key=0;
    return false;
    }
    }
</script>

<br>
<br>
<?php include "partials/footer.php"; ?>