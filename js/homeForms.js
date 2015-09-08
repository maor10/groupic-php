 $(document).ready(function () {
    $("#home").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 800);
        $(".carousel").carousel(0);
    });
    $("#about").click(function() {
        $("html, body").animate({
            scrollTop: $(".AboutUs").offset().top - 48
        }, 800);
    });
    $("#contact").click(function() {
        $("html, body").animate({
            scrollTop: $(".ContactUs").offset().top - 48
        }, 800);
    });
    $('.forgot-pass').click(function(event) {
        $(".pr-wrap").toggleClass("show-pass-reset");
    });
    $('.registerBtn').click(function(event) {
        $(".register").show();
        $(".login").hide();
    });
    $('.pass-reset-submit').click(function(event) {
        $(".pr-wrap").removeClass("show-pass-reset");
    });
    $(".username").click(function() {
        $(".username").tooltip("destroy");
    });
    $(".password").click(function() {
        $(".password").tooltip("destroy");
    });
    $(".regFirstname").click(function() {
        $(".regFirstname").tooltip("destroy");
    });
    $(".regLastname").click(function() {
        $(".regLastname").tooltip("destroy");
    });
    $(".regUsername").click(function() {
        $(".regUsername").tooltip("destroy");
    });
    $(".regPassword").click(function() {
        $(".regPassword").tooltip("destroy");
    });
    $(".regRepassword").click(function() {
        $(".regRepassword").tooltip("destroy");
    });
    $(".regEmail").click(function() {
        $(".regEmail").tooltip("destroy");
    });
    $(".signInBtn").click(function() {
        var username1 = $(".username").val();
        var password1 = $(".password").val();
        if ($.trim(username1).length <= 0) {
            $(".username").attr("title", "Please Fill in your username!");
            $(".username").attr("data-original-title", "Please Fill in your username!");
            $(".username").tooltip("show");
            $(".username").focus();
        }else{
            if($.trim(password1).length <= 0){
                $(".password").attr("title", "Please fill in your password!");
                $(".password").attr("data-original-title", "Please fill in your password!");
                $(".password").tooltip("show");
                $(".password").focus();
            }else{
                $.post("welcomeLads", {
                    username: username1,
                    password: password1
                }, function(data){
                    if (data == "username") {
                        $(".username").attr("title", "Username doesn't exist!");
                        $(".username").attr("data-original-title", "Username doesn't exist!");
                        $(".username").tooltip("show");
                        $(".username").val("");
                        $(".username").focus();
                    }else{
                        if (data == "password") {
                            $(".password").attr("title", "Wrong password!");
                            $(".password").attr("data-original-title", "Wrong password!");
                            $(".password").tooltip("show");
                            $(".password").val("");
                            $(".password").focus();
                        }else{
                            alert("logged in");
                            window.location.href = "../events/index";
                        }
                    }     
                });
            }
        }
        return false;
    });
    $(".regBtn").click(function() {
        var firstname1 = $(".regFirstname").val();
        var lastname1 = $(".regLastname").val();
        var username1 = $(".regUsername").val();
        var password1 = $(".regPassword").val();
        var repassword1 = $(".regRepassword").val();
        var email1 = $(".regEmail").val();
        if ($.trim(firstname1) <= 0) {
            $(".regFirstname").attr("title", "Please fill in your firstname!");
            $(".regFirstname").attr("data-original-title", "Please fill in your firstname!");
            $(".regFirstname").tooltip("show");
            $(".regFirstname").focus();
            return false;
        }
        if ($.trim(lastname1) <= 0) {
            $(".regLastname").attr("title", "Please fill in your lastname!");
            $(".regLastname").attr("data-original-title", "Please fill in your lastname!");
            $(".regLastname").tooltip("show");
            $(".regLastname").focus();
            return false;
        }
        if ($.trim(username1) <= 0) {
            $(".regUsername").attr("title", "Please fill in a username!");
            $(".regUsername").attr("data-original-title", "Please fill in a username!");
            $(".regUsername").tooltip("show");
            $(".regUsername").focus();
            return false;
        }
        if ($.trim(password1) <=0) {
            $(".regPassword").attr("title", "Please Fill in a password!");
            $(".regPassword").attr("data-original-title", "Please fill in a password!");
            $(".regPassword").tooltip("show");
            $(".regPassword").focus();
            return false;
        }
        if ($.trim(repassword1) <= 0) {
            $(".regRepassword").attr("title", "Please fill in a matching password!");
            $(".regRepassword").attr("data-original-title", "Please fill in a matching password!");
            $(".regRepassword").tooltip("show");
            $(".regRepassword").focus();
            return false;
        }
        if (password1 != repassword1) {
            $(".regRepassword").attr("title", "Password doesn't match!");
            $(".regRepassword").attr("data-original-title", "Password doesn't match!");
            $(".regRepassword").tooltip("show");
            $(".regRepassword").val("");
            $(".regRepassword").focus();
            return false;
        }
        if ($.trim(email1) <= 0) {
            $(".regEmail").attr("title", "Please fill in your email!");
            $(".regEmail").attr("data-original-title", "Please fill in your email!");
            $(".regEmail").tooltip("show");
            $(".regEmail").focus();
            return false;
        }
        if ($(".male").prop("checked")) {
            var gender1 = "male";
        }else{
            var gender1 = "female";
        }
        // if (!$(".terms").is(":checked")) {
        //     $(".terms").tooltip("show");
        //     return false;
        // }
        $.post("applyToIlluminati", {
            firstname: firstname1,
            lastname: lastname1,
            username: username1,
            password: password1,
            email: email1,
            gender: gender1
        }, function(data){
            if (data == "username") {
                $(".regUsername").attr("title", "Username aready exist, really nigga?? fuck maor!");
                $(".regUsername").attr("data-original-title", "Username aready exist, really nigga?? fuck maor!");
                $(".regUsername").tooltip("show");
                $(".regUsername").val("");
                $(".regUsername").focus();
                return false;
            }else{
                if (data == "email") {
                    $(".regEmail").attr("title", "Email already exist, really u tryin dat m9?? fuck maor");
                    $(".regEmail").attr("data-original-title", "Email already exist, really u tryin dat m9?? fuck maor");
                    $(".regEmail").tooltip("show");
                    $(".regEmail").val("");
                    $(".regEmail").focus();
                    return false;
                }else{
                    if (data == "nope") {
                        alert("Soryy lad something went wrong! fuck maor");
                        return false;
                    }else{
                        if (data == "yes") {
                            alert("Register successfull! login to fuck maor");
                            window.location.href = "index";
                        }
                    }
                }
            }
        });
        return false;
    });
    $('.carousel').carousel({
        interval: false
    });
    $("#SignUp").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 800);
        if(!$(window).scrollTop()) {
            $(".carousel").carousel(1);
        }else{
            setTimeout(function() {
                $(".carousel").carousel(1);
            }, 800);
        }
    });
    $("#SignIn").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 800);
        if(!$(window).scrollTop()) {
            $(".carousel").carousel(2);
        }else{
            setTimeout(function() {
                $(".carousel").carousel(2);
            }, 800);
        }
    });
});



















 // http://rkcams.com/cam/SierraLuv/
 // http://rkcams.com/cam/BriannaStarr/
 // http://rkcams.com/cam/Anishia/
 // http://rkcams.com/cam/ChloeQ/
 // http://rkcams.com/cam/xSexyLady/
 // http://www.rkcams.com/cam/very_bad/
 // http://www.rkcams.com/cam/xSexyAngel/ yesssssssssssss
 // http://www.rkcams.com/cam/CuteKaren/
 // https://il.bongacams.com/chat/JaSexJaKiss