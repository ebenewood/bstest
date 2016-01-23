$(function() {
  $(".but").on("click",function(e) {
    e.preventDefault();
    $("#content").load(this.id+".html");
  });
});
