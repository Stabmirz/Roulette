<?php include "partials/b-header.php";?>
<br>
<div class="chip"><?= $chip?>
    <img src="images/coins.png" width="40px" height="40px"> 
    <a href="shop.php"><i class="fa fa-fw fa-plus"></i></a>
    </div>
<div class="container text-center" id="main">
    <h1>Bet Screen</h1>
    <p>Welcome <?= $uname;?>
        
    <div style="display:flex;justify-content:space-around;">
        <div>
        <?php if($error) { ?>
	<div class="alert"><?= $error ?></div>
<?php } ?>
            <p>Bet Now</p>
            <form class="form" action="betsubmit.php" method="post" >
                Amount : <input style="width :70px; height: 30px;" type="text" name="amount" required> chips<br><br>
                Number : <select style="width :130px; height: 30px;" name="number">
                    <?php
                        for ($i=1; $i<=36; $i++)
                        {
                            ?>
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php
                        }
                        ?>
                    </select><br><br>
                Color : <select style="width :140px; height: 30px;" name="color">
                    <option value="Red">Red</option>
                    <option value="black">Black</option>
                    <option value="green">Green</option>
                </select><br><br>
                <input class="abutton" type="submit" name="submit" value="Bet">
            </form>
        </div>
        <div>
            <p>Participents</p>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Bet Amount</th>
                        <th scope="col">Number</th>
                        <th scope="col">Color</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="3">* minimum 5 participents required to start the game</td>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <?php foreach($bets as $bet) { ?>
                        <th scope="row"><?= $bet->uname ?></th>
                        <td><?= $bet->amount ?></td>
                        <td><?= $bet->number ?></td>
                        <td><?= $bet->color ?></td>
                    </tr>
                        <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include "partials/footer.php"; ?>