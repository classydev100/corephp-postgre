





var aaa = 0;

// function checkeds() {
//     if (aaa == 0) {
//         aaa = 1; $(".check_red").removeClass("color_red");
//     }
//     else aaa = 0;
//     if (aaa == 0) $(".check_red").addClass("color_red");
// }


$(function () {

    var flag_fullname = 0;
    var flag_cpf = 0;
    var flag_telephone = 0;
    var flag_email = 0;
    var flag_category = 0;
    var flag_request = 0;
    var flag_month = 0;
    var flag_luck = 0;
    const array1 = ['3', '4', '5', '6'];
    $("#wizard1").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        onStepChanging: function (event, currentIndex, newIndex) {

            // if (aaa == 0) $(".check_red").addClass("color_red");
            if (newIndex >= 1) {
                $('#fullnamevalidation').empty();
                if ($('.fullname').val().length < 1) {
                    $('#fullnamevalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Por favor, digite seu nome completo!</p></div>');
                    $('#fullnameinput').get(0).classList.add("back_red");
                } else if ($('.fullname').val().length < 6 && $('.fullname').val().length > 0) {
                    $('#fullnamevalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> O nome completo é inválido!</p></div>');
                    $('#fullnameinput').get(0).classList.add("back_red");
                } else {
                    flag_fullname = 2
                    $('#fullnameinput').get(0).classList.remove("back_red");
                }

                $('#cpfvalidation').empty();
                if ($('.cpf').val().replace(/-/g, '').replace(/_/g, '').replaceAll('.', '').length < 1) {
                    $('#cpfvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Por favor, digite seu CPF!</p></div>');
                    $('#cpfinput').get(0).classList.add("back_red");
                } else if ($('.cpf').val().replace(/-/g, '').replace(/_/g, '').replaceAll('.', '').length < 11 && $('.cpf').val().replace(/-/g, '').replace(/_/g, '').replaceAll('.', '').length > 0) {
                    $('#cpfvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> CPF inválido!</p></div>');
                    $('#cpfinput').get(0).classList.add("back_red");
                } else {
                    flag_cpf = 2
                    $('#cpfinput').get(0).classList.remove("back_red");
                }

                $('#telephonevalidation').empty();
                if ($('.telephone').val().length < 1) {
                    $('#telephonevalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Por favor, digite seu telefone!</p></div>');
                    $('#telephoneinput').get(0).classList.add("back_red");
                } else if ($('.telephone').val().length < 10 && $('.telephone').val().length > 0) {
                    $('#telephonevalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> telefone inválido!</p></div>');
                    $('#telephoneinput').get(0).classList.add("back_red");
                } else {
                    flag_telephone = 2
                    $('#telephoneinput').get(0).classList.remove("back_red");
                }

                $('#emailvalidation').empty();
                if ($('.email').val().length < 1) {
                    $('#emailvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Por favor, digite seu email address!</p></div>');
                    $('#emailinput').get(0).classList.add("back_red");
                } else if ($('.email').val().length < 5 && $('.email').val().length > 0) {
                    $('#emailvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Email inválido!</p></div>');
                    $('#emailinput').get(0).classList.add("back_red");
                } else if (!validateEmail($('.email').val())) {
                    $('#emailvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Email inválido!</p></div>');
                    $('#emailinput').get(0).classList.add("back_red");
                } else {
                    flag_email = 2
                    $('#emailinput').get(0).classList.remove("back_red");
                }
                if (newIndex == 2) {

                    $('#puchasevalidation').empty();
                    if ($('.purchase_type').val().length < 1) {
                        $('#puchasevalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Por favor, digite seus tipos de compra e categoria</p></div>');
                        $('#puchaseinput').get(0).classList.add("back_red");
                    } else if ($('.purchase_type').val().length < 6 && $('.purchase_type').val().length > 0) {
                        $('#puchasevalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Os tipos e categorias de compra são inválidos!</p></div>')
                        $('#puchaseinput').get(0).classList.add("back_red");
                    } else {
                        flag_category = 2
                        $('#puchaseinput').get(0).classList.remove("back_red");
                    }

                    $('#requestnumbervalidation').empty();
                    if ($('.request_number').val().length < 1) {
                        $('#requestnumbervalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Por favor, digite o seu número de solicitação</p></div>');
                        $('#requestnumberinput').get(0).classList.add("back_red");
                    } else if ($('.request_number').val().length < 16 && $('.request_number').val().length > 0) {
                        $('#requestnumbervalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> O número do pedido é inválido!</p></div>');
                        $('#requestnumberinput').get(0).classList.add("back_red");
                    } else if (!array1.includes(($('.request_number').val().toString()).charAt(0))) {

                        $('#requestnumbervalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> O número do pedido é inválido!</p></div>');
                        $('#requestnumberinput').get(0).classList.add("back_red");
                    } else {
                        flag_request = 2
                        $('#monthinput').get(0).classList.remove("back_red");
                    }

                    $('#monthvalidation').empty();
                    if ($('.month_year_purchase').val().replace(/_/g, '').replace('/', '').length < 1) {
                        $('#monthvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> por favor, digite seu mês e ano de compra</p></div>');
                        $('#monthinput').get(0).classList.add("back_red");
                    } else if ($('.month_year_purchase').val().replace(/_/g, '').replace('/', '').length < 6 && $('.month_year_purchase').val().replace(/_/g, '').replace('/', '').length > 0) {
                        $('#monthvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> O mês e o ano da compra são inválidos!</p></div>');
                        $('#monthinput').get(0).classList.add("back_red");
                    } else {
                        flag_month = 2
                        $('#luckinput').get(0).classList.remove("back_red");
                    }

                    $('#luckvalidation').empty();
                    if ($('.luck_number').val().length < 1) {
                        $('#luckvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Por favor, digite seu número da sorte</p></div>');
                        $('#luckinput').get(0).classList.add("back_red");
                    } else if ($('.luck_number').val().length < 3 && $('.luck_number').val().length > 0) {

                        $('#luckvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> O número da sorte é inválido!</p></div>');
                        $('#luckinput').get(0).classList.add("back_red");
                    } else {
                        flag_luck = 2
                        $('#requestnumberinput').get(0).classList.remove("back_red");
                    }

                    if (flag_category == 2 && flag_request == 2 && flag_month == 2 && flag_luck == 2) {
                        $('#dados').addClass('header-snip');
                        $('.header-subject').css('opacity', '0');
                        var category = $('.purchase_type').val();
                        var request_number = $('.request_number').val();
                        var purchase_date = $('.month_year_purchase').val();
                        var luck_number = $('.luck_number').val();
                        var fullname = $('.fullname').val();
                        var cpf = $('.cpf').val();
                        var telephone_ = $('.telephone').val();
                        var email = $('.email').val();

                        $.ajax({
                            method: "POST",
                            url: "/cadastro_save",
                            data: {
                                operation: 'createvalidation',
                                full_name: fullname,
                                cpf: cpf,
                                email: email,
                                purchase_type_cate: category,
                                request_number: request_number,
                                purchase_month_year: purchase_date,
                                lucky_number: luck_number,
                                telephone: telephone_

                            },
                            success: function (result) {
                                console.log(result);
                                // var res = JSON.parse(result);
                                // if(res){
                                //     alert('Data saved successfully');
                                // } else {
                                //     alert('Data Saving Failed');
                                // }
                                // if (result == "success") document.getElementById("demo").innerHTML = "Your information has in the database!!! <br>Please try again";
                            },
                            error: function () {
                                console.log("error")
                            }
                        });
                        $('.actions ul').addClass('actions-next');
                    } else {
                        return;
                    }
                }
                // console.log(aaa)
                if (flag_fullname == 2 && flag_cpf == 2 && flag_telephone == 2 && flag_email == 2) {
                    // aaa = 0;
                    // $(".check_red").removeClass("color_red");
                    // $('.actions ul').addClass('actions-next');
                } else {
                    return
                }
            } else {
                $('.actions ul').removeClass('actions-next');
            }
            return true;
        },
        labels: {
            // finish: "Finish",
            next: "Próximo",
        }
    });
    /* Validation form */
    $(".fullname").on('', function () {
        if ($('#fullnamevalidation').find("div.tooltips").length > 0 || flag_fullname == 1) {
            if ($(this).val().length < 6 && $(this).val().length > 0) {
                $('#fullnamevalidation').find(".tooltips-text").text("Full name is invalid!")
                if (flag_fullname == 1) {
                    $('#fullnamevalidation').empty();
                    $('#fullnamevalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Full name is invalid!</p></div>');
                    $('#fullnameinput').get(0).classList.add("back_red");
                }
            } else if ($('.fullname').val().length == 0) {
                $('#fullnamevalidation').find(".tooltips-text").text("Required")
                if (flag_fullname == 1) {
                    $('#fullnamevalidation').empty();
                    $('#fullnamevalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Required</p></div>');
                    $('#fullnameinput').get(0).classList.add("back_red");
                }
            } else if ($('.fullname').val().length >= 6) {
                flag_fullname = 1;
                $('#fullnamevalidation').find("div.tooltips").remove();
                $('#fullnameinput').get(0).classList.remove("back_red");
            }
        } else {
        }
    })
    $(".cpf").on('', function () {
        var cpdlength = $(this).val().length;

        if ($('.cpf').val().length > 0 || flag_cpf == 1) {

            if (cpdlength < 14 && cpdlength > 0) {
                $('#cpfvalidation').find(".tooltips-text").text("CPF in invalid!")
                if (flag_cpf == 1) {
                    $('#cpfvalidation').empty();
                    $('#cpfvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> CPF in invalid!</p></div>');
                    $('#cpfinput').get(0).classList.add("back_red");
                }
            } else if (cpdlength == 0) {
                $('#cpfvalidation').find(".tooltips-text").text("Required")
                if (flag_cpf == 1) {
                    $('#cpfvalidation').empty();
                    $('#cpfvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Required</p></div>');
                    $('#cpfinput').get(0).classList.add("back_red");
                }
            } else if (cpdlength >= 14) {
                console.log(cpdlength);
                flag_cpf = 1;
                $('#cpfvalidation').find("div.tooltips").remove();
                $('#cpfinput').get(0).classList.remove("back_red");
            }
        } else {
        }
    })
    $(".telephone").on('', function () {
        if ($('#telephonevalidation').find("div.tooltips").length > 0 || flag_telephone == 1) {
            if ($(this).val().length < 10 && $(this).val().length > 0) {
                $('#telephonevalidation').find(".tooltips-text").text("Telephone is invalid!")
                if (flag_telephone == 1) {
                    $('#telephonevalidation').empty();
                    $('#telephonevalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Telephone is invalid!</p></div>');
                    $('#telephoneinput').get(0).classList.add("back_red");
                }
            } else if ($('.telephone').val().length == 0) {
                $('#telephonevalidation').find(".tooltips-text").text("Required")
                if (flag_telephone == 1) {
                    $('#telephonevalidation').empty();
                    $('#telephonevalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Required</p></div>');
                    $('#telephoneinput').get(0).classList.add("back_red");
                }
            } else if ($('.telephone').val().length >= 10) {
                flag_telephone = 1;
                $('#telephonevalidation').find("div.tooltips").remove();;
                $('#telephoneinput').get(0).classList.remove("back_red");
            }
        } else {
        }

    });
    $(".email").on('', function () {
        if ($('#emailvalidation').find("div.tooltips").length > 0 || flag_email == 1) {
            if ($(this).val().length < 5 && $(this).val().length > 1) {
                $('#emailvalidation').find(".tooltips-text").text("Invaid email!")
                if (flag_email == 1) {
                    $('#emailvalidation').empty();
                    $('#emailvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Invaid email!</p></div>');
                    $('#emailinput').get(0).classList.add("back_red");
                }
            } else if ($('.email').val() == null || $('.email').val() == '' || $('.email').val().length < 1) {
                $('#telephonevalidation').find(".tooltips-text").text("Required")
                if (flag_email == 1) {
                    $('#emailvalidation').empty();
                    $('#emailvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Required</p></div>');
                    $('#emailinput').get(0).classList.add("back_red");
                }
            } else if (!validateEmail($('.email').val()) && $(this).val().length > 1) {
                $('#emailvalidation').find(".tooltips-text").text("Invaid email!")
                $('#emailvalidation').empty();
                $('#emailvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Invaid email!</p></div>');
                $('#emailinput').get(0).classList.add("back_red");
            } else if ($('.email').val().length >= 5 && validateEmail($('.email').val())) {
                flag_email = 1;
                $('#emailvalidation').find("div.tooltips").remove();;
                $('#emailinput').get(0).classList.remove("back_red");
            }
        } else {
        }

    });
    $(".purchase_type").on('', function () {
        if ($('#puchasevalidation').find("div.tooltips").length > 0 || flag_category == 1) {
            if ($(this).val().length < 6 && $(this).val().length > 0) {
                $('#puchasevalidation').find(".tooltips-text").text("Purchase Types and Category is invalid!")
                if (flag_category == 1) {
                    $('#puchasevalidation').empty();
                    $('#puchasevalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Purchase Types and Category is invalid!</p></div>');
                    $('#puchaseinput').get(0).classList.add("back_red");
                }
            } else if ($('.purchase_type').val().length == 0) {
                $('#puchasevalidation').find(".tooltips-text").text("Required")
                if (flag_category == 1) {
                    $('#puchasevalidation').empty();
                    $('#puchasevalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Required</p></div>');
                    $('#puchaseinput').get(0).classList.add("back_red");
                }
            } else if ($('.purchase_type').val().length >= 6) {
                flag_category = 1;
                $('#puchasevalidation').find("div.tooltips").remove();
                $('#puchaseinput').get(0).classList.remove("back_red");
            }
        } else {
        }

    });
    $(".month_year_purchase").on('', function () {
        if ($('#monthvalidation').find("div.tooltips").length > 0 || flag_month == 1) {
            if ($(this).val().replace(/_/g, '').replace('/', '').length < 6 && $(this).val().replaceAll(/_/g, '').replace('/', '').length > 0) {

                $('#monthvalidation').find(".tooltips-text").text("Month and year of purchase is invalid!")
                if (flag_month == 1) {
                    $('#monthvalidation').empty();
                    $('#monthvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Month and year of purchase is invalid!</p></div>');
                    $('#monthinput').get(0).classList.add("back_red");
                }
            } else if ($('.month_year_purchase').val().replace(/_/g, '').replace('/', '').length == 0) {
                $('#monthvalidation').find(".tooltips-text").text("Required")
                if (flag_month == 1) {
                    $('#monthvalidation').empty();
                    $('#monthvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Required</p></div>');
                    $('#monthinput').get(0).classList.add("back_red");
                }
            } else if ($('.month_year_purchase').val().replace(/_/g, '').replace('/', '').length >= 6) {
                flag_month = 1;
                $('#monthvalidation').find("div.tooltips").remove();
                $('#monthinput').get(0).classList.remove("back_red");
            }
        } else {
        }

    });
    $(".luck_number").on('', function () {
        if ($('#luckvalidation').find("div.tooltips").length > 0 || flag_luck == 1) {
            if ($(this).val().length < 3 && $(this).val().length > 0) {
                $('#luckvalidation').find(".tooltips-text").text("Lucky number is invalid!")
                if (flag_luck == 1) {
                    $('#luckvalidation').empty();
                    $('#luckvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Lucky number is invalid!</p></div>');
                    $('#luckinput').get(0).classList.add("back_red");
                }
            } else if ($('.luck_number').val().length == 0) {
                $('#luckvalidation').find(".tooltips-text").text("Required")
                if (flag_luck == 1) {
                    $('#luckvalidation').empty();
                    $('#luckvalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Required</p></div>');
                    $('#luckinput').get(0).classList.add("back_red");
                }
            } else if ($('.luck_number').val().length >= 3) {
                flag_luck = 1;
                $('#luckvalidation').find("div.tooltips").remove();
                $('#luckinput').get(0).classList.remove("back_red");
            }
        } else {
        }

    });
    $(".request_number").on('', function () {
        let request_number = $(this).val()
        if ($('#requestnumbervalidation').find("div.tooltips").length > 0 || flag_request == 1) {
            if ($(this).val().length < 16 && $(this).val().length > 0) {
                $('#requestnumbervalidation').find(".tooltips-text").text("Request number is invalid!")
                if (flag_request == 1) {
                    $('#requestnumbervalidation').empty();
                    $('#requestnumbervalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Request number is invalid!</p></div>');
                    $('#requestnumberinput').get(0).classList.add("back_red");
                }
            } else if ($('.request_number').val().length == 0) {
                $('#requestnumbervalidation').find(".tooltips-text").text("Required")
                if (flag_request == 1) {
                    $('#requestnumbervalidation').empty();
                    $('#requestnumbervalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Required</p></div>');
                    $('#requestnumberinput').get(0).classList.add("back_red");
                }
            } else if (!array1.includes(request_number[0])) {
                $('#requestnumbervalidation').empty();
                $('#requestnumbervalidation').append('<div class="tooltips"><p class="font-size-12 text-white text-center tooltips-text mb-0"> Invalid Request Number!</p></div>');
                $('#requestnumberinput').get(0).classList.add("back_red");
            } else if ($('.request_number').val().length >= 16 && array1.includes(request_number[0])) {
                flag_request = 1;
                $('#requestnumbervalidation').find("div.tooltips").remove();
                $('#requestnumberinput').get(0).classList.remove("back_red");
            }
        } else {
        }

    });

    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }



    // Custom Steps 
    // $('.wizard > .steps li a').click(function(){
    //     $('input[type="text"].fullname').each(function () {
    //         console.log("Full name", $(this).val());
    //     });
    // 	$(this).parent().addClass('checked');
    // 	$(this).parent().prevAll().addClass('checked');
    // 	$(this).parent().nextAll().removeClass('checked');
    // });
    // Custom Button Jquery Step
    // $('.forward').click(function(){

    // 	$("#wizard").steps('next');

    // });
    // $('.backward').click(function(){
    //     $("#wizard").steps('previous');
    // });
    // Input Focus
    $('.form-holder').delegate("input", "focus", function () {
        $('.form-holder').removeClass("active");
        $(this).parent().addClass("active");
    });

});

$('#dados').removeClass('header-snip');


