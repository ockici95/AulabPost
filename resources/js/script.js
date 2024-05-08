
var prevScrollpos = window.scrollY;
window.onscroll = function() {
  var currentScrollPos = window.scrollY;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}

let isClicked=false;
document.getElementById('toggle-btn').addEventListener('click',()=>{
  
  if(isClicked){
    toggleBtn.onclick = function() {
      this.classList.toggle('toggle-btn--dark');
     
    };
    document.documentElement.setAttribute('data-bs-theme','light')

    isClicked=false
    localStorage.setItem('mode','light')
  }
 
  else {
      document.documentElement.setAttribute('data-bs-theme','dark')

       isClicked=true;
       localStorage.setItem('mode','dark')
  }
})


 var toggleBtn = document.getElementById('toggle-btn');
 toggleBtn.onclick = function() {
   this.classList.toggle('toggle-btn--dark');
  document.body.classList.toggle('dark-mode');
 };

let mode= localStorage.getItem('mode');
mode='dark';
console.log(mode)
if(mode==='dark'){
  document.documentElement.setAttribute('data-bs-theme','dark')
  // document.getElementById('toggle-btn').innerHTML='<i class="fa-solid fa-newspaper"></i>'
  isClicked=true;
}else{
  document.documentElement.setAttribute('data-bs-theme','light')
  // document.getElementById('toggle-btn').innerHTML='<i class="fa-solid fa-star"></i>'
  isClicked=false;
}
