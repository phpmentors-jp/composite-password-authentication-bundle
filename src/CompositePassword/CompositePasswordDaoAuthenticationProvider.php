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

use Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Core\User\UserInterface;

class CompositePasswordDaoAuthenticationProvider extends DaoAuthenticationProvider
{
    /**
     * {@inheritdoc}
     */
    protected function checkAuthentication(UserInterface $user, UsernamePasswordToken $token)
    {
        assert($user instanceof CompositePasswordUserInterface);

        $currentUser = $token->getUser();
        if ($currentUser instanceof CompositePasswordUserInterface) {
            if (!$currentUser->validateCompositePassword($user->getCompositePassword())) {
                throw new BadCredentialsException('The credentials were changed from another session.');
            }
        } else {
            if (!$user->validateCompositePassword($token->getCredentials())) {
                throw new BadCredentialsException('The presented password is invalid.');
            }
        }
    }
}
