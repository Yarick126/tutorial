function validateForm(){
    const name = document.getElementsByName('name');
    const email = document.getElementsByName('email');
    const password = document.getElementsByName('password');
    const repeatPassword = document.getElementsByName('repeatPassword');
    if(name[0].value = ''){
        document.getElementsByName('nameError')[0].style.display = 'block';
        return false;
    }
    if(email[0].value = ''){
        document.getElementsByName('emailError')[0].style.display = 'block';
        return false;
    }
    if(password[0].value = ''){
        document.getElementsByName('passwordError')[0].style.display = 'block';
        return false;
    }
    if(repeatPassword[0].value = ''){
        document.getElementsByName('repeatPasswordError')[0].style.display = 'block';
        return false;
    }
    
}