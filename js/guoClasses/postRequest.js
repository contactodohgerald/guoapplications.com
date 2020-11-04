function onSubmit(token) {
    console.log(token);
}

function onLoad() {
    registerUser();
}

async function registerUser() {

    let firstName, lastName, email, adminType, phone, country, password, passwordConfirmation, Phone, code, referred_unique_id;

    firstName = $('.first_name').val();
    lastName = $('.last_name').val();
    email = $('.email').val();
    phone = $('.phone').val();
    country =  $('.country').val();
    password = $('.password').val();
    passwordConfirmation = $('.password_confirmation').val();
    referred_unique_id = $('.referred_unique_id').val();
    adminType = 'user';

    let validatorDetails = new validatorClass();
    //['value|className|fieldName|type', 'value|className|fieldName|type1,type2']
    if(! await validatorDetails.callValidator([
        firstName+'|first_name|First Name|empty',
        lastName+'|last_name|Last Name|empty',
        phone+'|phone|Phone Number|empty',
        email+'|email|Email|empty,email',
        password+'|password|Password|empty',
        passwordConfirmation+'|password_confirmation|Confirm Password|empty',
        password+':'+passwordConfirmation+'|password_confirmation|Confirm|password_match_validation',
    ])){
        validatorDetails.handleErrorStatement(validatorDetails.errors);
        return;
    }else {
        grecaptcha.execute();
    }

    let phoneCode = country.split('/')[0];

    let countryCode = country.split('/')[1];

    if (phone.charAt(0) == 0){
        Phone = phone.substring(1);
        code = `${phoneCode}${Phone}`;
    }else {
        code = `${phoneCode}${phone}`;
    }

    grecaptcha.execute();
    NeededModules.disableButton();
    let thePostData = await NeededModules.postRequest(Routes.baseUrl+'/api/register',
        {first_name:firstName, last_name:lastName, phone:code, country:countryCode, email:email, password:password, password_confirmation:passwordConfirmation, referred_unique_id:referred_unique_id, user_type:adminType}
        );
    let {status, error_statement, success_message} = thePostData;

    if (status === false) {
        NeededModules.unDisableButton();
        validatorDetails.handleErrorStatement(error_statement);
        return ;
    }

    if (status === true){
        NeededModules.unDisableButton();
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

    let validatorDetails = new validatorClass();
    //['value|className|fieldName|type', 'value|className|fieldName|type1,type2']
    if(! await validatorDetails.callValidator([
        token+'|email_token|Token|empty,number',
    ])){
        validatorDetails.handleErrorStatement(validatorDetails.errors);
        return;
    }

    NeededModules.disableButton();
    let thePostData = await NeededModules.postRequest(Routes.baseUrl+'/api/verifyEmailToken/'+email, {email_token:token});
    let {status, error_statement, success_message} = thePostData;

    if (status === false) {
        NeededModules.unDisableButton();
        validatorDetails.handleErrorStatement(error_statement);
    }

    if (status === true){
        NeededModules.unDisableButton();
        NeededModules.showSuccessToaster(success_message, 'success');
        setTimeout(function () {
            window.location.href = Routes.loginUrl;
        }, 2000)
    }
}

async function resendToken(){
    let email;
    email = NeededModules.getTheUniqueKeyFromTheUrl();

    NeededModules.disableButton();
    let thePostData = await NeededModules.postRequest(Routes.baseUrl+'/api/resendEmailConfirmToken', {email:email});
    let {status, error_statement, success_message} = thePostData;

    if (status === false) {
        NeededModules.unDisableButton();
        NeededModules.handleErrorStatement(error_statement);
    }

    if (status === true){
        NeededModules.unDisableButton();
        NeededModules.showSuccessToaster(success_message, 'success');
        setTimeout(function () {
            window.location.href =  Routes.emailVerify+`?email=${email}`;
        }, 2000)
    }
}

async function loginUser(){
    let email, password;

    email = $('.email').val();
    password = $('.password').val();

    let validatorDetails = new validatorClass();
    //['value|className|fieldName|type', 'value|className|fieldName|type1,type2']
    if(! await validatorDetails.callValidator([
        email+'|email|Email|empty,email',
        password+'|password|Password|empty',
    ])){
        validatorDetails.handleErrorStatement(validatorDetails.errors);
        return;
    }

    NeededModules.disableButton();
    let thePostData = await NeededModules.postRequest(Routes.baseUrl+'/api/login', {email:email, password:password});
    let {status, error_statement, success_message, return_data} = thePostData;
    if (status === false) {
        NeededModules.unDisableButton();
        validatorDetails.handleErrorStatement(error_statement);
        return ;
    }

    if (status === true){
        NeededModules.unDisableButton();
        let {token} = return_data; let {original} = token; let {token:user_token} = original;

        let save_user_token = await NeededModules.postRequest('setSession.php',
            {
                api_token:user_token,
            });

        let result = JSON.parse(save_user_token);

        if(result['status'] === true){
            NeededModules.showSuccessToaster(success_message,'success');
            setTimeout(function () {
                window.location.href = `${Routes.profileUrl}`;
            }, 2000)
        }
    }
}

async function resetPassword_1(){
    let email;
    email = $('.email').val();

    let validatorDetails = new validatorClass();
    //['value|className|fieldName|type', 'value|className|fieldName|type1,type2']
    if(! await validatorDetails.callValidator([
        email+'|email|Email|empty,email',
    ])){
        validatorDetails.handleErrorStatement(validatorDetails.errors);
        return;
    }

    NeededModules.disableButton();
    let thePostData = await NeededModules.postRequest(Routes.baseUrl+'/api/getUserEmailForResetPassword', {email:email});
    let {status, error_statement, success_message} = thePostData;

    if (status === false) {
        NeededModules.unDisableButton();
        validatorDetails.handleErrorStatement(error_statement);
        return ;
    }

    if (status === true){
        NeededModules.unDisableButton();
        NeededModules.showSuccessToaster(success_message, 'success');
        setTimeout(function () {
            window.location.href = Routes.resetPassword_2+`?email=${email}`;
        }, 2000)
    }
}

async function resetPassword_2(){
    let token;
    token = $('.email_token').val();

    let validatorDetails = new validatorClass();
    //['value|className|fieldName|type', 'value|className|fieldName|type1,type2']
    if(! await validatorDetails.callValidator([
        token+'|email_token|Token|empty,number',
    ])){
        validatorDetails.handleErrorStatement(validatorDetails.errors);
        return;
    }

    NeededModules.disableButton();
    let thePostData = await NeededModules.postRequest(Routes.baseUrl+'/api/getUserTokenForResetPassword', {email_token:token});
    let {status, error_statement, success_message} = thePostData;

    if (status === false) {
        NeededModules.unDisableButton();
        validatorDetails.handleErrorStatement(error_statement);
        return ;
    }

    if (status === true){
        NeededModules.unDisableButton();
        NeededModules.showSuccessToaster(success_message, 'success');
        setTimeout(function () {
            window.location.href = Routes.resetPassword_3+`?email=${token}`;
        }, 2000)
    }
}

async function resetUsersPassword() {
    let password, confirm_password, token;

    token = NeededModules.getTheUniqueKeyFromTheUrl();
    password = $('.password').val();
    confirm_password = $('.password_confirmation').val();

    let validatorDetails = new validatorClass();
    //['value|className|fieldName|type', 'value|className|fieldName|type1,type2']
    if(! await validatorDetails.callValidator([
        password+'|password|Password|empty',
        confirm_password+'|password_confirmation|Confirm Password|empty',
        password+':'+confirm_password+'|password_confirmation|Confirm|password_match_validation',
    ])){
        validatorDetails.handleErrorStatement(validatorDetails.errors);
        return;
    }

    NeededModules.disableButton();
    let thePostData = await NeededModules.postRequest(Routes.baseUrl+'/api/resetUserPassword/', {password:password, password_confirmation:confirm_password, email_token:token});
    let {status, error_statement, success_message} = thePostData;

    if (status === false) {
        NeededModules.unDisableButton();
        validatorDetails.handleErrorStatement(error_statement);
        return ;
    }

    if (status === true){
        NeededModules.unDisableButton();
        NeededModules.showSuccessToaster(success_message, 'success');
        setTimeout(function () {
            window.location.href = Routes.loginUrl;
        }, 2000)
    }
}

async function resendTokenForPassword(){
    let email;
    email = NeededModules.getTheUniqueKeyFromTheUrl();

    NeededModules.disableButton();
    let thePostData = await NeededModules.postRequest(Routes.baseUrl+'/api/resendTokenToEmailForPassword', {email:email});
    let {status, error_statement, success_message} = thePostData;

    if (status === false) {
        NeededModules.unDisableButton();
        NeededModules.handleErrorStatement(error_statement);
    }

    if (status === true){
        NeededModules.unDisableButton();
        NeededModules.showSuccessToaster(success_message, 'success');
        setTimeout(function () {
            window.location.href =  Routes.resetPassword_2+`?email=${email}`;
        }, 2000)
    }
}

