$('#contact_form').submit(function (e) {

var error = false;
var $email = $('#email');
var $tel = $('#tel');
var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
var phoneno = /^\d{10}$/igm;    
    if ($('#name').val() == "") {
        alert("Pārbaudiet vārdu!");
        error = true;
    }

    
    if ($('#sname').val() == "") {
        alert("Pārbaudiet uzvārdu!");
        error = true;
    }

    
    if ($tel.val() == !phoneno.test($tel.val())){
        alert("Pārbaudiet telefona nummuru!");
        error = true;
    }

    
    if ($email.val() == !re.test($email.val())){
        alert("Pārbaudiet ēpastu!");
        error = true;
    }

    
    if ($('#DropDown1').val() == "Interesējušais jautājums?") {
        alert("Norārdiet Interesējpšo jautājumu!");
        error = true;
    }

    if ($('#DropDown2').val() == "Izvēlaties valsti!") {
        alert("Izvēlaties valsi!");
        error = true;
    }
            
    
    if ($('input[type=radio]:checked').size() == 0) {
        alert("Izvēlaties dzimumu!!!");
        error = true;
    }
    
    if ($('#comment').val() == "") {
        alert("Nav atstāta ziņa!");
        error = true;
    }

    
    $("input:text:visible:first").focus();

    if (error) {
        e.preventDefault();        
    }
});