<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
         <title>P1: Random Quotes</title>
         <link rel="stylesheet" href="./css/p1.css">
    </head>
    <body>
        <h1>Samer Maaliki</h1>
            <div id="left"></div>
        <div id="middle"><img src="./img/Samer.jpg" alt="Picture of Samer Maaliki"/>
            <h2>My Bio</h2>
            <p>
                I am currently a Senior Consultant at the Executive Council of Dubai.  Previously, I dabbled in iOS application development and prior to that I was a Senior Project Manager at Abiomed, a leading developer and manufacturer for cardiovascular devices.  I graduated from Boston University and from University of Miami with a BS and a MS in Biomedical Engineering, respectively.<br/>  
                When asked about my hobbies, I tell people that I love woodworking, playing guitar and sailing but I have no time for any of the above.</p>
            <br/>
        <h2>One of My Favorite Quotes</h2>
            <?php
        $quotes = array(
                "What do you need to start a business? Three simple things: know your product better than anyone, know your customer, and have a burning desire to succeed", 
                "The secret of change is to focus all your energy not on fighting the old but on building the new", 
                "When you innovate, you’ve got to be prepared for people telling you that you are nuts", 
                "Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time", 
                "If you can dream it, you can do it");

        $authors = array(
                "Dave Thomas",
                "Socrates",
                "Larry Elison",
                "Thomas Edison",
                "Walter Disney");
            
        $rnum = rand(0,4);
            
        echo "\"".$quotes[$rnum]."\" - ".$authors[$rnum];
        ?>
            </div>
    </body>
</html>