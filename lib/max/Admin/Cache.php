<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

require_once RV_PATH . '/lib/RV.php';
RV::require_lib(
    array(
        '/max/language/Loader.php'
    )
);

/**
 * A class for determining the available delivery caching modes.
 *
 * @package    Max
 * @author     Andrew Hill <andrew@m3.net>
 * @static
 */
class MAX_Admin_Cache
{

    /**
     * A method for returning an array of the available delivery caching modes.
     *
     * @return array An array of strings representing the available delivery caching modes.
     */
    function AvailableCachingModes()
    {
        Language_Loader::load('default');
        $modes = array();
        $modes['none'] = $GLOBALS['strNone'];
        if (is_writable(MAX_PATH . '/var/cache')) {
            $modes['file'] = $GLOBALS['strCacheFiles'];
        }
        return $modes;
    }

}

?>
