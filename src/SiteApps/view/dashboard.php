<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<link href="//siteapps.com/externals/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="//siteapps.com/externals/bootstrap/bootstrap.min.js"></script>

<style>

.siteapps-container{ font-family: Open Sans, Arial }
.btn-action1{ font-family: 'Open Sans', 'Arial'; color: #fff; font-weight: bold; font-size: 16px; text-align: center; margin: auto; border-radius: 5px; border: 1px solid #f47318; border-bottom: 2px solid #c85011; padding: 10px 70px; text-transform: uppercase; text-shadow: 1px 1px 1px rgb(173, 86, 27); text-decoration: none; background: #f7941f; /* Old browsers */background: -moz-linear-gradient(top, #f7941f 0%, #f16014 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f7941f), color-stop(100%,#f16014)); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, #f7941f 0%,#f16014 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, #f7941f 0%,#f16014 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, #f7941f 0%,#f16014 100%); /* IE10+ */background: linear-gradient(to bottom, #f7941f 0%,#f16014 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7941f', endColorstr='#f16014',GradientType=0 ); /* IE6-9 */ }
.btn-action1-border{ display: inline; background: #eeece7; padding:6px; border-radius: 9px; padding: 18px 5px; }
.btn-action1:hover{ text-decoration: none; color: #fff; background: #f7a81f; /* Old browsers */background: -moz-linear-gradient(top, #f7a81f 0%, #ef6411 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f7a81f), color-stop(100%,#ef6411)); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, #f7a81f 0%,#ef6411 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, #f7a81f 0%,#ef6411 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, #f7a81f 0%,#ef6411 100%); /* IE10+ */background: linear-gradient(to bottom, #f7a81f 0%,#ef6411 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7a81f', endColorstr='#ef6411',GradientType=0 ); /* IE6-9 */ }
.btn-action1:active{ background: #f17214; /* Old browsers */background: -moz-linear-gradient(top, #f17214 0%, #f37c16 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f17214), color-stop(100%,#f37c16)); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, #f17214 0%,#f37c16 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, #f17214 0%,#f37c16 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, #f17214 0%,#f37c16 100%); /* IE10+ */background: linear-gradient(to bottom, #f17214 0%,#f37c16 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f17214', endColorstr='#f37c16',GradientType=0 ); /* IE6-9 */ }

.line-shadow{ height: 20px; background: url(http://siteapps.com/img/site/line-shadow.png) center top; }
.line-shadow2{ height: 20px; background: url(http://siteapps.com/img/site/line-shadow2.png) center -3px no-repeat; }

.page-background1{ background: url('http://siteapps.com/img/site/page-bg1.png'); margin-bottom: 10px; }
.page-background1 h3{ font-size: 48px; color: #454541; font-weight: bold;  margin-bottom: 14px; line-height: 52px; }

.page-layout1{ padding-top: 54px; position: relative; }
.page-layout1 .col1{ float: left; width: 326px; margin-right: 36px;text-align: left; }
.page-layout1 .col1 h4{ font-size: 38px; color: #454541; font-weight: bold; text-align: right; margin-bottom: 14px; line-height: 52px; }
.page-layout1 .col1 p{ color: #454541; font-size: 16px;  }

.page-layout1 .col2{ float: left; width: 374px; margin-top: 22px;  }
.page-layout1 .input-title{ display: block; font-size: 14px; font-weight: bold; color: #4a4a4a; margin-bottom: 5px; }
.page-layout1  input[type=text], .page-layout1 .col2 input[type=password]{ width: 100%; height: 42px; box-sizing: border-box; -moz-box-sizing: border-box; padding: 10px 10px; font-family: 'Open Sans', 'Arial'; font-size: 16px; margin-bottom: 14px; box-shadow: inset 0px 1px 3px rgb(187, 187, 187); font-weight: bold; }
.page-layout1  input[type=text]:focus, .page-layout1 .col2 input[type=password]:focus{ border-color: #ff592b; }

.page-layout1 .col2 p{ font-size: 14px; clear: both; color: #999; text-align: right; margin-bottom: 18px;  }
.page-layout1 .col2 p a{ color: #ff592b;  }
.page-layout1 .col2 p.small{ font-size: 10px; }
.page-layout1 .col2 input[type=button]{ float: right; clear: both; }
.page-layout1 .input-float{ float: left; margin-right: 28px;  }
.page-layout1 .input-float input[type=text], .page-layout1 .input-float input[type=password]{ width: 160px;  }

.page-layout1 .rocket{ float: right; width: 185px; height: 278px; background: url(http://siteapps.com/img/site/login-rocket.png); position: relative; top: 34px; }
.page-layout1 .btn-action1{ font-size: 22px; text-transform: none; padding: 15px 60px; margin-bottom: 18px; float: right }
.page-layout2{ padding-top: 20px; position: relative; }

.btn-action2{ padding: 14px 48px; color: #fff; font-size: 18px; font-weight: bold; border-radius: 4px; box-shadow: 0px 2px 1px rgba(0,0,0,.6); border-bottom: 2px solid rgb(0, 117, 196);  border-top: 2px solid rgb(177, 231, 252); text-shadow: -1px -1px 1px rgb(66, 119, 197); }
.btn-action2{ background: #33b2df; /* Old browsers */background: -moz-linear-gradient(top, #33b2df 0%, #2182c9 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#33b2df), color-stop(100%,#2182c9)); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, #33b2df 0%,#2182c9 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, #33b2df 0%,#2182c9 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, #33b2df 0%,#2182c9 100%); /* IE10+ */background: linear-gradient(to bottom, #33b2df 0%,#2182c9 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#33b2df', endColorstr='#2182c9',GradientType=0 ); /* IE6-9 */ }
.btn-action2:hover{ color: #fff; text-decoration: none; }
.btn-action2:hover{ background: #258dc8; /* Old browsers */background: -moz-linear-gradient(top, #258dc8 0%, #258dc8 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#258dc8), color-stop(100%,#258dc8)); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, #258dc8 0%,#258dc8 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, #258dc8 0%,#258dc8 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, #258dc8 0%,#258dc8 100%); /* IE10+ */background: linear-gradient(to bottom, #258dc8 0%,#258dc8 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#258dc8', endColorstr='#258dc8',GradientType=0 ); /* IE6-9 */ }

.partnerbanner{ height: 271px; background: url(http://siteapps.com/img/site/partner_banner_bg.png); }
.partnerbanner .container{ background: url(http://siteapps.com/img/site/partner_banner_bg2.png); height: 100%; position: relative; }
.partnerbanner .rocket{ background: url(http://siteapps.com/img/site/partner_rocket.png) no-repeat; width: 327px; height: 347px; position: absolute; right: 80px; top: -20px; }
.partnerbanner .arrow{ width: 78px; height: 65px; background: url(http://siteapps.com/img/site/partner_arrow.png); position: absolute; left: 50%; bottom: -47px; margin-left: -32px; }

.partnerbanner .txtshadow1{ text-shadow: -1px -1px 0px rgb(207, 51, 30); }
.partnerbanner .title span:nth-child(1){ line-height: normal; display: block; margin-top: 26px; color: #fff; font-size: 20px; margin-bottom: -14px; }
.partnerbanner .title span:nth-child(2){ line-height: normal; display: block; color: #F6E624; font-size: 68px; font-weight: bold; margin-bottom: 8px;  }
.partnerbanner .title span:nth-child(3){ line-height: normal; display: block; width: 278px; height: 53px; background: url(http://siteapps.com/img/site/partner_ribbon.png); color: #FE632C; font-size: 14px; font-weight: bold; padding-left: 14px; padding-top: 11px; box-sizing: border-box; -moz-box-sizing: border-box;  }

.partnerbanner .title ul{ width: 510px; margin: 8px 0px 0px 16px; }
.partnerbanner .title li{ float: left; width: auto; list-style: none; margin-right: 20px; margin-bottom: 4px; font-size: 12px; font-weight: bold; color: #fff; text-shadow: 1px 1px 1px rgba(0,0,0,.5) }
.partnerbanner .title li:before{ content: '\2022';display: block;position: relative;max-width: 0px;max-height: 0px;left: -15px;top: 1px;color: #FFD843;font-size: 20px; }


.partnerbox1{ background: #F0F0F0; height: 160px; border-top: 6px solid #fff; text-align: center; box-sizing: border-box; -moz-box-sizing: border-box; padding: 70px 0px; }

.partnerabout{ padding: 20px 0px; }
.partnerabout p{ color: #555; margin-bottom: 30px; }
.partnerabout p a{ color: #FF592B; font-weight: bold; }

.partner_applogos{ background: url(http://siteapps.com/img/site/partner_applogos.gif) left top no-repeat; height: 65px; margin-bottom: 30px; }
.partner_cmslogos{ background: url(http://siteapps.com/img/site/partner_cmslogos.gif) left top no-repeat; height: 41px; margin-bottom: 100px; }

.partnerbox1 .btn-action2{ position: relative; }
.partnerbox1 .free{ display: block; background: url(http://siteapps.com/img/site/partner_free.png); width: 61px; height: 57px; position: absolute; right: -4px; top: -6px; }

.partner_element_box1{ background: #F1F1F1; box-sizing: border-box; -moz-box-sizing: border-box; position: relative; padding-bottom: 28px; }

.partner_element_title1{ color: #DE413C; font-size: 26px; font-weight: bold; padding-left: 30px; position: relative; margin-bottom: 20px; }
.partner_element_title1 .arrow{ width: 20px; height: 27px; background: url(http://siteapps.com/img/site/partner_element_arrows.png); position: absolute; left: 0px; top: -2px; display: block; }
.partner_element_title1 > span:nth-child(1){ font-size: 16px; color: #444; font-weight: normal; }
.partner_element_title1 a{ margin-left: 20px; color: #DE413C; font-size: 14px; font-weight: bold; text-decoration: none; }
.partner_element_title1 a span{ color: #333; font-weight: bold; }

.partner_element_free{  background: url(http://siteapps.com/img/site/partner_element_free.png); width: 66px; height: 68px; margin: auto; position: relative; margin-top: -40px; margin-bottom: 20px; }

.partner_element_appitem{ color: #555; }
.partner_element_appitem img{ float: left; width: 74px; max-height: 106px; margin-right: 14px; border: 0px; }
.partner_element_appitem .info{  width: 164px; float: left }
.partner_element_appitem .info .title{ font-weight: bold; margin-bottom: 5px; color: #555; }
.partner_element_appitem .info .txt{ font-size: 11px; line-height: 14px; }
.partner_element_appitem a{ color: #F85B30; }

.partner_element_box2{ background: #FFFFFF; padding-bottom: 60px; margin-bottom: 18px; }
.partner_element_box2 a{ color: #FF6D44; font-weight: bold; }

.partner_element_letter{ width: 378px; height: 288px; background: url(http://siteapps.com/img/site/partner_element_letter.png); position: relative; top: -40px; }

.partner_element_howbox{ height: 100px; border: 1px solid #F5F5F5; }
.partner_element_howbox{ background: #ffffff; /* Old browsers */background: -moz-linear-gradient(top, #ffffff 0%, #eaeaea 100%); /* FF3.6+ */background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#eaeaea)); /* Chrome,Safari4+ */background: -webkit-linear-gradient(top, #ffffff 0%,#eaeaea 100%); /* Chrome10+,Safari5.1+ */background: -o-linear-gradient(top, #ffffff 0%,#eaeaea 100%); /* Opera 11.10+ */background: -ms-linear-gradient(top, #ffffff 0%,#eaeaea 100%); /* IE10+ */background: linear-gradient(to bottom, #ffffff 0%,#eaeaea 100%); /* W3C */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eaeaea',GradientType=0 ); /* IE6-9 */ }
.partner_element_howbox_item{ height: 100%; width: 33%; border-left: 1px solid #DFDFDF; border-right: 1px solid #fff; border-bottom: 1px solid #fff; float: left; text-align: center; }
.partner_element_howbox_item:first-child{ border-left: 0px; }
.partner_element_howbox_item:last-child{ border-right: 0px; }

.partner_element_howbox_logo_wp{ display: block;background: url(http://siteapps.com/img/site/partner_element_howbox_logos.png);width: 247px;height: 55px;margin: auto;position: relative;top: 23px; }
.partner_element_howbox_logo_criador{ display: block;background: url(http://siteapps.com/img/site/partner_element_howbox_logos.png) 0px -88px;width: 247px;height: 63px;margin: auto;position: relative;top: 23px; }
.partner_element_howbox_logo_tagsa{ display: block;background: url(http://siteapps.com/img/site/partner_element_howbox_logos.png) 0px -169px;width: 247px;height: 63px;margin: auto;position: relative;top: -9px; }
.partner_element_howbox a{ font-weight: normal; }
.partner_element_howbox a:hover{ text-decoration: none; }

.partner_element_banner_arrow1{ width: 45px;height: 22px;background: url(http://siteapps.com/img/site/partner_element_arrows.png) -69px 0px;position: absolute;left: 50%;bottom: 249px;margin-left: -32px; }
.partner_element_banner_arrow2{ width: 45px;height: 22px;background: url(http://siteapps.com/img/site/partner_element_arrows.png) -26px 0px;position: absolute;left: 50%;bottom: -22px;margin-left: -32px; }

.partner_element_btn_ga{ background: #FF4F1D; font-size: 13px; text-align: center; border-radius: 6px; padding: 12px 26px; color: #fff !important; margin: auto; position: relative; top: 35px; }
.partner_element_btn_ga:hover{ background: #ff6b40; text-decoration: none; }  

</style>

<div class="siteapps-container">
    <div class="container-fluid partnerbanner">
        <div class="container">
            <div class="row">
                <div class="span8 title" style="">
                    <span class="txtshadow1">Instale centenas de apps com</span>
                    <span class="txtshadow1">apenas um click!</span>
                    <span>COM UM CLICK VOC&Ecirc; PODE:</span>

                    <ul>
                            <li>Aprimorar o seu website</li>
                            <li>Facilitar a navega&ccedil;&atilde;o</li>
                            <li>Aumentar n&uacute;mero de visitas</li>
                            <li>Integrar com m&iacute;dias sociais</li>
                            <li>Transformar visitantes em clientes</li>
                    </ul>
                </div>
            </div>

            <div class="rocket"></div>

            <div class="partner_element_banner_arrow2"></div>
        </div>
    </div>

    <div class="container-fluid partnerbox1" style="background: #F7F7F7;">
        <div class="container">
            <a href="<?php print $loginCallbackUrl?>" class="btn-action2" style="font-size: 22px" target="_blank">ACESSAR DASHBOARD</a>
        </div>
    </div>

    <div class="container-fluid partner_element_box1">
        <div class="container">
            <div class="line-shadow2"></div>

            <div class="partner_element_free"></div>

            <div class="row partner_element_title1" style="margin-bottom: 40px;">
                App Marketplace
                <span>- As melhores oportunidades para o seu website est&atilde;o aqui.</span>
                <a href="http://siteapps.com/apps"><span>+</span> Ver outros apps</a>
                <div class="arrow"></div>
            </div>

            <div class="row" style="position: relative; z-index: 100">

                                <div class="span4 partner_element_appitem">
                        <a href="<?php print $loginCallbackUrl?>?url=app/nota_sticky_note-521">
                            <img src="http://siteapps.com/apps/img/521/logo" />
                        </a>
                        <div class="info">
                            <a href="<?php print $loginCallbackUrl?>?url=app/nota_sticky_note-521" class="title">Nota (Sticky Note)</a>
                            <div class="txt">Mostre no seu site um 'sticky note' com uma mensagem personalizada.</div>
                        </div>
                    </div>
                                <div class="span4 partner_element_appitem">
                        <a href="<?php print $loginCallbackUrl?>?url=app/facebook_comments-283">
                            <img src="http://siteapps.com/apps/img/283/logo" />
                        </a>
                        <div class="info">
                            <a href="<?php print $loginCallbackUrl?>?url=app/facebook_comments-283" class="title">Facebook Comments</a>
                            <div class="txt">Inclua coment&aacute;rios do Facebook em um &uacute;nico clique no seu website.</div>
                        </div>
                    </div>
                                <div class="span4 partner_element_appitem">
                        <a href="<?php print $loginCallbackUrl?>?url=app/widget_de_redes_sociais-526">
                            <img src="http://siteapps.com/apps/img/526/logo" />
                        </a>
                        <div class="info">
                            <a href="<?php print $loginCallbackUrl?>?url=app/widget_de_redes_sociais-526" class="title">Widget de Redes Sociais</a>
                            <div class="txt">Aumente a exposi&ccedil;&atilde;o da sua presen&ccedil;a nas redes sociais.</div>
                        </div>
                    </div>

            </div>

        </div>
    </div>

    <div class="container-fluid partner_element_box2">
        <div class="container">

            <div class="line-shadow2" style="margin-bottom: 40px;"></div>

            <div class="partner_element_title1">
                An&aacute;lise gratuita do webanalytics de seu site
                <span>- Descubra oportunidades imediatas:</span>
                <div class="arrow"></div>
            </div>

            <div class="row" style="margin-bottom: 100px; background: url(http://siteapps.com/img/site/partner_element_analytics.png) no-repeat;">
                <div class="span3" style="width: 168px;">

                </div>
                <div class="span6" style="width: 480px; text-align: justify;">
                    <p>Voc&ecirc; pode integrar a sua conta do Google Analytics ao SiteApps e atrav&eacute;s de m&eacute;todos de an&aacute;lise big-data, o nosso sistema traz a tona as pricipais <strong>oportunidades de otimiza&ccedil;&atilde;o</strong> do website e recomendar aplicativos para melhorar a experi&ecirc;ncia do usu&aacute;rio e consequentemente a taxa de convers&atilde;o.</p>
                </div>
            </div>
        </div>
    </div>
</div>
