<?php
/**
 * Copyright (c) BoonEx Pty Limited - http://www.boonex.com/
 * CC-BY License - http://creativecommons.org/licenses/by/3.0/
 */

bx_import ('BxDolTwigTemplate');

class BxWmapTemplate extends BxDolTwigTemplate
{
    /**
     * Constructor
     */
    function BxWmapTemplate(&$oConfig, &$oDb)
    {
        parent::BxDolTwigTemplate($oConfig, $oDb);
    }

}
