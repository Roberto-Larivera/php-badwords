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
    $nomeCanzone = 'Belly Dancer';

    $testoCanzone = "Excuse me, beg your pardon girl <br>
    Do you have any idea what you starting, girl <br>
    You got me tingling, come to me mingling <br>
    Steppin' off lookin' bootylicious and jingling <br>
    When you walk, I see it, baby girl <br> 
    When you talk, I believe it, baby girl <br>
    I like that, thick-petite n' pretty <br>
    Little touch is a ditty <br>
    Love to work the kitty like purrrrrrr <br> <br>
    She loves to stirr it up, purrrrrr<br>
    I can hear her purring up<br>
    'Cause she's the type that'll get arousy up<br>
    Get you excited and call her boyfriend up (oh)<br>
    What's the plan without the plan B<br>
    We can meet up at the hutter house for the T.V<br>
    So stand by like a butty pass<br>
    While I watch this beautiful thing shake that ass<br><br>
    Hey, ladies drop it down<br>
    Just want to see you touch the ground<br>
    Don't be shy girl go bananza<br>
    Shake ya body like a belly dancer";

    $parolaCensura = 'girl';
    $parolaCensura2 = isset($_GET['student'])? $_GET['student'] : '';;
    ?>
    <h1>
        Hello Word!! in Php < 3 </h1>
            <div>
                <h2>
                    <?php echo $nomeCanzone; ?>
                </h2>

                <p>
                    <strong>Testo canzone:</strong> <br> <?php echo $testoCanzone; ?>
                </p>
                <p>
                    <strong>Lunghezza testo originale:</strong> <br> <?php echo strlen($testoCanzone) ?>
                </p>
                <p>
                    <strong>Parola da censurare:</strong> <br> <?php echo $parolaCensura; ?>
                </p>
                <p>
                    <strong>Testo canzone censurato:</strong> <br> <?php echo str_replace($parolaCensura, '***', $testoCanzone); ?>
                </p>
                <p>
                    <strong>Lunghezza testo censura: </strong><br> <?php echo $parolaCensura2 ?>
                </p>

            </div>
            <div>
                <form action="" method="GET">
                    <label for="parola_censura">
                        Nuova parola da censurare:
                    </label>
                    <input type="text" name="parola_censura" id="parola_censura" placeholder="Inszerisci per esempio: ">
                    <button>
                        Cliccami
                    </button>
                </form>
            </div>

</html>