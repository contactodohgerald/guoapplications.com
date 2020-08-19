async function registerUser() {

    let firstName, lastName, email, adminType, phone, country, password, passwordConfirmation, Phone, code;

    firstName = $('.first_name').val();
    lastName = $('.last_name').val();
    email = $('.email').val();
    phone = $('.phone').val();
    country =  $('.country').val();
    password = $('.password').val();
    passwordConfirmation = $('.password_confirmation').val();
    adminType = 'user';

    let inputValue = [firstName, lastName, email, phone, country, password, passwordConfirmation];
    let fieldValue = ['First Name', 'Last Name', 'Email', 'Phone', 'Country', 'Password', 'Confirm Password'];
    let classNames = ['first_name', 'last_name', 'email', 'phone', 'country', 'password', 'password_confirmation'];

    let errorHold = {};
    for (let i in inputValue){
        let er = [];
        if (Validator.emptyField(inputValue[i], 'empty') === false){
            er.push("<p class='f-size text-center'><span class='text-danger'>*</span>The "+fieldValue[i]+" Field is required!</p>");
            errorHold[classNames[i]] = er;
            Validator.errorChecker = 1;
        }
    }

    if (Validator.emptyField(email, 'empty') === true){
        if (Validator.invalidEmail(email, 'email_validation') === false){
            let error_array = [];
            error_array.push(`<p class='f-size text-center'><span class='text-danger'>*</span>${Messages.emailMessage}</p>`);
            errorHold['email'] = error_array;
            Validator.errorChecker = 1;
        }
    }


    if (Validator.emptyField(password, 'empty') === true){
        if (Validator.equalPassword(password, 'password_confirmation', passwordConfirmation) === false){
            let errorA = [];
            errorA.push(`<p class='f-size text-center'><span class='text-danger'>*</span>${Messages.passwordMessage}</p>`);
            errorHold['password' && 'password_confirmation'] = errorA;
            Validator.errorChecker = 1;
        }
    }

    if(Validator.errorChecker === 1){
        NeededModules.reportError(errorHold);
        return;
    }

    let phoneCode = country.split('/')[0];

    let countryCode = country.split('/')[1];

    if (phone.charAt(0) == 0){
        Phone = phone.substring(1);
        code = `${phoneCode}${Phone}`;
    }else {
        code = `${phoneCode}${phone}`;
    }

    NeededModules.bringOutLoader();
    let thePostData = await NeededModules.postRequest(Routes.baseUrl+'/api/register', {first_name:firstName, last_name:lastName, phone:code, country:countryCode, email:email, password:password, password_confirmation:passwordConfirmation, user_type:adminType});
    let {status, error_statement, success_message} = thePostData;

    if (status === false) {
        NeededModules.removeLoader();
        NeededModules.handleErrorStatement(error_statement);
    }

    if (status === true){
        NeededModules.removeLoader();
        NeededModules.showSuccessToaster(success_message, 'success');
        setTimeout(function () {
            window.location.href = Routes.emailVerify+`?email=${email}`;
        }, 2000)
    }
}

async function verifyEmails(){
    let token, email;
    email = NeededModules.getTheUniqueKeyFromTheUrl();
    token = $('.email_token').val();

    let errorHold = {}, er = [];
    if (Validator.emptyField(token, 'empty') === false){
        er.push("<p class='f-size text-center'><span class='text-danger'>*</span>The Token Field is required!</p>");
        errorHold['email_token'] = er;
        Validator.errorChecker = 1;
    }

    if(Validator.errorChecker === 1){
        NeededModules.reportError(errorHold);
        return;
    }

    NeededModules.bringOutLoader();
    let thePostData = await NeededModules.postRequest(Routes.baseUrl+'/api/verifyEmailToken/'+email, {email_token:token});
    let {status, error_statement, success_message} = thePostData;

    if (status === false) {
        NeededModules.removeLoader();
        NeededModules.handleErrorStatement(error_statement);
    }

    if (status === true){
        NeededModules.removeLoader();
        NeededModules.showSuccessToaster(success_message, 'success');
        setTimeout(function () {
            window.location.href = Routes.loginUrl;
        }, 2000)
    }
}

async function loginUser(){
    let email, password;

    email = $('.email').val();
    password = $('.password').val();

    let inputValue = [email, password];
    let fieldValue = ['Email', 'Password'];
    let className = ['email', 'password'];

    let errorHold = {};
    for (let i in inputValue){
        if (Validator.emptyField(inputValue[i], 'empty') === false){
            let err = [];
            err.push("<p class='f-size text-center'><span class='text-danger'>*</span>The "+fieldValue[i]+" Field is required!</p>");
            errorHold[className[i]] = err;
            Validator.errorChecker = 1;
        }
    }

    if (Validator.emptyField(email, 'empty') === true){
        if (Validator.invalidEmail(email, 'email_validation') === false){
            let error_array = [];
            error_array.push(`<p class='f-size text-center'><span class='text-danger'>*</span>${Messages.emailMessage}</p>`);
            errorHold['email'] = error_array;
            Validator.errorChecker = 1;
        }
    }

    if(Validator.errorChecker === 1){
        NeededModules.reportError(errorHold);
        return;
    }


    NeededModules.bringOutLoader();
    let thePostData = await NeededModules.postRequest(Routes.baseUrl+'/api/login', {email:email, password:password});
    let {status, error_statement, success_message, return_data} = thePostData;
    if (status === false) {
        NeededModules.removeLoader();
        NeededModules.handleErrorStatement(error_statement);
    }

    if (status === true){
        NeededModules.removeLoader();

        let {token} = return_data; let {original} = token; let {token:user_token} = original;

        NeededModules.showSuccessToaster(success_message,'success');
        setTimeout(function () {
            window.location.href = `${Routes.profileUrl}`;
        }, 2000)
    }
}
