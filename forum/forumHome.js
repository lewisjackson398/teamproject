function showDiscussions(cat_id){
    var html_id = "#cat_discussions_" + cat_id; 
    if($(html_id).css("display", "block") == 'block'){
        $(html_id).css("display", "none");
    }else{
        $(html_id).css("display", "block");
    }
}

function startDiscussion(cat_id){
    var html_id = "#cat_new_discussion_1" + cat_id;
    var button_id = "#startDiscussionButton_1" + cat_id;
    if($(html_id).css("display", "block") == 'block'){
        $(html_id).css("display", "none");
        $(button_id).text("Start Discussion");
    }else{
        $(html_id).css("display", "block");
        $(button_id).text("Cancel");
    }
    
}