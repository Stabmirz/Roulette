<?php include "partials/i-header.php"; ?>

<div class="container text-center" id="main">
    <h1>Scoreboard</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Winning Number</th>
                    <th scope="col">Winning Color</th>
                    <th scope="col">Username</th>
                    <th scope="col">Status</th>
                    <th scope="col">Amounts Bet</th>
                    <th scope="col">Bet Number</th>
                    <th scope="col">Bet Color</th>
                    <th scope="col">Chips Won</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="3">* scores of last twenty hands</td>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <?php foreach($scores as $score) { ?>
                    <th scope="row"><?= $score->w_number ?></th>
                    <td><?= $score->w_color ?></td>
                    <td><?= $score->users ?></td>
                    <td><?= $score->status ?></td>
                    <td><?= $score->b_amount ?> chips</td>
                    <td><?= $score->b_number ?></td>
                    <td><?= $score->b_color ?></td>
                    <td><?= $score->w_amount ?> chips</td>
                    <td><?= $score->date ?></td>
                </tr>
                    <?php }?>
            </tbody>
        </table>
    </div>
</div>  
<br>
<br>
<br>
<br>
<?php include "partials/footer.php"; ?>