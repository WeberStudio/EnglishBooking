<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * currency Convert Class
 *
 * This class is based on a library I found at Zend:
 * http://www.zend.com/codex.php?id=696&single=1
 *
 * The original library is a little rough around the edges so I
 * refactored it and added several additional methods -- Rick Ellis
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Encryption
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/zip.html
 */
class currency  {

//	var $zipdata	= '';
//	var $directory	= '';
//	var $entries	= 0;
//	var $file_num	= 0;
//	var $offset		= 0;
	//var $now;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		log_message('debug', "Zip Compression Class Initialized");

		//$this->now = time();
	}

	// --------------------------------------------------------------------

	/**
	 * Add Directory
	 *
	 * Lets you add a virtual directory into which you can place files.
	 *
	 * @access	public
	 * @param	mixed	the directory name. Can be string or array
	 * @return	void
	 */
	

}

/* End of file Zip.php */
/* Location: ./system/libraries/Zip.php */