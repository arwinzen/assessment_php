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
    <?php
    $user1 = str_split(str_replace(",", "", $_POST['user1']));
    $user2 = str_split(str_replace(",", "", $_POST['user2']));
    $user3 = str_split(str_replace(",", "", $_POST['user3']));
    // print_r($user1);
    // print_r($user2);
    // print_r($user3);

    function disp_user1($arr){
      foreach($arr as $el){
        if($el >= 5){
          echo $el.",";
        }
      }
    }

    function disp_user2($arr){
      foreach($arr as $el){
        if($el <= 5){
          echo $el.",";
        }
      }
    }

    function disp_user3($arr){
      $largest = [];
      for($i = 0; $i <= sizeof($arr) - 1; $i++){
        if ($arr[$i] > $arr[$i]){
          $largest[] = $arr[$i];
        }
      }
      return $largest;
    }

    echo "User 1 - ";
    disp_user1($user1);
    echo "<br>";

    echo "User 2 - ";
    disp_user2($user2);
    echo "<br>";

    echo "User 3 - ";
    print_r(disp_user3($user3));
    echo "<br>";

    ?>
</body>
</html>