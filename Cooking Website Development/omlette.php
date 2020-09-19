<?php

try
{ 
    $db = new mysqli("localhost", "root", "", "omlette");    
} catch (Exception $exc)
{
    echo $exc->getTraceAsString();
}

if(isset($_POST['comment']))
{
    $comment = $_POST['comment'];
    
    $is_insert = $db->query("INSERT INTO `comment`(`comment`) VALUES ('$comment')");

    if($is_insert == True)
    {
        echo "<h2>Thanks, your valuable comment is posted</h2>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
    <Head>
        <title>www.sahilskitchen.com</title>
        <!--Stylesheet-->
        <link rel="stylesheet" href="css/omlette.css">
        <link rel="stylesheet" href="css/bootstrap-grid.css">
        <script src="https://kit.fontawesome.com/f04df7e7cc.js" crossorigin="anonymous"></script>
    </Head>
    <Body>
        <header>
            <h1>Bread Omlette Recipe</h1>
        </header>

        <section>
            <img src="img/bf/3.jpg">
        </section>
        <h3>Ingredients</h3>
        <ul>
            <li>Eggs- 2</li>
            <li>Bread- 1 slice</li>
            <li>Oil – 1 tablespoon</li>
            <li>Onion (Chopped)- 1 large</li>
            <li>Tomato (Chopped)- ½ to 2</li>
            <li>Capsicum (Chopped)- 2 tablespoon</li>
            <li> Green Chilli (Chopped)- 1 to 2</li>
            <li>Black paper powder– ¼ tablespoon (Optional)</li>
            <li>Salt- ⅓ tablespoon (Or according to your taste)</li>
        </ul>

        <h3>Method</h3>
        <ol>
            <li>Crack the eggs into a mixing bowl and mix it using a fork. </li>
            <li>Add all the vegetables. (Onion, tomato, capsicum  & green chill) </li>
            <li>Add black paper powder & salt.</li>
            <li>Mix everything well.</li>
            <li>Turn on the flame, heat a pan and add oil. </li>
            <li>Spread the oil evenly & let it heat. (You may use butter instead of oil)</li>
            <li>Pour the mixture on the hot pan. Let it be cooked for a few seconds.</li>
            <li>Place a bread slice at the center. Press the bread a little & fold all the corners. </li>
            <li>Keep the flame low. Flip it and cook it a bit.</li>
            <li>Turn off the flame and take it out in a serving plate.</li>
            <li>Ready to serve. </li>
        </ol>

        
        <footer class="footer">
            <form action="" method="POST">
                <textarea name="comment" name="comment" placeholder="Comment " rows="5" required></textarea><br>
                <button class="submit" >Comment</button> 
            </form>
        </footer>
    </body>
</html>