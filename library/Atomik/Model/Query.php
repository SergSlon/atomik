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

/** Atomik_Db_Query */
require_once 'Atomik/Db/Query.php';

/**
 * @package Atomik
 * @subpackage Model
 */
class Atomik_Model_Query extends Atomik_Db_Query
{
	/**
	 * Creates a new query
	 * 
	 * @return Atomik_Model_Query
	 */
	public static function create()
	{
		return new self();
	}
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->reset();
	}
	
	/**
	 * Sets which model to query 
	 * 
	 * @param	string|Atomik_Model_Builder $model
	 * @return 	Atomik_Model_Query
	 */
	public function from($model)
	{
		$builder = Atomik_Model_Builder_Factory::get($model);
		$this->setInstance($builder->getManager()->getDbInstance());
		return parent::from($builder->tableName);
	}
}