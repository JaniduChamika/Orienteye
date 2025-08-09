y = 0;

function change1() {
    var tb1 = document.getElementById("tbox1");
    var tb2 = document.getElementById("tbox2");
    var c = document.getElementById("content1");
    tb1.classList.add("active");
    tb2.classList.remove("active");

    c.innerHTML = "The vision of Orianteye Solutions is that we can do anything through support, commitment and hard work. And We are hoping to be a leading software company in the World.";


}

function change2() {
    var tb1 = document.getElementById("tbox1");
    var tb2 = document.getElementById("tbox2");
    var c = document.getElementById("content1");
    tb2.classList.add("active");
    tb1.classList.remove("active");

    c.innerHTML = "Our mission is to give the best outcome as they wanted with the latest techenology for our customers, And to  grow our community with their trust.";

}

function sendmail() {
    var fnameID = document.getElementById("fnameID");
    var lnameID = document.getElementById("lnameID");
    var mobileID = document.getElementById("mobileID");
    var msgID = document.getElementById("msgID");
    var error1 = document.getElementById("error1");
    var error2 = document.getElementById("error2");
    var error3 = document.getElementById("error3");
    var error4 = document.getElementById("error4");
    var fname = fnameID.value;
    var lname = lnameID.value;
    var mobile = mobileID.value;
    var msg = msgID.value;

    if (fname == "") {
        fnameID.classList.add("border-danger");
        lnameID.classList.remove("border-danger");
        mobileID.classList.remove("border-danger");
        msgID.classList.remove("border-danger");
        error1.innerHTML = "Please enter your first name";
        error2.innerHTML = "";
        error3.innerHTML = "";
        error4.innerHTML = "";
    } else if (lname == "") {
        fnameID.classList.remove("border-danger");
        lnameID.classList.add("border-danger");
        mobileID.classList.remove("border-danger");
        msgID.classList.remove("border-danger");
        error1.innerHTML = "";
        error2.innerHTML = "Please enter your last name";
        error3.innerHTML = "";
        error4.innerHTML = "";
    } else if (mobile == "") {
        fnameID.classList.remove("border-danger");
        lnameID.classList.remove("border-danger");
        mobileID.classList.add("border-danger");
        msgID.classList.remove("border-danger");
        error1.innerHTML = "";
        error2.innerHTML = "";
        error3.innerHTML = "Please enter your mobile number";
    } else if (msg == "") {
        fnameID.classList.remove("border-danger");
        lnameID.classList.remove("border-danger");
        mobileID.classList.remove("border-danger");
        msgID.classList.add("border-danger");
        error1.innerHTML = "";
        error2.innerHTML = "";
        error3.innerHTML = "";
        error4.innerHTML = "Please enter your message";
    } else {
        window.location = "mailto:you email ?subject=client%20Inconvenience&body=Client - " + fname + "%20" + lname + "%0D%0A %0D%0A" + msg + "%0D%0A %0D%0A" + "Contact me on - " + mobile;

    }

}

// /////////////////////////////////

/* ------------------------------------------------------------------------ *  
4 states per letter. Transparent, Line, Block and Visible.
These states are shuffled for a unique "decode" effect each time.
* ------------------------------------------------------------------------ */

function decodeText() {
    var text = document.getElementsByClassName('decode-text')[0];
    // debug with
    // console.log(text);
    // console.log(text.children.length);

    // assign the placeholder array its places
    var state = [];
    for (var i = 0, j = text.children.length; i < j; i++) {
        text.children[i].classList.remove('state-1', 'state-2', 'state-3');
        state[i] = i;
    }

    // shuffle the array to get new sequences each time
    var shuffled = shuffle(state);

    for (var i = 0, j = shuffled.length; i < j; i++) {
        var child = text.children[shuffled[i]];
        classes = child.classList;

        // fire the first one at random times
        var state1Time = Math.round(Math.random() * (2000 - 300)) + 50;
        if (classes.contains('text-animation')) {
            setTimeout(firstStages.bind(null, child), state1Time);
        }
    }
}

// send the node for later .state changes
function firstStages(child) {
    if (child.classList.contains('state-2')) {
        child.classList.add('state-3');
    } else if (child.classList.contains('state-1')) {
        child.classList.add('state-2')
    } else if (!child.classList.contains('state-1')) {
        child.classList.add('state-1');
        setTimeout(secondStages.bind(null, child), 100);
    }
}

function secondStages(child) {
    if (child.classList.contains('state-1')) {
        child.classList.add('state-2')
        setTimeout(thirdStages.bind(null, child), 100);
    } else if (!child.classList.contains('state-1')) {
        child.classList.add('state-1')
    }
}

function thirdStages(child) {
    if (child.classList.contains('state-2')) {
        child.classList.add('state-3')
    }

}

function shuffle(array) {
    var currentIndex = array.length,
        temporaryValue, randomIndex;

    // While there remain elements to shuffle...
    while (0 !== currentIndex) {
        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        // And swap it with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }
    return array;
}


// Demo only stuff
decodeText();

// beware: refresh button can overlap this timer and cause state mixups
setInterval(function() { decodeText(); }, 10000);

// //////////////////////

var speed = 10;

/* Call this function with a string containing the ID name to
 * the element containing the number you want to do a count animation on.*/
function incEltNbr(id) {
    elt = document.getElementById(id);
    endNbr = Number(document.getElementById(id).innerHTML);
    incNbrRec(0, endNbr, elt);
}

/*A recursive function to increase the number.*/
function incNbrRec(i, endNbr, elt) {
    if (i <= endNbr) {
        elt.innerHTML = i;
        setTimeout(function() { //Delay a bit before calling the function again.
            incNbrRec(i + 1, endNbr, elt);
        }, speed);
    }
}

/*Function called on button click*/
function incNbr() {
    incEltNbr("nbr");
    incEltNbr("nbr1");
    incEltNbr("nbr2");
    incEltNbr("nbr3");
}

incEltNbr("nbr");
incEltNbr("nbr1");
incEltNbr("nbr2");
incEltNbr("nbr3"); /*Call this funtion with the ID-name for that element to increase the number within*/

// ///////////////////////////////////////

$(document).ready(
    (function() {
        $(".client-single").on("click", function(event) {
            event.preventDefault();

            var active = $(this).hasClass("active_feedback");

            var parent = $(this).parents(".testi-wrap");

            if (!active) {
                var activeBlock = parent.find(".client-single.active_feedback ");

                var currentPos = $(this).attr("data-position");

                var newPos = activeBlock.attr("data-position");

                activeBlock
                    .removeClass("active_feedback")
                    .removeClass(newPos)
                    .addClass("inactive")
                    .addClass(currentPos);
                activeBlock.attr("data-position", currentPos);

                $(this)
                    .addClass("active_feedback")
                    .removeClass("inactive")
                    .removeClass(currentPos)
                    .addClass(newPos);
                $(this).attr("data-position", newPos);
            }
        });
    })(jQuery)
);