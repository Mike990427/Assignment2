var elUsername = document.getElementById('user');
var erru = document.getElementById('erru');

function checkUsernm() {
    if(elUsername.value.length < 7) {
        erru.innerHTML = "<p> 7 character minimun</p>";
        $('#subbtn').prop('disabled',true);
    } else {
        erru.innerHTML = ''; // clear error message
        $('#subbtn').prop('disabled',false);
    }
}

elUsername.addEventListener('blur', checkUsernm, false);