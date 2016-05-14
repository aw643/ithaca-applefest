<?php
    include('welcome.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Raleway%7CJura%7CQuicksand%7CSpecial+Elite%7CJulius+Sans+One%7CNixie+One%7CLove+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>
        <meta charset="UTF-8">
        <title>Ithaca's Annual Apple Festival!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../css/p3final.css">
        <!-- Creates a small icon for bookmarking purposes in the
        address bar of the broswer or tab area, depending which browser
        is used, Credits to Aha-Soft, http://www.iconempire.com/stock-icons/food-icons.htm of Iconspedia.-->
        <link rel="shortcut icon" type="image/x-icon" href="../images/appleicon.png">
        <link rel="icon" type="image/x-icon" href="../images/appleicon.png">
    </head>

    <body>
        <div id="wrapper">
            <div id="banner"><!--banner-->
                <img src="../images/banner.png" alt="Applefest Ithaca Commons">
            </div> <!--banner-->
            <div id="navbar"><!--navbar-->
                <?php
                    include('navbar.php');
                ?>
            </div><!--navbar-->

            <div id="content">
                <h2>If you want more information, please leave your contact information below:</h2>
                
                    <form action="contactus.php" method="POST">
                        <label>Name: <input type="text" name="name"></label><br>
                            <?php
                                if (!empty($nameErr)) {
                                    echo "<div>$nameErr</div>";
                                }
                            ?>
                        <label>E-mail: <input type="text" name="email"></label><br>
                            <?php
                                if(!empty($emailErr)) {
                                    echo "<div>$emailErr</div>";
                                }
                            ?>
                        <label>Phone Number: <input type="number" name="number"></label><br>
                            <?php
                                if(!empty($numberErr)) {
                                    echo "<div>$numberErr</div>";
                                }
                            ?>
                        <input type="submit" value="Send">
                        <input type="reset">
                        <br><br>
                        <?php
                            echo "Your Input:";
                            echo "<br>";
                            echo "Your name is $name.";
                            echo "<br>";
                            echo "Your e-mail is $email.";
                            echo "<br>";
                            echo "Your phone number is $number.";
                        ?>
                    </form>

                <h2>You can reach us at:</h2>
                <h4 class="center">
                Our mailing address:
                <br/>171 E. State St. PMB #136
                <br/>Center Ithaca
                <br/>Ithaca, NY 14850
                <br/>USA
                <br/><br/>OR<br/><br/>
                Phone:<br/>
                (607)-277-8679</h4>
            </div><!--content-->
        </div><!--wrapper-->
    </body>
</html>
