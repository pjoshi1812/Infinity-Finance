
function cap(){
    var alpha = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V'
                 ,'W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i',
                 'j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z', '!','@','#','$','%','^','&','*','+'];
    
    var a=alpha[Math.floor(Math.random()*71)];
    var b=alpha[Math.floor(Math.random()*71)];
    var c=alpha[Math.floor(Math.random()*71)];
    var d=alpha[Math.floor(Math.random()*71)];
    var e=alpha[Math.floor(Math.random()*71)];
    var f=alpha[Math.floor(Math.random()*71)];

    var final =a+b+c+d+f;
    document.getElementById("capt").value=final;
    

}
function captchacode(){
  var alpha = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V'
               ,'W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i',
               'j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z', '!','@','#','$','%','^','&','*','+'];
  
  var a=alpha[Math.floor(Math.random()*71)];
  var b=alpha[Math.floor(Math.random()*71)];
  var c=alpha[Math.floor(Math.random()*71)];
  var d=alpha[Math.floor(Math.random()*71)];
  var e=alpha[Math.floor(Math.random()*71)];
  var f=alpha[Math.floor(Math.random()*71)];

  var final =a+b+c+d+f;
  
  document.getElementById("capt1").value=final;

}

 function f1(){
  var userid=document.getElementById('user');
  var password=document.getElementById('security');
  var inputtext=document.getElementById('inputtext');
  if(userid == null && password == null && inputtext == null) 
  
  {
    alert("login unsucessfully");
  }
  // if()
  // {
  //   alert('login sucessfully');
  // }
  // else
  // {
  //   alert("login unsucessfully");
  // }
  // if()
  // {
  //   alert("login sucessfully");
  // }
  // else
  // {
  //   alert("login unsucessfully");
  // }

}

var index = 0;
var slides = document.querySelectorAll(".d");
var dot = document.querySelectorAll(".dot");


function changeSlide(){

  if(index<0){
    index = slides.length-1;
  }
  
  if(index>slides.length-1){
    index = 0;
  }
  
  for(let i=0;i<slides.length;i++){
    slides[i].style.display = "none";
    dot[i].classList.remove("active");
  }
  
  slides[index].style.display= "block";
  dot[index].classList.add("active");
  
  index++;
  
  setTimeout(changeSlide,2000);
  
}

changeSlide();
