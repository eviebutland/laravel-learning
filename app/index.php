<?php
$name = 'Evie';
echo $name;
?>

<html>
    <body>
        <main>
            <form action="/formHandler.php" method="post">
                <label for="firstname">Your first name</label>
                <input type="text" name="firstname" id="firstname">

                <label for="lastname">Your last name</label>
                <input type="text" name="lastname" id="lastname">

                <label for="favouritePet">Your favourite pet</label>
                <select id="favouritePet" name="favouritePet">
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="rabbit">Rabbit</option>
                </select>

                <button type="submit" name="submit">Submit</button>
            </form>
        </main>
    </body>
</html>