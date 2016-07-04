<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */


 echo '<span class="notice success">';
	 echo __d('cake_dev', 'entry sale!');
 echo '</span>';
	echo 'Click on event to buy ticket';

  echo '<br><br>';

  foreach($events as $event) {
    echo "<a href=\"?event=".
    $event['Event']['idEvent'] ."\">".$event['Event']['name']."<a><br>";
  }
 ?>
