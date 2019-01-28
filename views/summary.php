<?php include "partials/b-header.php"; ?>

<div class="container text-center" id="main">
    <h1>Summary</h1>
    <p class="gift">Winning Number: <?= $scores[0]->w_number?></p>
    <p class="gift">Winning Color: <?= $scores[0]->w_color?></p>
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Amounts Bet</th>
                    <th scope="col">Bet Number</th>
                    <th scope="col">Bet Color</th>
                    <th scope="col">Chips Won</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="3">* summary of most recent hand</td>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <?php foreach($scores as $score) { ?>
                    <th scope="row"><?= $score->users ?></th>
                    <td><?= $score->b_amount ?>  chips</td>
                    <td><?= $score->b_number ?></td>
                    <td><?= $score->b_color ?></td>
                    <td><?= $score->w_amount ?> chips</td>
                </tr>
                    <?php }?>
            </tbody>
        </table>
    </div>
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


<?php include "partials/footer.php"; ?>