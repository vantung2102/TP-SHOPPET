var active_page = document.querySelector(".accordion-menu li.active-page");
var activeLis = document.querySelectorAll(".accordion-menu li a");

activeLis.forEach((activeLi) => {
  activeLi.onclick = function () {
    active_page.classList.remove("active-page");
    this.classList.add("active-page");
    console.log(00);
  };
});

// amount product
function plus() {
  var quanty = document.getElementById("amount").value;
  document.getElementById("amount").value = parseInt(quanty) + 1;
}

function minus() {
  var quanty = document.getElementById("amount").value;
  if (parseInt(quanty) > 1) {
    document.getElementById("amount").value = parseInt(quanty) - 1;
  }
}

/*Amount product on Mobile*/
function plus_mobile() {
  var quanty = document.getElementById("amount_mobile").value;
  document.getElementById("amount_mobile").value = parseInt(quanty) + 1;
}

function minus_mobile() {
  var quanty = document.getElementById("amount_mobile").value;
  if (parseInt(quanty) > 1) {
    document.getElementById("amount_mobile").value = parseInt(quanty) - 1;
  }
}

// Select image
function changeImage(id) {
  let imagePath = document.getElementById(id).getAttribute("src");
  console.log(imagePath);
  document.getElementById("img-main").setAttribute("src", imagePath);
}

// Like and dislike
var heartvar = document.getElementById("heart");
function like() {
  if (heartvar.style.color == "red") {
    heartvar.style.color = "grey";
  } else {
    heartvar.style.color = "red";
  }
}
