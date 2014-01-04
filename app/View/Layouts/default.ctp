<?php
/**
 *
 *
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

?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('bootstrap');
        echo $this->Html->css('estilo');
        echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js');
        echo $this->Html->script('bootstrap');
        echo $this->Html->meta('icon', $this->Html->url('/favicon.png'));
    ?>
    <title>Consórcios Michele</title>
</head>
<body>
    <div class="container">
        <?php echo $this->html->image('banner.png'); ?>
        <?php echo $this->fetch('content'); 
        ?>
    </div>
    <div id="footer">
    	
    </div>

	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>