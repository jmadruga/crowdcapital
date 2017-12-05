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
$i = 0;
foreach ($xml->channel->item as $item) {
    $title = (string) $item->title;
    $content = $item->children('content', 'http://purl.org/rss/1.0/modules/content/');
    $html_string = $content->encoded;
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($html_string);
    libxml_clear_errors();
    preg_match('/<figure>(.*?)<\/figure>/s',$html_string,$match);
    preg_match('\'src="([^"]+)"\'',$match[1], $img);

    $medium[$i]['title'] =(string) $item->title;
    $medium[$i]['image'] = $img[1];
    $medium[$i]['texto'] = strip_tags($html_string);
    $medium[$i]['link']  =(string) $item->link;
    $i++;
}

?>

<!doctype html>
<html lang="pt-br">
<head>
    <title>CrowdCapital - Saiba mais</title>

    <!--CSS e metas -->
    <?php require_once "assets/includes/head.php" ?>

</head>
<body>

<content>

</content>
    <!--Menu mobile-->
    <?php require_once "assets/includes/menu_mobile.php" ?>
<!--Menu default-->
<?php require_once "assets/includes/menu_default.php" ?>
        <header>
            <div class="header">
                <div class="col-md-12">
                    <h2  style="text-align: left;">Saiba Mais</h2>
                    <p>Que legal que você se interessou em saber mais sobre o CrowdCapital. Aqui vão alguns textos que
                    com certeza irão te ajudar a entender melhor o nosso propósito.</p>
                </div>
            </div>
        </header>
        <content class="content" id="main">


            <div class="container" style="z-index:1;">
                <div class="row">
                    <?php
                        for($i=0;$i<3;$i++){
                            echo '
                            <div class="col-md-4">
                                <div class="serviceBox box_medium" id="box'.$i.'">
                                    <a href="'.$medium[$i]['link'].'" target="_blank">
                                        <img src="'.$medium[$i]['image'].'" class="img_chamada" />
                                    </a>
                                    <div class="row texto_box">
                                        <div class="col-md-12">
                                            <h4>'.$medium[$i]['title'].'</h4>
                                            <p>'.substr($medium[$i]['texto'],0,81).'
                                            ...
                                            <a href="'.$medium[$i]['link'].'" target="_blank">Leia Mais</a></p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            ';
                        }

                        ?>
                </div>


                    <?php
                        for($j=3;$j<count($medium);$j++) {
                            if(isset($medium[$i])) {
                                echo ' <div class="row" style="margin: 30px;">';
                                for ($f = 0; $f <= 3; $f++) {
                                    if (isset($medium[$i])) {
                                        echo '
                                        <div class="col-md-3">
                                            <div class="serviceBox_saibaMais box_small" id="box' . $i . '">
                                                <a href="'.$medium[$i]['link'].'" target="_blank">
                                                    <img src="' . $medium[$i]['image'] . '" class="img_chamada" />
                                                </a>
                                                <div class="row texto_box">
                                                    <div class="col-md-12">
                                                        <b>' . $medium[$i]['title'] . '</b>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                        ';
                                    }
                                    $i++;
                                }
                                echo '</div>';
                            }
                        }
                    ?>
                

            </div>
        </content>

    <!--Footer-->
    <?php require_once "assets/includes/footer.php" ?>
    <!--Scripts-->
    <?php require_once "assets/includes/scripts.php" ?>
</body>
</html>
