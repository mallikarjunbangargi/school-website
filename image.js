

<SCRIPT LANGUAGE="JavaScript">
var rotate_delay = 5000; 
current = 0;
function next() {
if (document.slideform.slide[current+1]) {
document.images.show.src = document.slideform.slide[current+1].value;
document.slideform.slide.selectedIndex = ++current;
   }
else first();
}
function previous() {
if (current-1 >= 0) {
document.images.show.src = document.slideform.slide[current-1].value;
document.slideform.slide.selectedIndex = --current;
   }
else last();
}
function first() {
current = 0;
document.images.show.src = document.slideform.slide[0].value;
document.slideform.slide.selectedIndex = 0;
}
function last() {
current = document.slideform.slide.length-1;
document.images.show.src = document.slideform.slide[current].value;
document.slideform.slide.selectedIndex = current;
}
function ap(text) {
document.slideform.slidebutton.value = (text == "Stop") ? "Start" : "Stop";
rotate();
}
function change() {
current = document.slideform.slide.selectedIndex;
document.images.show.src = document.slideform.slide[current].value;
}
function rotate() {
if (document.slideform.slidebutton.value == "Stop") {
current = (current == document.slideform.slide.length-1) ? 0 : current+1;
document.images.show.src = document.slideform.slide[current].value;
document.slideform.slide.selectedIndex = current;
window.setTimeout("rotate()", rotate_delay);
   }
}
</script>





</BODY></HTML>