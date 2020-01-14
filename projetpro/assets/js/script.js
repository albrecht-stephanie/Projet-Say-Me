/*verification de formulaire*/
$(function(){
    $('form').on('submit', function(event){
    event.preventDefault();
var lastnName = $('#lastName').val();
var firtsName = $('#firstName').val();
var birthDate = $('#birhtDate').val();
var mail = $('#mail').val();

//Regex NOM
var checkName = /^[A-Z][a-zéèçàïîêëôöûü]+([ -][A-Z][a-zéèçàïîêëôöûü]+)?$/.test(lastName);
console.log(checkName);
//Regex Prénom
var checkFirstName = /^[A-Z][a-zéèçàïîêëôöûü]+([ -][A-Z][a-zéèçàïîêëôöûü]+)?$/.test(firstName);
console.log(checkFirstName);
//Regex date anniversaire
var checkBirthDate = /^([0-9]{4})-([0-9]{2})-([0-9]{2})$/.test(birthDate);
//Regex Mail
console.log(checkBirthDate);
var checkMail = /^([a-zA-Z0-9_.+-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;

if(!checkName.test(lastName)){//verif nom + message erreur
    isValid = false;
    var span = $('<span></span>');
    span.addClass('text-danger');
    span.text('Veuillez entrer un nom valide');
    $('#lastname').after(span);
}
if(!checkFirstName.test(firstName)){//verif prénom + message erreur
    isValid = false;
    var span = $('<span></span>');
    span.addClass('text-danger');
    span.text('Veuillez entrer un prénom valide');
    $('#firstName').after(span);
}
if(!checkMail.test(mail)){//verif mail + message erreur
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
 
     if($('#password').val() != '' && $('#confirmPassword').val() != '' && $('#password').val() != $('#confirmPassword').val())
            {
               $('#password').removeClass().addClass('alert alert-error').html('Les mots de passe ne correspondent pas');
            return false;
           }
        //Regex mot de passe et message erreur
        // Doit contenir des majuscules, des minuscules et des chiffres
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g")
        // Doit contenir soit des majuscules et des minuscules soit des minuscules et des chiffres
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        // regex mot de passe de minimum 6 caractères
        var okRegex = new RegExp("(?=.{6,}).*", "g");
 
        if (okRegex.test($(this).val()) === false) {
            // non respect du nombre de caractère
               $('#password').removeClass().addClass('alert alert-error').html('Le mot de passe doit comporter 6 caractères..');
        } else if (strongRegex.test($(this).val())) {
            // si conforme au regex
            $('#password').removeClass().addClass('alert alert-success').html('Bon mot de passe!');
        } else if (mediumRegex.test($(this).val())) {
            // niveau moyen de sécurité
            $('#password').removeClass().addClass('alert alert-info').html('Rendez votre mot de passe plus fort avec plus de lettres majuscules, plus de chiffres et de caractères spéciaux!');
        } else {
            // niveau failble de sécurité
            $('#password').removeClass().addClass('alert alert-error').html('Mot de passe faible, essayez d’utiliser des chiffres et des lettres majuscules.');
        }
        return true;
    })
}

    