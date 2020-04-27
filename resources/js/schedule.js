/*

//search classes found in database
$('.search-box input[type="text"]').on("keyup input", function () {
    // Get input value on change
    var inputVal = $(this).val();
    var resultDropdown = $(this).siblings(".result");
    if (inputVal.length) {
        $.get("backend-search.php", {
            term: inputVal
        }).done(function (data) {
            // Display the returned data in browser
            resultDropdown.html(data);
        });
    } else {
        resultDropdown.empty();
    }
});
// Set search input value on click of result item
$(document).on("click", ".result p", function () {
    $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
    $(this).parent(".result").empty();
});
*/

// $(".buttons").on('click', 'a', function () {
//     event.preventDefault();
//     var classToShow = this.id.split('-')[1],
//         filter = classToShow === "all" ? 'div' : '.' + classToShow;
//     $(".table tbody tr td")
//         .children().show().addClass('active')
//         .not(filter).hide();
// });
// $(".buttons").on('click', '#choice-all', function () {
//     $(".table tbody tr td div").removeClass('active');
// });


function displayTwitterFeed() {
    $.getJSON("../twitter/returnHashtag.php", function (tweetdata) {

        let username = '';
        let message = '';



        $.each(tweetdata.statuses, function (i, tweet) {
            username = tweet.user.name;
            message = tweet.text;
            console.log(tweet);
            $("#tweet-list").append("<p>" + username + " tweeted: "
                + tweet.text + " " + "</p>");
            $("#tweet-list").append("<p>" + username + " tweeted: "
                + tweet.text + " " + "</p>");
        });
    })
};



function joinClass() {

    //button onclick display add/remove from class card
    var x = document.getElementById("active");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }

};

function row() {

    //button onclick display add/remove from class card
    var x = document.getElementById("addDelete");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }

};


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