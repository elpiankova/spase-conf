<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 21.02.16
 * Time: 18:51
 */ ?>
Для активации аккаунта пройдите по <a href="{{ URL::to("activate/{$sentuser->getUserId()}/{$code}") }}">ссылке</a>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--[if !mso]><!-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/><!--<![endif]-->
    <meta name="viewport" content="width=device-width"/>
    <title></title>
    <style type="text/css">
        .wrapper a:hover {
            text-decoration: none !important;
        }

        .btn a:hover,
        .footer__links a:hover {
            opacity: 0.8;
        }

        .wrapper .footer__share-button:hover {
            color: #ffffff !important;
            opacity: 0.8;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        .column {
            font-size: 14px;
            line-height: 21px;
            padding: 0;
            text-align: left;
            vertical-align: top;
        }

        .mso .font-avenir,
        .mso .font-cabin,
        .mso .font-open-sans,
        .mso .font-ubuntu {
            font-family: sans-serif !important;
        }

        .mso .font-bitter,
        .mso .font-merriweather,
        .mso .font-pt-serif {
            font-family: Georgia, serif !important;
        }

        .mso .font-lato,
        .mso .font-roboto {
            font-family: Tahoma, sans-serif !important;
        }

        .mso .font-pt-sans {
            font-family: "Trebuchet MS", sans-serif !important;
        }

        .mso .footer p {
            margin: 0;
        }

        @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2/1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
            .fblike {
                background-image: url(https://i7.createsend1.com/static/eb/master/13-the-blueprint-3/images/fblike@2x.png) !important;
            }

            .tweet {
                background-image: url(https://i8.createsend1.com/static/eb/master/13-the-blueprint-3/images/tweet@2x.png) !important;
            }

            .linkedinshare {
                background-image: url(https://i1.createsend1.com/static/eb/master/13-the-blueprint-3/images/lishare@2x.png) !important;
            }

            .forwardtoafriend {
                background-image: url(https://i9.createsend1.com/static/eb/master/13-the-blueprint-3/images/forward@2x.png) !important;
            }
        }

        @media only screen and (max-width: 620px) {
            .wrapper h2,
            .wrapper .size-18,
            .wrapper .size-20 {
                font-size: 17px !important;
                line-height: 26px !important;
            }

            .wrapper .size-22 {
                font-size: 18px !important;
                line-height: 26px !important;
            }

            .wrapper .size-24 {
                font-size: 20px !important;
                line-height: 28px !important;
            }

            .wrapper h1,
            .wrapper .size-26 {
                font-size: 22px !important;
                line-height: 31px !important;
            }

            .wrapper .size-28 {
                font-size: 24px !important;
                line-height: 32px !important;
            }

            .wrapper .size-30 {
                font-size: 26px !important;
                line-height: 34px !important;
            }

            .wrapper .size-32 {
                font-size: 28px !important;
                line-height: 36px !important;
            }

            .wrapper .size-34,
            .wrapper .size-36 {
                font-size: 30px !important;
                line-height: 38px !important;
            }

            .wrapper .size-40 {
                font-size: 32px !important;
                line-height: 40px !important;
            }

            .wrapper .size-44 {
                font-size: 34px !important;
                line-height: 43px !important;
            }

            .wrapper .size-48 {
                font-size: 36px !important;
                line-height: 43px !important;
            }

            .wrapper .size-56 {
                font-size: 40px !important;
                line-height: 47px !important;
            }

            .wrapper .size-64 {
                font-size: 44px !important;
                line-height: 50px !important;
            }

            .divider {
                Margin-left: auto !important;
                Margin-right: auto !important;
            }

            .btn a {
                display: block !important;
                font-size: 14px !important;
                line-height: 24px !important;
                padding: 12px 10px !important;
                width: auto !important;
            }

            .btn--shadow a {
                padding: 12px 10px 13px 10px !important;
            }

            .image img {
                height: auto;
                width: 100%;
            }

            .layout,
            .column,
            .preheader__webversion,
            .header td,
            .footer,
            .footer__left,
            .footer__right,
            .footer__inner {
                width: 320px !important;
            }

            .preheader__snippet,
            .layout__edges {
                display: none !important;
            }

            .preheader__webversion {
                text-align: center !important;
            }

            .header__logo {
                Margin-left: 20px;
                Margin-right: 20px;
            }

            .layout--full-width {
                width: 100% !important;
            }

            .layout--full-width tbody,
            .layout--full-width tr {
                display: table;
                Margin-left: auto;
                Margin-right: auto;
                width: 320px;
            }

            .column,
            .layout__gutter,
            .footer__left,
            .footer__right {
                display: block;
                Float: left;
            }

            .footer__inner {
                text-align: center;
            }

            .footer__links {
                Float: none;
                Margin-left: auto;
                Margin-right: auto;
            }

            .footer__right p,
            .footer__share-button {
                display: inline-block;
            }

            .layout__gutter {
                font-size: 20px;
                line-height: 20px;
            }

            .layout--no-gutter.layout--has-border:not(.layout--full-width),
            .layout--has-gutter.layout--has-border .column__background {
                width: 322px !important;
            }

            .layout--has-gutter.layout--has-border {
                left: -1px;
                position: relative;
            }
        }

        @media only screen and (max-width: 320px) {
            .border {
                display: none;
            }

            .layout--no-gutter.layout--has-border:not(.layout--full-width),
            .layout--has-gutter.layout--has-border .column__background {
                width: 320px !important;
            }

            .layout--has-gutter.layout--has-border {
                left: 0 !important;
            }
        }
    </style>

    <!--[if !mso]><!-->
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,400|PT+Sans:400,700,400italic,700italic|Ubuntu:400,700,400italic,700italic);
    </style>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,400|PT+Sans:400,700,400italic,700italic|Ubuntu:400,700,400italic,700italic"
          rel="stylesheet" type="text/css"/><!--<![endif]-->
    <style type="text/css">
        body, .wrapper {
            background-color: #e8e8e8
        }

        .wrapper h1 {
            color: #58595b
        }

        .wrapper h1 {
        }

        .wrapper h1 {
            font-family: "Open Sans", sans-serif
        }

        .mso .wrapper h1 {
            font-family: sans-serif !important
        }

        .wrapper h2 {
            color: #58595b
        }

        .wrapper h2 {
        }

        .wrapper h2 {
            font-family: "Open Sans", sans-serif
        }

        .mso .wrapper h2 {
            font-family: sans-serif !important
        }

        .wrapper h3 {
            color: #58595b
        }

        .wrapper h3 {
        }

        .wrapper h3 {
            font-family: "Open Sans", sans-serif
        }

        .mso .wrapper h3 {
            font-family: sans-serif !important
        }

        .wrapper a {
            color: #7d9eba
        }

        .wrapper a:hover {
            color: #486b89 !important
        }

        .column, .column__background td {
            color: #808285
        }

        .column, .column__background td {
            font-family: Ubuntu, sans-serif
        }

        .mso .column, .mso .column__background td {
            font-family: sans-serif !important
        }

        .border {
            background-color: #b5b5b5
        }

        .layout--no-gutter.layout--has-border:not(.layout--full-width), .layout--has-gutter.layout--has-border
        .column__background, .layout--full-width.layout--has-border {
            border-top: 1px solid #b5b5b5;
            border-bottom: 1px solid #b5b5b5
        }

        .wrapper blockquote {
            border-left: 4px solid #b5b5b5
        }

        .divider {
            background-color: #b5b5b5
        }

        .wrapper .btn a {
            color: #fff
        }

        .wrapper .btn a {
            font-family: Ubuntu, sans-serif
        }

        .mso .wrapper .btn a {
            font-family: sans-serif !important
        }

        .wrapper .btn a:hover {
            color: #fff !important
        }

        .btn--flat a, .btn--shadow a, .btn--depth a {
            background-color: #ff9718
        }

        .btn--ghost a {
            border: 1px solid #ff9718
        }

        .preheader--inline, .footer__left {
            color: #808285
        }

        .preheader--inline, .footer__left {
            font-family: "PT Sans", "Trebuchet MS", sans-serif
        }

        .mso .preheader--inline, .mso .footer__left {
            font-family: "Trebuchet MS", sans-serif !important
        }

        .wrapper .preheader--inline a, .wrapper .footer__left a {
            color: #808285
        }

        .wrapper .preheader--inline a:hover, .wrapper .footer__left a:hover {
            color: #808285 !important
        }

        .header__logo {
            color: #c3ced9
        }

        .header__logo {
            font-family: Roboto, Tahoma, sans-serif
        }

        .mso .header__logo {
            font-family: Tahoma, sans-serif !important
        }

        .wrapper .header__logo a {
            color: #c3ced9
        }

        .wrapper .header__logo a:hover {
            color: #859bb1 !important
        }

        .footer__share-button {
            background-color: #747474
        }

        .footer__share-button {
            font-family: "PT Sans", "Trebuchet MS", sans-serif
        }

        .mso .footer__share-button {
            font-family: "Trebuchet MS", sans-serif !important
        }

        .layout__separator--inline {
            font-size: 20px;
            line-height: 20px;
            mso-line-height-rule: exactly
        }
        .great_btn {
            background: linear-gradient(to bottom, #0bc408 0%,#09a206 100%);
            color: #fff;
            font-size: 16px;
            text-shadow: 0 1px 0 #757575;
            padding: 4px 0 5px 0;
            margin: 0;
            cursor: pointer;
            border: 0;
            border-top: 1px solid #87c286;
            border-right: 1px solid #0e780c;
            border-left: 1px solid #0e780c;
            border-bottom: 1px solid #0e780c;
            box-shadow: 0 -1px 0 #0e780c, 0 1px 0 #fff;
            width: 150px;
            border-radius: 2px;
        }

    </style>
    <meta name="robots" content="noindex,nofollow"/>
    <meta property="og:title" content="My First Campaign"/>
</head>
<!--[if mso]>
<body class="mso">
<![endif]-->
<!--[if !mso]><!-->
<body class="no-padding" style="margin: 0;-webkit-text-size-adjust: 100%;background-color: #e8e8e8;">
<!--<![endif]-->
<div class="wrapper" style="background-color: #e8e8e8; ">
    <table style='border-collapse: collapse;table-layout: fixed;color: #808285;font-family: "PT Sans","Trebuchet MS",sans-serif;'
           align="center">
        <tbody>
        <tr>
            <td class="preheader__snippet" style="padding: 10px 0 5px 0;vertical-align: top;" width="300">

            </td>
            <td class="preheader__webversion" style="text-align: right;padding: 10px 0 5px 0;vertical-align: top;"
                width="300">

            </td>
        </tr>
        </tbody>
    </table>

    <table class="layout layout--no-gutter"
           style="border-collapse: collapse;table-layout: fixed;Margin-left: auto;Margin-right: auto;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;background-position: 0px 0px;background-image: url(https://i1.createsend1.com/ei/i/B3/3C2/82D/062634/csfinal/bg_header1.jpg);background-repeat: repeat;"
           align="center">
        <tbody>
        <tr>
            <td class="column"
                style="font-size: 14px;line-height: 21px;padding: 0;text-align: left;vertical-align: top;color: #808285;font-family: Ubuntu,sans-serif;"
                width="600">

                <div class="image" style="font-size: 12px;font-style: normal;font-weight: 400;" align="center">
                    <img style="display: block;border: 0;max-width: 149px;" src="https://pbs.twimg.com/profile_images/727412880996483072/0ywwQo1y_400x400.jpg" alt="" width="149"
                         height="148"/>
                </div>

                <div style="Margin-left: 20px;Margin-right: 20px;Margin-top: 20px;">
                    <h1 style='Margin-top: 0;Margin-bottom: 0;font-style: normal;font-weight: normal;font-size: 26px;line-height: 34px;color: #58595b;font-family: "Open Sans",sans-serif;text-align: center;'><span
                                style="color:#ffffff">16 УКРАЇНСЬКА КОНФЕРЕНЦІЯ З КОСМІЧНИХ ДОСЛІДЖЕНЬ</span>
                    </h1>
                </div>

            </td>
        </tr>
        </tbody>
    </table>

    <table class="layout layout--no-gutter"
           style="border-collapse: collapse;table-layout: fixed;Margin-left: auto;Margin-right: auto;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;"
           align="center" emb-background-style>
        <tbody>
        <tr>
            <td class="column"
                style="font-size: 14px;line-height: 21px;padding: 0;text-align: left;vertical-align: top;color: #808285;font-family: Ubuntu,sans-serif;"
                width="600">

                <div style="Margin-left: 20px;Margin-right: 20px;">
                    <div style="line-height:20px;font-size:1px">&nbsp;</div>
                </div>

                <div style="Margin-left: 20px;Margin-right: 20px;">

                    <h2 style='Margin-top: 0;Margin-bottom: 0;font-style: normal;font-weight: normal;font-size: 20px;line-height: 28px;color: #58595b;font-family: "Open Sans",sans-serif;text-align: center;'>
                        Підтвердження реєстрації на сайт</h2>
                    <p style="Margin-top: 16px;Margin-bottom: 0;">Шановний Олександре Андрійовичу ви зареєструвались на
                        нашому сайті</p>
                    <p style="Margin-top: 20px;Margin-bottom: 20px;">Якщо це ви реєструвались, то для підтвердження
                        реєстрації перейдіть за <a href=""> посиланням</a>, якщо ви не реєструвались проігноруйте це
                        повідомлення</p>
                </div>

                <table class="layout layout--no-gutter"
                       style="border-collapse: collapse;table-layout: fixed;Margin-left: auto;Margin-right: auto;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;"
                       align="center" emb-background-style>
                    <tbody>
                    <tr>
                        <td class="column"
                            style="font-size: 14px;line-height: 21px;padding: 0;text-align: left;vertical-align: top;color: #808285;font-family: Ubuntu,sans-serif;"
                            width="300">

                            <div style="Margin-left: 20px;Margin-right: 20px;">
                                <div style="line-height:20px;font-size:1px">&nbsp;</div>
                            </div>

                            <div style="Margin-left: 20px;Margin-right: 20px;">
                                <p style="Margin-top: 0;Margin-bottom: 20px;">Більш детальну інформацію, а також інформацію про
                                    можливі зміни і формат Конференції Ви зможете знайти на сайті <a
                                            style="text-decoration: underline;transition: opacity 0.1s ease-in;color: #7d9eba;"
                                            href="http://space-conf.ikd.kiev.ua">space-conf.ikd.kiev.ua</a></p>
                            </div>

                            <div style="Margin-left: 20px;Margin-right: 20px;">
                                <div style="line-height:20px;font-size:1px">&nbsp;</div>
                            </div>

                        </td>
                        <td class="column"
                            style="font-size: 14px;line-height: 21px;padding-bottom: 10px;text-align: left;vertical-align: top;color: #808285;font-family: Ubuntu,sans-serif;"
                            width="300">

                            <div style="Margin-left: 20px;Margin-right: 20px;">
                                <div style="line-height:20px;font-size:1px">&nbsp;</div>
                            </div>

                            <div style="Margin-left: 20px;Margin-right: 20px;">
                                <blockquote
                                        style="Margin-top: 20px;Margin-bottom: 0;Margin-left: 0;Margin-right: 0;padding-left: 14px;border-left: 4px solid #b5b5b5;">
                                    <p style="Margin-top: 0px;Margin-bottom:0;">+38 044 526 15 83</p>
                                    <p style="Margin-top: 0px;Margin-bottom: 0;">+38 063 451 82 70,</p>
                                    <p style="Margin-top: 0px;Margin-bottom: 0;"><a
                                                style="text-decoration: underline;transition: opacity 0.1s ease-in;color: #7d9eba;Margin-top: 20px;"
                                                href="mailto:ukrainianspaceconf@gmail.com">ukrainianspaceconf@gmail.com</a></p>
                                </blockquote>
                            </div>

                        </td>
                    </tr>
                    </tbody>
                </table>
                <badge>

                </badge>
</div>
</body>
</html>