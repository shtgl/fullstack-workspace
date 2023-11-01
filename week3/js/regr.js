var u_name = document.myForm.u_name;
var u_add = document.myForm.u_add;
var u_cc = document.myForm.u_cc;
var u_phno = document.myForm.u_phno;
var u_email = document.myForm.u_email;
var u_bd = document.myForm.u_bd;
var u_skill = document.myForm.u_skill;
var u_school = document.myForm.u_school;
var u_int = document.myForm.u_int;

function validate() {
  let messages = []
  if(u_name.value) {
    u_name.classList.remove("is-invalid");
    u_name.classList.add("is-valid");
  }
  else{
    u_name.classList.remove("is-valid");
    u_name.classList.add("is-invalid");
  }

  if(u_add.value) {
    u_add.classList.remove("is-invalid");
    u_add.classList.add("is-valid");
  }
  else{
    u_add.classList.remove("is-valid");
    u_add.classList.add("is-invalid");
  }

  if(u_cc.value) {
    u_cc.classList.remove("is-invalid");
    u_cc.classList.add("is-valid");
  }
  else{
    u_cc.classList.remove("is-valid");
    u_cc.classList.add("is-invalid");
  }

  if(u_phno.value) {
    u_phno.classList.remove("is-invalid");
    u_phno.classList.add("is-valid");
  }
  else{
    u_phno.classList.remove("is-valid");
    u_phno.classList.add("is-invalid");
  }

  if(u_email.value) {
    u_email.classList.remove("is-invalid");
    u_email.classList.add("is-valid");
  }
  else{
    u_email.classList.remove("is-valid");
    u_email.classList.add("is-invalid");
  }

  if(u_skill.value) {
    u_skill.classList.remove("is-invalid");
    u_skill.classList.add("is-valid");
  }
  else{
    u_skill.classList.remove("is-valid");
    u_skill.classList.add("is-invalid");
  }

  if(u_skill.value) {
    u_skill.classList.remove("is-invalid");
    u_skill.classList.add("is-valid");
  }
  else{
    u_skill.classList.remove("is-valid");
    u_skill.classList.add("is-invalid");
  }

  if(u_skill.value) {
    u_skill.classList.remove("is-invalid");
    u_skill.classList.add("is-valid");
  }
  else{
    u_skill.classList.remove("is-valid");
    u_skill.classList.add("is-invalid");
  }

  if(u_school.value) {
    u_school.classList.remove("is-invalid");
    u_school.classList.add("is-valid");
  }
  else{
    u_school.classList.remove("is-valid");
    u_school.classList.add("is-invalid");
  }

  if(u_int.value) {
    u_int.classList.remove("is-invalid");
    u_int.classList.add("is-valid");
  }
  else{
    u_int.classList.remove("is-valid");
    u_int.classList.add("is-invalid");
  }
}

$(document).ready(function() {
  $('#btn1').click(function() {
    $('#btn1').css('background-color','red');
  });
});
