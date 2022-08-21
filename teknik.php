<?php 
  include "./component/header.php";
?>

<div class="main">
  <a href="main.php">
    <svg style="position: absolute; margin-top: 20px;margin-left: 20px;color: #000;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill arrow-back" viewBox="0 0 16 16">
      <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
    </svg>
  </a>
  <img src="./assets/img/teknik_banner.png" width="100%" />
  <div class="p-3">
    <p class="title mt-3 mb-2 pl-1">TEKNIK - TEKNIK DALAM PENCAK SILAT</p>
    <p class="font-size-14 pl-1 mb-0">Berikut adalah beberapa teknik dasar dalam pencak silat</p>
  </div>
  <div class="row p-2">
      <div class="col-6 pr-0"><a href="teknik_kuda.php"><button class="button-none p-0"><img src="./assets/img/teknik_1.png" class="m-2 float-right" width="90%" /></button></a></div>
      <div class="col-6 pl-0"><a href="teknik_sikap.php"><button class="button-none p-0"><img src="./assets/img/teknik_2.png" class="m-2 float-left" width="90%" /></button></a></div>
      <div class="col-6 pr-0"><a href="teknik_arah.php"><button class="button-none p-0"><img src="./assets/img/teknik_3.png" class="m-2 float-right" width="90%" /></button></a></div>
      <div class="col-6 pl-0"><a href="teknik_pukulan.php"><button class="button-none p-0"><img src="./assets/img/teknik_4.png" class="m-2 float-left" width="90%" /></button></a></div>
      <div class="col-6 pr-0"><a href="teknik_tendangan.php"><button class="button-none p-0"><img src="./assets/img/teknik_5.png" class="m-2 float-right" width="90%" /></button></a></div>
      <div class="col-6 pl-0"><a href="teknik_tangkisan.php"><button class="button-none p-0"><img src="./assets/img/teknik_6.png" class="m-2 float-left" width="90%" /></button></a></div>
      <div class="col-6 pr-0"><a href="teknik_guntingan.php"><button class="button-none p-0"><img src="./assets/img/teknik_7.png" class="m-2 float-right" width="90%" /></button></a></div>
      <div class="col-6 pl-0"><a href="teknik_berbaring.php"><button class="button-none p-0"><img src="./assets/img/teknik_8.png" class="m-2 float-left" width="90%" /></button></a></div>
  </div>
</div>

<?php
  include "./component/footer.php";
?>