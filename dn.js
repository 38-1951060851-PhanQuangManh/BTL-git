var login = document.querySelector('.login')
var model = document.querySelector('.model')
var iconclose = document.querySelector('.container9 i')

function toggleModal(){
    model.classList.toggle('hide')
}

login.addEventListener('click',toggleModal)
iconclose.addEventListener('click',toggleModal)

//ket thu dang nhap

// var signup = document.querySelector('.signup')
// var modol = document.querySelector('.modol')
// var iclose = document.querySelector('.container10 i')

// function toggleModal(){
//     modol.classList.toggle('hibe')
// }

// signup.addEventListener('click',toggleModal)
// iclose.addEventListener('click',toggleModal)

//ket thu dang ky

 var email = document.querySelector('#email')
 var password = document.querySelector('#password')
 var form = document.querySelector('form')

 function showError(input, message){
     let parent = input.parentElement;
     let small = parent.querySelector('small')
     parent.classList.add('error')
     small.innerText = message 
 }  

 function showSuccess(input){
    let parent = input.parentElement;
    let small = parent.querySelector('small')
    parent.classList.remove('error')
    small.innerText = ''
 }

 function checkEmptyError(listInput){
     let isEmptyError = false;
     listInput.forEach(input => {
         input.value = input.value.trim()

         if(!input.value){
            isEmptyError = true;
             showError(input, 'cannot be left blank')
         }else{
             showSuccess(input)
         }

     });

     return isEmptyError

    }

 function checkEmailError(input){
    const regexEmail =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    input.value = input.value.trim()

    let isEmailError = !regexEmail.test(input.value)
    if(regexEmail.test(input.value)){
       showSuccess(input)
    }else{
        showError(input, 'Email Invalid')
    }

    return isEmailError

}

form.addEventListener('submit',function(e){
    e.preventDefault()

    let isEmptyError = checkEmptyError([email,password])
     let isEmailError = checkEmailError(email)
})

 


// var signup = document.querySelector('.signup')
//  var modol = document.querySelector('.modol')
// var iclose = document.querySelector('.container10 i')

// function toggleModal(){
//     modol.classList.toggle('hibe')
// }

// signup.addEventListener('click',toggleModal)
// iclose.addEventListener('click',toggleModal)
