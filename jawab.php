<?php 
$answer = $_POST["answer"];
$true = $_POST["true"];
$nilai = 0;
$benar = 0;
$salah = 0;

for ($i=1; $i <= count($answer); $i++) { 
    if($answer[$i] == $true[$i]) {
        $nilai = $nilai + 5;
        $benar++;
    } else {
        $salah++;
    }
}

?>

<?php 
  include "./component/header.php";
?>

<div class="main">
  <a href="main.php">
    <svg style="position: absolute; margin-top: 20px;margin-left: 20px;color: #000;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill arrow-back" viewBox="0 0 16 16">
      <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
    </svg>
  </a>
  <img src="./assets/img/informasi_banner.png" width="100%" />
  <div class="p-3">
      <p class="title mt-3 mb-2 text-center">QUIZ SELESAI</p>
      <p class="font-size-14 text-center">Selamat Anda telah menyelesaikan quiz tentang pencak silat, Nilai Anda</p>
      <h1 class="text-center mt-4" style="font-size: 72px"><b><?= $nilai ?></b></h1>
      <p class="mt-4 mb-0 text-center font-size-14">
        <font class="text-success"><b><?= $benar ?></b> Benar</font> &nbsp;&nbsp;&nbsp; 
        <font class="text-danger"><b><?= $salah ?></b> Salah</font>
      </p>
    <div class="mt-4 p-3">
        <center>
            <a href="quiz.php" class="btn btn-danger width-100">Try Again</a>
            <a href="index.php" class="btn btn-secondary width-100 mt-2">Back</a>
        </center>
    </div>
  </div>
</div>
<?php
  include "./component/footer.php";
?>