<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 26/11/2017
 * Time: 14:52
 */
require './vendor/autoload.php';
$xml = file_get_contents('https://medium.com/feed/@felipeflat/');

$xml=simplexml_load_string($xml, null, LIBXML_NOCDATA);
foreach ($xml->channel->item as $item) {
    $title = (string) $item->title;
    $content = $item->children('content', 'http://purl.org/rss/1.0/modules/content/');
    $html_string = $content->encoded;
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($html_string);
    libxml_clear_errors();
    $texto = strip_tags($html_string);
    preg_match('/<figure>(.*?)<\/figure>/s',$html_string,$match);
    preg_match('\'src="([^"]+)"\'',$match[1], $img);
    $imagem = $img[1];
}

?>

<!doctype html>
<html lang="pt-br">
<head>
    <title>CrowdCapital - Saiba mais</title>
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>


</head>
<body>
<header>
    <div class="container">
        <div class="row" style="margin-top:1%;">
            <div class="col-md-12 col-xs-10 col-sm-10">
                <a href="/" class="  scrollto" title="Crowd Capital">
                    <img  style="height:60px" src="assets/images/logos/logoccallcolor.png" alt="Logo">
                </a>
            </div>
        </div>
    </div>

</header>
<section id="content">
    <script async src="https://static.medium.com/embed.js"></script><a class="m-story" href="https://medium.com/@felipeflat/o-apoio-do-governo-estados-liberais-vs-bem-estar-social-579bd588ed0c">O apoio do Governo: Estados liberais vs Bem-estar social</a>
</section>
<footer>

</footer>

</body>
</html>
