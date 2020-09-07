<?php
if(isset($_GET['page'])){
    // avec un switch, changez la variable $content suivant le lien cliqué, si la valeur de la variable get "page" est différente de celles des liens, affichage du texte: Erreur 404

    $p = $_GET['page'];

    switch ($p) {
        case 'Contactez-nous':
            $content = '<h3>Contactez-nous</h3>';
            break;
        case 'Galerie':
            $content = '<h3>Galerie</h3>';
            break;
        case 'Photos':
            $content = '<h3>Photos</h3>';
            break;
        case 'Plan':
            $content = '<h3>Plan</h3>';
            break;
        case 'Info':
            $content = '<h3>Info</h3>';
            break;
        default:
            $content = '<h3>Erreur 404</h3>';
    }

}else{
    $content = "<h3>Ceci est la page d'accueil</h3>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch</title>
</head>
<body>
<h1>Switch</h1>
<a href="03-switch.php">Accueil</a>
<a href="?page=contactez-nous">Contactez-nous</a>
<a href="?page=galerie">Galerie</a>
<a href="?page=photos">Photos</a>
<a href="?page=plan">Plan</a>
<a href="?page=info">Info</a>
<?php
echo $content;
?>
</body>
</html>