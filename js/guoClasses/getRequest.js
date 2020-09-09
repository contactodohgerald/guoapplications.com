
async function getLoggedInUserDetails() {
    let getUserToken = await NeededModules.getRequest('getSession.php?get_user_token');
    let {api_token} = getUserToken;
    let userName, userImage;
    let returnedData = await NeededModules.getRequest(Routes.baseUrl+'/api/getMobileUserDetails'+'?token='+api_token);
    let {status, error_statement, return_data} = returnedData;

    if (status === false) {
        NeededModules.handleErrorStatement(error_statement);
    }

    if (status === true){
        let {user_details, user_image_path} = return_data;

        let {first_name, last_name, profile_pix, country, created_at, email, phone} = user_details;

        userImage = ` <img src="${user_image_path}${(profile_pix === null)?'alt_image.png':profile_pix}" alt="${first_name}">`;
        $('.userImages').html(userImage);

        userName = `${(first_name === null)?'None':NeededModules.capitalizeFirstLetter(first_name)} ${(last_name === null)?'None':NeededModules.capitalizeFirstLetter(last_name)}`;
        $('.userName').html(userName);

        $('.userPhone').html((phone === null)?'None':phone);
        $('.userEmail').html((email === null)?'None':email);
        $('.userCountry').html((country === null)?'None':NeededModules.capitalizeFirstLetter(country));
        $('.joinSince').html((created_at === null)?'None':NeededModules.returnDateDetails_2(created_at));

    }

}
