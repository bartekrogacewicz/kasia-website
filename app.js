document.getElementById("hammenu").addEventListener("click", menuOpen);
document.getElementById("close-icon").addEventListener("click", menuClose);
function menuOpen() {
  console.log("wowow");
  // $("#center-nav").addClass("open-menu");
  // $("#center-nav").removeClass("center-nav");
  // $("#center-nav").addClass("center-ham");
  $(".close-icon").css("display", "inline-block");
  $(".menu-element").css("padding","10px 0px");
  $(".menu-element").css("display","block");
  $("nav").css("height","400px");

}
function menuClose() {
  console.log("wowow");
  // $("#center-nav").removeClass("open-menu");
  // $("#center-nav").addClass("center-nav");
  // $("#center-nav").removeClass("center-ham");
  $(".close-icon").css("display", "none");
}
