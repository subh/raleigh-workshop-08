<?php
/* SVN FILE: $Id: dump.ctp 7062 2008-05-30 11:29:53Z nate $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright 2005-2008, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright 2005-2008, Cake Software Foundation, Inc.
 * @link				http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package			cake
 * @subpackage		cake.cake.libs.view.templates.elements
 * @since			CakePHP(tm) v 0.10.5.1782
 * @version			$Revision: 7062 $
 * @modifiedby		$LastChangedBy: nate $
 * @lastmodified	$Date: 2008-05-30 13:29:53 +0200 (Fr, 30 Mai 2008) $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<div id="cakeControllerDump">
	<h2><?php __('Controller dump:'); ?></h2>
		<pre>
			<?php echo h(print_r($controller, true)); ?>
		</pre>
</div>