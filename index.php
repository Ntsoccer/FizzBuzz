<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="POST">
    <label for="fizz">FizzNum:</label>
    <input type="text" name="fizz" placeholder="整数値を入力してください">
    <br>
    <label for="buzz">BuzzNum:</label>
    <input type="text" name="buzz" placeholder="整数値を入力してください">
    <br>
    <input type="submit" value="実行" name="submit">
  </form>
  <p>[出力]</p>

  <?php
  if(!empty($_POST['submit'])){
    $fizz=mb_convert_kana($_POST['fizz'],'n');
    $buzz=mb_convert_kana($_POST['buzz'],'n');
    
    $alert='1以上の整数を入力してください。';

    if($fizz === '0' || $buzz === '0'){
      echo $alert;
    }
    elseif(ctype_digit($fizz) && ctype_digit($buzz)){
      for($i=1; $i<100; $i++){
        if($i % $fizz === 0 && $i % $buzz === 0){
          echo 'FizzBuzz'. $i. '<br>';
        }
        elseif($i % $fizz === 0){
          echo 'Fizz'. $i. '<br>';
        }
        elseif($i % $buzz === 0){
          echo 'Buzz'. $i. '<br>';
        }
      }
    }   
    else{
      echo $alert;
    }
  }
  ?>

</body>

</html>