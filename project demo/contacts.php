<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проект</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h1 class="text-center">Контакти</h1>
    <hr>
    <div class="navigation">
        <a href="index.php">Начало</a>
        <a href="graphics.php">Графики</a>
        <a href="contacts.php">Контакти</a>
        <a href="about.php">За мен</a>
    </div>
    <div class="main">
        <h2 class="sub-heading">Свържете се с мен</h2>
        <form action="insert.php" method="post" id="contacts-form">
            <label for="username">Име и фамилия:</label>
            <input type="text" name="username" placeholder="Име и фамилия" id="username">
            <div id="username-errors"></div>
            <br>
            <label for="email">Email:</label>
            <input type="text" name="email" placeholder="Email" id="email">
            <div id="email-errors"></div>
            <br>
            <label for="comment">Коментар:</label>
            <textarea name="comment" id="comment" cols="30" rows="3"></textarea>
            <div id="comment-errors"></div>
            <br><br>
            <button id="submit-button" type="button">Изпрати коментара</button>
        </form>
        <br><br>
        <h2 class="sub-heading">Коментари</h2>
        <table id="contacts-table">
            <tr>
                <th>#</th>
                <th>Име и фамилия</th>
                <th>Email</th>
                <th>Коментар</th>
            </tr>
            <?php 
            $connection = mysqli_connect('localhost', 'root', '', 'project');
            $select_query = "SELECT * FROM `comments`";
            $comments = mysqli_query($connection, $select_query);
            mysqli_close($connection);
            if( mysqli_num_rows($comments) > 0 ){
                $num = 1;
                while($comment = mysqli_fetch_assoc($comments)){
                    ?>
                    <tr>
                        <td><?= $num++ ?></td>
                        <td><?= $comment['username'] ?></td>
                        <td><?= $comment['email'] ?></td>	
                        <td><?= $comment['comment'] ?></td>	

                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </div>

    <script src="script.js"></script>
</body>
</html>