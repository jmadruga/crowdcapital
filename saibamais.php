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
	
	<title>Crowd Capital - Saiba Mais</title>
	<!--CSS e metas -->
	<?php require_once "assets/includes/head.php" ?>
    
	<!-- PROGRESS -->
	<link rel="stylesheet" href="assets/css/progress.css">
</head>

<body>
	<!--Menu mobile-->
	<?php require_once "assets/includes/menu_mobile.php" ?>
    <div class="main-wrapper" id="main">
			<!--Menu default-->
			<?php require_once "assets/includes/menu_default.php" ?>
			
			<div class="container">
        <div class="col-md-12">
            <h2  style="text-align: left; font-family:GothamBold">Saiba Mais</h2>
            <p>Que legal que você se interessou em saber mais sobre o CrowdCapital. Aqui vão alguns textos que
            com certeza irão te ajudar a entender melhor o nosso propósito.</p>
        </div>
    </div>
    <content class="content" id="main">
        <div class="container" style="z-index:1;">
            <div class="row">
                <div class="col-md-4">
                    <div class="serviceBox box_medium" id="box">
                        <a href="oquee.php" target="_blank">
                            <img src="assets/images/o-que-e.png" class="img_chamada" />
                        </a>
                        <div class="row texto_box">
                            <div class="col-md-12">
                                <h4> O que é a Crowdcapital</h4>
                                <p>A Crowdcapital (CC) é formalmente uma cooperativa de empreendedorismo, onde um coletivo de pessoas mobiliza recursos pulverizados visando...
                                    <a href="oquee.php" target="_blank">Leia Mais</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="serviceBox box_medium" id="box">
                        <a href="comofunciona.php" target="_blank">
                            <img src="assets/images/como-funciona.png" class="img_chamada" />
                        </a>
                        <div class="row texto_box">
                            <div class="col-md-12">
                                <h4>Regras de funcionamento</h4>
                                <p>Para facilitar e aumentar as chances de sucesso desse projeto, recorreremos às estratégias Startups e focaremos em manter a operação sempre o mais enxuta possível...
                                    <a href="comofunciona.php" target="_blank">Leia Mais</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="serviceBox box_medium" id="box">
                        <a href="faq.php" target="_blank">
                            <img src="assets/images/faq.png" class="img_chamada" />
                        </a>
                        <div class="row texto_box">
                            <div class="col-md-12">
                                <h4>Perguntas Frequentes</h4>
                                <p>O Crowdcapital é uma instituição sem fins lucrativos?...
                                    <a href="faq.php" target="_blank">Leia Mais</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row" align="center" style="margin-top: 30px">
                <div class="col-md-12">
                    <h4  style=" font-family:GothamBold">Artigos para refletir e compartilhar.</h4>
                </div>
            </div>
            <?php
                for($i=0;$i<count($medium);$i++) {
                    if(isset($medium[$i])) {
                        echo ' <div class="row" style="margin: 30px;    margin-bottom: 0px;">';
                        for ($f = 0; $f <= 3; $f++) {
                            if (isset($medium[$i])) {
                                echo '
                                <div class="col-md-3" style="padding: 24px;">
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
            <div class="row" style="margin-bottom:15px;">
                <div class="col-md-4">
                </div>
                <div class="btn btn-info col-md-4">
                    <a href="https://medium.com/@felipeflat" target="_blank" style="font-size:17px">Veja outros artigos</a>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </content>
		
		<!--Footer-->
		<?php require_once "assets/includes/footer.php" ?>
	</div>
    <!--Scripts-->
    <?php require_once "assets/includes/scripts.php" ?> 

</body>
</html>