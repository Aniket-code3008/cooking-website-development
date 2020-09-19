<?php

try
{ 
    $db = new mysqli("localhost", "root", "", "bhurji");    
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
        <link rel="stylesheet" href="css/Bhurji.css">
        <link rel="stylesheet" href="css/bootstrap-grid.css">
        <script src="https://kit.fontawesome.com/f04df7e7cc.js" crossorigin="anonymous"></script>
    </Head>
    <Body>
        <header>
            <h1>Bhurji Pav Recipe</h1>
        </header>

        <section>
            <img src="img/bf/2.jpg">
        </section>
        <h3>Ingredients</h3>
        <ul>
            <li>Egg beaten 6</li>
            <li>Pav 8</li>
            <li>Onion chopped 2 medium</li>
            <li>Tomato chopped 2 medium</li>
            <li>Salt to taste</li>
            <li>Red chilli powder 1 teaspoon</li>
            <li> Turmeric powder 1/4 teaspoon</li>
            <li>Green chilli chopped 4</li>
            <li>Fresh coriander leaves chopped 2 tablespoons</li>
            <li>For Serving</li>
            <li>Ghee 2-3 tablespoons</li>
        </ul>

        <h3>Method</h3>
        <ol>
            <li>Heat the ghee in a kadai; add the onions and sauté over medium heat for three to four minutes till light golden. 
            Add the tomatoes and salt and continue to cook over low heat for another two minutes. </li>
            <li>Add the chilli powder, turmeric powder and green chillies and cook, covered, for one minute, or till the ghee separates. Add the eggs and allow to cook for two minutes over medium heat without stirring. 
            Continue to cook the eggs for another two minutes, stirring continuously. </li>
            <li>Add the coriander leaves, cook for half a minute and transfer to a serving bowl. 
            Heat the butter in a thick-bottomed pan or a tawa.</li>
            <li>Split the pav horizontally in half and fry in the butter for half a minute, pressing down on the pav two or three times, 
            till crisp and light brown. Serve the bhurji accompanied by the pav.</li>
        </ol>

        
        <footer class="footer">
            <form action="" method="POST">
                <textarea name="comment" name="comment" placeholder="Comment " rows="5" required></textarea><br>
                <button class="submit" >Comment</button> 
            </form>
        </footer>
    </body>
</html>