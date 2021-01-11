console.log('yolo');
var slideIndex = 1;
showDivs(slideIndex);


var active;
function blk(event,i){
    var modal = document.getElementById('myModal'+i);
    modal.style.display = "block";
    console.log(modal.id);
    active=i;
}

window.onclick = function(event) {
    var modal = document.getElementById('myModal'+active);
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function plusDivs(n) {
  showDivs(slideIndex += n);
}



function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
