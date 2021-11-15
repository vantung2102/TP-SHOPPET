$(document).ready(function () {
  let obj = [];
  var ids = [];

  $(".cart").click(function () {
    var id = $(this).data("id");

    if (ids.includes(id) == true) {
      alert("San pham nay da ton tai trong gio hang.");
      return false;
    }

    ids.push(id);

    if (typeof Storage !== "undefined") {
      localStorage.setItem("ids", ids);
    }
  });
});
