var r = document.querySelector(':root');

function themeChanger() {
    var themechangerID = document.getElementById("themechangerID");
    var homeID = document.getElementById("homeID");
    var ourservicetag = document.getElementById("ourservicetag");
    var contacttag = document.getElementById("contacttag");

    // Set the value of variable --blue to another value (in this case "lightblue")
    if (themechangerID.checked == true) {
        r.style.setProperty('--backtheme', 'black');
        r.style.setProperty('--tilesTheam', '#292929');
        r.style.setProperty('--textcolor', 'white');
        r.style.setProperty('--lightdarkTiles', '#4b4b4b');
        r.style.setProperty('--transbtnborder', ' solid 1px white');
        r.style.setProperty('--serviceimg', 'rgba(44, 44, 44, 0.253)');
        r.style.setProperty('--fotertheme', '#292929');
        r.style.setProperty('--white50', '#ffffff73');
        r.style.setProperty('--tranceack', '#000000');
        homeID.href = "index.php";
        contacttag.href = "contact.php";
        ourservicetag.href = "ourService.php";
        // r.style.setProperty('--sliderobject', 'rgba(0, 0, 0, 0.411)');


        // box1.style.setProperty('background-image', ' url("resourse/slider/webdis.jpg")');


    } else {
        r.style.setProperty('--backtheme', 'white');
        r.style.setProperty('--tilesTheam', 'white');
        r.style.setProperty('--textcolor', 'black');
        r.style.setProperty('--lightdarkTiles', 'white');
        r.style.setProperty('--transbtnborder', 'solid 1px black');
        r.style.setProperty('--serviceimg', 'rgba(255, 255, 255, 0)');
        r.style.setProperty('--fotertheme', 'white');
        r.style.setProperty('--white50', '#00000075');
        r.style.setProperty('--tranceack', '#00000000');

        homeID.href = "index.php?thw";
        ourservicetag.href = "ourService.php?thw";
        contacttag.href = "contact.php?thw";

        // r.style.setProperty('--sliderobject', 'rgba(255, 255, 255, 0.301)');

        // box1.style.setProperty('background-image', ' url("resourse/slider/webdislight.jpg")');

    }
}

function gopriceplan(id) {
    var themechangerID = document.getElementById("themechangerID");
    var pricetag = document.getElementById("pricetag" + id)
    if (themechangerID.checked == true) {
        pricetag.href = "pricingPlan.php?id=" + id;

    } else {
        pricetag.href = "pricingPlan.php?id=" + id + "&thw";

    }
}

function gopriceplan2(id) {
    var themechangerID = document.getElementById("themechangerID");
    var pricetag = document.getElementById("pricecard" + id)
    if (themechangerID.checked == true) {
        pricetag.href = "pricingPlan.php?id=" + id;

    } else {
        pricetag.href = "pricingPlan.php?id=" + id + "&thw";

    }
}

function gocontactus() {
    var themechangerID = document.getElementById("themechangerID");
    var contact1btn = document.getElementById("contact1btn");

    if (themechangerID.checked == true) {
        contact1btn.href = "contact.php";


    } else {
        contact1btn.href = "contact.php?thw";


    }
}

function signout() {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                location.reload();
            }
        }
    };

    r.open("GET", "signout.php", true);
    r.send();
}

function hidechat() {
    var box = document.getElementById("chatboxclient");
    var chatbtn = document.getElementById("chatbtn");
    // box.style.height = "0px";
    chatbtn.style.transitionDuration = "1s";

    box.classList.remove("chathight");
    chatbtn.classList.remove("chatbtnhide");

    setTimeout(
        function() {
            box.classList.add("d-none");

            chatbtn.style.transitionDuration = "0s";

        }, 1000
    );

}

function hidesmall() {
    var box = document.getElementById("chatboxclient");
    var chatbtn = document.getElementById("chatbtn2");
    chatbtn.style.transitionDuration = "500ms";

    // box.style.opacity = "0";
    box.classList.remove("chathight");
    chatbtn.classList.remove("chatbtnhide");

    setTimeout(
        function() {
            box.classList.add("d-none");
            chatbtn.style.transitionDuration = "0s";

        }, 500
    );

}

function openChat() {
    var box = document.getElementById("chatboxclient");
    box.classList.remove("d-none")
    var chatbtn = document.getElementById("chatbtn");
    chatbtn.style.transitionDuration = "500ms";
    chatbtn.classList.add("chatbtnhide");


    setTimeout(
        function() {
            box.classList.add("chathight");
            chatbtn.style.transitionDuration = "0s";


        }, 100
    );

}

function openChatSmaller() {
    var box = document.getElementById("chatboxclient");
    box.classList.remove("d-none")
    var chatbtn = document.getElementById("chatbtn2");
    chatbtn.classList.add("chatbtnhide");
    chatbtn.style.transitionDuration = "500ms";

    setTimeout(
        function() {
            box.classList.add("chathight");
            chatbtn.style.transitionDuration = "0s";


            // box.style.opacity = "1";

        }, 100
    );
}
var refresh;

function refreshChat() {
    refresh = setInterval(getchatcleint, 100);
}

function clearintChat() {
    clearInterval(refresh);
}

function getchatcleint() {
    var msgcontentID = document.getElementById("msgcontentID");
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            msgcontentID.innerHTML = text;
        }
    };
    r.open("GET", "clientChatRefresh.php", true);
    r.send();
}

function sendmsgcilent() {
    var msg = document.getElementById("msgclient");
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text)
            msg.value = "";
        }
    };
    r.open("GET", "sendMsgclient.php?m=" + msg.value, true);
    r.send();
}