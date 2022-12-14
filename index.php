<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
     <?php
    $testo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus laoreet justo, a hendrerit libero accumsan sit amet. Sed suscipit ultricies posuere. Nunc sem elit, finibus eget erat faucibus, efficitur condimentum elit. Aliquam commodo pulvinar mi vel convallis. Nam nec ornare augue. Ut id maximus ligula. Curabitur sed pellentesque est. Sed at libero sit amet odio tincidunt volutpat eget nec erat. Sed sagittis augue sit amet dolor luctus, ut pulvinar nibh tincidunt. Integer varius mauris vitae nunc dapibus congue. Fusce et felis neque. Ut vitae quam eu augue pretium cursus ac non sem. Proin id enim ut purus vestibulum consectetur. Ut varius diam non lorem blandit auctor. Quisque velit massa, imperdiet sit amet purus tempor, vestibulum viverra dolor. Morbi sagittis diam vitae ultricies tempor.';

    $censura = $_GET['censura'];

    $testoCensura = str_ireplace($censura, '***', $testo);

    ?>

    <h1 style="text-align:center;">Lorem Ipsum</h1>
    <div> <?php echo $testoCensura ?></div>
    
    <div style="text-align:center;">La parola che hai voluto censurare è <?php echo $censura;?></div>

    <div style="text-align:center;">Il testo è lungo <?php echo strlen($testoCensura );  ?> caratteri</div>

    <form method="GET" action="" style="text-align:center;">
        <label for="censura">Inserisci la parola che vuoi censurare</label>
        <input type="text" id="censura" name="censura">
        <button>Censura testo</button>
    </form>

</body>
</html>