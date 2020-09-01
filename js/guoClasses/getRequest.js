
async function getLoggedInUserDetails() {
    let getUserToken = await NeededModules.getRequest('getSession.php?get_user_token');
    let {api_token,} = getUserToken;

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

async function getAboutUsDetails() {
    let contactUsPage = '', footerContactUs = '', footer_joinUs = '';
    let returnedData = await NeededModules.getRequest(Routes.baseUrl+'/api/getAllSettings');
    let {status, error_statement, return_data} = returnedData;

    if (status === false) {
        NeededModules.handleErrorStatement(error_statement);
    }

    if (status === true){
        for (let i in return_data){
            let {about_us, mission, vision, why_guo, siteOfficialPhone, whatsAppPhone, siteMail, facebookSocialMediaUrl, instagramSocialMediaUrl, twitterSocialMediaUrl} = return_data[i];

            $('#about_us').html((about_us === null)?'None':NeededModules.capitalizeFirstLetter(about_us));

            $('#why_guo').html((why_guo === null)?'None':NeededModules.capitalizeFirstLetter(why_guo));

            $('#mission').html((mission === null)?'None':NeededModules.capitalizeFirstLetter(mission));

            $('#vision').html((vision === null)?'None':NeededModules.capitalizeFirstLetter(vision));

            contactUsPage += `<ul>
                            <li>
                                <a href="whatsapp://send?phone=${whatsAppPhone}&text=How Can We Be Of Service?">
                                    <i class="fa fa-whatsapp border-red"></i>
                                </a>
                                <h4>WhatsApp</h4>
                                <p>${whatsAppPhone}</p>
                            </li>
                            <li>
                                <a href="tel:${siteOfficialPhone}">
                                    <i class="fa fa-phone border-yellow"></i>
                                </a>
                                <h4>Phone</h4>
                                <p>${siteOfficialPhone}</p>
                            </li>
                            <li>
                                <a href="mailto:${siteMail}">
                                    <i class="fa fa-envelope border-blue"></i>
                                </a>
                                <h4>Email</h4>
                                <p>${siteMail}</p>
                            </li>
                        </ul>`;

            footerContactUs += `<li>
                            <i class="fa fa-whatsapp" style="color: #f05a23"></i>
                            <p>
                                <a href="whatsapp://send?phone=${whatsAppPhone}&text=How Can We Be Of Service?">${whatsAppPhone}</a>
                            </p>
                            </li>
                                <li>
                                    <i class="fa fa-phone" style="color: #1b1363"></i>
                                    <p>
                                        <a href="tel:${siteOfficialPhone}">${siteOfficialPhone}</a>
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" style="color: #2d3092"></i>
                                    <p>
                                        <a href="mailto:${siteMail}">${siteMail}</a>
                                    </p>
                                </li>`;

            footer_joinUs += `<ul>
                                <li>
                                    <a href="${facebookSocialMediaUrl}" target="_blank">
                                        <i class="fa fa-facebook border-red"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="${twitterSocialMediaUrl}" target="_blank">
                                        <i class="fa fa-twitter border-yellow"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="${instagramSocialMediaUrl}" target="_blank">
                                        <i class="fa fa-instagram border-blue"></i>
                                    </a>
                                </li>
                            </ul>`;
        }

        $('#contactUs').html(contactUsPage);
        $('#footer_contactUs').html(footerContactUs);
        $('#footer_join_us').html(footer_joinUs);

    }

}