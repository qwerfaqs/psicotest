<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Psicotest</title>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
        <style type="text/css">
            <!--
            .invisible {border-color:#FFFFFF;border-width:2px; border-style:solid;}
            .linea {background-color:#000000}
            .nolinea {background-color:#FFFFFF}
            .visible {border-color:#000000;border-width:2px; border-style:solid;}
            -->
        </style>
    </head>
    <body>
        <div class="main">
            <div class="header">
                <div class="header_resize">
                    <div class="logo">
                        <h1><a href="<?php echo url_for('evaluaciones/index'); ?>">Psico<span>Test</span> <small><span>Fuerzas Armadas del Ecuador</span></small></a></h1>
                    </div>
                    <div class="clr"></div>
                    <div class="clr"></div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="content">
                <div class="content_resize">
                    <div class="mainbar">
                        <?php echo $sf_content ?>
                    </div>
                    <?php echo include_partial('global/sidebar') ?>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="fbg"></div>
        </div>
    </body>
</html>