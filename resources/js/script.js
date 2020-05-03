//w3 schools library for searching through table
"use strict";
var w3 = {};

w3.getElements = function (id) {
    if (typeof id == "object") {
        return [id];
    } else {
        return document.querySelectorAll(id);
    }
};

w3.filterHTML = function (id, sel, filter) {
    var a, b, c, i, ii, iii, hit;
    a = w3.getElements(id);
    for (i = 0; i < a.length; i++) {
        b = a[i].querySelectorAll(sel);
        for (ii = 0; ii < b.length; ii++) {
            hit = 0;
            if (b[ii].innerText.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
                hit = 1;
            }
            c = b[ii].getElementsByTagName("*");
            for (iii = 0; iii < c.length; iii++) {
                if (c[iii].innerText.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
                    hit = 1;
                }
            }
            if (hit == 1) {
                b[ii].style.display = "";

            } else {
                b[ii].style.display = "none";
            }
        }
    }
};

//facebook functionality
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

//twitter functionality
window.twttr = (function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
        t = window.twttr || {};
    if (d.getElementById(id)) return t;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);

    t._e = [];
    t.ready = function (f) {
        t._e.push(f);
    };

    return t;
}(document, "script", "twitter-wjs"));


twttr.widgets.createTimeline(
    {
        sourceType: "profile",
        screenName: "TwitterDev"
    },
    document.getElementById("tweet-timeline")
);

twttr.widgets.createShareButton(
    document.getElementById("tweet-buttons"),
    {
        size: "large",
        text: "custom share text",
        hashtags: "example,demo",
        via: "twitterdev"
    }
);


/*OLD code not needed anymore.

// function showActiveClasses() {

//     //button onclick display add/remove from class card
//     var x = document.getElementById("active");
//     if (x.style.display === "none") {
//         x.style.display = "block";
//     } else {
//         x.style.display = "none";
//     }

// };



// function showAddDeleteClasses() {

//     //button onclick display add/remove from class card
//     var x = document.getElementById("addDelete");
//     if (x.style.display === "none") {
//         x.style.display = "block";
//     } else {
//         x.style.display = "none";
//     }

// };

// function showAddClasses() {

//     //button onclick display add/remove from class card
//     var x = document.getElementById("add");
//     if (x.style.display === "block") {
//         x.style.display = "none";
//     } else {
//         x.style.display = "none";
//     }

// };

*/