<?php
namespace TwbsTheme\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Expiration helper
 */
class UsersHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    /**
     * @param array $config The configuration settings provided to this helper.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->_defaultConfig = [
            'fields' => [
                'username' => 'username',
                'password' => 'password'
            ],
            'placeholders' => [
                'username' => __('Username'),
                'password' => __('Password')
            ]
        ];

        if (isset($config['fields'])) {
            if (isset($config['fields']['username'])) {
                $this->_defaultConfig['fields']['username'] = $config['fields']['username'];
            }
            if (isset($config['fields']['password'])) {
                $this->_defaultConfig['fields']['password'] = $config['fields']['password'];
            }
        }

        if (isset($config['placeholders'])) {
            if (isset($config['placeholders']['username'])) {
                $this->_defaultConfig['placeholders']['username'] = $config['placeholders']['username'];
            }
            if (isset($config['placeholders']['password'])) {
                $this->_defaultConfig['placeholders']['password'] = $config['placeholders']['password'];
            }
        }
    }

    /**
     * @param string $name The field name
     * @return bool
     */
    public function getField($name)
    {
        return isset($this->_defaultConfig['fields'][$name]) ? $this->_defaultConfig['fields'][$name] : false;
    }

    /**
     * @param string $name The placeholder name
     * @return bool
     */
    public function getPlaceholder($name)
    {
        return isset($this->_defaultConfig['placeholders'][$name]) ? $this->_defaultConfig['placeholders'][$name] : false;
    }
}
