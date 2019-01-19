<?php include "partials/header.php"; ?>

<?php if($error) { ?>
	<div class="alert"><?= $error ?></div>
<?php } ?>
<div class="container text-center" id="main">
    <h1>Bet Screen</h1>
    <div style="display:flex;justify-content:space-around;margin-top:6%">
        <div class="bet" >
            <p>Bet Now</p>
            <form class="form"action="betsubmit.php" method="post" >
                Amount: <input type="number" name="amount" required> chips<br><br>
               Color: <select name="color">
                    <option value="Red">Red</option>
                    <option value="black">Black</option>
                    <option value="green">Green</option>
                </select><br><br>
                Number: <select name="number">
                    <?php
                        for ($i=1; $i<=36; $i++)
                        {
                            ?>
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php
                        }
                    ?>
                    </select><br><br>
                <input class="form-submit-button" type="submit" name="submit" value="Submit">
            </form>
        </div>

        <div>
            <p>Participents</p>
            <table>
                <tr>
                <th>Name</th>
                <th>Bet Amount</th>
                <th>Color</th>
                <th>Number</th>
                </tr>
                <tr>
                <td>Jill</td>
                <td>Smith</td>
                <td>50</td>
                <td>50</td>
                </tr>
            </table>
        </div>
    </div>
</div>


<?php include "partials/footer.php"; ?>