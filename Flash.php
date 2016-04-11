<?php
/**
 * PhalconSlayer\Framework
 *
 * @copyright 2015-2016 Daison Carino <daison12006013@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phalconslayer.readme.io
 */

/**
 * @package Clarity
 * @subpackage Clarity\Providers
 */
namespace Clarity\Providers;

use Phalcon\Session\Bag as PhalconSessionBag;

class Flash extends ServiceProvider
{
    protected $alias = 'flash';
    protected $shared = true;

    public function register()
    {
        return new PhalconSessionBag('flash');
    }
}
