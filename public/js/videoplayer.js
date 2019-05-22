  var x = document.getElementById("myVideo");
 console.log(x);
x.onloadedmetadata=function(){
  document.getElementById("time").innerHTML = x.duration
  console.log(  document.getElementById("time").innerHTML = x.duration
  )
}
