
$(function () {
  enable_cb();
  $(".enable").click(enable_cb);
});

function enable_cb() {
  if (this.checked) {
    $("input.group1").attr("disabled", true);
  } else {
    $("input.group1").removeAttr("disabled");
  }
}

