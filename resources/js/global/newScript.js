// $(document).ready(function() {
//   $('.owl-client').owlCarousel({
//     loop: true,
//     margin: 5,
//     autoplay: true,
//     autoplayTimeout: 3000,
//     autoplayHoverPause: true,
//     responsiveClass: true,
//     responsive: {
//       0: {
//         items: 2,
//         nav: true
//       },
//       500: {
//         items: 2,
//         nav: false
//       },
//       1000: {
//         items: 5,
//         nav: true,
//       },
//       1200: {
//         items: 5,
//         nav: true,
//         loop: false
//       }
//     }
//   });
//   $('.owl-tech').owlCarousel({
//     loop: true,
//     autoplay: true,
//     autoplayTimeout: 3000,
//     autoplayHoverPause: true,
//     responsiveClass: true,
//     responsive: {
//       0: {
//         items: 2,
//         nav: true
//       },
//       500: {
//         items: 4,
//         nav: false
//       },
//       1000: {
//         items: 5,
//         nav: true,
//       },
//       1200: {
//         items: 7,
//         nav: true,
//         loop: false
//       }
//     }
//   });
//   $('.owl-testimonial').owlCarousel({
//     loop: true,
//     margin: 5,
//     autoplay: true,
//     autoplayTimeout: 3000,
//     autoplayHoverPause: true,
//     responsiveClass: true,
//     responsive: {
//       0: {
//         items: 1,
//         nav: true
//       },
//       500: {
//         items: 2,
//         nav: false
//       },
//       1000: {
//         items: 2,
//         nav: true,
//       },
//       1200: {
//         items: 3,
//         nav: true,
//         loop: false
//       }
//     }
//   });

// });


// function hww(numb) {
//   document.querySelector('.clr').src = document.querySelector('.clr').src.replace('-c.png','.png');
//   document.querySelector('.hww-'+numb).src = './resources/images/hww/'+numb+'-c.png';
//   document.querySelector('.clr').classList.remove('clr');
//   document.querySelector('.hww-'+numb).classList.add('clr');
// }
// $(".navbar-nav .nav-link").on("click", function() {
//    $(".navbar-nav").find(".active").removeClass("active");
//    $(this).addClass("active");
// });


function hideME() {
  $('.contactUsSide').hide();
}

$(window).scroll(function () {
  if ($(window).scrollTop() > 63) {
    $('.company-logo').css('width', '125px');
  }
  if ($(window).scrollTop() < 64) {
    $('.company-logo').css('width', '155px');
  }
});

// function addClass() {
//   document.querySelector('.dropdown-menu').classList.toggle('dropdown-m');
//   document.querySelector('.drop').classList.toggle('heightM');
// }
// function addClass2() {
//   console.log('clicked');
//   document.querySelector('.portfolio-d').classList.toggle('dropdown-m');
//   document.querySelector('.drop-p').classList.toggle('heightM');
// }

// var i=1;

// function changeHww() {
//   if(i<6) {
//     if(i === 5) {
//       i=1;
//     }
//     else {
//       i++;
//     }
//     switch(i) { 
//       case 1:
//         $('#myTab a[href="#Strategy"]').tab('show');
//         break;
//       case 2: 
//         $('#myTab a[href="#UI/UX"]').tab('show');
//         break;
//       case 3:
//         $('#myTab a[href="#Dev"]').tab('show');
//         break;
//       case 4:
//         $('#myTab a[href="#data"]').tab('show');
//         break;
//       case 5: 
//         $('#myTab a[href="#g-dev"]').tab('show');
//         break;
//     }
//     hww(i);
//     setTimeout(() => {
//       changeHww();
//     }, 4000);
//   }
// }

// function stopAuto() {
//   i=6;
// }