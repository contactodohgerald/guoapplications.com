class Validator {

    static errorChecker = 0;

    //empty value
    static emptyField (value, validation_type){
        if(validation_type === "empty"){
            if(value === ''){
                return false;
            }
        }
        return true;
    }

    //check for valid email
    static invalidEmail(value, validation_type){
        if(validation_type === "email_validation"){
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(!re.test(String(value).toLowerCase())){
                return false;
            }
        }
        return true;
    }

    //check for equal passwords
    static equalPassword(value, validation_type, value2){
        if(validation_type === "password_confirmation"){
            //value = password, value2 = confirm password
            if(value !== value2){
                return false;
            }
        }
        return true;
    }

}

class Messages {

    static loader = $('<img>').attr('src', '../../images/loader/loading.gif').addClass('loader-img-responsive');
    static emailMessage = 'Supply a Valid Email Address!';
    static passwordMessage = 'Passwords Does Not Match!!';

}

class NeededModules {

    static getRequest(url)
    {

        return new Promise(function (resolve, reject) {

            fetch(url)
                .then(res => res.json())
                .then(data => resolve(data))
                .then(err => reject(err));

        });
    }

    static postRequest(url, params)
    {

        return new Promise(function (resolve, reject) {

            $.post(url, params, function (data, status) {

                if(status === 'success'){
                    resolve(data)
                }else{
                    reject(status)
                }
            })

        })
    }

    //handle error statement
    static handleErrorStatement(error_statement)
    {
        let txt = '';
        for(let i in error_statement){
            for(let j in error_statement[i]){
                txt += `${error_statement[i][j]};`
            }
            if(i === 'general_error'){
                NeededModules.showSuccessToaster(txt, 'warning');
            }else{
                $('.'+i).html(txt).removeAttr('hidden');
            }
        }
    }

    static  returnDateDetails_2(returned_date)
    {

        var strArray=['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        var dayStrArray=['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'];

        var d = new Date(returned_date);

        return dayStrArray[d.getDay()]+', '+d.getDate()+NeededModules.returnSurfixPosition(d.getDate())+' '+strArray[d.getMonth()]+' '+d.getFullYear();
        //return {theDay:d.getDay(), theDayLetter:dayStrArray[d.getDay()], theDate:d.getDate(), theMonth:d.getMonth(), theMonthLetter:strArray[d.getMonth()], theYear:d.getFullYear()};

    }

    static returnSurfixPosition(position_string)
    {

        var theStr = position_string.toString();

        var no_array = {'1':'st', '2':'nd', '3':'rd', '4':'th', '5':'th','6':'th','7':'th','8':'th','9':'th','10':'th', '11':'th','12':'th', '13':'th', '14':'th', '15':'th', '16':'th', '17':'th', '18':'th', '19':'th', '20':'th', '21':'st', '22':'nd', '23':'rd', '24':'th', '25':'th', '26':'th', '27':'th', '28':'th', '29':'th', '30':'th', '31':'st'};

        return no_array[theStr];

    }

    static capitalizeFirstLetter(string)
    {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    static getTheUniqueKeyFromTheUrl()
    {
        let Url;
        Url = window.location.href.split('=')[1];
        return Url;
    }

    static bringOutLoader()
    {

        $('.gifhold').html(Messages.loader).parent('.gifHolder').removeAttr('hidden');
        $('.guoBtn').attr('disabled','disabled')
    }

    static removeLoader()
    {

        $('.gifhold').html(Messages.loader).parent('.gifHolder').attr('hidden','hidden');
        $('.guoBtn').removeAttr('disabled')
    }

    static showSuccessToaster(message, tooastType)
    {

        if(tooastType === "warning"){

            $.toast({
                text: message,
                heading: 'Note',
                icon: 'warning',
                showHideTransition: 'slide',
                allowToastClose: true,
                hideAfter: 5000,
                stack: 5,
                position: 'top-right',
                textAlign: 'left',
                loader: true,
                loaderBg: '#9ec600',
                background: 'red',
                beforeShow: function () {},
                afterShown: function () {},
                beforeHide: function () {},
                afterHidden: function () {}
            });

        }else if(tooastType === "success"){
            $.toast({
                text: message,
                heading: 'Note',
                icon: 'success',
                showHideTransition: 'slide',
                allowToastClose: true,
                hideAfter: 5000,
                stack: 5,
                position: 'top-right',
                textAlign: 'left',
                loader: true,
                loaderBg: '#9ec600',
                background: 'green',
                beforeShow: function () {},
                afterShown: function () {},
                beforeHide: function () {},
                afterHidden: function () {}
            });
        }


    }

    static reportError(errorHold)
    {
        for (let f in errorHold){
            for(let s = 0; s < errorHold[f].length; s++){
                let clssR = $('.'+f);
                clssR.css({'border-color':'red'});
                clssR.html(errorHold[f][s]).removeAttr('hidden');
            }
        }
    }

}

class Routes {

    static windowLocationPath = window.location.pathname;

    //page urls
    static baseUrl = 'http://127.0.0.1:8000';
    static loginUrl = './login';
    static emailVerify = './verifyEmail';
    static profileUrl = './profile';
}

