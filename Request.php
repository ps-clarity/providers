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

use Clarity\Support\Phalcon\Http\Request as BaseRequest;

class Request extends ServiceProvider
{
    protected $alias = 'request';
    protected $shared = false;

    public function register()
    {
        return new BaseRequest;
    }
}
