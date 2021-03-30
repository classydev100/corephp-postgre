function go_admin(event){
    if(event.keyCode == 13)
        admin_login();
}


function admin_login() {

    if ($('.username').val() == null || $('.username').val() == '' || $('.password').val() == null || $('.password').val() == '') {
        $('.invalid-feedback').css('display', 'none');
        if ($('.username').val() == null || $('.username').val() == '') {

            $('.usernamecheck').css('display', 'block');
        }
        if ($('.password').val() == null || $('.password').val() == '') {
            $('.passwordcheck').css('display', 'block');
        }
        return;
    }
   

    $.ajax({
        method: "POST",
        url: "../backend/ceilo.php",
        data: {
            operation: 'login',
            email: $('.username').val(),
            password: $('.password').val()
        },
        success: function (result) {
            console.log(result)
            if (result == "failed1") {
                $('.invalid-feedback').css('display', 'none');
                $(".passwordwrong2").css('display', 'block');
            }
            if (result == "failed2") {
                $('.invalid-feedback').css('display', 'none');
                $(".passwordwrong1").css('display', 'block');
            }
            if (result == "failed3") {
                $('.invalid-feedback').css('display', 'none');
                $(".passwordwrong1").css('display', 'block');
                $(".passwordwrong2").css('display', 'block');
            }
            if (result == "success") {
                window.location.replace("admin.php");
            }
        },
        error: function () {
            console.log("error")
        }
    })
}

if (localStorage.getItem('username') && localStorage.getItem('pass')) {
    $('.username').val(localStorage.getItem('username'))
    $('.password').val(localStorage.getItem('pass'))
    console.log("===localstorage value")
}