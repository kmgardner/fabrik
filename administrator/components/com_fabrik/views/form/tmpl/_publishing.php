<?php
/**
 * Admin Form Edit Tmpl
 *
 * @package     Joomla.Administrator
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005-2015 fabrikar.com - All rights reserved.
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 * @since       3.0
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

?>
<div class="tab-pane" id="tab-publishing">
    <fieldset class="form-horizontal">
		<?php foreach ($this->form->getFieldset('publishing') as $this->field) :
			require '_control_group.php';;
		endforeach;
		?>
	</fieldset>
</div>