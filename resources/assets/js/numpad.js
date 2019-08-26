function number_write(x)
{
  var text_box = document.getElementById("number");
  if(x>=0 && x<=9) {
    if(isNaN(text_box.value)) {
      text_box.value = 0;
    }
    text_box.value = text_box.value + x;
  }
}

function number_clear()
{
  document.getElementById("number").value = '';
}