// Projects tab 
function changeProject(type, no) {

    var pp = document.getElementById("pp");
    var cp = document.getElementById("cp");

    var form = new FormData;
    form.append("t", type);
    form.append("page", no);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            document.getElementById("tabloader").innerHTML = text;
            if (type == 1) {
                cp.classList.remove("active_new");
                pp.classList.add("active_new");
            } else if (type == 2) {
                pp.classList.remove("active_new");
                cp.classList.add("active_new");
            }

        }


    }

    r.open("POST", "pendingcompletepro.php", true);
    r.send(form);

}


function statuschange(id1, pno) {
    var sele1 = document.getElementById("statusselector" + id1);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "done") {
                changeProject(1, 0)
            } else {


                sele1.innerHTML = text;
            }
        }
    }
    r.open("GET", "statusselect.php?s=" + sele1.value + "&id=" + id1, true);
    r.send();

}

function projectSearch(p) {
    var type;
    var id = document.getElementById("id_s");
    var user = document.getElementById("user_s");
    var category = document.getElementById("cat_s");
    var pending = document.getElementById("pp");
    var completed = document.getElementById("cp");

    if (pending.classList.contains("active_new")) {
        type = 1;
    } else if (completed.classList.contains("active_new")) {
        type = 2;
    } else {
        type = 0;
    }

    var form = new FormData;
    form.append("i", id.value);
    form.append("u", user.value);
    form.append("c", category.value);
    form.append("type", type);
    form.append("page", p);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            document.getElementById("tabloader").innerHTML = text;
        }
    }
    r.open("POST", "projectsearch.php", true);
    r.send(form);

}
var mod;

function projectModal() {
    var modal = document.getElementById("projectModal");

    var mod = new bootstrap.Modal(modal);
    mod.show(modal);
}


var mod1;

function projectModal2() {
    var projectaddupbtn = document.getElementById("projectaddupbtn");

    projectaddupbtn.innerHTML = "Add";
    projectaddupbtn.setAttribute("onclick", "addproject()");
    var modal = document.getElementById("projectModa2");

    var mod1 = new bootstrap.Modal(modal);
    mod1.show(modal);
}

function loadprojectmodeldata(id) {
    var proeditbtn = document.getElementById("proeditbtn");
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            var obj = JSON.parse(text);
            document.getElementById("m_cat").innerHTML = obj["category"];
            document.getElementById("m_pplan").innerHTML = obj["price_plan"];
            document.getElementById("m_price").innerHTML = obj["price"];
            document.getElementById("m_gdate").innerHTML = obj["given_date"];
            document.getElementById("m_estdate").innerHTML = obj["est_date"];
            document.getElementById("m_name").innerHTML = obj["name"];
            document.getElementById("m_contact").innerHTML = obj["contact"];
            document.getElementById("m_email").innerHTML = obj["email"];
            document.getElementById("m_issue").innerHTML = obj["issues"];
            document.getElementById("proeditbtn").setAttribute("onclick", "openeditModal('" + id + "')");
            projectModal();
        }
    }
    r.open("GET", "projectmodeldata.php?id=" + id, true);
    r.send();
}

function addproject() {
    var ue = document.getElementById("ue");
    var s = document.getElementById("s");
    var pt = document.getElementById("pt");
    var price = document.getElementById("price");
    var cd = document.getElementById("cd");

    var form = new FormData;
    form.append("ue", ue.value);
    form.append("s", s.value);
    form.append("pt", pt.value);
    form.append("p", price.value);
    form.append("cd", cd.value);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "u1") {
                var fn_er = document.getElementById("ue_er");
                fn_er.innerHTML = "Enter User Email";
                ue.classList.add("red-border");
            } else if (text == "s1") {
                var fn_er = document.getElementById("s_er");
                fn_er.innerHTML = "Select Service";
                s.classList.add("red-border");
            } else if (text == "pt1") {
                var fn_er = document.getElementById("pt_er");
                fn_er.innerHTML = "Select Plan Type";
                pt.classList.add("red-border");
            } else if (text == "p1") {
                var fn_er = document.getElementById("price_er");
                fn_er.innerHTML = "Enter the Price";
                price.classList.add("red-border");
            } else if (text == "ed1") {
                var fn_er = document.getElementById("cd_er");
                fn_er.innerHTML = "Enter Date";
                cd.classList.add("red-border");
            } else if (text == "d1") {
                var fn_er = document.getElementById("cd_er");
                fn_er.innerHTML = "Invalid Date";
                cd.classList.add("red-border");
            } else if (text == "u2") {
                var fn_er = document.getElementById("cd_er");
                fn_er.innerHTML = "Invalid Email";
                ue.classList.add("red-border");
            } else if (text == "Done") {
                // alert("Added Successfully");
                ue.value = ""
                s.value = "0"
                pt.value = "0"
                price.value = ""
                cd.value = ""
                changeProject(1, 0);
                tost("Project Added Successfull");
            }
        }
    }
    r.open("POST", "addproject.php", true);
    r.send(form);

}

function addpclear() {
    var ue = document.getElementById("ue");
    var s = document.getElementById("s");
    var pt = document.getElementById("pt");
    var price = document.getElementById("price");
    var cd = document.getElementById("cd");

    var ue_er = document.getElementById("ue_er");
    var s_er = document.getElementById("s_er");
    var pt_er = document.getElementById("pt_er");
    var price_er = document.getElementById("price_er");
    var cd_er = document.getElementById("cd_er");

    ue_er.innerHTML = "";
    s_er.innerHTML = "";
    pt_er.innerHTML = "";
    price_er.innerHTML = "";
    cd_er.innerHTML = "";
    ue.classList.remove("red-border");
    s.classList.remove("red-border");
    pt.classList.remove("red-border");
    price.classList.remove("red-border");
    cd.classList.remove("red-border");

}

function openeditModal(id) {
    var pDModclose = document.getElementById("pDModclose");
    var email = document.getElementById("ue");
    var est = document.getElementById("cd");
    var price = document.getElementById("price");
    var plan = document.getElementById("pt");
    var ser = document.getElementById("s");
    var projectaddupbtn = document.getElementById("projectaddupbtn");

    pDModclose.click();
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            var obj = JSON.parse(text);
            ser.value = obj["sid"];
            plan.value = obj["pid"];
            price.value = obj["price"];
            est.value = obj["est_date"];
            email.value = obj["email"];
            projectaddupbtn.innerHTML = "Update";
            projectaddupbtn.setAttribute("onclick", "updateProDetails('" + id + "')");
            projectModal3();
        }
    }
    r.open("GET", "projectmodeldata.php?id=" + id, true);
    r.send();
    // projectModal2();
}

var mod2;

function projectModal3() {

    var modal = document.getElementById("projectModa2");

    var mod2 = new bootstrap.Modal(modal);
    mod2.show(modal);
}

function closeAddUpModelPro() {
    var ue = document.getElementById("ue");
    var s = document.getElementById("s");
    var pt = document.getElementById("pt");
    var price = document.getElementById("price");
    var cd = document.getElementById("cd");
    ue.value = "";
    s.value = "0";
    pt.value = "0";
    price.value = "";
    cd.value = "";
}

function updateProDetails(id) {
    var email = document.getElementById("ue");
    var est = document.getElementById("cd");
    var price = document.getElementById("price");
    var plan = document.getElementById("pt");
    var ser = document.getElementById("s");
    var form = new FormData();
    form.append("pid", id);

    form.append("e", email.value);
    form.append("s", ser.value);
    form.append("p", plan.value);
    form.append("price", price.value);
    form.append("est", est.value);
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "Please enter email") {
                var fn_er = document.getElementById("ue_er");
                fn_er.innerHTML = "Enter Client Email";
                ue.classList.add("red-border");
            } else if (text == "Please enter price") {
                var fn_er = document.getElementById("price_er");
                fn_er.innerHTML = "Enter the Price";
                price.classList.add("red-border");
            } else if (text == "Please select est date") {
                var fn_er = document.getElementById("cd_er");
                fn_er.innerHTML = "Enter Date";
                cd.classList.add("red-border");
            } else if (text == "Please select Service") {
                var fn_er = document.getElementById("s_er");
                fn_er.innerHTML = "Select Service";
                s.classList.add("red-border");
            } else if (text == "Please select Plan") {
                var fn_er = document.getElementById("pt_er");
                fn_er.innerHTML = "Select Plan Type";
                pt.classList.add("red-border");
            } else if (text == "success") {
                // alert(text);
                tost("Project Updated Successfull");

            } else {
                tostdanger(text);

            }
        }
    }
    r.open("POST", "updateproject.php", true);
    r.send(form);

}

function colosrAddUpModelPro() {

}
// service tab
function setImage(x) {
    var selectImage = document.getElementById("selectImage" + x);
    var viewImage = document.getElementById("viewImage" + x);
    selectImage.onchange = function() {
        var file = this.files[0];
        url = window.URL.createObjectURL(file);
        viewImage.style.backgroundImage = "url('" + url + "')";
    }
}

function viewService() {
    var servicetable = document.getElementById("servicetable");

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            servicetable.innerHTML = text;
        }

    };
    r.open("GET", "viewService.php", true);
    r.send();
}

function saveService() {
    var sname = document.getElementById("sname");
    var selectImage1 = document.getElementById("selectImage1");
    var viewImage = document.getElementById("viewImage1");

    // alert(selectImage1.files[0])
    var form = new FormData();
    form.append("s", sname.value);
    form.append("img", selectImage1.files[0]);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "success") {
                sname.value = "";
                selectImage1.value = ""
                viewImage.style.backgroundImage = "url('..//resourse//appimg//default2.jpg')";
                viewService();
                refreshPlanDetails();
                tost("Service Saved Successfull");

            } else if (text == "Please Enter Service Name") {
                sname.classList.add("redborder");
            } else if (text == "Plase Select An Image") {
                viewImage.classList.add("redborder");

            } else if (text == "Please Select An SVG,JPEG,JPG or PNG Image") {
                viewImage.classList.add("redborder");

            } else {
                tostdanger(text);

            }
        }
    };
    r.open("POST", "saveService.php", true);
    r.send(form);
}

function erroclearservice1() {
    var sname = document.getElementById("sname");


    sname.classList.remove("redborder");

}

function errorclearimgService() {

    var viewImage = document.getElementById("viewImage1");
    viewImage.classList.remove("redborder");

}

function fillServiceForUpdate(x, path, name, ad) {
    var sname = document.getElementById("sname");
    var viewImage = document.getElementById("viewImage1");
    var servicebtn = document.getElementById("servicebtn");

    var clearServicebtn = document.getElementById("clearServicebtn");
    var actDactID = document.getElementById("actDactID");

    sname.value = name;
    viewImage.style.backgroundImage = "url('..//resourse//services//" + path + "')";
    servicebtn.innerHTML = "Update";
    servicebtn.setAttribute("onclick", "updateService(" + x + ")");

    clearServicebtn.classList.remove("d-none");
    if (ad == "1") {
        actDactID.classList.remove("bdbtngreen");
        actDactID.classList.add("reddbtn");
        actDactID.innerHTML = "Deactivate";
    } else if (ad == "2") {
        actDactID.classList.remove("reddbtn");
        actDactID.classList.add("bdbtngreen");
        actDactID.innerHTML = "Activate";
    }
    actDactID.setAttribute("onclick", "serviceStatusChange(" + x + ")");
    actDactID.classList.remove("d-none");

}

function updateService(x) {
    var sname = document.getElementById("sname");
    var selectImage1 = document.getElementById("selectImage1");
    var viewImage = document.getElementById("viewImage1");
    var servicebtn = document.getElementById("servicebtn");


    var clearServicebtn = document.getElementById("clearServicebtn");
    var actDactID = document.getElementById("actDactID");

    var form = new FormData();
    form.append("sid", x);

    form.append("s", sname.value);
    form.append("img", selectImage1.files[0]);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "success") {
                servicebtn.innerHTML = "Add";
                servicebtn.setAttribute("onclick", "saveService()");

                sname.value = "";
                selectImage1.value = ""
                viewImage.style.backgroundImage = "url('..//resourse//appimg//default2.jpg')";


                clearServicebtn.classList.add("d-none");
                actDactID.classList.add("d-none");
                actDactID.removeAttribute("onclick");
                viewService();
                refreshPlanDetails();
                tost("Service Updated Successfull");

            } else if (text == "Please Enter Service Name") {
                sname.classList.add("redborder");

            } else if (text == "Please Select An SVG,JPEG,JPG or PNG Image") {
                viewImage.classList.add("redborder");

            } else {
                tostdanger(text);

            }
        }
    };
    r.open("POST", "updateService.php", true);
    r.send(form);
}

function clearService() {
    var sname = document.getElementById("sname");

    var viewImage = document.getElementById("viewImage1");
    var clearServicebtn = document.getElementById("clearServicebtn");
    var actDactID = document.getElementById("actDactID");

    var servicebtn = document.getElementById("servicebtn");

    servicebtn.innerHTML = "Add";
    servicebtn.setAttribute("onclick", "saveService()");
    sname.value = "";
    viewImage.style.backgroundImage = "url('..//resourse//appimg//default2.jpg')";
    clearServicebtn.classList.add("d-none");
    actDactID.classList.add("d-none");
    actDactID.removeAttribute("onclick");
    errorclearimgService();
    erroclearservice1();
}

function serviceStatusChange(x) {
    var actDactID = document.getElementById("actDactID");

    var form = new FormData();
    form.append("sid", x);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "deactivated") {
                actDactID.classList.remove("reddbtn");
                actDactID.classList.add("bdbtngreen");
                actDactID.innerHTML = "Activate";

                viewService();

            } else if (text == "activated") {
                actDactID.classList.add("reddbtn");
                actDactID.classList.remove("bdbtngreen");
                actDactID.innerHTML = "Deactivate";

                viewService();

            } else {
                tostdanger(text);

            }

        }
    };
    r.open("POST", "changeServiceStatus.php", true);
    r.send(form);
}

function getPlanDetails() {
    var plandetailboxID = document.getElementById("plandetailboxID");
    var sSelector = document.getElementById("sSelector");
    var planSelector = document.getElementById("planSelector");

    var form = new FormData();
    form.append("s", sSelector.value);
    form.append("p", planSelector.value);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            plandetailboxID.innerHTML = text;
        }
    };
    r.open("POST", "getPlanDetails.php", true);
    r.send(form);
}

function refreshPlanDetails() {
    var plandetailboxID = document.getElementById("plandetailboxID");

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            plandetailboxID.innerHTML = text;
        }
    };
    r.open("GET", "getPlanDetails.php", true);
    r.send();
}

function addPlanDetails() {
    var sSelector = document.getElementById("sSelector");
    var planSelector = document.getElementById("planSelector");
    var planPriceID = document.getElementById("planPriceID");
    var planDesID = document.getElementById("planDesID");
    var form = new FormData();
    form.append("sid", sSelector.value);
    form.append("pid", planSelector.value);
    form.append("price", planPriceID.value);
    form.append("con", planDesID.value);
    form.append("w", "add");


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "plan added") {
                sSelector.value = "0";
                planSelector.value = "0";
                planPriceID.value = "";
                planDesID.value = "";
                tost("Plan Added Successfull");

            } else if (text == "Please enter plan price") {
                planPriceID.classList.add("redborder");
            } else if (text == "Please enter plan description") {
                planDesID.classList.add("redborder");

            } else if (text == "Already added plan") {
                tostdanger(text);


            } else {
                tostdanger(text);


            }

        }
    };
    r.open("POST", "addUpPlanDetails.php", true);
    r.send(form);

}

function clearerroserviPrice() {
    var planPriceID = document.getElementById("planPriceID");

    planPriceID.classList.remove("redborder");

}

function clearerroserviDescrip() {

    var planDesID = document.getElementById("planDesID");
    planDesID.classList.remove("redborder");


}

function updatePlanDetails() {
    var sSelector = document.getElementById("sSelector");
    var planSelector = document.getElementById("planSelector");
    var planPriceID = document.getElementById("planPriceID");
    var planDesID = document.getElementById("planDesID");
    var form = new FormData();
    form.append("sid", sSelector.value);
    form.append("pid", planSelector.value);
    form.append("price", planPriceID.value);
    form.append("con", planDesID.value);
    form.append("w", "up");


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "Plan Updated") {
                sSelector.value = "0";
                planSelector.value = "0";
                planPriceID.value = "";
                planDesID.value = "";
                tost("Plan Update Successfull");

            } else if (text == "Please enter plan price") {
                planPriceID.classList.add("redborder");
            } else if (text == "Please enter plan description") {
                planDesID.classList.add("redborder");

            } else {
                tostdanger(text);


            }

        }
    };
    r.open("POST", "addUpPlanDetails.php", true);
    r.send(form);

}
// issuse tab 
function issuse() {
    var projectid = document.getElementById("projectid");
    var row = document.getElementById("v-pills-Issuse");
    var name = document.getElementById("name");
    var mobile = document.getElementById("mobile");
    var category = document.getElementById("category");
    var projectplan = document.getElementById("projectplan");

    var f = new FormData();
    f.append("projectid", projectid.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Please enter your project id.") {
                projectid.classList.add("border-danger");
                name.value = "";
                mobile.value = "";
                category.value = "";
                projectplan.value = "";
                // alert(t);
            } else if (t == "This project has no issues yet.") {
                projectid.classList.remove("border-danger");
                name.value = "";
                mobile.value = "";
                category.value = "";
                projectplan.value = "";
                alert("id is not valid");
                issuse2();

            } else {
                projectid.classList.remove("border-danger");
                row.innerHTML = t;
            }
        }
    };
    r.open("POST", "issuse.php", true);
    r.send(f);
}

function issuse2() {
    var projectid = document.getElementById("projectid");
    var row = document.getElementById("v-pills-Issuse");
    var f = new FormData();
    f.append("projectid", projectid.value);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            row.innerHTML = t;
        }
    };
    r.open("POST", "issuse2.php", true);
    r.send(f);
}

function removeissuseborder() {
    var projectid = document.getElementById("projectid");
    projectid.classList.remove("border-danger");
}



function loadisuse(description, id, s) {
    var description = description;

    var textarea = document.getElementById("textarea");
    textarea.innerHTML = description;
    var solvedbtn = document.getElementById("solvedbtn");
    solvedbtn.classList.remove("disabled");
    var issuseAddbtn = document.getElementById("issuseAddbtn");
    issuseAddbtn.innerHTML = "Update";
    issuseAddbtn.setAttribute("onclick", "updateisuse(" + id + ")");
    solvedbtn.setAttribute("onclick", "solved(" + id + ")");
    if (s == "2") {
        solvedbtn.classList.add("disabled");
    }
}

function updateisuse(id) {
    var textarea = document.getElementById("textarea");
    var text = textarea.value;
    var id = id;
    var text = text;
    // alert(id);
    // alert(text);
    // alert("ok");

    var f = new FormData();
    f.append("id", id);
    f.append("text", text);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "done") {
                // alert("your issuse updated.");
                issuse();
                tost("Issues Updated Successfull");

            } else {
                tostdanger(t);
            }
        };
    }
    r.open("POST", "updateisuse.php", true);
    r.send(f);
}

function solved(id) {
    var id = id;
    var solvedbtn = document.getElementById("solvedbtn");
    var f = new FormData();
    f.append("id", id);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert("solved");
            tost("Great!,Issues Solved");

            solvedbtn.classList.add("disabled");
        }
    }
    r.open("POST", "updatesoled.php", true);
    r.send(f);
    issuse();
}

function addisuse(id) {
    var id = id;
    var textarea = document.getElementById("textarea");
    var f = new FormData();
    f.append("id", id);
    f.append("textarea", textarea.value);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert("Add new issue");
            if (t == "success") {
                issuse();
                tost("Issues Added Successfull");
            } else {
                tostdanger(t);

            }


        }
    }
    r.open("POST", "addnewissueprocess.php", true);
    r.send(f);
}
// employee tab 
function loademployee(page) {

    var se = document.getElementById("emps");

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            document.getElementById("emptable").innerHTML = text;
        }
    }
    r.open("GET", "loademployee.php?page=" + page + "&s=" + se.value, true);
    r.send();

}

function changeemployee(eid, pn) {
    var ty = document.getElementById("emp_s" + eid);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "done") {
                loademployee(pn);
            }
        }
    }

    r.open("GET", "empstatchange.php?s=" + ty.value + "&id=" + eid, true);
    r.send();

}

// user tab 
function loadusers(p) {
    var se = document.getElementById("user_search");

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            document.getElementById("userstab").innerHTML = text;
        }
    }
    r.open("GET", "loadusers.php?page=" + p + "&s=" + se.value, true);
    r.send();
}

function cangestate(uid) {

    var btn = document.getElementById("blockbtn" + uid);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text == "2") {
                btn.classList.add("redbtn");
                btn.classList.remove("bdbtngreen");
                btn.innerHTML = "<i class='icofont-unlock'></i>";
            } else if (text == "1") {
                btn.classList.remove("redbtn");
                btn.classList.add("bdbtngreen");
                btn.innerHTML = "<i class='icofont-unlocked'></i>";
            }
        }
    }
    r.open("GET", "blockusers.php?uid=" + uid, true);
    r.send();
}
// var userID;
var refresh;

function refreshUserChat(u) {
    userID = u;
    refresh = setInterval(getMsgUser, 100);
    var sendmsgbtn = document.getElementById("sendmsgbtn");
    sendmsgbtn.setAttribute("onclick", "sendMsg(" + u + ")");
    msgModal();

}

function stoprefrsh() {
    clearInterval(refresh);
}

function getMsgUser() {

    var chatboxuser = document.getElementById("chatboxuser");
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            chatboxuser.innerHTML = text;
        }
    };
    r.open("GET", "UserChat.php?id=" + userID, true);
    r.send();
}

function sendMsg(to) {
    var msg = document.getElementById("msgtxt");
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);
            if (text == "success") {
                msg.value = "";
            }
        }
    };
    r.open("GET", "sendMsg.php?m=" + msg.value + "&to=" + to, true);
    r.send();
}
// var msgmod;

function msgModal() {
    var modal = document.getElementById("msgmodal");

    var msgmod = new bootstrap.Modal(modal);
    msgmod.show(modal);
}
// News tab 
function addNews() {
    var title = document.getElementById("newstitle");
    var img = document.getElementById("selectImage2");
    var com = document.getElementById("newscon");
    var viewImage2 = document.getElementById("viewImage2");
    var form = new FormData();
    form.append("t", title.value);
    form.append("i", img.files[0]);
    form.append("c", com.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);
            if (text == "success") {
                refreshNews();
                clearNews(1);

            } else if (text == "Please Enter News Title") {
                title.classList.add("redborder");
            } else if (text == "Title character length must be less than 20") {
                title.classList.add("redborder");

            } else if (text == "Please Enter News Description") {
                com.classList.add("redborder");

            } else if (text == "Plase Select An Image") {
                viewImage2.classList.add("redborder");

            } else if (text == "Please Select An SVG,JPEG,JPG or PNG Image") {
                viewImage2.classList.add("redborder");

            } else if (text == "success") {
                // alert(text);
                tost("News Added Successfull");

            } else {
                // alert(text);
                tostdanger(text);

            }
        }

    };
    r.open("POST", "addNews.php", true);
    r.send(form);
}

function clearerroNewstitle() {
    var title = document.getElementById("newstitle");
    title.classList.remove("redborder");

}

function clearerroNewsDes() {
    var com = document.getElementById("newscon");
    com.classList.remove("redborder");

}

function clearerroNewsimg() {
    var viewImage2 = document.getElementById("viewImage2");
    viewImage2.classList.remove("redborder");

}

function refreshNews() {
    var newscontentBox = document.getElementById("newscontentBox");
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            newscontentBox.innerHTML = text;
        }

    };
    r.open("POST", "newsrefresh.php", true);
    r.send();
}

function getNews(id) {
    var title = document.getElementById("newstitle");
    var viewImage2 = document.getElementById("viewImage2");
    var content = document.getElementById("newscon");
    var adupnewsBtn = document.getElementById("adupnewsBtn");


    var f = new FormData();
    f.append("id", id)

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text)
            var d = JSON.parse(text);
            title.value = d["topic"];
            viewImage2.style.backgroundImage = "url('..//resourse//news//" + d["img_path"] + "')";
            content.value = d["details"];
            adupnewsBtn.setAttribute("onclick", "updateNews(" + d["id"] + ")");
            adupnewsBtn.innerHTML = "Update"
            adupnewsBtn.classList.remove("disabled");
            // alert(d["id"])
        }
    };
    r.open("POST", "getNews.php", true);
    r.send(f)

}

function updateNews(x) {
    var title = document.getElementById("newstitle");
    var img = document.getElementById("selectImage2");
    var com = document.getElementById("newscon");
    var viewImage2 = document.getElementById("viewImage2");

    var form = new FormData();
    form.append("t", title.value);
    form.append("i", img.files[0]);
    form.append("c", com.value);
    form.append("nid", x);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);
            if (text == "success") {
                refreshNews();
                document.getElementById("newsclearbtn").click();
                // clearNews(1);
                tost("News Updated Successfull");

            } else if (text == "Please Enter News Title") {
                title.classList.add("redborder");
            } else if (text == "Title character length must be less than 20") {
                title.classList.add("redborder");

            } else if (text == "Please Enter News Description") {
                com.classList.add("redborder");

            } else if (text == "Please Select An SVG,JPEG,JPG or PNG Image") {
                viewImage2.classList.add("redborder");

            } else if (text == "success") {
                // alert(text);
                tost("News Updated Successfull");

            } else {
                tostdanger(text);
                // alert(text);
            }
        }

    };
    r.open("POST", "updateNews.php", true);
    r.send(form);
}

function clearNews(x) {
    var title = document.getElementById("newstitle");
    var img = document.getElementById("selectImage2");
    var com = document.getElementById("newscon");
    var viewImage2 = document.getElementById("viewImage2");
    title.value = "";
    img.value = "";
    com.value = "";
    viewImage2.style.backgroundImage = "url('..//resourse//appimg//default2.jpg')";
    var adupnewsBtn = document.getElementById("adupnewsBtn");
    adupnewsBtn.innerHTML = "Add";

    if (x >= 3) {
        adupnewsBtn.classList.add("disabled");
    } else {
        adupnewsBtn.setAttribute("onclick", "addNews()");
    }
    clearerroNewstitle();
    clearerroNewsDes();
    clearerroNewsimg();
}


// scroll div 
function doo(x) {
    // if (x == 1) {
    const slider = document.querySelector('.scroll' + x);
    // wheel scroll start

    const scrollContainer = document.querySelector(".scroll" + x);

    scrollContainer.addEventListener("wheel", (evt) => {
        evt.preventDefault();
        scrollContainer.scrollLeft += evt.deltaY;
    });
    // wheel scroll end

    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
        isDown = false;
    });
    slider.addEventListener('mouseup', () => {
        isDown = false;
    });
    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 2; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
        console.log(walk);
    });

}

function adminregister() {
    var fn = document.getElementById("fn");
    var ln = document.getElementById("ln");
    var e = document.getElementById("e");
    var g = document.getElementById("g");
    var p = document.getElementById("p");
    var cp = document.getElementById("cp");
    var m = document.getElementById("m");
    var po = document.getElementById("po");

    var form = new FormData;
    form.append("fn", fn.value);
    form.append("ln", ln.value);
    form.append("e", e.value);
    form.append("g", g.value);
    form.append("p", p.value);
    form.append("cp", cp.value);
    form.append("m", m.value);
    form.append("po", po.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "n1") {
                var fn_er = document.getElementById("fn_er");
                fn_er.innerHTML = "Enter Frst Name";
                fn.classList.add("red-border");
            } else if (text == "n2") {
                var fn_er = document.getElementById("fn_er");
                fn_er.innerHTML = "Frst Name Is Too Long";
                fn.classList.add("red-border");
            } else if (text == "n3") {
                var fn_er = document.getElementById("ln_er");
                fn_er.innerHTML = "Enter Last Name";
                ln.classList.add("red-border");
            } else if (text == "n4") {
                var fn_er = document.getElementById("ln_er");
                fn_er.innerHTML = "Last Name Is Too Long";
                ln.classList.add("red-border");
            } else if (text == "e1") {
                var fn_er = document.getElementById("e_er");
                fn_er.innerHTML = "Enter Email";
                e.classList.add("red-border");
            } else if (text == "e2") {
                var fn_er = document.getElementById("e_er");
                fn_er.innerHTML = "Email Is Too Long";
                e.classList.add("red-border");
            } else if (text == "e3") {
                var fn_er = document.getElementById("e_er");
                fn_er.innerHTML = "Invalid Email";
                e.classList.add("red-border");
            } else if (text == "m1") {
                var fn_er = document.getElementById("m_er");
                fn_er.innerHTML = "Enter Mobile";
                m.classList.add("red-border");
            } else if (text == "m2") {
                var fn_er = document.getElementById("m_er");
                fn_er.innerHTML = "Invalid Mobile Number";
                m.classList.add("red-border");
            } else if (text == "m3") {
                var fn_er = document.getElementById("m_er");
                fn_er.innerHTML = "Invalid Mobile Number";
                m.classList.add("red-border");
            } else if (text == "p1") {
                var fn_er = document.getElementById("p_er");
                fn_er.innerHTML = "Enter Pasword";
                p.classList.add("red-border");
            } else if (text == "p2") {
                var fn_er = document.getElementById("p_er");
                fn_er.innerHTML = "Password Should be More Than 8 Characters";
                p.classList.add("red-border");
            } else if (text == "p3") {
                var fn_er = document.getElementById("p_er");
                fn_er.innerHTML = "Password Must contain number,letter and symbol";
                p.classList.add("red-border");
            } else if (text == "p4") {
                var fn_er = document.getElementById("cp_er");
                fn_er.innerHTML = "Re-type Your Password";
                cp.classList.add("red-border");
            } else if (text == "p5") {
                var fn_er = document.getElementById("p_er");
                fn_er.innerHTML = "Password Does not Match";
                cp.classList.add("red-border");
                p.classList.add("red-border");
            } else if (text == "g1") {
                var fn_er = document.getElementById("g_er");
                fn_er.innerHTML = "Select Gender";
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
            } else if (text == "u3") {
                var fn_er = document.getElementById("p_er");

                fn_er.innerHTML = "Use a different Password";
                p.classList.add("red-border");

            } else {

                fn.value = "";
                ln.value = "";
                e.value = "";
                m.value = "";
                p.value = "";
                cp.value = "";
                g.value = "0";

            }
        }
    }

    r.open("POST", "adminregisterprocess.php", true);
    r.send(form);

}

function errorRemove(x) {

    var fn_er = document.getElementById("fn_er");
    var ln_er = document.getElementById("ln_er");
    var e_er = document.getElementById("e_er");
    var m_er = document.getElementById("m_er");
    var pa_er = document.getElementById("p_er");
    var repa_er = document.getElementById("cp_er");
    var g_er = document.getElementById("g_er");

    var fn = document.getElementById("fn");
    var ln = document.getElementById("ln");
    var e = document.getElementById("e");
    var m = document.getElementById("m");
    var pa = document.getElementById("p");
    var repa = document.getElementById("cp");
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
    if (x == "cp") {
        repa_er.innerHTML = "";
        repa.classList.remove("red-border");

    }



    g.classList.remove("red-border");
    g_er.innerHTML = "";

}

function adminlogout() {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            if (text = '1') {
                window.location = "../signinup.php";
            }
        }
    }
    r.open("GET", "adminlogoutprocess.php", true);
    r.send();

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

// update counter

function updateCounter() {
    var inputwh = document.getElementById("inputwh");
    var inputcp = document.getElementById("inputcp");
    var inputhc = document.getElementById("inputhc");
    var inputhw = document.getElementById("inputhw");

    var form = new FormData;
    form.append("wh", inputwh.value);
    form.append("cp", inputcp.value);
    form.append("hc", inputhc.value);
    form.append("hw", inputhw.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            document.getElementById("cou_lo").innerHTML = t;
            tost("Counter Updated");
        }
    }

    r.open("POST", "counterupdateprocess.php", true);
    r.send(form);


}
// portfolio  

var imageurl = "";

function addportfolio() {
    var projectName = document.getElementById("pronameid");
    // var image = document.getElementById("proImageid");
    var link = document.getElementById("linkid");
    var proType = document.getElementById("protypeid");
    var srvice = document.getElementById("seviceid");
    var selectImage3 = document.getElementById("selectImage3");

    var them1 = document.getElementById("them1");
    var them2 = document.getElementById("them2");
    var them3 = document.getElementById("them3");
    // alert(imageurl);
    var viewImage3 = document.getElementById("viewImage3");
    var form = new FormData;
    form.append("projectName", projectName.value);
    form.append("link", link.value);
    form.append("srvice", srvice.value);
    form.append("proType", proType.value);

    form.append("them1", them1.value);
    form.append("them2", them2.value);
    form.append("them3", them3.value);
    form.append("image", imageurl);
    // alert(window.URL.createObjectURL(selectImage3.files[0]));


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);
            if (text == "success") {
                projectName.value = "";
                link.value = "";
                proType.value = "0";
                srvice.value = "0";
                viewImage3.style.backgroundImage = "url('..//resourse//appimg//default2.jpg')";
                selectImage3.value = "";
                imageurl = "";
                them1.value = "#000000";
                them2.value = "#000000";
                them3.value = "#000000";
                document.getElementById("contain").innerHTML = "";
                document.getElementById("cropbox").classList.add("d-none");
                document.getElementById("imageviewbox").classList.remove("d-none");
                portfolisearch(0)
                tost("Portfolio Added Success");
            } else {
                tostdanger(text);
            }

        }
    }
    r.open("POST", "addPortfolio.php", true);
    r.send(form);
}

function loadPortfoliomodela(id, page) {
    // var portfolioaddBtn = document.getElementById("portfolioaddBtn");
    var r = new XMLHttpRequest();
    document.getElementById("addportfolioh4").innerHTML = "Update Portfolio";
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            var obj = JSON.parse(text);
            document.getElementById("pronameid").value = obj["proName"];
            document.getElementById("linkid").value = obj["link"];
            document.getElementById("protypeid").value = obj["proType"];
            document.getElementById("seviceid").value = obj["service"];
            document.getElementById("them1").value = obj["theam1"];
            document.getElementById("them2").value = obj["theam2"];
            document.getElementById("them3").value = obj["theam3"];


            if (obj["img"] == "1") {
                document.getElementById("viewImage3").style.backgroundImage = "url('..//resourse//appimg//default2.jpg')";

            } else {
                document.getElementById("viewImage3").style.backgroundImage = "url('..//resourse//portfolio//" + obj["img"] + "')";

            }

            document.getElementById("portfolioaddBtn").setAttribute("onclick", "updatePortfolio('" + id + "," + page + "')");
            portfolioModalup(id);
        }
    }
    r.open("GET", "portfolioModeldata.php?id=" + id, true);
    r.send();
}

function portfolioModalup(id) {
    var portfolioaddBtn = document.getElementById("portfolioaddBtn");

    portfolioaddBtn.innerHTML = "Update";
    portfolioaddBtn.setAttribute("onclick", "updatePortfolio(" + id + ")");
    var modal = document.getElementById("portfoliomod");

    var mod1 = new bootstrap.Modal(modal);
    mod1.show(modal);
}

function portfolioModal1() {
    var portfolioaddBtn = document.getElementById("portfolioaddBtn");
    document.getElementById("addportfolioh4").innerHTML = "Add Portfolio";

    portfolioaddBtn.innerHTML = "Add";
    portfolioaddBtn.setAttribute("onclick", "addportfolio()");
    var modal = document.getElementById("portfoliomod");

    var mod1 = new bootstrap.Modal(modal);
    mod1.show(modal);
}

function closeAddUpModelportfolio() {
    document.getElementById("pronameid").value = "";
    document.getElementById("linkid").value = "";
    document.getElementById("protypeid").value = "0";
    document.getElementById("seviceid").value = "0";
    document.getElementById("selectImage3").value = "";

    document.getElementById("them1").value = "#000000";
    document.getElementById("them2").value = "#000000";
    document.getElementById("them3").value = "#000000";

    document.getElementById("viewImage3").style.backgroundImage = "url('..//resourse//appimg//default2.jpg')";
    document.getElementById("contain").innerHTML = "";
    document.getElementById("cropbox").classList.add("d-none");
    document.getElementById("imageviewbox").classList.remove("d-none");

}

function updatePortfolio(id, page) {
    var projectName = document.getElementById("pronameid");
    // var image = document.getElementById("proImageid");
    var link = document.getElementById("linkid");
    var proType = document.getElementById("protypeid");
    var srvice = document.getElementById("seviceid");
    var selectImage3 = document.getElementById("selectImage3");
    var them1 = document.getElementById("them1");
    var them2 = document.getElementById("them2");
    var them3 = document.getElementById("them3");
    var form = new FormData;
    form.append("projectName", projectName.value);
    form.append("link", link.value);
    form.append("proType", proType.value);
    form.append("srvice", srvice.value);
    form.append("id", id);

    form.append("them1", them1.value);
    form.append("them2", them2.value);
    form.append("them3", them3.value);
    form.append("image", imageurl);



    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);
            if (text == "success") {
                tost("Portfolio Updated Success");
                imageurl = "";
                portfolisearch(page)
                    // closeAddUpModelportfolio();
            } else {
                tostdanger(text);
            }
        }
    }
    r.open("POST", "updatePortfolio.php", true);
    r.send(form);
}

function portfolisearch(pg) {
    var portfoliotab = document.getElementById("portfoliotab");
    var pronameserch = document.getElementById("pronameserch");
    var caterport = document.getElementById("caterport");

    var form = new FormData;
    form.append("page", pg);
    form.append("proName", pronameserch.value);
    form.append("ser", caterport.value);
    // form.append("srvice", srvice.value);
    // form.append("image", image.value);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);
            portfoliotab.innerHTML = text;
        }
    }
    r.open("POST", "portfoliopro.php", true);
    r.send(form);
}

function addpt() {
    var pt = document.getElementById("inputpt");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "ept") {
                tost("Enter Project Type");
            } else {
                document.getElementById("countertable").innerHTML = t;
                pt.value = "";
            }
        }
    }

    r.open("GET", "addpt.php?pt=" + pt.value + "&t=" + 1, true);
    r.send();
}

function setforupdate(pt_name, pt_id) {
    var pt = document.getElementById("inputpt");
    var pt_b = document.getElementById("pt_ad_up");

    pt.value = pt_name;
    pt_b.setAttribute("onclick", "updatept(" + pt_id + ");");
    pt_b.innerHTML = "Update";

}

function updatept(id_pt) {
    var pt = document.getElementById("inputpt");
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            document.getElementById("countertable").innerHTML = t;
            pt.value = "";
            var pt_b = document.getElementById("pt_ad_up");


            pt_b.setAttribute("onclick", "addpt();");
            pt_b.innerHTML = "Add";
        }

    }

    r.open("GET", "addpt.php?pt=" + pt.value + "&t=" + 2 + "&pt_id=" + id_pt, true);
    r.send();
}
var imageurl2 = "";

function feedadd() {
    var email = document.getElementById("email");
    var name = document.getElementById("fn");
    var feed = document.getElementById("feed");
    var img = document.getElementById("imguploader");
    var img1 = document.getElementById("img1");

    var f = new FormData();
    f.append("email", email.value);
    f.append("name", name.value);
    f.append("feed", feed.value);
    f.append("img", imageurl2);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "done") {
                tost(t);
                email.value = "";
                name.value = "";
                feed.value = "";
                img1.src = "..//resourse//appimg//default2.jpg";
                imageurl2 = "";
                clearfeed();
            } else if (t == "updated") {
                tost(t);
                email.value = "";
                name.value = "";
                feed.value = "";
                img1.src = "..//resourse//appimg//default2.jpg";
                var btn = document.getElementById("btn");
                btn.innerHTML = "Add";
                var delbtn = document.getElementById("delbtn");
                delbtn.classList.add("d-none");
                imageurl2 = "";
                clearfeed();

            } else if (t == "updated2") {
                tost("updated");
                email.value = "";
                name.value = "";
                feed.value = "";
                img1.src = "..//resourse//appimg//default2.jpg";
                var btn = document.getElementById("btn");
                btn.innerHTML = "Add";
                var delbtn = document.getElementById("delbtn");
                delbtn.classList.add("d-none");
                imageurl2 = "";
                clearfeed();

            } else {
                tostdanger(t);
            }
        }
    };
    r.open("POST", "addfeed.php", true);
    r.send(f);
}

function changeImg() {
    var img = document.getElementById("imguploader");
    var img1 = document.getElementById("img1");
    img.onchange = function() {
        var file1 = this.files[0];
        var url = window.URL.createObjectURL(file1);
        img1.src = url;
    };
}

function getinfor() {
    var email = document.getElementById("email");
    var row = document.getElementById("row1");
    var name = document.getElementById("fn");
    var feed = document.getElementById("feed");
    var img1 = document.getElementById("img1");


    var f = new FormData();
    f.append("email", email.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "no feed") {

                // email.value = "";
                // name.value = "";
                // feed.value = "";
                img1.src = "..//resourse//appimg//default2.jpg";
                var btn = document.getElementById("btn");
                btn.innerHTML = "Add";
                var delbtn = document.getElementById("delbtn");
                delbtn.classList.add("d-none");

            } else {
                row.innerHTML = t;
            }

        }
    };
    r.open("POST", "getinfor.php", true);
    r.send(f);
}

function clearfeed() {
    var email = document.getElementById("email");
    var clerbtn = document.getElementById("clerbtn");
    var name = document.getElementById("fn");
    var feed = document.getElementById("feed");
    var img1 = document.getElementById("img1");

    email.value = "";
    name.value = "";
    feed.value = "";
    img1.src = "..//resourse//appimg//default2.jpg";
    var btn = document.getElementById("btn");
    btn.innerHTML = "Add";
    var delbtn = document.getElementById("delbtn");
    delbtn.classList.add("d-none");
    clerbtn.classList.add("d-none");
    imageurl2 = "";

}

function deleteinfor() {
    var email = document.getElementById("email");
    var name = document.getElementById("fn");
    var feed = document.getElementById("feed");
    var img1 = document.getElementById("img1");
    var f = new FormData();
    f.append("email", email.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "delete_done") {
                tost(t);
                email.value = "";
                name.value = "";
                feed.value = "";
                img1.src = "..//resourse//appimg//default2.jpg";
                var btn = document.getElementById("btn");
                btn.innerHTML = "Add";
                var delbtn = document.getElementById("delbtn");
                delbtn.classList.add("d-none");
                clearfeed();
            }
        }
    };
    r.open("POST", "deleteinfor.php", true);
    r.send(f);
}

// image //////////////////////////////////////////////////////////////////////////////////////////////////////////


function done() {

    $(document).ready(function() {
        var url;
        document.getElementById("selectImage3").onchange = function() {
            var file = this.files[0];
            url = window.URL.createObjectURL(file);
            // alert(url)
            document.getElementById("cropbox").classList.remove("d-none");
            document.getElementById("imageviewbox").classList.add("d-none");

            $('#contain').imageResizer({
                image: url,
                imgFormat: '3/2', // Formats: 3/2, 200x360, auto
                // circleCrop: true,
                // zoomable: true,
                // outBoundColor: 'white', // black, white
                btnDoneAttr: '.resize-done'
            }, function(imgResized) {
                // $('#move-stats').html('<h3>Resized Image</h3><img id="abcd" style="margin:10% auto;" src="' + imgResized + '">')
                document.getElementById("viewImage3").style.backgroundImage = "url('" + imgResized + "')";
                document.getElementById("cropbox").classList.add("d-none");
                document.getElementById("imageviewbox").classList.remove("d-none");
                imageurl = imgResized;
            })
        }
    })


}

function done2() {

    $(document).ready(function() {
        var url;
        document.getElementById("imguploader").onchange = function() {
            var file = this.files[0];
            url = window.URL.createObjectURL(file);
            // alert(url)
            document.getElementById("cropbox2").classList.remove("d-none");
            document.getElementById("imageviewbox2").classList.add("d-none");

            $('#contain2').imageResizer({
                image: url,
                imgFormat: '1/1', // Formats: 3/2, 200x360, auto
                // circleCrop: true,
                // zoomable: true,
                // outBoundColor: 'white', // black, white
                btnDoneAttr: '.resize-done2'
            }, function(imgResized) {
                // $('#move-stats').html('<h3>Resized Image</h3><img id="abcd" style="margin:10% auto;" src="' + imgResized + '">')
                document.getElementById("img1").src = imgResized;
                document.getElementById("cropbox2").classList.add("d-none");
                document.getElementById("imageviewbox2").classList.remove("d-none");
                imageurl2 = imgResized;
            })
        }
    })


}
clearfeed()