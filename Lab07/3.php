<!DOCTYPE html>
<html>
      
<head>
    <title>3</title>
</head>
  
<body>        
    <?php
        $random_number_array = range(0, 50);
        if(array_key_exists('ordena', $_POST)) {
            ordena($random_number_array);
        }
        else if(array_key_exists('baralha', $_POST)) {
            baralha($random_number_array);
        }


        function imprime($random_number_array) {
            for ($i = 0; $i < 50; $i++) {
                echo $random_number_array[$i]." ";
            }
        }

        function ordena($random_number_array) {
            sort($random_number_array);
            imprime($random_number_array);
        }
        function baralha($random_number_array) {
            shuffle($random_number_array);
            imprime($random_number_array);
        }
    ?>
  
    <form method="post">
        <input type="submit" name="ordena"
                class="button" value="Button2" />
        <input type="submit" name="baralha"
                class="button" value="Button3" />
    </form>
</head>
  
</html>