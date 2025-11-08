//HIDING AND SHOWING OTHER AUTHENTICATION FORMS

const showResetPasswordForm = () => {
        document.getElementById("login").style.display = 'none'
        document.getElementById("recoverUsername").style.display = 'none'
        document.getElementById("resetPassword").style.display = 'block'
        document.getElementById("questionform").style.display = 'none'
        document.getElementById("accountTypeForm").style.display = 'none'
        document.getElementById("accountForm").style.display = 'none'
        document.getElementById("otpForm").style.display = 'none'
}
const showRecoverUsernameForm = () => {
    document.getElementById("login").style.display = 'none'
    document.getElementById("resetPassword").style.display = 'none'
    document.getElementById("recoverUsername").style.display = 'block'
    document.getElementById("questionform").style.display = 'none'
    document.getElementById("accountTypeForm").style.display = 'none'
    document.getElementById("accountForm").style.display = 'none'
    document.getElementById("otpForm").style.display = 'none'   
}
const showLoginForm = () => {
    document.getElementById("resetPassword").style.display = 'none'
    document.getElementById("recoverUsername").style.display = 'none'
    document.getElementById("login").style.display = 'block'
    document.getElementById("questionform").style.display = 'none'
    document.getElementById("accountTypeForm").style.display = 'none'
    document.getElementById("accountForm").style.display = 'none'
    document.getElementById("otpForm").style.display = 'none'
}
const showQuestionForm = () => {
    document.getElementById("resetPassword").style.display = 'none'
    document.getElementById("recoverUsername").style.display = 'none'
    document.getElementById("login").style.display = 'none'
    document.getElementById("questionform").style.display = 'block'
    document.getElementById("accountTypeForm").style.display = 'none'
    document.getElementById("accountForm").style.display = 'none'
    document.getElementById("otpForm").style.display = 'none'
}

const showAccountTypeForm = () => {
    alert("You are about to be redirected to apply for Sole Signatory Onboarding, if you're not a Sole Signatory Customer, kindly cancel the request by returning back to the Login Page after redirection");
    document.location.href = "../Onboarding/ValidateAccount?typ=SoleSignatory";

    //document.getElementById("resetPassword").style.display = 'none'
    //document.getElementById("recoverUsername").style.display = 'none'
    //document.getElementById("login").style.display = 'none'
    //document.getElementById("questionform").style.display = 'none'
    //document.getElementById("accountTypeForm").style.display = 'block'
    //document.getElementById("accountForm").style.display = 'none'
    //document.getElementById("otpForm").style.display = 'none'
}

const showAccountForm = () => {
    document.getElementById("resetPassword").style.display = 'none'
    document.getElementById("recoverUsername").style.display = 'none'
    document.getElementById("login").style.display = 'none'
    document.getElementById("questionform").style.display = 'none'
    document.getElementById("accountTypeForm").style.display = 'none'
    document.getElementById("accountForm").style.display = 'block'
    document.getElementById("otpForm").style.display = 'none'  
}


const showOTPForm = () => {
    document.getElementById("resetPassword").style.display = 'none'
    document.getElementById("recoverUsername").style.display = 'none'
    document.getElementById("login").style.display = 'none'
    document.getElementById("questionform").style.display = 'none'
    document.getElementById("accountTypeForm").style.display = 'none'
    document.getElementById("accountForm").style.display = 'none'
    document.getElementById("otpForm").style.display = 'block'
}

