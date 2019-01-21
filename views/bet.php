<br>
<div class="chip"><?= $chip?>
    <img src="images/coins.png" width="40px" height="40px"> 
    <a href="shop.php"><i class="fa fa-fw fa-plus"></i></a>
    </div>
<div class="container text-center" id="main">
    <h1>Bet Screen</h1>
    <p>Welcome <?= $uname;?>
        
    <div style="display:flex;justify-content:space-around;">
        <div class="bet" >
        <?php if($error) { ?>
	<div class="alert"><?= $error ?></div>
<?php } ?>
            <p>Bet Now</p>
            <form class="form" action="betsubmit.php" method="post" >
                Amount: <input type="number" name="amount" required> chips<br><br>
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
                Color: <select name="color">
                    <option value="Red">Red</option>
                    <option value="black">Black</option>
                    <option value="green">Green</option>
                </select><br><br>
                <input class="abutton" type="submit" name="submit" value="Bet">
            </form>
        </div>
        <div class="bet">
            <p>Participents</p>
            <table>
                <tr>
                <th>Name</th>
                <th>Bet Amount</th>
                <th>Number</th>
                <th>Color</th>
                </tr>
                <tr>
        <?php foreach($bets as $bet) { ?>
                <td><?= $bet->uname ?></td>
                <td><?= $bet->amount ?></td>
                <td><?= $bet->number ?></td>
                <td><?= $bet->color ?></td>
                </tr>
        <?php }?>
            </table>
        </div>
    </div>
</div>

<?php include "partials/footer.php"; ?>