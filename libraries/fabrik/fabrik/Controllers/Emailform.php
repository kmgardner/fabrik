<?php
/**
 * Fabrik Email Form Controller
 *
 * @package     Joomla
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005-2016  Media A-Team, Inc. - All rights reserved.
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */

namespace Fabrik\Controllers;

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Fabrik Email Form Controller
 *
 * @static
 * @package     Joomla
 * @subpackage  Fabrik
 * @since       1.5
 */
class Emailform extends Controller
{
	/**
	 * Display the view
	 *
	 * @param   boolean          $cachable    If true, the view output will be cached - NOTE not actually used to control caching!!!
	 * @param   array|boolean    $urlparams  An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return  \JController  A JController object to support chaining.
	 */
	public function display($cachable = false, $urlparams = array())
	{
		$input = $this->input;
		$viewName = $input->get('view', 'emailform');
		$modelName = 'form';

		$viewType = $this->doc->getType();

		// Set the default view name from the Request
		$view = $this->getView($viewName, $viewType);

		// Test for failed validation then page refresh
		if ($model = $this->getModel($modelName, 'FabrikFEModel'))
		{
			$view->setModel($model, true);
		}
		// Display the view
		$view->error = $this->getError();
		$view->display();

		return $this;
	}
}