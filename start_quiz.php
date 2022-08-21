<?php 
  include "./component/header.php";
?>

<div class="main">
  <a href="main.php">
    <svg style="position: absolute; margin-top: 20px;margin-left: 20px;color: #000;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill arrow-back" viewBox="0 0 16 16">
      <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
    </svg>
  </a>
  <div class="p-3 pt-5">
    <p id="count" style="
        position: sticky;
        margin-top: -30px;
        float: right;
        font-size: 24px;
        margin-right: 20px;
        top: 0px;
        font-weight: 700">0:0</p>
    <form action="jawab.php" method="post" id="form">
    <?php 
          include "./component/koneksi.php";
          $no = 0;
          $query = mysqli_query($connect, "SELECT * FROM question ORDER BY RAND()");
          while ($data = mysqli_fetch_array($query)) {
          $no++;
    ?>
      <div class="mt-4">
        <p class="title mb-2 pl-3">SOAL <?= $no ?></p>
        <p class="font-size-14 pl-3 pb-0 mb-2"><?= $data["question"] ?></p>
        <ul style="list-style-type: none; margin-left: -20px">
          <li class="font-size-12 pt-2">
            <input type="radio" name="answer[<?= $no ?>]" class="mr-2" style="vertical-align: text-bottom;" value="a" /><?= $data["answer_a"] ?>
            <input type="hidden" name="true[<?= $no ?>]" value="<?= $data["answer_true"] ?>" />
          </li>
          <li class="font-size-12 pt-2">
            <input type="radio" name="answer[<?= $no ?>]" class="mr-2" style="vertical-align: text-bottom;" value="b" /><?= $data["answer_b"] ?>
          </li>
          <li class="font-size-12 pt-2">
            <input type="radio" name="answer[<?= $no ?>]" class="mr-2" style="vertical-align: text-bottom;" value="c" /><?= $data["answer_c"] ?>
          </li>
          <li class="font-size-12 pt-2">
            <input type="radio" name="answer[<?= $no ?>]" class="mr-2" style="vertical-align: text-bottom;" value="d" /><?= $data["answer_d"] ?>
          </li>
          <li class="font-size-12 pt-2">
            <input type="radio" name="answer[<?= $no ?>]" class="mr-2" style="vertical-align: text-bottom;display: none" checked value="" />
          </li>
        </ul>
      </div>
    <?php
        }
    ?>
    <button type="submit" class="btn btn-primary width-100 mt-4">Simpan</button>
    </form>
  </div>
</div>

<script>
var i = 15;
var j = 0;
function startTimer() {
    var countdownTimer = setInterval(function() {
        document.getElementById("count").innerHTML = i + ":" + j;
        const form = document.getElementById('form');

        if(j <= 0) {
          i = i -1;
          j = 60;
        } else {
          j = j -1;
        }

        if (i <= 0 && j <= 0) {
            clearInterval(countdownTimer);
            form.submit();
        }
    }, 1000);
}

startTimer(); 
</script>
<?php
  include "./component/footer.php";
?>