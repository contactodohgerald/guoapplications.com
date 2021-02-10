<script>

    async function registerUserHandler(a) {

        let firstName, lastName, email, adminType, phone, country, password, passwordConfirmation, Phone, code, referred_unique_id;
        let mainHtml = $(a).html();

        firstName = $('.first_name').val();
        lastName = $('.last_name').val();
        email = $('.email').val();
        phone = $('.phone').val();
        country =  $('.country').val();
        password = $('.password').val();
        passwordConfirmation = $('.password_confirmation').val();
        referred_unique_id = $('.referred_unique_id').val();
        adminType = 'user';

        //['value|className|fieldName|type', 'value|className|fieldName|type1,type2']
        let validate = await validationModule.callValidator([
            firstName+'|first_name|First Name|empty',
            lastName+'|last_name|Last Name|empty',
            phone+'|phone|Phone Number|empty',
            email+'|email|Email|empty,email',
            password+'|password|Password|empty',
            passwordConfirmation+'|password_confirmation|Confirm Password|empty',
            password+':'+passwordConfirmation+'|password_confirmation|Confirm|password_match_validation',
        ]);
        if(validate.status === false){
            validationModule.handleErrorStatement(validate.message);
            return;
        }else {
            grecaptcha.execute();
        }

        let phoneCode = country.split('/')[0];

        let countryCode = country.split('/')[1];

        if (phone.charAt(0) == 0){
            Phone = phone.substring(1);
            code = `${Phone}`;
        }else {
            code = `${phone}`;
        }

        grecaptcha.execute();
        $(a).text('Loading....').attr({'disable':true});
        let thePostData = await postRequest(TheRoute.baseUrl+'/api/register',
            {first_name:firstName, last_name:lastName, phone:code, country_code:phoneCode,  country:countryCode, email:email, password:password, password_confirmation:passwordConfirmation, referred_unique_id:referred_unique_id, user_type:adminType}
        );
        let {status, error_statement, success_message} = thePostData;

        if (status === false) {
            $(a).html(mainHtml).attr({'disable':false});
            //NeededModules.removeLoader();
            validationModule.handleErrorStatement(error_statement);
            return ;
        }

        if (status === true){
            $(a).html('Request Was Successful').attr({'disable':false});
            showSuccessToaster(success_message, 'success');
            setTimeout(function () {
                window.location.href = TheRoute.emailVerify+`?email=${email}`;
            }, 2000)
        }
    }

    async function verifyEmailHandler(a){
        let token, email;
        let mainHtml = $(a).html();

        email = getTheUniqueKeyFromTheUrl();
        token = $('.email_token').val();

        let validate = await validationModule.callValidator([
            token+'|email_token|Token|empty,number',
        ]);
        if(validate.status === false){
            validationModule.handleErrorStatement(validate.message);
            return;
        }

        $(a).text('Loading....').attr({'disable':true});
        let thePostData = await postRequest(TheRoute.baseUrl+'/api/verifyEmailToken/'+email, {email_token:token});
        let {status, error_statement, success_message} = thePostData;

        if (status === false) {
            $(a).html(mainHtml).attr({'disable':false});
            validationModule.handleErrorStatement(error_statement);
        }

        if (status === true){
            $(a).html('Request Was Successful').attr({'disable':false});
            showSuccessToaster(success_message, 'success');
            setTimeout(function () {
                window.location.href = TheRoute.loginUrl;
            }, 2000)
        }
    }

    async function resendTokenHandler(a){
        let email;
        let mainHtml = $(a).html();
        email = getTheUniqueKeyFromTheUrl();

        $(a).text('Loading....').attr({'disable':true});
        let thePostData = await postRequest(TheRoute.baseUrl+'/api/resendEmailConfirmToken', {email:email});
        let {status, error_statement, success_message} = thePostData;

        if (status === false) {
            $(a).html(mainHtml).attr({'disable':false});
            validationModule.handleErrorStatement(error_statement);
        }

        if (status === true){
            $(a).html('Request Was Successful').attr({'disable':false});
            showSuccessToaster(success_message, 'success');
            setTimeout(function () {
                window.location.href =  TheRoute.emailVerify+`?email=${email}`;
            }, 2000)
        }
    }

    async function resendTokenForPasswordHandler(a){
        let email;
        let mainHtml = $(a).html();
        email = getTheUniqueKeyFromTheUrl();

        $(a).text('Loading....').attr({'disable':true});
        let thePostData = await postRequest(TheRoute.baseUrl+'/api/resendTokenToEmailForPassword', {email:email});
        let {status, error_statement, success_message} = thePostData;

        if (status === false) {
            $(a).html(mainHtml).attr({'disable':false});
            validationModule.handleErrorStatement(error_statement);
        }

        if (status === true){
            $(a).html('Request Was Successful').attr({'disable':false});
            showSuccessToaster(success_message, 'success');
            setTimeout(function () {
                window.location.href =  TheRoute.resetPassword_2+`?email=${email}`;
            }, 2000)
        }
    }

    async function loginUserHandler(a){
        let email, password;
        let mainHtml = $(a).html();

        email = $('.email').val();
        password = $('.password').val();


        //['value|className|fieldName|type', 'value|className|fieldName|type1,type2']
        let validate = await validationModule.callValidator([
            email+'|email|Email|empty,email',
            password+'|password|Password|empty',
        ]);
        if(validate.status === false){
            validationModule.handleErrorStatement(validate.message);
            return;
        }

        //NeededModules.bringOutLoader();
        $(a).text('Loading....').attr({'disable':true});
        let thePostData = await postRequest(TheRoute.baseUrl+'/api/login', {email:email, password:password});
        let {status, error_statement, success_message, return_data} = thePostData;

        if (status === false) {
            $(a).html(mainHtml).attr({'disable':false});
            //NeededModules.removeLoader();
            validationModule.handleErrorStatement(error_statement);
            return ;
        }

        if (status === true){
            let {token, user_details} = return_data;
            let {original} = token;
            let {token:user_token} = original;
            let {unique_id} = user_details;

            let save_user_token = await postRequest('setSession.php',
                {
                    api_token:user_token,
                    uniqueId:unique_id,
                });

            let result = JSON.parse(save_user_token);

            if(result['status'] === true){
                $(a).html('login Successful, redirecting').attr({'disable':false});
                setTimeout(function () {
                    window.location.href = `${TheRoute.profileUrl}`;
                }, 2000)
            }
        }
    }

    async function resetPasswordHandler_1(a){
        let email;
        let mainHtml = $(a).html();
        email = $('.email').val();

        let validate = await validationModule.callValidator([
            email+'|email|Email|empty,email',
        ]);
        if(validate.status === false){
            validationModule.handleErrorStatement(validate.message);
            return;
        }

        $(a).text('Loading....').attr({'disable':true});
        let thePostData = await postRequest(TheRoute.baseUrl+'/api/getUserEmailForResetPassword', {email:email});
        let {status, error_statement, success_message} = thePostData;

        if (status === false) {
            $(a).html(mainHtml).attr({'disable':false});
            //NeededModules.removeLoader();
            validationModule.handleErrorStatement(error_statement);
            return ;
        }

        if (status === true){
            $(a).html('Request Was Successful').attr({'disable':false});
            showSuccessToaster(success_message, 'success');
            setTimeout(function () {
                window.location.href = TheRoute.resetPassword_2+`?email=${email}`;
            }, 2000)
        }
    }

    async function resetPasswordHandler_2(a){
        let token;
        let mainHtml = $(a).html();
        token = $('.email_token').val();

        let validate = await validationModule.callValidator([
            token+'|email_token|Token|empty,number',
        ]);
        if(validate.status === false){
            validationModule.handleErrorStatement(validate.message);
            return;
        }

        $(a).text('Loading....').attr({'disable':true});
        let thePostData = await postRequest(TheRoute.baseUrl+'/api/getUserTokenForResetPassword', {email_token:token});
        let {status, error_statement, success_message} = thePostData;

        if (status === false) {
            $(a).html(mainHtml).attr({'disable':false});
            //NeededModules.removeLoader();
            validationModule.handleErrorStatement(error_statement);
            return ;
        }

        if (status === true){
            $(a).html('Request Was Successful').attr({'disable':false});
            showSuccessToaster(success_message, 'success');
            setTimeout(function () {
                window.location.href = TheRoute.resetPassword_3+`?email=${token}`;
            }, 2000)
        }
    }

    async function resetUsersPasswordHandler(a) {
        let password, confirm_password, token;
        let mainHtml = $(a).html();

        token = NeededModules.getTheUniqueKeyFromTheUrl();
        password = $('.password').val();
        confirm_password = $('.password_confirmation').val();

        let validate = await validationModule.callValidator([
            password+'|password|Password|empty',
            confirm_password+'|password_confirmation|Confirm Password|empty',
            password+':'+confirm_password+'|password_confirmation|Confirm|password_match_validation',
        ]);
        if(validate.status === false){
            validationModule.handleErrorStatement(validate.message);
            return;
        }

        $(a).text('Loading....').attr({'disable':true});
        let thePostData = await postRequest(TheRoute.baseUrl+'/api/resetUserPassword/', {password:password, password_confirmation:confirm_password, email_token:token});
        let {status, error_statement, success_message} = thePostData;

        if (status === false) {
            $(a).html(mainHtml).attr({'disable':false});
            //NeededModules.removeLoader();
            validationModule.handleErrorStatement(error_statement);
            return ;
        }

        if (status === true){
            $(a).html('Request Was Successful').attr({'disable':false});
            showSuccessToaster(success_message, 'success');
            setTimeout(function () {
                window.location.href = TheRoute.loginUrl;
            }, 2000)
        }
    }

    async function updateUserHandler(a) {
        let mainHtml = $(a).html();

        let getUserLoggedInDetails = await getRequest('getSession.php?get_user_token');
        let {api_token, user_unique_id} = getUserLoggedInDetails;

        let firstName, lastName, phone, country, city, address, gender, Phone, code;

        firstName = $('.first_name').val();
        lastName = $('.last_name').val();
        phone = $('.phone').val();
        country =  $('.country').val();
        gender = $('.genders').val();
        city = $('.city').val();
        address = $('.address').val();

        let validate = await validationModule.callValidator([
            firstName+'|first_name|First Name|empty',
            lastName+'|last_name|Last Name|empty',
            phone+'|phone|Phone Number|empty,number',
            country+'|country|Country|empty',
        ]);
        if(validate.status === false){
            validationModule.handleErrorStatement(validate.message);
            return;
        }

        let phoneCode = country.split('/')[0];

        let countryCode = country.split('/')[1];

        if (phone.charAt(0) == 0){
            Phone = phone.substring(1);
            code = `${Phone}`;
        }else {
            code = `${phone}`;
        }

        $(a).text('Loading....').attr({'disable':true});
        let thePostData = await postRequest(TheRoute.baseUrl+'/api/updateUserProfile/'+user_unique_id,
            {first_name:firstName, last_name:lastName, phone:code, country_code:phoneCode, country:countryCode, gender:gender, city:city, address:address, token:api_token}
        );
        let {status, error_statement, success_message} = thePostData;

        if (status === false) {
            $(a).html(mainHtml).attr({'disable':false});
            //NeededModules.removeLoader();
            validationModule.handleErrorStatement(error_statement);
        }

        if (status === true){
            $(a).html('Request Was Successful').attr({'disable':false});
            showSuccessToaster(success_message, 'success');
            setTimeout(function () {
                window.location.reload(true);
            }, 2000)
        }
    }


</script>