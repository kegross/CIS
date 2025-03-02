<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
            <h1>Your Programmer Level</h1>
           <?php
                $num_languages = $_POST["number-languages"];
                if(!is_numeric($num_languages)){
                    print("<p>Hey, stop messing with my form!</p>");
                }
                elseif($num_languages == 0){
                    print("<p>I can't assess your level if you don't answer my questions!</p>");
                }
                elseif($num_languages < 2){
                    print("<p>You are a beginner programmer.</p>");
                } elseif($num_languages < 4){
                    print("<p>You are an intermediate programmer.</p>");
                } else{
                    print("<p>You are an advanced programmer.</p>");
                }
           ?>

           <h2>Your Contact Info</h2>
           <?php
                $name = $_POST["name"];
                $email = $_POST["email"];
                print("<p>Your name is $name and your email is $email.</p>");
            ?>

            <h2>How strong is your password?</h2>
            <?php
                $password = $_POST["password"];
                if(strlen($password)<8){
                    print("<p>Your password isn't long enough!</p>");
                }
                if($password == ""){
                    print("<p>You need to enter a password!</p>");
                }
            ?>

           <?php
           $user_opinion = $_POST["opinion"];
           if(strlen($user_opinion) > 100){
               print("<p>Wow, you are opinionated!</p>");
           }
           ?>
    </body>
</html>