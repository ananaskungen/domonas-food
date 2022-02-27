const modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
const img = document.getElementById("myImg");
const modalImg = document.getElementById("img01");
const captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
/* ******************* */
const modal1 = document.getElementById("myModal-1");

// Get the image and insert it inside the modal - use its "alt" text as a caption
const img1 = document.getElementById("myImg-1");
const modalImg1 = document.getElementById("img02");
const captionText1 = document.getElementById("caption-1");
img1.onclick = function(){
  modal1.style.display = "block";
  modalImg1.src = this.src;
  captionText1.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
const span2 = document.getElementsByClassName("close-1")[0];

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal1.style.display = "none";
}