function changetosignup() {

    // var signinboxID = document.getElementById("signinboxID");
    // signinboxID.style.opacity = "0";
    // var signupboxID = document.getElementById("signupboxID");
    // signupboxID.style.opacity = "1";


    var hidebox = document.getElementById("hidebox");
    hidebox.style.marginLeft = "50%";
    // hidebox.style.backgroundImage = "url('sign2.jpg')";
    hidebox.classList.add("bac");
    hidebox.classList.remove("bac1");


    hidebox.style.borderTopLeftRadius = "0px";
    hidebox.style.borderBottomLeftRadius = "0px";
    hidebox.style.borderTopRightRadius = "20px";
    hidebox.style.borderBottomRightRadius = "20px";

    var descri = document.getElementById("descri");
    descri.innerHTML = "Log In to your account for better experience";
    descri.style.color = "white";

    var titlebox = document.getElementById("titlebox1");
    titlebox.innerHTML = "Sign In";

    var gosignupbtn = document.getElementById("gosignupbtn");
    gosignupbtn.style.backgroundColor = "#CCD1D1";
    gosignupbtn.style.color = "black";

    // gosignupbtn.classList.add = "dsilverbtn";
    // gosignupbtn.classList.remove = "lbluebtn";


    gosignupbtn.setAttribute("onclick", "changetosignin();viewsignin();")
    gosignupbtn.innerHTML = "Go To Sign In";
}

function changetosignin() {
    // var signinboxID = document.getElementById("signinboxID");
    // signinboxID.style.opacity = "1";
    // var signupboxID = document.getElementById("signupboxID");
    // signupboxID.style.opacity = "0";

    var hidebox = document.getElementById("hidebox");
    hidebox.style.marginLeft = "0%";
    // hidebox.style.backgroundImage = "url('sign.jpg')";
    hidebox.classList.remove("bac");
    hidebox.classList.add("bac1");


    hidebox.style.borderTopLeftRadius = "20px";
    hidebox.style.borderBottomLeftRadius = "20px";
    hidebox.style.borderTopRightRadius = "0px";
    hidebox.style.borderBottomRightRadius = "0px";

    var gosignupbtn = document.getElementById("gosignupbtn");
    gosignupbtn.setAttribute("onclick", "changetosignup();viewsignup();")

    gosignupbtn.style.backgroundColor = " #00a2ff";
    gosignupbtn.style.color = "white";
    gosignupbtn.style.padding = "";
    // gosignupbtn.classList.add = "lbluebtn";
    // gosignupbtn.classList.remove = "dsilverbtn";

    gosignupbtn.innerHTML = "Go To Sign Up";
    var descri = document.getElementById("descri");
    descri.style.color = "white";
    descri.innerHTML = "Sign Up to explore the Orianteye Solutions";

    var titlebox = document.getElementById("titlebox1");
    titlebox.innerHTML = "Sign Up";



}

// function viewsignup() {
//     var signinboxID = document.getElementById("signinboxID");
//     var signupboxID = document.getElementById("signupboxID");
//     signinboxID.classList.toggle("d-none");
//     signupboxID.classList.toggle("d-none");

// }

function viewsignin() {
    var signupboxID = document.getElementById("signupboxID");
    signupboxID.classList.add("d-none");
    var signinboxID = document.getElementById("signinboxID");
    signinboxID.classList.remove("d-none");
}

function viewsignup() {
    var signinboxID = document.getElementById("signinboxID");
    signinboxID.classList.add("d-none");
    var signupboxID = document.getElementById("signupboxID");
    signupboxID.classList.remove("d-none");

}
// function myFunction(x) {
//     if (x.matches) {
//         var signinboxID = document.getElementById("signinboxID");
//         signinboxID.style.opacity = "1";
//         var signupboxID = document.getElementById("signupboxID");
//         signupboxID.style.opacity = "1";
//     }
// }

// var x = window.matchMedia("(max-width: 768px)")
// myFunction(x) // Call listener function at run time
// x.addListener(myFunction) // Attach listener function on state changes

function signin() {
    var email = document.getElementById("email");
    var pass = document.getElementById("pass");
    var error1 = document.getElementById("error1");
    var error2 = document.getElementById("error2");
    var remember = document.getElementById("r");
    var f = new FormData;
    f.append("email", email.value);
    f.append("pass", pass.value);
    f.append("remember", remember.checked);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var btn = document.getElementById("signinbtn");
            btn.innerHTML = "<i class='icofont-key'></i>&nbsp; Sign In";
            btn.classList.add("py-2");
            btn.classList.remove("py-1");
            var t = r.responseText;

            if (t == "Please Enter your Email") {
                error2.innerHTML = "";
                error1.innerHTML = t;
                email.classList.add("red-border");
            } else if (t == "Email must be less than 100 characters") {
                error2.innerHTML = "";
                error1.innerHTML = t;
                email.classList.add("red-border");
            } else if (t == "Invalid email address") {
                error2.innerHTML = "";
                error1.innerHTML = t;
                email.classList.add("red-border");
            } else if (t == "Please Enter your Password") {
                error1.innerHTML = "";
                error2.innerHTML = t;
                email.classList.remove("red-border");
                pass.classList.add("red-border");
            } else if (t == "Password Must Have Between 8 and 20 Characters") {
                error1.innerHTML = "";
                error2.innerHTML = t;
                email.classList.remove("red-border");
                pass.classList.add("red-border");
            } else if (t == "Wrong password") {
                error1.innerHTML = "";
                error2.innerHTML = t;
                email.classList.remove("red-border");
                pass.classList.add("red-border");
            } else if (t == "Not a registered Email") {
                error2.innerHTML = "";
                error1.innerHTML = t;
                email.classList.add("red-border");
                pass.classList.remove("red-border");
            } else if (t == "Success") {
                error1.innerHTML = "";
                error2.innerHTML = "";
                email.classList.remove("red-border");
                pass.classList.remove("red-border");
                window.location = "index.php";
            } else if (t == "a1") {
                error1.innerHTML = "";
                error2.innerHTML = "";
                email.classList.remove("red-border");
                pass.classList.remove("red-border");
                window.location = "admin/adminPanel.php";
            } else if (t == "suspended") {
                error2.innerHTML = "";
                error1.innerHTML = "Sorry,Your account has been suspended";
                email.classList.add("red-border");
            }
        } else {
            var btn = document.getElementById("signinbtn");
            btn.innerHTML = "<div class='spinner-border spinner-border-sm text-light mt-1' role='status'><span class='visually-hidden'>Loading...</span></div>";
            btn.classList.remove("py-2");
            btn.classList.add("py-1");
        }
    };
    r.open("POST", "signinprocess.php", true);
    r.send(f);
}

function error_remove(x) {
    var email = document.getElementById("email");
    var pass = document.getElementById("pass");
    var error1 = document.getElementById("error1");
    var error2 = document.getElementById("error2");
    if (x == "e") {
        email.classList.remove("red-border");
        error1.innerHTML = "";

    }
    if (x == "p") {
        pass.classList.remove("red-border");
        error2.innerHTML = "";


    }
}

function signup() {
    var fn = document.getElementById("fn");
    var ln = document.getElementById("ln");
    var e = document.getElementById("e");
    var m = document.getElementById("m");
    var pa = document.getElementById("pa");
    var repa = document.getElementById("repa");
    var g = document.getElementById("g");

    var form = new FormData;
    form.append("fn", fn.value);
    form.append("ln", ln.value);
    form.append("e", e.value);
    form.append("m", m.value);
    form.append("pa", pa.value);
    form.append("repa", repa.value);
    form.append("g", g.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var btn = document.getElementById("signupbtn");
            btn.innerHTML = "<i class='icofont-key-hole'></i>&nbsp; Sign Up";
            btn.classList.add("py-2");
            btn.classList.remove("py-1");
            var text = r.responseText;
            if (text == "fn") {
                var fn_er = document.getElementById("fn_er");
                fn_er.innerHTML = "Enter Frst Name";
                fn.classList.add("red-border");
            } else if (text == "fn1") {
                var fn_er = document.getElementById("fn_er");
                fn_er.innerHTML = "Frst Name Is Too Long";
                fn.classList.add("red-border");
            } else if (text == "ln") {
                var fn_er = document.getElementById("ln_er");
                fn_er.innerHTML = "Enter Last Name";
                ln.classList.add("red-border");
            } else if (text == "ln1") {
                var fn_er = document.getElementById("ln_er");
                fn_er.innerHTML = "Last Name Is Too Long";
                ln.classList.add("red-border");
            } else if (text == "e") {
                var fn_er = document.getElementById("e_er");
                fn_er.innerHTML = "Enter Email";
                e.classList.add("red-border");
            } else if (text == "e1") {
                var fn_er = document.getElementById("e_er");
                fn_er.innerHTML = "Email Is Too Long";
                e.classList.add("red-border");
            } else if (text == "e2") {
                var fn_er = document.getElementById("e_er");
                fn_er.innerHTML = "Invalid Email";
                e.classList.add("red-border");
            } else if (text == "m") {
                var fn_er = document.getElementById("m_er");
                fn_er.innerHTML = "Enter Mobile";
                m.classList.add("red-border");
            } else if (text == "m1") {
                var fn_er = document.getElementById("m_er");
                fn_er.innerHTML = "Invalid Mobile Number";
                m.classList.add("red-border");
            } else if (text == "m2") {
                var fn_er = document.getElementById("m_er");
                fn_er.innerHTML = "Invalid Mobile Number";
                m.classList.add("red-border");
            } else if (text == "p1") {
                var fn_er = document.getElementById("pa_er");
                fn_er.innerHTML = "Enter Pasword";
                pa.classList.add("red-border");
            } else if (text == "p2") {
                var fn_er = document.getElementById("pa_er");
                fn_er.innerHTML = "Password Should be More Than 8 Characters";
                pa.classList.add("red-border");
            } else if (text == "p5") {
                var fn_er = document.getElementById("pa_er");
                fn_er.innerHTML = "Password Must contain number,letter and symbol";
                pa.classList.add("red-border");
            } else if (text == "p3") {
                var fn_er = document.getElementById("repa_er");
                fn_er.innerHTML = "Re-type Your Password";
                repa.classList.add("red-border");
            } else if (text == "p4") {
                var fn_er = document.getElementById("pa_er");
                fn_er.innerHTML = "Password Does not Match";
                repa.classList.add("red-border");
                pa.classList.add("red-border");
            } else if (text == "g") {
                alert("Invalid Gender Information. Some Thing Went Wrong !!");
                g.classList.add("red-border");
                // g.classList.add("red-border");
            } else if (text == "u1") {
                var fn_er = document.getElementById("e_er");
                fn_er.innerHTML = "This Email Already Exists";
                e.classList.add("red-border");
            } else if (text == "u2") {
                var fn_er = document.getElementById("m_er");
                fn_er.innerHTML = "This Mobile Number Already Exists";
                m.classList.add("red-border");
            } else {
                // alert(text);
                changetosignin();


                fn.value = "";
                ln.value = "";
                e.value = "";
                m.value = "";
                pa.value = "";
                repa.value = "";

            }
        } else {
            var btn = document.getElementById("signupbtn");
            btn.innerHTML = "<div class='spinner-border spinner-border-sm text-light mt-1' role='status'><span class='visually-hidden'>Loading...</span></div>";
            btn.classList.remove("py-2");
            btn.classList.add("py-1");
        }
    }
    r.open("POST", "signupProcess.php", true);
    r.send(form);

}

function errorRemove(x) {

    var fn_er = document.getElementById("fn_er");
    var ln_er = document.getElementById("ln_er");
    var e_er = document.getElementById("e_er");
    var m_er = document.getElementById("m_er");
    var pa_er = document.getElementById("pa_er");
    var repa_er = document.getElementById("repa_er");

    var fn = document.getElementById("fn");
    var ln = document.getElementById("ln");
    var e = document.getElementById("e");
    var m = document.getElementById("m");
    var pa = document.getElementById("pa");
    var repa = document.getElementById("repa");
    var g = document.getElementById("g");

    if (x == "f") {
        fn_er.innerHTML = "";
        fn.classList.remove("red-border");

    }
    if (x == "l") {
        ln_er.innerHTML = "";
        ln.classList.remove("red-border");

    }

    if (x == "e") {
        e_er.innerHTML = "";
        e.classList.remove("red-border");

    }
    if (x == "m") {
        m_er.innerHTML = "";
        m.classList.remove("red-border");

    }
    if (x == "p") {
        pa_er.innerHTML = "";
        pa.classList.remove("red-border");

    }
    if (x == "rp") {
        repa_er.innerHTML = "";
        repa.classList.remove("red-border");

    }



    g.classList.remove("red-border");

}

function goForgotPassword() {
    var email = document.getElementById("email");
    window.location = "forgotpassword.php?e=" + email.value;
}
// start email address enter part 

function forgotpass() {
    var email = document.getElementById("email");
    var error = document.getElementById("error");
    var form = new FormData;
    form.append("email", email.value);
    // viewverify(email);
    var load = document.getElementById("lodingbox");

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t)
            load.classList.add("d-none");

            if (t == "Please enter your email address") {
                email.style.borderBottom = "solid 1px red";
                error.innerHTML = t;
            } else if (t == "Email address not found") {
                email.style.borderBottom = "solid 1px red";

                error.innerHTML = t;
            } else if (t == "Success") {
                viewverify(email.value);

            }
        } else {
            load.classList.remove("d-none");
        }
    };
    r.open("POST", "forgotpassprocess.php", true);
    r.send(form);
}

function erroclear() {
    var error = document.getElementById("error");
    var email = document.getElementById("email");
    email.style.borderBottom = "solid 1px black";
    error.innerHTML = "";

}

function viewverify(email) {
    var form = new FormData();
    form.append("e", email);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var row = document.getElementById("row");
            var t = r.responseText;
            row.innerHTML = t;

        }
    };
    r.open("POST", "verificationcode.php", true);
    r.send(form);
}
// end email address enter part 
// start varification code part 
function getcode(email) {

    var code = document.getElementById("code");
    var form = new FormData;
    form.append("code", code.value);
    form.append("e", email);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            if (t == "Please enter your verification code") {
                var error1 = document.getElementById("error1");
                code.style.borderBottom = "solid 1px red";
                error1.innerHTML = t;
            } else if (t == "no") {
                var error1 = document.getElementById("error1");
                code.style.borderBottom = "solid 1px red";
                error1.innerHTML = "Wrong verification code";
            } else if (t == "yes") {
                viewnewpass(email);
            }
        }
    };
    r.open("POST", "getcode.php", true);
    r.send(form);

}

function erroclear1() {
    var error1 = document.getElementById("error1");
    var code = document.getElementById("code");
    code.style.borderBottom = "solid 1px black";
    error1.innerHTML = "";
}

function viewnewpass(email) {
    var f = new FormData;
    f.append("e", email);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var row = document.getElementById("row");
            var t = r.responseText;
            row.innerHTML = t;
        }
    };
    r.open("POST", "addnewpass.php", true);
    r.send(f);
}
// end varification code part 

// satrt new password set 
function updatepass(email) {
    var pass1 = document.getElementById("pass1");
    var pass2 = document.getElementById("pass2");
    var error1 = document.getElementById("error1");
    var error2 = document.getElementById("error2");
    var f = new FormData;
    f.append("pass1", pass1.value);
    f.append("pass2", pass2.value);
    f.append("e", email);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "Please Enter Your New Password") {
                error1.innerHTML = t;
                pass1.style.borderBottom = "solid 1px red";
            } else if (t == "Please Re-Type Your New Password") {
                pass2.style.borderBottom = "solid 1px red";
                error2.innerHTML = t;
            } else if (t == "Password Length Must Between 8 To 20") {
                pass1.style.borderBottom = "solid 1px red";
                error1.innerHTML = t;
            } else if (t == "Password Must Content At Least 1 Number") {
                pass1.style.borderBottom = "solid 1px red";
                error1.innerHTML = t;
            } else if (t == "Password And Re-type Password Does Not Match") {
                pass2.style.borderBottom = "solid 1px red";
                error2.innerHTML = t;

            } else if (t == "done") {
                window.location = "signinup.php";
            }

        }
    };
    r.open("POST", "addnewpassprocess.php", true);
    r.send(f);

}

function erroclear2() {
    var pass1 = document.getElementById("pass1");

    var error1 = document.getElementById("error1");

    error1.innerHTML = "";

    pass1.style.borderBottom = "solid 1px black";

}

function erroclear3() {

    var pass2 = document.getElementById("pass2");
    var error2 = document.getElementById("error2");

    error2.innerHTML = "";
    pass2.style.borderBottom = "solid 1px black";


}
// end new password set

var ani;
var b;
document.onreadystatechange = () => {
    b = document.getElementsByTagName("html")[0];

    b.style.overflow = "hidden";

    if (document.readyState === 'complete') {
        ani = setInterval(opac, 5);

    }
};

var op = 100;

function opac() {
    var load = document.getElementById("loadingscreen");
    load.style.opacity = op + '%';
    b = document.getElementsByTagName("html")[0];

    if (op == 0) {
        clearInterval(ani);
        load.style.display = "none";
        b.style.overflowY = "scroll";
    }
    op = op - 1;
}