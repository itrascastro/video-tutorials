<?php
/**
 * xenFramework (http://xenframework.com/)
 *
 * This file is part of the xenframework package.
 *
 * (c) Ismael Trascastro <itrascastro@xenframework.com>
 *
 * @link        http://github.com/xenframework for the canonical source repository
 * @copyright   Copyright (c) xenFramework. (http://xenframework.com)
 * @license     MIT License - http://en.wikipedia.org/wiki/MIT_License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace controllers;

use models\CalculatorModel;

require 'models/CalculatorModel.php';



class CalculatorController 
{
    public function sumAction()
    {
        $action = 'doSum';
        require 'views/form.phtml';
    }

    public function doSumAction()
    {
        $model = new CalculatorModel($_POST['op1'], $_POST['op2']);
        $model->sum();
        $result = $model->getResult();
        require 'views/result.phtml';
    }

    public function subtractAction()
    {
        $action = 'doSubtract';
        require 'views/form.phtml';
    }

    public function doSubtractAction()
    {
        $model = new CalculatorModel($_POST['op1'], $_POST['op2']);
        $model->subtract();
        $result = $model->getResult();
        require 'views/result.phtml';
    }
} 