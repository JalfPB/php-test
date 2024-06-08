<?php 

    define('LOGO_URL', 'https://img.freepik.com/vector-gratis/vector-degradado-logotipo-colorido-pajaro_343694-1365.jpg?size=338&ext=jpg&ga=GA1.1.933601817.1717545600&semt=ais_user');
    $name = "Alfonso";
    $isDev = True;
    $age = 23;

    var_dump($name);
    var_dump($isDev);
    var_dump($age);

    $outputAge = match(true){
        $age < 18 => "Eres menor de edad " . $name,
        $age > 18 => "Eres mayor de edad " . $name,
    };

    $bestLanguages = ["PHP", "Java", "Python"]
?>

<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?><li>
    <?php endforeach; ?>
</ul>

<img src="<?= LOGO_URL ?>" alt="Logo" width="200">

<h1>
<?= "Hola " . $name
    . ",</br> con una edad de "
    . $age;?>
<h1>

<h1>
<?= $outputAge?>
<h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>