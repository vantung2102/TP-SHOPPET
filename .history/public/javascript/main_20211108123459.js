var select_sub_menus = $(".accordion-menu li:not(.active-page)");
var active_page_sub_menu_link = $(".accordion-menu li.active-page > a");
var activeLis = $(".accordion-menu li");

activeLis.forEach((activeLi, index) => {
  activeLi.onclick = function () {
    active_page_sub_menu_link.classList.remove("active-page");
    select_sub_menus.classList.add("active-page");
  };
});
console.log(activeLi);
