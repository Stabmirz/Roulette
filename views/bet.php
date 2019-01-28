<?php include "partials/b-header.php";?>
<br>
<div class="chip"><?= $chip?>
  <img src="images/coins.png" width="40px" height="40px">
  <a href="shop.php"><i class="fa fa-fw fa-plus"></i></a>
</div>
<div class="container text-center" id="main">
  <h1>Bet Screen</h1>
  <span class="para">Welcome <?= $uname;?></span>
  <div style="display:flex;justify-content:space-evenly;">
      <div>
      <?php if($error) { ?>
   <div class="alert"><?= $error ?></div>
<?php } ?>
          <span class="para">Bet Now</span>
          <form class="form" action="betsubmit.php" method="post" >
              Amount : <input style="width :150px; height: 30px;font-size:14px" type="text" name="amount" placeholder="Chips Amount"required><br><br>
              Number : <select style="width :150px; height: 30px;font-size:14px" name="number" >
                      <option selected disabled value="">Select your Number</option>
                  <?php
                      for ($i=0; $i<=35; $i++)
                      {
                          ?>
                              <option value="<?php echo $i;?>"><?php echo $i;?></option>
                          <?php
                      }
                      ?>
                  </select><br><br>
              Color : <select style="width :160px; height: 30px;font-size:14px" name="color" >
                  <option selected disabled value="">Select your color</option>
                  <option value="Red">Red</option>
                  <option value="black">Black</option>
                  <option value="green">Green</option>
              </select><br><br>
              <input class="abutton" type="submit" name="submit" value="Bet">
          </form>
      </div>
      <div><img style="margin-top:50px" src="images/logo1.png"></div>
      <div>
          <span class="para">Participents</span>
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