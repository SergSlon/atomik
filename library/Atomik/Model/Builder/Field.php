<?php
/**
 * Atomik Framework
 * Copyright (c) 2008-2009 Maxime Bouroumeau-Fuseau
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package Atomik
 * @subpackage Model
 * @author Maxime Bouroumeau-Fuseau
 * @copyright 2008-2009 (c) Maxime Bouroumeau-Fuseau
 * @license http://www.opensource.org/licenses/mit-license.php
 * @link http://www.atomikframework.com
 */

/** Atomik_Options */
require_once 'Atomik/Options.php';

/**
 * @package Atomik
 * @subpackage Model
 */
class Atomik_Model_Builder_Field extends Atomik_Options
{
	/**
	 * @var string
	 */
	public $name;
	
	/**
	 * @var string
	 */
	public $type = 'string';
	
	/**
	 * Constructor
	 * 
	 * @param	string	$name
	 * @param 	array	$options
	 */
	public function __construct($name, $type = 'string', $options = array())
	{
		$this->name = $name;
		$this->type = $type;
		$this->setOptions($options);
	}
	
	/**
	 * Returns the name of the field
	 * 
	 * @return string
	 */
	public function __toString()
	{
		return $this->name;
	}
}