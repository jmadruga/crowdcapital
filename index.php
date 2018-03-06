<!doctype html>
<html lang="pt-br">
<head>
    <title>Crowd Capital</title>
    <!--CSS e metas -->
    <?php require_once "assets/includes/head.php" ?>

</head>

<body>
<!--Menu mobile-->
<?php require_once "assets/includes/menu_mobile.php" ?>
<div id="dialog" title="Obrigado" style="display: none;">
    <p>Obrigado por se inscrever! <br/>
        Em breve entraremos em contato com você para concluirmos seu processo de entrada</p>
</div>
<div class="main-wrapper" id="main">
    <!--Preloader-->
    <?php require_once "assets/includes/preloader.php" ?>
    <header class="header fundoFormigas" style="background-color: #2187c8;" id="top"
            data-stellar-background-ratio="1.5">
        <nav class="navbar" role="navigation" style="z-index:1;">
            <div class="container">
                <div class="row" style="margin-top:50px;">
                    <div class="col-md-4 col-xs-10 col-sm-10">
                        <a href="#top" class="  scrollto" title="Crowd Capital">
                            <img class="img-logo" src="assets/images/logos/logocccolor.png" alt="Logo">
                        </a>
                    </div>
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <a href="#motivos" class="navbar-brand scrollto" title="comoFunciona">
                            Motivos para fazer parte
                        </a>
                    </div>
                    <div class="col-md-2 hidden-xs hidden-sm">
                        <a href="#comoFunciona" class="navbar-brand scrollto" title="comoFunciona">
                            Como Funciona
                        </a>
                    </div>
                    <div class="col-sm-2 col-xs-2 hidden-md hidden-lg">
                        <i onclick="openNav()" style="font-size:30px;cursor:pointer" class="icon icon_menu"></i>
                    </div>
                    <div class="col-md-2 hidden-xs hidden-sm">
                        <div class="navbar-header">
                            <a href="saibamais" class="navbar-brand scrollto" title="mais">
                                Saiba Mais
                            </a>
                        </div>
                    </div>
                    <div class="col-md-1 hidden-xs hidden-sm">
                        <a class="btn btn-color-ghost  scrollto" href="#apliquese">ME APLICAR</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container  hero-app" style="z-index:1;">
            <div class="row" style="z-index:1;margin-top: 70px;">
                <div class="col-md-12">
                    <div class="row" id="banner">
                        <div class="col-md-10">
                            <h3 style="font-family:GothamLight;color:white">Você é <span
                                        style="font-family:GothamBold;color:white">feliz hoje? </span></h3>
                            <p style="color:white">Imagine ser dono dos negócios mais promissores do mundo?<br/> Sem
                                caridade ou governo, apenas com seu trabalho, <br/>nas suas horas ociosas, com o que
                                fizer de melhor.
                            <div class="row" style="padding: 5px;">
                                <div class="col-md-12">
                                    <a href="#apliquese" class="btn btn-green" style="font-family:GothamBold;">QUERO ME
                                        APLICAR</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2" style="z-index:1;">
                            <img src="assets/images/logos/objetivos_sustentavel.png"
                                 style="margin-top: -13px; height: 153px;" alt="" class="img-responsive  center-block"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="motivos" style="z-index:1;">
                <div class="col-md-12" style=" top: 110px; z-index:1;">
                    <h3 style="font-family:GothamBold;color:white">Motivos para fazer parte</h3><br/>
                    <div class="row">
                        <ul id="thumbnails" style="height: 485px;">
                            <li>
                                <div class="faixa">
                                    #sejacrowdcapital
                                </div>
                                <div class="serviceBox">

                                    <div><img src="assets/images/icons/retorno-vitalicio.png"
                                              style=" margin-top:10px; height:170px" alt=""
                                              class="img-responsive  center-block"/></div>
                                    <h3 class="title">Receba Retornos Vitalícios <br/></h3><br/>
                                    <a href="investimentos" class="read-more">SABER MAIS</a>
                                </div>
                            </li>

                            <li>
                                <div class="faixa">
                                    Explore todo seu potencial
                                </div>
                                <div class="serviceBox">

                                    <div><img src="assets/images/icons/ideia-realidade.png"
                                              style=" margin-top:10px; height:170px" alt=""
                                              class="img-responsive  center-block"/></div>
                                    <h3 class="title">Faça suas ideias se tornarem realidade <br/></h3><br/>
                                    <a href="incubadora" class="read-more">SABER MAIS</a>
                                </div>
                            </li>

                            <li>
                                <div class="faixa">
                                    Obtenha paz de espírito
                                </div>
                                <div class="serviceBox">
                                    <div><img src="assets/images/icons/tempo-ocioso.png"
                                              style=" margin-top:10px; height:170px" alt=""
                                              class="img-responsive  center-block"/></div>
                                    <h3 class="title">Use seu tempo ocioso e habilidades para criar patrimônio <br/>
                                    </h3><br/>
                                    <a href="incubadora" class="read-more">SABER MAIS</a>
                                </div>
                            </li>

                            <li>
                                <div class="faixa">
                                    Aposentadoria antecipada
                                </div>
                                <div class="serviceBox">

                                    <div><img src="assets/images/icons/contribua-economia.png"
                                              style=" margin-top:10px; height:170px" alt=""
                                              class="img-responsive  center-block"/></div>
                                    <h3 class="title" style="font-size:14px">Contribua para a criação de uma economia
                                        social e ambientalmente sustentável</h3>
                                    <a href="saibamais" class="read-more">SABER MAIS</a>
                                </div>
                            </li>

                            <li>
                                <div class="faixa">
                                    Vagas em bons empregos
                                </div>
                                <div class="serviceBox">
                                    <div><img src="assets/images/icons/vagas-emprego.png"
                                              style=" margin-top:10px; height:170px" alt=""
                                              class="img-responsive  center-block"/></div>
                                    <h3 class="title">Vagas exclusivas para ótimos empregos</h3>
                                    <a href="empregos" class="read-more">SABER MAIS</a>
                                </div>
                            </li>

                            <li>
                                <div class="faixa">
                                    Super descontos exclusivos
                                </div>
                                <div class="serviceBox">
                                    <div><img src="assets/images/icons/clube-desconto.png"
                                              style=" margin-top:10px; height:170px" alt=""
                                              class="img-responsive  center-block"/></div>
                                    <h3 class="title">Clube de descontos e benefícios</h3>
                                    <a href="clube" class="read-more">SABER MAIS</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </header>
    <div style="margin-top: 155px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row" id="comoFunciona">
                        <div class="col-md-12">
                            <h3 style="font-family:GothamBold;color:#353131">Como Funciona</h3><br/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="color:#353131;font-family:GothamLight;">A Crowdcapital é uma pulverizadora de
                                riscos. Isso significa que unimos a força <br/> de muitas pessoas para que juntas possam
                                superar desafios que nunca <br/>consequiriam sozinhas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="width: 100%; background-color:#eff2f6;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 boxes" id="box1_dono" style="text-align:center">
                    <div><img src="assets/images/icons/money.png" style=" margin-top:10px; height:80px" alt=""
                              class="img-responsive  center-block"/></div>
                    <h5>Seja Dono</h5>
                </div>
                <div class="col-md-3 boxes" id="box1_trabalhe" style="text-align:center">
                    <div><img src="assets/images/icons/vagas.png" style=" margin-top:10px; height:70px" alt=""
                              class="img-responsive  center-block"/></div>
                    <h5>Trabalhe</h5>
                </div>
                <div class="col-md-3 boxes" id="box1_aproveite" style="text-align:center">
                    <div><img src="assets/images/icons/ideias.png" style=" margin-top:10px; height:70px" alt=""
                              class="img-responsive  center-block"/></div>
                    <h5>Aproveite</h5>
                </div>
                <div class="col-md-3 boxes" id="box1_prospere" style="text-align:center">
                    <div><img src="assets/images/icons/clube.png" style=" margin-top:10px; height:70px" alt=""
                              class="img-responsive  center-block"/></div>
                    <h5>Prospere</h5>
                </div>
            </div>
        </div>
    </div>
    <div style="padding: 30px; width: 100%; background-color: #d5e1f1;">
        <div class="container">
            <div class="row" id="box_dono">
                <div class="col-md-4" style="text-align:center">
                    <div><img src="assets/images/icons/money.png" style=" margin-top:10px; height:230px" alt=""
                              class="img-responsive  center-block"/></div>
                    <br/>
                    <h3 style="font-family:GothamBold;color:#353131">SEJA DONO</h3>
                </div>
                <div class="col-md-8">
                    <p style="text-align: justify;  padding: 21px;"> Participe na escolha dos melhores negócios para
                        receberem investimento e todo o apoio da Crowdcapital . E pulverizando o seu risco pessoal, seja
                        dono de muitas empresas ao mesmo tempo que estimulamos o empreendedorismo brasileiro como nunca
                        antes feito.</p>
                    <div class="row" style="padding: 5px;">
                        <div class="col-md-12" style="text-align:center">
                            <a href="#apliquese" class="btn btn-pink scrollto" style="font-family:GothamBold;">QUERO ME
                                APLICAR</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="box_trabalhe">
                <div class="col-md-4" style="text-align:center">
                    <div><img src="assets/images/icons/vagas.png" style=" margin-top:10px; height:230px" alt=""
                              class="img-responsive  center-block"/></div>
                    <br/>
                    <h3 style="font-family:GothamBold;color:#353131">Trabalhe</h3>
                </div>
                <div class="col-md-8">
                    <p style="text-align: justify;  padding: 21px;"> Use seu tempo vago para participar da criação de
                        novos negócios e criar patrimônio para você. Ou mesmo ocupar vagas estratégicas em empresas
                        investidas pela Crowdcapital, trabalhando no que você acredita.</p>
                    <div class="row" style="padding: 5px;">
                        <div class="col-md-12" style="text-align:center">
                            <a href="#apliquese" class="btn btn-pink scrollto" style="font-family:GothamBold;">QUERO ME
                                APLICAR</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="box_aproveite">
                <div class="col-md-4" style="text-align:center">
                    <div><img src="assets/images/icons/ideias.png" style=" margin-top:10px; height:230px" alt=""
                              class="img-responsive  center-block"/></div>
                    <br/>
                    <h3 style="font-family:GothamBold;color:#353131">Aproveite</h3>
                </div>
                <div class="col-md-8">
                    <p style="text-align: justify;  padding: 21px;"> Aproveite os benefícios de ser apoiador de uma
                        empresa, tais como descontos super exclusivos ou experimentar produtos antes mesmo de serem
                        lançados. Tudo isso em uma relação de respeito, gratidão e colaboração entre clientes e
                        empresas.</p>
                    <div class="row" style="padding: 5px;">
                        <div class="col-md-12" style="text-align:center">
                            <a href="#apliquese" class="btn btn-pink scrollto" style="font-family:GothamBold;">QUERO ME
                                APLICAR</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="box_prospere">
                <div class="col-md-4" style="text-align:center">
                    <div><img src="assets/images/icons/clube.png" style=" margin-top:10px; height:230px" alt=""
                              class="img-responsive  center-block"/></div>
                    <br/>
                    <h3 style="font-family:GothamBold;color:#353131">Prospere</h3>
                </div>
                <div class="col-md-8">
                    <p style="text-align: justify;  padding: 21px;"> Receba dividendos vitalícios de negócios que você
                        ajuda a construir e a manter! Trabalhamos para que surjam negócios de altíssimo desempenho
                        (singularidades) gerando bons resultados para todos, além de uma menor taxa de mortalidade dos
                        negócios através do apoio coletivo. O que isso significa? Um bom lucro pra você!</p>
                    <div class="row" style="padding: 5px;">
                        <div class="col-md-12" style="text-align:center">
                            <a href="#apliquese" class="btn btn-pink scrollto" style="font-family:GothamBold;">QUERO ME
                                APLICAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="width: 100%; background-color:#0e76bc;">
        <div class="container">
            <div class="row" id="apliquese">
                <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
                    <h1 style="font-family:GothamBold;color:white">Aplique-se</h1><br/>
                    <form action="assets/php/email.php" method="post">
                        <fieldset>

                            <div class="table-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="nome">Nome Completo</label>
                                        <input id="nome" name="nome" type="text" placeholder="Nome"
                                               class="form-control input-md" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="telefone">Telefone</label>
                                        <input id="telefone" name="telefone" type="text" placeholder="DDD"
                                               class="form-control input-md" style="width: 82px;">
                                        <input id="telefone" name="telefone" type="text" placeholder="Telefone"
                                               class="form-control input-md" style="width: 72%;"></div>
                                </div>
                            </div>
                            <div class="table-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="data">E-mail</label>
                                        <input id="email" name="email" type="text" placeholder="E-mail"
                                               class="form-control input-md"><br /><br />
                                        <div class="form-group">
                                            <label class="control-label" for="checkboxes"><b>Marque interesses na CC (1 ou
                                                    mais):</b></label>
                                            <div class="checkbox">
                                                <label for="checkboxes-0">
                                                    <input type="checkbox" name="checkboxes[]" id="checkboxes"
                                                           value="Ter renda vitalícia pra viver mais tranquilo">
                                                    Ter renda vitalícia pra viver mais tranquilo
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkboxes-1">
                                                    <input type="checkbox" name="checkboxes[]" id="checkboxes"
                                                           value="Poder consumir produtos e serviços com preços muito melhores">
                                                    Poder consumir produtos e serviços com preços muito melhores
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkboxes-2">
                                                    <input type="checkbox" name="checkboxes[]" id="checkboxes"
                                                           value="Conseguir linhas de crédito melhores que do mercado">
                                                    Conseguir linhas de crédito melhores que do mercado
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkboxes-3">
                                                    <input type="checkbox" name="checkboxes[]" id="checkboxes"
                                                           value="Receber apoio para uma ideia que tenho">
                                                    Receber apoio para uma ideia que tenho
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkboxes-4">
                                                    <input type="checkbox" name="checkboxes[]" id="checkboxes"
                                                           value="Ter acesso a cursos e treinamentos sem custo">
                                                    Ter acesso a cursos e treinamentos sem custo
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkboxes-5">
                                                    <input type="checkbox" name="checkboxes[]" id="checkboxes"
                                                           value="Captar investimento para uma empresa que sou sócio">
                                                    Captar investimento para uma empresa que sou sócio
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkboxes-6">
                                                    <input type="checkbox" name="checkboxes[]" id="checkboxes"
                                                           value="Conseguir demanda para algo que faço ou produzo">
                                                    Conseguir demanda para algo que faço ou produzo
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkboxes-7">
                                                    <input type="checkbox" name="checkboxes[]" id="checkboxes-7"
                                                           value="Fomentar uma economia social e ambientalmente sustentável">
                                                    Fomentar uma economia social e ambientalmente sustentável
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkboxes-8">
                                                    <input type="checkbox" name="checkboxes[]" id="checkboxes-8"
                                                           value="Trabalhar por um mundo mais solidário para meus filhos e netos">
                                                    Trabalhar por um mundo mais solidário para meus filhos e netos
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="color:white">
                                        <label class="control-label" for="q2">Você se sente feliz?</label>
                                        <div class="radio">
                                            <label for="q2-0">
                                                <input type="radio" name="feliz[]" id="feliz"
                                                       value="Me sinto plenamente feliz e tenho segurança do meu futuro">
                                                Me sinto plenamente feliz e tenho segurança do meu futuro
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="q2-1">
                                                <input type="radio" name="feliz[]" id="feliz"
                                                       value="Estou feliz mas me preocupo como será o futuro">
                                                Estou feliz mas me preocupo como será o futuro
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="q2-2">
                                                <input type="radio" name="feliz[]" id="feliz"
                                                       value="Estou com alguns problemas mas as coisas estão melhorando">
                                                Estou com alguns problemas mas as coisas estão melhorando
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="q2-3">
                                                <input type="radio" name="feliz[]" id="feliz"
                                                       value=" Estou estressado e não tenho esperança de melhoras">
                                                Estou estressado e não tenho esperança de melhoras
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" align="center">
                                <label class="ontrol-label" for="enviar"></label>
                                <button id="enviar" name="enviar" class="btn btn-pink">Enviar</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Footer-->
<?php require_once "assets/includes/footer.php" ?>

<!--Scripts-->
<?php require_once "assets/includes/scripts.php" ?>

</body>
</html>