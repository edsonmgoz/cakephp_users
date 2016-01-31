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
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['bootstrap.min', 'style', 'lines', 'font-awesome']) ?>
    <?= $this->Html->script('jquery.min') ?>
    <?= $this->Html->css('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900') ?>
    <?= $this->Html->css('custom') ?>

    <?= $this->Html->script(['metisMenu.min', 'custom']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

<div id="wrapper">
    <?= $this->element('layout/menu') ?>
    <div id="page-wrapper">
        <p>
            <?= $this->Flash->render() ?>
        </p>

        <?= $this->fetch('content') ?>

        <?= $this->element('layout/footer') ?>
    </div>
</div>

    <?= $this->Html->script('bootstrap.min') ?>
</body>
</html>
