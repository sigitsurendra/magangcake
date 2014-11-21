<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Magang');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $this->fetch('title'); ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css(array('animate.min', 'bootstrap.min', 'font-awesome', 'main', 'prettyPhoto', 'responsive','sidebarmenu','magangform','jquery-ui.min','jquery-ui.structure.min','jquery-ui.theme.min','horizontalbarmenu'));

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
    <!--[if lt IE 9]>
    <?php
    echo $this->Html->script(array('html5shiv.js', 'respond.min.js'));
    ?>
    <![endif]-->

    <?php    echo $this->Html->script(array('jquery.js','jquery-ui.min.js', 'bootstrap.min.js', 'jquery.prettyPhoto.js', 'jquery.isotope.min.js', 'main.js', 'wow.min.js', 'jquery.validate.min.js'));
    echo $this->Html->meta(array(
        'rel' => 'shortcut icon',
        'link' => '/img/magangcoid/ico/apple-touch-icon-144-precomposed.png',
    ));

    echo $this->Html->meta(array(
        'rel' => 'apple-touch-icon-precomposed',
        'sizes' => '144x144',
        'link' => '/img/magangcoid/ico/apple-touch-icon-144-precomposed.png',
    ));

    echo $this->Html->meta(array(
        'rel' => 'apple-touch-icon-precomposed',
        'sizes' => '114x114',
        'link' => '/img/magangcoid/ico/apple-touch-icon-114-precomposed.png',
    ));

    echo $this->Html->meta(array(
        'rel' => 'apple-touch-icon-precomposed',
        'sizes' => '72x72',
        'link' => '/img/magangcoid/ico/apple-touch-icon-72-precomposed.png',
    ));

    echo $this->Html->meta(array(
        'rel' => 'apple-touch-icon-precomposed',
        'sizes' => '57x57',
        'link' => '/img/magangcoid/ico/apple-touch-icon-57-precomposed.png',
    ));

    ?>
</head>
<body>
<div id="container">

    <div id="header">

        <?php
        echo $this->element('headermagang');
        ?>
    </div>
    <div id="content">

        <?php echo $this->Session->flash(); ?>

        <?php echo $this->fetch('content'); ?>
    </div>

    <div id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/"
                                   title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>.
                    All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>
