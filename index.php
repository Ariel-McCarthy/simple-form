
<!DOCTYPE html>
<html>
    <head>
        <link href = "CSS/styles.css" rel = "stylesheet" type = "text/css" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <title>Summer Lakehouse Reservation</title>
    </head>
    <body>
        <header>
            <h1>Summer Lakehouse Reservation Form</h1>
            <br/>
            <div2>*</div2>Required items are in <div2>red</div2>
        </header>

        <form action="index.php" method=GET>
            <div>First Name</div><input type=text name="FirstName" value="<?php if(isset($_GET['FirstName'])){echo $_GET['FirstName'];}?>"size=30>
            <div>Last Name</div><input type=text name="LastName" value="<?php if(isset($_GET['LastName'])){echo $_GET['LastName'];}?>" size=40><br/><br/>
            <div>Email Address</div><input type=text name="Email" value="<?php if(isset($_GET['Email'])){echo $_GET['Email'];}?>" size=60><br/><br/>
            
            <div>How many people will you be bringing?</div>
            <input type=radio name="amtGuests" value='0' <?php if($_GET['amtGuests']=='0'){echo 'checked';}?> > 0
            <input type=radio name="amtGuests" value='1' <?php if($_GET['amtGuests']=='1'){echo 'checked';}?> > 1
            <input type=radio name="amtGuests" value='2' <?php if($_GET['amtGuests']=='2'){echo 'checked';}?> > 2
            
            <br/><br/>
            
            <div1>Sign up to bring 3 items:</div1> (one of each)
            <br/>
            
            <div>Food:</div>
            <br/>
            <input type=radio name="food" value="for beans" <?php if($_GET['food']=='for beans'){echo 'checked';}?> > 3 cans of baked beans    
            <input type=radio name="food" value="for corn" <?php if($_GET['food']=='for corn'){echo 'checked';}?> > 5 ears of corn
            <br/>
            <input type=radio name="food" value="to bring food" <?php if($_GET['food']=='to bring food'){echo 'checked';}?> > other: (Be sure to bring enough for 10 servings)<br/><br/>
            <br/>
            
            <div>Drinks:</div> 
            <br/>
            <input type=radio name="drink" value="for water jugs" <?php if($_GET['drink']=='for water jugs'){echo 'checked';}?> > 2 galons of water     
            <input type=radio name="drink" value="for a 24pk" <?php if($_GET['drink']=='for a 24pk'){echo 'checked';}?> > 24 pack of water 
            <br/>
            <input type=radio name="drink" value="to bring drinks" <?php if($_GET['drink']=='to bring drinks'){echo 'checked';}?> > other: (Be sure to bring enough for 20 servings)<br/><br/>
            <br/>
            
            <div>Snacks/Dessert:</div> 
            <br/>
            <input type=radio name="snack" value="for chips" <?php if($_GET['snack']=='for chips'){echo 'checked';}?> > 2 large bags of chips      
            <input type=radio name="snack" value="for fruit" <?php if($_GET['snack']=='for fruit'){echo 'checked';}?> > 10 friuts (or 3 cans of fruit) 
            <br/>
            <input type=radio name="snack" value="to bring some snacks" <?php if($_GET['snack']=='to bring some snacks'){echo 'checked';}?>> other: (Be sure to bring enough for 10 servings)<br/><br/>
            
            <br/>
            <div1>Comments:</div1> 
            <input type="textarea" name="Comment1" value="<?php if(isset($_GET['Comment1'])){echo $_GET['Comment1'];}?>"rows=7 cols=60></textarea>
            
            <br/>
            Check here if you want to receive feedback <input type="checkbox" name="Comment" value="comment" <?php if($_GET['Comment']=='comment'){echo 'checked';}?> >
            
            <br/><br/>
            <input type="submit" value="Submit"/>
            
            <br/><br/><br/>
            
            <div3>Feedback:</div3>
            <br/>

            <?php
                if(empty($_GET["FirstName"]) || empty($_GET["LastName"])) 
                {
                    echo "Both first and last names are required <br/><br/>";
                }
                else 
                    echo "Thanks for entering your name!<br/><br/>";
                    
                if(empty($_GET["Email"])) 
                {
                    echo "Email address is required!<br/><br/>";
                }
                else
                {
                    echo "Okay! We've got your email address on file now.<br/>
                    We'll let you know if there are any updates.<br/><br/>" ;
                }
                if(!isset($_GET["amtGuests"])) 
                {
                    echo "Amount of guests must be accounted for. <br/><br/>";
                }
                else 
                {
                    switch($_GET["amtGuests"])
                    {
                        case 0: echo "No guests<br/><br/>";
                                break;
                        case 1: echo "You will be bringing one guest.<br/>Please bring extra food and drinks.<br/><br/>";
                                break;
                        case 2: echo "You will be bringing two guests.<br/>Please bring double of everything you sign up for.<br/><br/>";
                                break;
                    }
                }
    
                if(empty($_GET["drink"])) 
                {
                    echo "You must sign up for a drink. <br/><br/>";
                }
                else 
                    echo "Thanks for signing up " . $_GET["drink"] . "!<br/><br/>";
                    
                if(empty($_GET["food"])) 
                {
                    echo "You must sign up for a food. <br/><br/>";
                }
                else 
                    echo "Thanks for signing up " . $_GET["food"] . "!<br/><br/>";
                
                if(empty($_GET["snack"])) 
                {
                    echo "You must sign up for a snack or dessert. <br/><br/>";
                }
                else 
                    echo "Thanks for signing up " . $_GET["snack"] . "!<br/><br/>";
                    
                if(isset($_GET["Comment1"]))
                {
                    echo "Thanks for the feedback.<br/><br/>";
                }
                if(isset($_GET["Comment"]))
                {
                    echo "We'll be sure to get back to you regarding your comment.<br/><br/>";
                }
            ?>
        </form>
    </body>
</html>