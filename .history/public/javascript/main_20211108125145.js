var active_page = document.querySelector(".accordion-menu li.active-page");
var activeLis = document.querySelectorAll(".accordion-menu li a");

activeLis.forEach((activeLi) => {
  activeLi.onclick = function () {
    active_page.classList.remove("active-page");
    this.classList.add("active-page");
    console.log(activeLi);
  };
});

var tabs = [1, 3, 5, 7];
tabs.forEach((tab, index) => {
  tab.onclick = function () {
    $(".tabs-item.active").classList.remove("active");
    this.classList.add("active");

    line.style.left = this.offsetLeft + "px";
    line.style.width = this.offsetWidth + "px";

    $(".tabs-pane.active").classList.remove("active");
    pane[index].classList.add("active");
  };
});
