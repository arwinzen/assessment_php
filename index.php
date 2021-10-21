<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <title>Assessment</title>
 <link rel="stylesheet" href="">
 <style>
        *{ 
            padding: 0; 
            margin: 0; 
        }
        html {
            box-sizing: border-box;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Helvetica Neue", "Arial", sans-serif; 
            font-size: calc(1.5vh + 1vw + 1%); 
            line-height: 1.5;
        }
        body{ 
            overflow: auto; 
            min-height: 100vh; 
            width: 100%; 
            padding: 0.5rem 1rem;   
        }
        main,
        header{
            padding: 0.5rem 2rem;
        }
    </style>
</head>
<body>
    <h1>PHP Assessment</h1>
    <h2>Q1</h2>
    <h4>Enter 5 different numbers, followed by a ','</h4>
    <form action="action.php" method="POST" autocomplete="off">
        <label for="user1">User 1: </label>
        <input type="text" name="user1">
        <br>
        <label for="user2">User 2: </label>
        <input type="text" name="user2">
        <br>
        <label for="user3">User 3: </label>
        <input type="text" name="user3">
        <br>
        <input type="submit">
    </form>
    
    <?php
    //    $text = $_POST['user1'];
    //    echo $text;
    ?>
</body>
</html>