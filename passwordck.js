var elPassword = document.getElementById('passwd');
var errp = document.getElementById('errp');

function checkPasswd() {
    if(elPassword.value.length < 7) {
        errp.innerHTML = "<p> 7 character minimun</p>";
        $('#subbtn').prop('disabled',true);
    } 
    else{
        if((elPassword.value.search(/[A-Z}]/)<0) || (elPassword.value.search(/[0-9]/) < 0) ){
            errp.innerHTML = "<p> Your password must contain at least one uppercase letter and a number </p>";
            $('#subbtn').prop('disabled',true);
        }

        else {
            errp.innerHTML = ''; // clear error message
            $('#subbtn').prop('disabled',false);
        }
    }
}



elPassword.addEventListener('blur', checkPasswd, false);