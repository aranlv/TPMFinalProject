const nextButton = document.querySelectorAll('.button-next');
const progress = document.getElementById('progress');
const formSteps = document.querySelectorAll('.form-step');
const progressSteps=document.querySelectorAll('.progress-step');
const regisPassword = document.getElementById("register-password");
const passwordError = document.getElementById("password-error");

let formStepsNum = 0;

nextButton.forEach(button => {
    button.addEventListener('click', (e) => {
        const errors = validatePassword();
        if (errors.length > 0) {
            e.preventDefault();
            passwordError.removeAttribute('hidden');
            passwordError.textContent = errors.join(", ");
        }

        else{
        formStepsNum++;
        updateFormSteps();
        updateProgressBar();
        }
    });
});

function updateFormSteps() {
    formSteps.forEach(formStep => {
        formStep.classList.contains('active')&&
        formStep.classList.remove('active')
    })
    formSteps[formStepsNum].classList.add('active');
}

function updateProgressBar(){
    progressSteps.forEach((progressStep,idx)=>{
        if(idx<formStepsNum+1){
            progressStep.classList.add('active')
        } else{
            progressStep.classList.remove('active')
        }
    })

    const progressActive=document.querySelectorAll('.progress-step.active')

    progress.style.width=(progressActive.length-1)/(progressSteps.length-1)*100+'%'
}


function changeColor(e){
    const btn = document.getElementById(e);
    document.getElementById(e).style.backgroundColor = "#8591FF";
    const btn2 = document.getElementsByName('btn');
    for (let idx = 0; idx < btn2.length; idx++) {
        var id = btn2[idx].getAttribute( 'id' );
        if(id != e){
            document.getElementById(id).style.backgroundColor = "#dcdcdc";
        }
    }

    // Update the hidden input value based on the button clicked
    document.getElementById('isBinusianInput').value = (e === 'btnBinusian') ? '1' : '0';
}
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" activate", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " activate";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
 

function validatePassword() {
    const errors = [];
    const passwordValue = regisPassword.value.trim();

    if (passwordValue === "") {
        errors.push("Password tidak boleh kosong.");
    } else if (passwordValue.length < 8) {
        errors.push("Minimal panjang 8.");
    } else if (!/[A-Z]/.test(passwordValue)) {
        errors.push("Harus ada huruf besar.");
    } else if (!/[a-z]/.test(passwordValue)) {
        errors.push("Password must contain at least one lowercase letter.");
    } else if (!/\d/.test(passwordValue)) {
        errors.push("Harus ada angka.");
    } else if (!/[^A-Za-z0-9]/.test(passwordValue)) {
        errors.push("Harus ada tanda.");
    }

    return errors;
}

function validateConfirmPassword() {
    const errors = [];
    const passwordValue = regisPassword.value.trim();
    const confirmPasswordValue = regisConfirmPassword.value.trim();

    if (confirmPasswordValue === "") {
        errors.push("Confirm Password tidak boleh kosong.");
    } else if (confirmPasswordValue !== passwordValue) {
        errors.push("Confirm Password harus sama dengan Password.");
    }

    return errors;
}

