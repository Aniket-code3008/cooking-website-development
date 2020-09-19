<?php

try
{ 
    $db = new mysqli("localhost", "root", "", "my_comment");    
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
        <link rel="stylesheet" href="css/Sandwich.css">
        <link rel="stylesheet" href="css/bootstrap-grid.css">
        <script src="https://kit.fontawesome.com/f04df7e7cc.js" crossorigin="anonymous"></script>
    </Head>
    <Body>
        <header>
            <h1>Sandwich Recipe</h1>
        </header>

        <section>
            <img src="img/bf/1.jpg">
        </section>
        <h3>Ingredients</h3>
        <ul>
            <li>1 cup mayonnaise</li>
            <li>⅛ teaspoon ground black pepper</li>
            <li>⅛ teaspoon garlic powder</li>
            <li>⅛ teaspoon celery salt</li>
            <li>4 cups chopped leftover grilled chicken</li>
            <li>2 stalk (blank)s celery stalks, sliced</li>
            <li> ½ cup sweetened dried cranberries</li>
            <li>⅔ cup salted cashews</li>
            <li> 8 slices bread, toasted</li>
            <li>4 tablespoons mayonnaise</li>
            <li> 4 leaf (blank)s large red leaf lettuce leaves</li>
            <li>1 ripe tomato, sliced</li>
        </ul>

        <h3>Method</h3>
        <ol>
            <li>Whisk together 1 cup of mayonnaise, pepper, garlic powder, and celery salt until combined. </li>
            <li>Combine the chicken, celery, cranberries, and cashews in a large bowl. </li>
            <li>Pour the mayonnaise mixture over the chicken mixture and stir until evenly combined.</li>
            <li>Spread 1/2 tablespoon of mayonnaise on each slice of toasted bread.</li>
            <li>Divide the chicken salad between four of the slices of toast; top each with a lettuce leaf and a slice of tomato. </li>
            <li>Complete each sandwich with the remaining toast slices.</li>
        </ol>

        
        <footer class="footer">
            <form action="" method="POST">
                <textarea name="comment" name="comment" placeholder="Comment " rows="5" required></textarea><br>
                <button class="submit" >Comment</button> 
            </form>
        </footer>
    </body>
</html>