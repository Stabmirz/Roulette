<?php include "css/style.php"; ?>

<div class="container text-center" id="main">
   <h1>Result</h1>
   <div style="display:flex;justify-content:space-evenly;">
       <div class="form">
           <span class="para" style="border-bottom:1px solid white" >Bet Result</span>
           <br>
           <p class="index">Winning Number: <?= $win_number?></p>
           <p class="index">Winning Color: <?= $win_color?></p>
       </div>
       <div><img id="winner" style="width:80%;height:42%" src="images/winner.png"></div>
       <div class="form">
           <span class="para" style="border-bottom:1px solid white">Your Bet</span>
           <p class="index"> Bet Amount: <?= $amount?></p>
           <p class="index"> Number: <?= $number?></p>
           <p class="index"> Color: <?= $color?></p>
       </div>
   </div>
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