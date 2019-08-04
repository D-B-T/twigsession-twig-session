<?php
/**
 * Twig Session plugin for Craft CMS 3.x
 *
 * A session plugin for twig.
 *
 * @link      candid.co.uk
 * @copyright Copyright (c) 2019 Joe The Boss
 */

namespace twigsession\twigsession\variables;

use twigsession\twigsession\TwigSession;

use Craft;

/**
 * Twig Session Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.twigSession }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Joe The Boss
 * @package   TwigSession
 * @since     1.0.0
 */
class TwigSessionVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.twigSession.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.twigSession.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
