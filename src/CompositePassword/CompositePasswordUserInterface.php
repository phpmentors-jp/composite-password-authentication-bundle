<?php
/*
 * Copyright (c) KUBO Atsuhiro <kubo@iteman.jp>,
 * All rights reserved.
 *
 * This file is part of PHPMentorsCompositePasswordAuthenticationBundle.
 *
 * This program and the accompanying materials are made available under
 * the terms of the BSD 2-Clause License which accompanies this
 * distribution, and is available at http://opensource.org/licenses/BSD-2-Clause
 */

namespace PHPMentors\CompositePasswordAuthenticationBundle\CompositePassword;

interface CompositePasswordUserInterface
{
    /**
     * @param array $compositePassword
     */
    public function validateCompositePassword(array $compositePassword);

    /**
     * @return array
     */
    public function getCompositePassword();
}
