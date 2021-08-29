<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
			for($i=5; $i<=100; $i++){//5～100を表示
				if($i%5 ==0 && $i%7 == 0){
					//5と7の倍数の時は、FizzBuzzと表示
					echo"FizzBuzz"
				}else if ($i%5 == 0){
					//5の倍数の時は、Buzzと表示
					echo"Buzz";
				}else if ($i%7 ==0){
					//7の倍数の時は、Fizzと表示
					echo"Fizz";
				}else{
					echo $i;
					echo PHP_EOL;
				}
				
			
			}
		
		?>
    
</body>
</html>
