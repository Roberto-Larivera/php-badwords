<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark text-light p-5">
    <?php
    $nomeCanzone = 'Belly Dancer';

    $testoCanzone = "
Hey, ladies drop it down
Just want to see you touch the ground
Hey, ladies drop it down
Just want to see you touch the ground
Hey, ladies drop it down
Just want to see you touch the ground
Hey, ladies drop it down
Just want to see you touch the-
Hey, ladies drop it down
Just want to see you touch the ground
Don't be shy girl go bananza
Shake ya body like a belly dancer
Hey, ladies drop it down
Just want to see you touch the ground
Don't be shy girl go bananza
Shake ya body like a belly dancer
Excuse me, beg your pardon girl
Do you have any idea what you starting, girl
You got me tingling, come to me mingling
Steppin' off lookin' bootylicious and jingling
When you walk, I see it, baby girl
When you talk, I believe it, baby girl
I like that, thick-petite n' pretty
Little touch is a ditty
Love to work the kitty like purrrrrrr
She loves to stirr it up, purrrrrr
I can hear her purring up
'Cause she's the type that'll get arousy up
Get you excited and call her boyfriend up (oh)
What's the plan without the plan B
We can meet up at the hutter house for the T.V
So stand by like a butty pass
While I watch this beautiful thing shake that ass
Hey, ladies drop it down
Just want to see you touch the ground
Don't be shy girl go bananza
Shake ya body like a belly dancer
Hey, ladies drop it down
Just want to see you touch the ground
Don't be shy girl go bananza
Shake ya body like a belly dancer
Shake ya body like a belly dancer
Girl, I must say you the flyest thang in here
You're so hot we gon' need some rain in here
Type to make ex-gangstas bang in here
Girl, you could do anything you want in here
Clown if you want to, frown if you want to
You ain't even gotta drop down if you want to
'Cause I'd rather see you shake it standin'
Either way you do it girl you look outstandin' (uh-huh)
Shake ya body, body with somebody, body
Whatever you do don't break your body, body
After the party, party, grab a hottie-hottie
In the back seat of your Maseratti-ratti
Jiggle, jiggle it to the left (ah-ah-ah)
Jiggle, jiggle it to the right (ah-ah-ah)
Jiggle it to the front then jiggle it to the back
And jiggle, jiggle it all, all night (ah-ah-ah)
Hey, ladies drop it down
Just want to see you touch the ground
Don't be shy girl go bananza
Shake ya body like a belly dancer
Hey, ladies drop it down
Just want to see you touch the ground
Don't be shy girl go bananza
Shake ya body like a belly dancer
Don't be shy girl go bananza
Shake ya body like a belly dancer
";

    $parolaCensura = 'girl';
    $parolaCensura2 = isset($_GET['parola_censura']) ? $_GET['parola_censura'] : '';;
    //$parolaCensura2 = $_GET['parola_censura'];
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>
                    Hello Word!! in Php
                </h1>
                <h2>
                    <?php echo $nomeCanzone; ?>
                </h2>
            </div>
        </div>

        <div class="row row-cols-3">
            <div class="col">
                <h3 class="text-primary">
                    Testo canzone:
                </h3>
                <p class="text-start">
                    <?php echo $testoCanzone; ?>
                </p>
            </div>

            <div class="col d-flex flex-column justify-content-start align-items-center gap-5 mt-5 text-center">
                <form action="" method="GET" class="d-flex flex-column justify-content-center align-items-center gap-3">
                    <label for="parola_censura" class="form-label">
                        Nuova parola da censurare:
                    </label>
                    <input type="text" name="parola_censura" id="parola_censura" placeholder="example: girl" class="form-control">
                    <button class="btn btn-success">
                        Cliccami
                    </button>
                </form>
                <h3 class="fs-6">
                    Parola da censurare:
                </h3>
                <p class="fs-3 fw-semibold text-warning">
                    <?php echo $parolaCensura2; ?>
                </p>
                <h3 class="fs-6 ">
                    Lunghezza testo originale:
                </h3>
                <p  class="fs-4 fw-semibold text-warning">
                    <?php echo strlen($testoCanzone) ?>
                </p>
                <h3 class="fs-6">
                    Lunghezza testo censura:
                </h3>
                <p  class="fs-4 fw-semibold text-warning">
                    <?php echo strlen(str_replace($parolaCensura2, '***', $testoCanzone)) ?>
                </p>
            </div>

            <div class="col">
                <h3 class="text-primary">
                    Testo canzone censurato:
                </h3>
                <p class="text-start">
                    <?php echo str_replace($parolaCensura2, '***', $testoCanzone); ?>
                </p>
            </div>
        </div>
    </div>


</body>

</html>