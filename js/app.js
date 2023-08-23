const submitButton = document.querySelector("#submit");
const loginButton = document.querySelector("#login");
const addCartButton = document.querySelector("#addCartButton");
const checkoutButton = document.querySelector("#checkoutButton");
const nameInput = document.querySelector("#userName");
const emailInput = document.querySelector("#userEmail");
const passInput = document.querySelector("#userPass");
const nameErrorDiv = document.querySelector("#nameError");
const emailErrorDiv = document.querySelector("#emailError");
const passErrorDiv = document.querySelector("#passError");
const messageDiv = document.querySelector("#messageDiv");
const messagesDiv = document.querySelector("#messages");
const messagesDivText = document.querySelector(".messageText");
const loginEmailErrorDiv = document.querySelector("#loginEmailError");
const loginPassErrorDiv = document.querySelector("#loginPassError");
const loginEmail = document.querySelector("#loginEmail");
const loginPass = document.querySelector("#loginPass");

if(checkoutButton){
    checkoutButton.addEventListener("click", async ()=>{
        alert("Sorry! This button does NOT working");
    });
}
if(addCartButton){
    addCartButton.addEventListener("click", async ()=>{
        const data = new FormData(addCartForm);
        const response = await fetch("backend/add_cart.php", {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
            },
            body: data,
        });

        console.log(response);

        const result = await response.json();
        if (result.status === "success") {
            messagesDivText.innerHTML = result.reason;
            messagesDivText.style.color = "#000000";
            messagesDiv.style.left = "50%";
            messagesDiv.style.transform = "translate(-50%, -50%)";
            messagesDiv.style.display = "flex";
        } else{
            messagesDivText.innerHTML = result.reason;
            messagesDiv.style.background = "#FF0000";
            messagesDiv.style.display = "flex";
        } 
    });
}

if(loginButton){
    loginButton.addEventListener("click", async ()=>{
        if (!validateEmail(loginEmail.value)){
            loginEmailErrorDiv.innerHTML = "Please provide a correct email address!";
            loginEmailErrorDiv.style.display = "block";
        }
    
        if (!validatePass(loginPass.value)){
            loginPassErrorDiv.innerHTML = "Please provide min 8 character password!";
            loginPassErrorDiv.style.display = "block";
        }

        if(validateEmail(loginEmail.value) && validatePass(loginPass.value)){
            const data = new FormData(loginForm);
            const response = await fetch("backend/userHandler.php", {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                },
                body: data,
            });

            const result = await response.json();
            if (result.status === "success") {
                window.location.replace(`index.php`);
            } else{
                messageDiv.innerHTML = result.reason;
                messageDiv.style.display = "block";
            }  
        }
    });
}

if(submitButton){
    submitButton.addEventListener("click", async ()=>{
        nameErrorDiv.style.display = "none";
        emailErrorDiv.style.display = "none";
        passErrorDiv.style.display = "none";

        if (!validateName(nameInput.value)){
            console.log("dfdf");
            nameErrorDiv.innerHTML = "Please provide a username!";
            nameErrorDiv.style.display = "block";
        }
        if (!validateEmail(emailInput.value)){
            console.log("dfdf");
            emailErrorDiv.innerHTML = "Please provide a correct email address!";
            emailErrorDiv.style.display = "block";
        }
        if (!validatePass(passInput.value)){
            console.log("dfdf");
            passErrorDiv.innerHTML = "Please provide min 8 character password!";
            passErrorDiv.style.display = "block";
        }

        if (validateName(nameInput.value) && validateEmail(emailInput.value) && validatePass(passInput.value)){
            const data = new FormData(registerForm);
            const response = await fetch("backend/userHandler.php", {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                },
                body: data,
            });

            const result = await response.json();
            if (result.status === "success") {
                window.location.replace(`registered.php`);
            } else{
                messageDiv.innerHTML = result.reason;
                messageDiv.style.display = "block";
            } 
        }
    });
}
const validateName = function (name) {
    if(name.length >= 2){
        return true;
    }else{
        return false;
    }
}

const validateEmail = function (email) {
    const emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,6})?$/;
    let res = emailReg.test( email );
    if (res && (email.length > 0))
        return true;
    else
        return false;
}

const validatePass = function (pass) {
    if(pass.length >= 8){
        return true;
    }else{
        return false;
    }
}