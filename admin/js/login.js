function showLogin() {
    const signup = document.getElementById("signup");
    const login = document.getElementById("login");
    if(signup.style.display == "none"){
        signup.style.display = "block";
        login.style.display = "none";
    }
    else if(login.style.display == "none"){
        signup.style.display = "none";
        login.style.display = "block";
    }
    
} 