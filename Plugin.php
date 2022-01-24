<?php
/**
 * Created by PhpStorm.
 * User: Jefferson Simão Gonçalves
 * Email: gerson.simao.92@gmail.com
 * Date: 08/06/2018
 * Time: 16:48
 */

namespace Bugsnag;

use Cake\Core\BasePlugin;

/**
 * Class Plugin
 *
 * @author Jefferson Simão Gonçalves <gerson.simao.92@gmail.com>
 *
 * @package Settings
 */
class Plugin extends BasePlugin
{
    protected $routesEnabled = false;
    protected $bootstrapEnabled = false;
    protected $middlewareEnabled = false;
}