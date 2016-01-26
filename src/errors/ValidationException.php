<?php
/**
 * @link      http://craftcms.com/
 * @copyright Copyright (c) 2015 Pixel & Tonic, Inc.
 * @license   http://craftcms.com/license
 */

namespace craft\app\errors;

use craft\app\base\Model;

/**
 * Class ValidationException
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2014, Pixel & Tonic, Inc.
 * @license   http://craftcms.com/license Craft License Agreement
 * @see       http://craftcms.com
 * @package   craft.app.exceptions
 * @since     3.0
 */
class ValidationException extends Exception
{

    /**
     * @var Model
     */
    private $_model = null;

    /**
     * Set the model that failed the validation.
     *
     * @param Model $model
     *
     * @return void
     */
    public function setModel(Model $model)
    {
        $this->_model = $model;
    }

    /**
     * Get the model that failed the validation.
     *
     * @return Model
     */
    public function getModel()
    {
        return $this->_model;
    }
}