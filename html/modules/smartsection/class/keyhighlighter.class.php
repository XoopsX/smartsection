<?php
// $Id: keyhighlighter.class.php,v 1.2 2012/03/31 11:30:53 ohwada Exp $

// 2008-10-01 K.OHWADA
// keyword "abc" match "abccccc"
// cannot show keyword in Japanese 
// http://community.impresscms.org/modules/newbb/viewtopic.php?topic_id=2512&post_id=23641

/**
* This file contains the keyhighlighter class that highlight the chosen keyword in the current output buffer.
*
* @package keyhighlighter
*/

/**
* keyhighlighter class
*
* This class highlight the chosen keywords in the current output buffer
*
* @package keyhighlighter
* @author Setec Astronomy
* @version 1.0
* @abstract Highlight specific keywords.
* @copyright 2004
* @example sample.php A sample code.
* @link http://setecastronomy.stufftoread.com
*/

class SmartsectionKeyhighlighter {

	/**
	* @access private
	*/
	var $preg_keywords = '';
	/**
	* @access private
	*/
	var $keywords = '';
	/**
	* @access private
	*/
	var $singlewords = false;
	/**
	* @access private
	*/
	var $replace_callback = null;

	var $content;

	/**
	* Main constructor
	*
	* This is the main constructor of keyhighlighter class. <br />
	* It's the only public method of the class.
	* @param string $keywords the keywords you want to highlight
	* @param boolean $singlewords specify if it has to highlight also the single words.
	* @param callback $replace_callback a custom callback for keyword highlight.
	* <code>
	* <?php
	* require ('keyhighlighter.class.php');
	*
	* function my_highlighter ($matches) {
	* 	return '<span style="font-weight: bolder; color: #FF0000;">' . $matches[0] . '</span>';
	* }
	*
	* new keyhighlighter ('W3C', false, 'my_highlighter');
	* readfile ('http://www.w3c.org/');
	* ?>
	* </code>
	*/
	// public function __construct ()
	function SmartsectionKeyhighlighter ($keywords, $singlewords = false, $replace_callback = null ) {
		$this->keywords = $keywords;
		$this->singlewords = $singlewords;
		$this->replace_callback = $replace_callback;
	}

	/**
	* @access private
	*/
	function replace ($replace_matches) {

		$patterns = array ();
		if ($this->singlewords) {
			$keywords = explode (' ', $this->preg_keywords);
			foreach ($keywords as $keyword) {

// -----
// keyword "abc" match "abccccc"
//				$patterns[] = '/(?' . '>' . $keyword . '+)/si';
				$patterns[] = '/(?' . '>' . preg_quote($keyword) . ')/si';
// -----

			}
		} else {

// -----
// keyword "abc" match "abccccc"
//			$patterns[] = '/(?' . '>' . $this->preg_keywords . '+)/si';
			$patterns[] = '/(?' . '>' . preg_quote($this->preg_keywords) . ')/si';
// -----

		}

		$result = $replace_matches[0];

		foreach ($patterns as $pattern) {
			if (!is_null ($this->replace_callback)) {
				$result = preg_replace_callback ($pattern, $this->replace_callback, $result);
			} else {
				$result = preg_replace ($pattern, '<span class="highlightedkey">\\0</span>', $result);
			}
		}

		return $result;
	}

	/**
	* @access private
	*/
	function highlight ($buffer) {
		$buffer = '>' . $buffer . '<';

// -----
// cannot show keyword in Japanese 
//		$this->preg_keywords = preg_replace ('/[^\w ]/si', '', $this->keywords);
		if ( XOOPS_USE_MULTIBYTES ) {
			$this->preg_keywords = trim($this->keywords);
		} else {
			$this->preg_keywords = preg_replace ('/[^\w ]/si', '', $this->keywords);
		}
// -----

		$buffer = preg_replace_callback ("/(\>(((?" . ">[^><]+)|(?R))*)\<)/is", array (&$this, 'replace'), $buffer);
		$buffer = substr ($buffer, 1, -1);
		return $buffer;
	}
}

?>