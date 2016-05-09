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

namespace PHPMentors\CompositePasswordAuthenticationBundle;

use PHPMentors\CompositePasswordAuthenticationBundle\DependencyInjection\PHPMentorsCompositePasswordAuthenticationExtension;
use PHPMentors\CompositePasswordAuthenticationBundle\DependencyInjection\Security\Factory\FormLoginCompositePasswordFactory;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PHPMentorsCompositePasswordAuthenticationBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $extension = $container->getExtension('security');
        $extension->addSecurityListenerFactory(new FormLoginCompositePasswordFactory());
    }

    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        if ($this->extension === null) {
            $this->extension = new PHPMentorsCompositePasswordAuthenticationExtension();
        }

        return $this->extension;
    }
}
