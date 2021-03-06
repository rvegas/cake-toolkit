<?php
/**
 * Interface for objects that can be loaded.
 *
 * PHP 5
 *
 * Cake Toolkit (http://caketoolkit.org)
 * Copyright 2012, James Watts (http://github.com/jameswatts)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2012, James Watts (http://github.com/jameswatts)
 * @link          http://caketoolkit.org Cake Toolkit
 * @package       Ctk.Lib
 * @since         CakePHP(tm) v 2.2.0.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Interface for loadable objects.
 *
 * @package       Ctk.Lib
 */
interface CtkLoadable {

/**
 * Abstract method for setting the object as loaded.
 * 
 * @return void
 */
	public function load();

/**
 * Abstract method which checks if the object has been loaded.
 * 
 * @return boolean
 */
	public function isLoaded();
}

