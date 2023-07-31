//Get modal element
var modal = document.getElementById('simplemodal');
//Get open modal button
var modalbtn = document.getElementById('modalbtn');
//Get close button
var closebtn = document.getElementsByClassName('closebtn')[0];
//listening for  open click
modalbtn.addEventListener('click', openmodal);
//listen for a close click
closebtn.addEventListener('click', closemodal);
//listen for outside click
window.addEventListener('click', outsideclick);
//function to open modal
function openmodal() {
    modal.style.display = 'block';
}

//function to close modal
function closemodal() {
    modal.style.display = 'none';
}


//function to close modal if outside click
function outsideclick(e) {
    if (e.target == modal) {
        modal.style.display = 'none';
    }
}

/*var searchkey =document.getElementsByClassName('search-key')[0];
var searchcontainer=document.getElementsByClassName('search-container')[0];
 searchkey.addEventListener('click',search)
function search(){
    searchcontainer=toggleClass;
}*/
$(function () {
    $('.search-key').on('click', function () {
        $('.search-container').toggleClass('active');
    })
})


$(function () {
    $('.share-toggle').on('click', function () {
        $('.share-toggle').toggleClass('active')
        $('ul').toggleClass('active')
    })
})

/*(fuction(){
 var link,
 
 toggleScrollToTopLink =function(){
    
    if($("body").scrollTop() >0 || $("html").scrollTop() > 0){
        link.FadeIn(400);
    }
    else{link.FadeOut(400);
        }
};
$(document).ready(function){
    link= $(".scroll-to-top-link");
    $(window).Scroll(toggleScrollToTopLink);
    toggleScrollToToplink();
    
    link.on("click",fumction(){
            $("body").animate({Scroll:0});
            $("html").animate({Scroll:0});
            });
    
});
})(); */
