var select_sub_menus = document.querySelector(
  ".accordion-menu li:not(.active-page)"
);
var active_page_sub_menu_link = document.querySelectorAll(
  ".accordion-menu li.active-page > a"
);
var activeLis = document.querySelectorAll(".accordion-menu li a");

activeLis.forEach((activeLi, index) => {
  activeLi.onclick = function () {
    active_page_sub_menu_link.classList.remove("active-page");
    this.classList.add("active-page");
  };
});
console.log(activeLis);
