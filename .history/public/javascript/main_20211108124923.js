var active_page_sub_menu_link = document.querySelector(
  ".accordion-menu li.active-page"
);
var activeLis = document.querySelectorAll(".accordion-menu li a");

activeLis.forEach((activeLi) => {
  activeLi.onclick = function () {
    active_page_sub_menu_link.classList.remove("active-page");
    this.classList.add("active-page");
    console.log(activeLi);
  };
});
