function checkPassword(){
    let password= document.getElementById("password").value;
    let cnfrmPassword= document.getElementById("cnfrm-password").value;

    console.log(password,cnfrmPassword);

    let message= document.getElementById("message");

    if (password.lenght!=0) {
        if (password==cnfrmPassword) {
            message.textContent="Password Match";
            message.style.backgroundColor="#3ae734";
        
            
        }
        else{
            message.textContent="Password doesn't match";
            message.style.backgroundColor="#ff4d4d";
        }
    }else{
        alert("Password can't be empty!")
        message.textContent="";

    }
}