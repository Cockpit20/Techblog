<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Modified by kadencewp on 10-April-2024 using {@see https://github.com/BrianHenryIE/strauss}.
 */

namespace KadenceWP\KadenceBlocks\Symfony\Component\HttpFoundation;

/**
 * RequestMatcherInterface is an interface for strategies to match a Request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface RequestMatcherInterface
{
    /**
     * Decides whether the rule(s) implemented by the strategy matches the supplied request.
     *
     * @return bool
     */
    public function matches(Request $request);
}
