let mynav = document.querySelector('.navbar');

var scrollDistance = 7000;
var currentScroll = 0;

document.querySelector("#aboutusme").addEventListener("click", scrolldiv());
  
  function scrolldiv() {
    window.scroll(0, 
findPosition(document.getElementById("#aboutusem")));
}
function findPosition(obj) {
    var currenttop = 0;
    if (obj.offsetParent) {
        do {
            currenttop += obj.offsetTop;
        } while ((obj = obj.offsetParent));
        return [currenttop];
    }
}
































// $('.slides').slick({
//     dots: false,
//     infinite: false,
//     autoplay:true,
//     arrows:false,   
//     speed: 200,
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     responsive: [
//       {
//         breakpoint: 1024,
//         settings: {
//           slidesToShow: 3,
//           slidesToScroll: 3,
//           infinite: true,
//           dots: true
//         }
//       },
//       {
//         breakpoint: 768,
//         settings: {
//           slidesToShow: 1,
//           slidesToScroll: 2
//         }
//       },
//       {
//         breakpoint: 480,
//         settings: {
//           slidesToShow: 1,
//           slidesToScroll: 1
//         }
//       }
     
//     ]
//   });