<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\app\base;

use craft\app\helpers\Component as ComponentHelper;
use yii\base\Arrayable;

/**
 * MissingComponentTrait implements the common methods and properties for classes implementing [[MissingComponentInterface]].
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
trait MissingComponentTrait
{
    // Properties
    // =========================================================================

    /**
     * @var string|Component The expected component class name.
     */
    public $expectedType;

    /**
     * @var string The exception message that explains why the component class was invalid
     */
    public $errorMessage;

    /**
     * @var mixed The custom settings associated with the component, if it is savable
     */
    public $settings;

    // Properties
    // =========================================================================

    /**
     * Creates a new component of a given type based on this one’s properties.
     *
     * @return ComponentInterface
     */
    public function createFallback($type)
    {
        /** @var Arrayable $this */
        $config = $this->toArray();
        unset($config['expectedType'], $config['errorMessage'], $config['settings']);
        $config['type'] = $type;

        return ComponentHelper::createComponent($config);
    }
}