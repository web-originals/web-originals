<?php
?>
<head>
    <title>Создание и продвижение сайтов В Краснодаре!</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--    <link href="http://allfont.ru/allfont.css?fonts=broken-planewing" rel="stylesheet" type="text/css"/>-->
    <style>
        @font-face {
            font-family: 'Broken Planewing';
            font-style: normal;
            font-weight: 400;
            src: local('Broken Planewing'), local('BrokenPlanewing-Regular'),
            url(<?php echo get_template_directory_uri(); ?>/fonts/broken-planewing_d5205167beb8a28313f210963efba9c6.woff) format('woff'),
            url(<?php echo get_template_directory_uri(); ?>/fonts/broken-planewing_d5205167beb8a28313f210963efba9c6.ttf) format('truetype');
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link type="text/css" rel="StyleSheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css"/>
    <link type="text/css" rel="StyleSheet" href="<?php echo get_template_directory_uri(); ?>/css/coll-back.css"/>
    <link type="text/css" rel="StyleSheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css"/>
    <link type="text/css" rel="StyleSheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.min.css"/>
    <link type="text/css" rel="StyleSheet"
          href="<?php echo get_template_directory_uri(); ?>/css/owl.transitions.min.css"/>
    <link type="text/css" rel="StyleSheet" href="<?php echo get_template_directory_uri(); ?>/css/responsiv.css"/>
    <meta name="google-site-verification" content="5YC4_zPol3L1NKEfj3V6SdScHnWtn_6mkcQ15a6I5q4"/>
    <meta name="yandex-verification" content="9366af7ee8c5d27e"/>
    <meta name="DC.Creator" content="Obora Dmitrii and Igor Sharangii">
    <meta name="DC.Subject" content="Cоздание сайтов в Краснодаре">
    <meta name="DC.Description" content="Добро пожаловать в web-студию “Originals”. Коротко о нас: мы создадим сайт под
                                            ключ и делаем продвижение в поисковой системе. Мы прислушиваемся к Клиентам.">
    <meta name="DC.Publisher" content="https://web-originals.ru">
    <meta name="DC.Contributor" content="Igor Sharangii">
    <meta name="DC.Date" content="2018-03-01">
    <meta name="DC.Type" content="text">
    <meta name="DC.Format" content="text/html">
    <meta name="DC.Identifier" content="https://web-originals.ru">
    <meta name="DC.Source" content="Источник данных">
    <meta name="DC.Language" content="ru-RU">
    <meta name="DC.Coverage" content="World">
    <meta name="DC.Rights" content="web-originals.ru">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->
    <link href="<?php echo get_template_directory_uri(); ?>/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
    <?php
    if (is_user_logged_in()) {
        ?>
        <style>
            .navbar {
                padding-top: 25px;
            }
        </style>
        <?php
    }
    wp_head();
    ?>
</head>