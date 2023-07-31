/*//Get modal element
var modal = document.getElementsById('simplemodal');
//Get open modal button
var modalbtn = document.activeElementgetElementById('modalbtn');
//Get close button
var closebtn = document.getElementsByClassName('closebtn')[0];
//listening for  open click
modalbtn.addEventListener('click', openmodal);

//function to open modal
function openmodal(){
modal.style.display = 'block';
}*/

//Get modal element
var modal=document.getElementById('simplemodal');
//Get open modal button
var modalbtn = document.getElementById('modalbtn');
//Get close button
var closebtn = document.getElementsByClassName('closebtn')[0];
//listening for  open click
modalbtn.addEventListener('click', openmodal);
//listen for a close click
closebtn.addEventListener('click', closemodal);
//listen for outside click
window.addEventListener('click',outsideclick);
//function to open modal
function openmodal(){
modal.style.display = 'block';
}

//function to close modal
function closemodal(){
modal.style.display = 'none';
}


//function to close modal if outside click
function outsideclick(e){
    if(e.target == modal){
modal.style.display = 'none';
 }
}
