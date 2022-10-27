/*!
* Start Bootstrap - Agency v7.0.11 (https://startbootstrap.com/theme/agency)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

/*
var btns=document.querySelectorAll('.hi')
btns[0].classList.add('active_page')


*/


    document.onscroll=function(){
        var s=document.documentElement.scrollTop
    // document.querySelector('.eee').innerHTML=s

        
        document.querySelector(".tti").style.left =s+'px'
        document.querySelector(".tti").style.transform ='rotate('+s+'deg)';
        document.querySelector(".tti2").style.transform ='rotate(-'+s+'deg)';

        document.querySelector(".tti2").style.right =s+'px'
     
        
    }
    


$('.kk').keyup(function(){

    var oo=$('.kk').val()
    $.post('action.php',{

        tax1:oo
    

    },function(res){
        $('.tpich').html(res)
    })



})


var t=0
$('.pp').change(function(){

var diver=document.querySelectorAll('.das')
var valer=document.querySelectorAll('.vl')
   
var ss=$(this).attr('data-trip')

    var inq=$(this)

    var dd=new FormData();
    dd.append('filep',$(this)[0].files[0]);
    dd.append('trip',ss);
    $.ajax({
        url:'action.php',
        data:dd,
        processData:false,
        contentType:false,
        type:'POST',
        success:function(res){

         if (ss!="carousel") {

           inq.parent().find('.sa').html(`<img src='assets/img/${ss}/${res}' width = '100%'>`)
            inq.parent().find('.por-val').val(res)
        
         }else {
             
            diver[t].innerHTML=`<img src='assets/img/${ss}/${res}' width = '100%'>`
            valer[t].value=res


            t++





         }









        }


    })



})




$('.del-port').click(function(){
var id=this.id
        $(this).parents('tr').hide(500)

var aa=$(this).parents('tr').find('img').attr('src')


     $.post('action.php',{

        por_id:id,
        ad:aa
    

    },function (res) {
     
    })
     
})


$('.del-t').click(function(){
    var id=this.id
        $(this).parents('tr').hide(500)


var tt=$(this).parents('tr').find('img').attr('src')

     $.post('action.php',{

        gall_id:id,
        at:tt

    },function (res) {

    })
        
})







$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,

  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 2
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
})


$('.hi').click(function(){


    var oo=$(this).html()*3-3
  $('.hi').removeClass('active_page')

    $(this).addClass('active_page')

 $.post('action.php',{

        page:oo
    

    },function (res) {

        $('.tpich').html(res)

    })

})
$('.yes').prop('checked',true)


$('.type').click(function(){
 var aa=$(this).attr('data-name')
    // alert(aa)
    $('.portfolio').hide(500)
    $('.'+aa).show(500)

    if( aa=='all'){
    $('.portfolio').show(500)

    }


})

