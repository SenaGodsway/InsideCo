const bars=document.getElementById('#bars');
const menu= document.querySelector('.menu');

// bars.addEventListener('click',()=>{
//   if (menu.style.display==='none') {
//       menu.style.display='block';
//   }
//   else {
//     menu.style.display='none';
//   }
// });
function toggleNav() {
  if (document.querySelector('.menu').style.display==='none') {
    document.querySelector('.menu').style.display='block';
  } else {
    document.querySelector('.menu').style.display='none';
  }
}
