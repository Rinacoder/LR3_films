var popup_e = document.getElementById('popup_e');
var popup_r = document.getElementById('popup_r');
var btn_e = document.getElementById('popup_e_b');
var btn_r = document.getElementById('popup_r_b');
var btn_einr = document.getElementById('popup__entrance');
var btn_rine = document.getElementById('popup__registration');
var close_e = document.getElementById('popup__close_e');
var close_r = document.getElementById('popup__close_r');

btn_e.onclick = function(){
  popup_e.style.display = "block";
}

btn_r.onclick = function(){
  popup_r.style.display = "block";
}

btn_einr.onclick = function(){
  popup_e.style.display = "block";
  popup_r.style.display = "none";
}

btn_rine.onclick = function(){
  popup_r.style.display = "block";
  popup_e.style.display = "none";
}

close_r.onclick = function(){
  popup_r.style.display = "none";
}

close_e.onclick = function(){
  popup_e.style.display = "none";
}


