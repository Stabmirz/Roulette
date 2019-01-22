<?php include "partials/b-header.php"; ?>

<div class="container text-center" id="main">
    <h1>Summary</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Winning Number</th>
                    <th scope="col">Winning Color</th>
                    <th scope="col">Winners</th>
                    <th scope="col">Losers</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td colspan="3">* summary of most recent hand</td>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <?php foreach($results as $result) { ?>
                    <th scope="row"><?= $result->w_number ?></th>
                    <td><?= $result->w_color ?></td>
                    <td><?= $result->winners ?></td>
                    <td><?= $result->losers ?></td>
                </tr>
                    <?php }?>
            </tbody>
        </table>
    </div>
</div>  
<?php include "partials/footer.php"; ?>