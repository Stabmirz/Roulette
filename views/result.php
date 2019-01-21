<?php include "partials/header.php"; ?>

<div class="container text-center" id="main">
    <h1>Result</h1>

    <p class="gift">Winning Number: <?= $win_number?></p>
    <p class="gift">Winning Color: <?= $win_color?></p>

    <p class="index">Your Bet Amount: <?= $amount?></p>
    <p class="index">Your Number: <?= $number?></p>
    <p class="index">Your Color: <?= $color?></p>

    <p class="gift"><?= $winner?></p>
</div> 
<script>
    document.execCommand('Stop');
</script>
<?php include "partials/footer.php"; ?>