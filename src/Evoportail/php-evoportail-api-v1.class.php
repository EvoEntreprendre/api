<?php

/**
 * Evoportail Public API
 *
 * @package     API v1
 * @author      David Micheau
 * @link        http://api.evoportail.fr
 *
 */

class Evoportail
{
    # Evoportail API version
    var $version = 'v1';

    # Connect with https protocol
    var $secure = true;

    # Mode debug ? 0 : none; 1 : errors only; 2 : all
    var $debug = 0;

    # Edit with your Evoportail API keys (you can find them here :
    var $apiKey = '';
    var $secretKey = '';

    # Constructor function
    public function __construct($apiKey = false, $secretKey = false)
    {
        if ($apiKey) {
            $this->apiKey = $apiKey;
        }
        if ($secretKey) {
            $this->secretKey = $secretKey;
        }
        $this->apiUrl = (($this->secure) ? 'https' : 'http') . '://api.evoportail.fr/v1/REST';
    }
}
