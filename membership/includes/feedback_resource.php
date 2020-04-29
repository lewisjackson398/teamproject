<?php
require_once("config.php");

if(isset($_POST["submit"]))
{
    //Store form data as variables.
    $user_id = $_POST['user_id'];
    $description = $_POST['description'];
    $priority = "";
    $count = 0;

    //Store the feedback description as an array of words.
    $description_words = explode(' ', $description);

    //Store target words as an array of words.
    $target_words = array("login", "error", "membership", "help", "cannot", "can not");
  

    //Loop through both arrays, if any of the target words are picked up, increase the variabe count.
    foreach($target_words as $target_word)
    {
        foreach($description_words as $description_word)
        {
            if(stripos($description_word, $target_word) !== false)
            {
                $count = $count + 1;
            }
        }
    }

    //If the count is greater than or equal to 1, set the priority to high, else set it to low.
    if($count >= 1)
    {
        $priority = "high";
    }
    else
    {
        $priority = "low";
    }

    //SQL statement for instering the feedback into tblfeedback
    $insert_feedback = "INSERT INTO tblfeedback (description, user_id, priority) VALUES ('$description', '$user_id', '$priority')"; 

    //Execute the above statement
    if(mysqli_query($link, $insert_feedback))
    {
        echo "Your feedback has been taken, thank you";
        echo "<br></br>";
    }
    else
    {
        echo "Sorry something went wrong with your feedback, please try again later";
        echo "<br></br>";
    }
}

?>