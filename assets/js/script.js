/*verification de formulaire*/
$(function(){
    $('form').on('submit', function(event){
    event.preventDefault();
var name = $('#name').val();
var firtsName = $('#firstName').val();
var birthDate = $('#birhtDate').val();
var mail = $('#mail').val();

//Verification NOM
var checkName = /^[A-Z][a-zéèçàïîêëôöûü]+([ -][A-Z][a-zéèçàïîêëôöûü]+)?$/.test(name);
console.log(checkName);
//Vérification Prénom
var checkFirstName = /^[A-Z][a-zéèçàïîêëôöûü]+([ -][A-Z][a-zéèçàïîêëôöûü]+)?$/.test(firstName);
console.log(checkFirstName);
//Verification de la date anniversaire
var checkBirthDate = /^([0-9]{4})-([0-9]{2})-([0-9]{2})$/.test(birthDate);
//Verification du Mail
console.log(checkBirthDate);
var checkMail = /^([a-zA-Z0-9_.+-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;

if(!checkName.test(name)){
    isValid = false;
    var span = $('<span></span>');
    span.addClass('text-danger');
    span.text('Veuillez entrer un nom valide');
    $('#name').after(span);
}
if(!checkFirstName.test(firstName)){
    isValid = false;
    var span = $('<span></span>');
    span.addClass('text-danger');
    span.text('Veuillez entrer un prénom valide');
    $('#firstName').after(span);
}
if(!checkMail.test(mail)){
    isValid = false;
    var span = $('<span></span>');
    span.addClass('text-danger');
    span.text('Veuillez entrer un mail valide');
    $('#mail').after(span);
}
if(!isValid){
    event.preventDefault();
    
$(document).ready(function() {
    $('#inputPassword, #inputConfirmPassword').on('keyup', function(e) {
 
     if($('#inputPassword').val() != '' && $('#inputConfirmPassword').val() != '' && $('#inputPassword').val() != $('#inputConfirmPassword').val())
            {
               $('#inputPassword').removeClass().addClass('alert alert-error').html('Les mots de passe ne correspondent pas');
 
            return false;
           }
 
        // Doit contenir des majuscules, des chiffres et des minuscules
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
 
        // Doit contenir soit des majuscules et des minuscules soit des minuscules et des chiffres
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
 
        // Doit faire au minimum six caractères
        var okRegex = new RegExp("(?=.{6,}).*", "g");
 
        if (okRegex.test($(this).val()) === false) {
            // If ok regex doesn't match the password
               $('#inputPassword').removeClass().addClass('alert alert-error').html('Le mot de passe doit comporter 6 caractères..');
 
        } else if (strongRegex.test($(this).val())) {
            // If reg ex matches strong password
            $('#inputPassword').removeClass().addClass('alert alert-success').html('Bon mot de passe!');
        } else if (mediumRegex.test($(this).val())) {
            // If medium password matches the reg ex
            $('#inputPassword').removeClass().addClass('alert alert-info').html('Rendez votre mot de passe plus fort avec plus de lettres majuscules, plus de chiffres et de caractères spéciaux!');
        } else {
            // If password is ok
            $('#inputPassword').removeClass().addClass('alert alert-error').html('Mot de passe faible, essayez d’utiliser des chiffres et des lettres majuscules.');
        }
 
        return true;
    });

    