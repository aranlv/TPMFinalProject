const teamName = document.getElementById("teamName");
const password = document.getElementById("password");
const form = document.querySelector("form");
const nameErrorMessage = document.getElementById("nameErrorMessage");
const passwordErrorMessage = document.getElementById("passwordErrorMessage");

form.addEventListener("submit", (e) =>{
    const errors = [];

    if(teamName.value.trim()===""){
        errors.push("Team name required!")
    }

    if(password.value.length<4){
        errors.push("Invalid password")
    }
    if(errors.length>0){
        e.preventDefault();
        if(errors.includes("Team name required!")){
            nameErrorMessage.removeAttribute('hidden');
            nameErrorMessage.textContent = "Team name required."
        }

        if(errors.includes("Invalid password")){
            passwordErrorMessage.removeAttribute('hidden');
            passwordErrorMessage.textContent = "Password has to be at least 4 characters long."
        }
        
    }
})



