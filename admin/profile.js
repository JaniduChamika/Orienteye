function update() {
    var fname = document.getElementById("fn");
    var des = document.getElementById("des");
    var email = document.getElementById("email");
    var lname = document.getElementById("ln");
    var mobile = document.getElementById("mobile");
    var img = document.getElementById("fileToUpload");
    var errorfname = document.getElementById("errorfname");
    var errorlname = document.getElementById("errorlname");
    var errormobile = document.getElementById("errormobile");

    var f = new FormData();
    f.append("fname", fname.value);
    f.append("email", email.value);
    f.append("lname", lname.value);
    f.append("mobile", mobile.value);
    f.append("img", img.files[0]);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText
            alert(t);
            if (t == "Please enter your first name") {
                fname.classList.add("border-danger");
                lname.classList.remove("border-danger");
                mobile.classList.remove("border-danger");
                errorfname.innerHTML = t;
                errorlname.innerHTML = "";
                errormobile.innerHTML = "";
            } else if (t == "First name must be less than 50 characters") {
                fname.classList.add("border-danger");
                lname.classList.remove("border-danger");
                mobile.classList.remove("border-danger");
                errorfname.innerHTML = t;
                errorlname.innerHTML = "";
                errormobile.innerHTML = "";
            } else if (t == "Please enter your last name") {
                lname.classList.add("border-danger");
                fname.classList.remove("border-danger");
                mobile.classList.remove("border-danger");
                errorlname.innerHTML = t;
                errorfname.innerHTML = "";
                errormobile.innerHTML = "";
            } else if (t == "Last name must be less than 50 characters") {
                lname.classList.add("border-danger");
                fname.classList.remove("border-danger");
                mobile.classList.remove("border-danger");
                errorlname.innerHTML = t;
                errorfname.innerHTML = "";
                errormobile.innerHTML = "";
            } else if (t == "Please enter your mobile number") {
                lname.classList.remove("border-danger");
                fname.classList.remove("border-danger");
                mobile.classList.add("border-danger");
                errorlname.innerHTML = "";
                errorfname.innerHTML = "";
                errormobile.innerHTML = t;
            } else if (t == "Invalid mobile number") {
                lname.classList.remove("border-danger");
                fname.classList.remove("border-danger");
                mobile.classList.add("border-danger");
                errorlname.innerHTML = "";
                errorfname.innerHTML = "";
                errormobile.innerHTML = t;
            } else if (t == "Please enter 10 digit mobile number") {
                lname.classList.remove("border-danger");
                fname.classList.remove("border-danger");
                mobile.classList.add("border-danger");
                errorlname.innerHTML = "";
                errorfname.innerHTML = "";
                errormobile.innerHTML = t;
            } else if (t == "done") {
                tost("Profile Updated Successfull");

            } else {
                tostdanger(t);

            }
        }
    };
    r.open("POST", "profileproccess.php", true);
    r.send(f);
}

function removeerror() {
    var fname = document.getElementById("fn");
    var email = document.getElementById("email");
    var lname = document.getElementById("ln");
    var mobile = document.getElementById("mobile");
    var img = document.getElementById("fileToUpload");
    var errorfname = document.getElementById("errorfname");
    var errorlname = document.getElementById("errorlname");
    var errormobile = document.getElementById("errormobile");

    lname.classList.remove("border-danger");
    fname.classList.remove("border-danger");
    mobile.classList.remove("border-danger");
    errorlname.innerHTML = "";
    errorfname.innerHTML = "";
    errormobile.innerHTML = "";
}

function changeImg() {
    var img = document.getElementById("fileToUpload");
    var view = document.getElementById("view");

    img.onchange = function() {
        var file = this.files[0];
        var url = window.URL.createObjectURL(file);
        view.style.backgroundImage = "url(" + url + ")";
    };
}

function changepass() {
    var email = document.getElementById("email").value;
    var span = document.getElementById("span")
    var button = document.getElementById("button");

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Success") {
                var m = document.getElementById("resetModelID");
                bm = new bootstrap.Modal(m);
                bm.show();
                span.classList.add("d-none");
                button.classList.remove("disabled");
            } else {
                tostdanger(t);

            }
        } else {
            span.classList.remove("d-none");
            button.classList.add("disabled");

        }
    };
    r.open("GET", "changepassproccess.php?email=" + email, true);
    r.send();

}

function showPassword1() {
    var np = document.getElementById("np");
    var npb = document.getElementById("npb");

    if (npb.innerHTML == '<i class="icofont-eye"></i>') {
        np.type = "text";
        npb.innerHTML = "<i class='icofont-eye-blocked'></i>";
    } else {
        np.type = "password";
        npb.innerHTML = '<i class="icofont-eye"></i>';
    }
}

function showPassword2() {
    var rnp = document.getElementById("rnp");
    var rnpb = document.getElementById("rnpb");

    if (rnpb.innerHTML == '<i class="icofont-eye"></i>') {
        rnp.type = "text";
        rnpb.innerHTML = "<i class='icofont-eye-blocked'></i>";
    } else {
        rnp.type = "password";
        rnpb.innerHTML = '<i class="icofont-eye"></i>';
    }
}

function resetPassword() {
    var email = document.getElementById("email");
    var newpass = document.getElementById("np");
    var retypepass = document.getElementById("rnp");
    var vc = document.getElementById("vc");
    var span = document.getElementById("span")
    var button = document.getElementById("button");

    var errornp = document.getElementById("errornp");
    var errorrnp = document.getElementById("errorrnp");
    var errorvc = document.getElementById("errorvc");

    var f = new FormData();
    f.append("email", email.value);
    f.append("newpass", newpass.value);
    f.append("retypepass", retypepass.value);
    f.append("vc", vc.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Success") {
                // alert(t);
                tost("Password Rest Successfull");
                span.classList.add("d-none");
                button.classList.remove("disabled");
                bm.hide();
            } else if (t == "Missing email address") {
                alert(t);
            } else if (t == "Please enter your new password") {
                newpass.classList.add("border-danger");
                retypepass.classList.remove("border-danger");
                vc.classList.remove("border-danger");

                errornp.innerHTML = t;
                errorrnp.innerHTML = "";
                errorvc.innerHTML = "";
                span.classList.add("d-none");
                button.classList.remove("disabled");
            } else if (t == "Password length must between 8 to 20") {
                newpass.classList.add("border-danger");
                retypepass.classList.remove("border-danger");
                vc.classList.remove("border-danger");

                errornp.innerHTML = t;
                errorrnp.innerHTML = "";
                errorvc.innerHTML = "";
                span.classList.add("d-none");
                button.classList.remove("disabled");
            } else if (t == "Please Re-type your password") {
                newpass.classList.remove("border-danger");
                retypepass.classList.add("border-danger");
                vc.classList.remove("border-danger");

                errornp.innerHTML = "";
                errorrnp.innerHTML = t;
                errorvc.innerHTML = "";
                span.classList.add("d-none");
                button.classList.remove("disabled");
            } else if (t == "Password and Re-type password does not match") {
                newpass.classList.remove("border-danger");
                retypepass.classList.add("border-danger");
                vc.classList.remove("border-danger");

                errornp.innerHTML = "";
                errorrnp.innerHTML = t;
                errorvc.innerHTML = "";
                span.classList.add("d-none");
                button.classList.remove("disabled");
            } else if (t == "Please enter your verification code") {
                newpass.classList.remove("border-danger");
                retypepass.classList.remove("border-danger");
                vc.classList.add("border-danger");

                errornp.innerHTML = "";
                errorrnp.innerHTML = "";
                errorvc.innerHTML = t;
                span.classList.add("d-none");
                button.classList.remove("disabled");
            } else if (t == "Invalid verification code") {
                newpass.classList.remove("border-danger");
                retypepass.classList.remove("border-danger");
                vc.classList.add("border-danger");

                errornp.innerHTML = "";
                errorrnp.innerHTML = "";
                errorvc.innerHTML = t;
                span.classList.add("d-none");
                button.classList.remove("disabled");
            } else {
                tostdanger(t);
            }
        }
    };
    r.open("POST", "resetchangepass.php", true);
    r.send(f);
}

function tost(content) {

    var boxnoteID = document.getElementById("boxnoteID");

    var mdiv = document.createElement("div");
    mdiv.className = "toast liveToast text-white bg-primary border-0";
    mdiv.setAttribute("role", "alert");
    mdiv.setAttribute("aria-live", "assertive");
    mdiv.setAttribute("aria-atomic", "true");
    mdiv.setAttribute("id", "liveToast");
    var div2 = document.createElement("div");
    div2.className = "d-flex";
    var divb = document.createElement("div");
    divb.className = "toast-body fs-6";
    divb.innerHTML = content;
    var btn = document.createElement("button");
    btn.innerHTML = '<i class="icofont-close-line"></i>';
    btn.className = "btn-close text-white d-flex me-2 m-auto";
    btn.setAttribute("type", "button");
    btn.setAttribute("data-bs-dismiss", "toast");
    btn.setAttribute("aria-label", "Close");

    div2.appendChild(divb);
    div2.appendChild(btn);
    mdiv.appendChild(div2);
    boxnoteID.appendChild(mdiv);

    var toastLiveExample2 = document.getElementsByClassName('liveToast')

    var c = toastLiveExample2.length;
    for (var x = 0; x < c; x++) {

        var toast = new bootstrap.Toast(toastLiveExample2[x])
        toast.show()

    }
    setTimeout(function() {
        document.getElementById("boxnoteID").firstElementChild.remove();
    }, 5000)


}

function tostdanger(content) {

    var boxnoteID = document.getElementById("boxnoteID");

    var mdiv = document.createElement("div");
    mdiv.className = "toast liveToast text-white bg-danger border-0";
    mdiv.setAttribute("role", "alert");
    mdiv.setAttribute("aria-live", "assertive");
    mdiv.setAttribute("aria-atomic", "true");
    mdiv.setAttribute("id", "liveToast");
    var div2 = document.createElement("div");
    div2.className = "d-flex";
    var divb = document.createElement("div");
    divb.className = "toast-body fs-6";
    divb.innerHTML = content;
    var btn = document.createElement("button");
    btn.innerHTML = '<i class="icofont-close-line"></i>';
    btn.className = "btn-close text-white d-flex me-2 m-auto";
    btn.setAttribute("type", "button");
    btn.setAttribute("data-bs-dismiss", "toast");
    btn.setAttribute("aria-label", "Close");

    div2.appendChild(divb);
    div2.appendChild(btn);
    mdiv.appendChild(div2);
    boxnoteID.appendChild(mdiv);

    var toastLiveExample2 = document.getElementsByClassName('liveToast')

    var c = toastLiveExample2.length;
    for (var x = 0; x < c; x++) {

        var toast = new bootstrap.Toast(toastLiveExample2[x])
        toast.show()

    }
    setTimeout(function() {
        document.getElementById("boxnoteID").firstElementChild.remove();
    }, 5000)


}