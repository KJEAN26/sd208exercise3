<?php 
    if(isset($_POST["fixSubmit"])) {
        
        $clickBait = strtolower($_POST["clickBaitHeadline"]);
        
        
        $clickbait_words = array("scientists", "doctors", "hate", "stupid",
                                "weird", "simple", "trick", "shocked me", 
                                "you'll never believe", "hack", "epic", "unbelievable","beautiful","icmd love you");
        
       
        $replacemet_words = array("so-called scientists",
                            "so-called doctors", "aren't threatened by", 
                            "average", "completely normal", "ineffective",
                            "method", "is no different than the others",
                            "you won't really be surprised by", 
                            "slightly improve", "boring", "normal" , "You are not beautiful,Don't expect","I love someone else");
        
        /* Use the str_replace() function to replace the words uppercase the first letter in every word using ucwords() function store in a variable */
        $honestHeadline = str_replace($clickbait_words, $replacemet_words, $clickBait);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CLICKBAIT HEADLINES</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <style>
    .head1{
       color: pink;
       font-size: 50px;
       margin-top: 10%;
    }
    body{
        background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(1.jpg);
        background-color: pink;
        height:100vh ;
        background-size:cover ;
        background-position:center ;
        font-family: "Roboto",sans-serif;
    }

    h4{
        color:pink;
    }

    
    
    </style>
    </head>
    
    <body>
        <div class="container">
            <p class="head1">Want some cool stuff? Enjoy this one!</p>

             
            <div class="row">
                <form class="col-sm-8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder = "Enter click bait headline here." class="form-control input-lg" name="clickBaitHeadline">
                    </textarea>
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fixSubmit">Make Honest!</button>
                </form>
            </div>
            <br>
            <?php
                if(isset($_POST["fixSubmit"])) {
                    /* Use ucwords() function to uppercase first letter in every word, echo the variable on the screen */
                    echo "<strong class='text-danger'>Original Headline</strong><h4>".ucwords($clickBait)."</h4><hr>";   
                    
                    //echo the honest headline
                    echo "<strong class='text-success'>Honest Headline</strong><h4>".ucwords($honestHeadline)."</h4>";   
                }
            ?>
            
        </div>
        <!-- Bootstrap JS -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>