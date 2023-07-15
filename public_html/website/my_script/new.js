let demoCardCount = document.querySelectorAll('.demo-card').length;
let step4Element = document.querySelector('.demo-card-wrapper');
if (demoCardCount == 4 || demoCardCount == 3) {
  console.log('mina');
  step4Element.style.height = '1193px' ;
}
else if (demoCardCount <= 2) {
    step4Element.style.height = '100%' ;
}
else if (demoCardCount > 4) {
    step4Element.style.height = '1985px' ;
}
