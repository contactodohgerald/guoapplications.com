
async function getLoggedInUserDetails() {

    let userName, userImage;
    let returnedData = await NeededModules.getRequest(Routes.baseUrl+'/api/getMobileUserDetails'+'?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTU5Nzc2ODQzNCwiZXhwIjoxNTk3NzcyMDM0LCJuYmYiOjE1OTc3Njg0MzQsImp0aSI6IkFYSTM3WHhWbWI4VWpDSUoiLCJzdWIiOiJmOGZmZjgyNzU2ODIzOWVmOGQ0YTc5YTYwNTg5MTMxNSIsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEiLCJpZCI6MSwidW5pcXVlX2lkIjoiZjhmZmY4Mjc1NjgyMzllZjhkNGE3OWE2MDU4OTEzMTUiLCJmaXJzdF9uYW1lIjoieGFudGEiLCJsYXN0X25hbWUiOiJnb29kIiwiZW1haWwiOiJ1YmVyQGdtYWlsLmNvbSIsImFwaV90b2tlbiI6InozWUFBWnJHOWFWWVNUMkxTdTFRQ3lEd3l5eDBDTWQzSW9rZ25YUEdkYkdFaTJjTHdRcjE4WW9EVmlZWiIsInVzZXJfdHlwZSI6InVzZXIiLCJpc19kZWxldGVkIjoibm8iLCJyZWdpc3RlcmVkX2F0IjoiMjAyMC0wOC0wOFQxMjo1MzozNyswMDowMCIsImxhc3RfdXBkYXRlZF9hdCI6IjIwMjAtMDgtMTFUMTY6NDU6MjQrMDA6MDAifQ.bXdLLYDd_zpRVybTjlQc9ywtj2qLa6B6QN37Cz4Ol5o');
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