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
    <p class="title mt-3 mb-2 pl-3">INFORMASI KEJUARAAN</p>
    <p class="font-size-14 pl-3">Berikut beberapa info kejuaraan pencak silat</p>
    <div class="row">
      <div class="col-6 pr-1">
        <button class="button-none float-right">
          <img src="./assets/img/informations_1.png" id="myImg" style="width: 140px; margin: 10px 0px; height: 140px" />
        </button>
      </div>
      <div class="col-6 pl-1">
        <button class="button-none float-left">
          <img src="./assets/img/informations_4.png" id="myImg1" style="width: 140px; margin: 10px 0px; height: 140px" />
        </button>
      </div>
      <div class="col-6 pr-1">
        <button class="button-none float-right">
          <img src="./assets/img/informations_3.png" id="myImg2" style="width: 140px; margin: 10px 0px; height: 140px" />
        </button>
      </div>
      <div class="col-6 pl-1">
        <button class="button-none float-left">
          <img src="./assets/img/informations_2.png" id="myImg3" style="width: 140px; margin: 10px 0px; height: 140px" />
        </button>
      </div>
    </div>
  </div>
</div>

<div id="myModal" class="modal" style="background: #000">
  <span class="close">
    <img class="modal-content" id="img01">
  </span>
  <div id="caption"></div>
</div>

<script>
  // Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var img1 = document.getElementById("myImg1");
var img2 = document.getElementById("myImg2");
var img3 = document.getElementById("myImg3");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

img1.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

img2.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

img3.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>

<?php
  include "./component/footer.php";
?>