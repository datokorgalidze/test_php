<?php



if (
    !empty($_POST["name"]) &&
    !empty($_POST["pohne"]) &&
    !empty($_POST["date"]) &&
    !empty($_POST["inputSymptoms"]) &&
    !empty($_POST["doctor"])&&
    !empty($_POST["department"])
) {
    echo $_POST["name"] . "<br>" .
         $_POST["pohne"] . "<br>" .
         $_POST["inputSymptoms"] . "<br>" .
         $_POST["date"] . "<br>" .
         $_POST["doctor"] . "<br>" .
         $_POST["department"]   . "<br>" .
         "Your reservation has been accepted" . "<br>";
} else {
    echo "You have not filled in all required fields";
}

