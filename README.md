# PHPMentorsCompositePasswordAuthenticationBundle

A Symfony bundle for authentication using composite password

[![Total Downloads](https://poser.pugx.org/phpmentors/composite-password-authentication-bundle/downloads)](https://packagist.org/packages/phpmentors/composite-password-authentication-bundle)
[![Latest Stable Version](https://poser.pugx.org/phpmentors/composite-password-authentication-bundle/v/stable)](https://packagist.org/packages/phpmentors/composite-password-authentication-bundle)
[![Latest Unstable Version](https://poser.pugx.org/phpmentors/composite-password-authentication-bundle/v/unstable)](https://packagist.org/packages/phpmentors/composite-password-authentication-bundle)

## Features

* Composite password support for form authentication

## Installation

`PHPMentorsCompositePasswordAuthenticationBundle` can be installed using [Composer](http://getcomposer.org/).

First, add the dependency to `phpmentors/composite-password-authentication-bundle` into your `composer.json` file as the following:

**Stable version:**

```
composer require phpmentors/composite-password-authentication-bundle "1.0.*"
```

**Development version:**

```
composer require phpmentors/composite-password-authentication-bundle "~1.1@dev"
```

Second, add `PHPMentorsCompositePasswordAuthenticationBundle` into your bundles to register in `AppKernel::registerBundles()` as the following:

```php
...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            ...
            new PHPMentors\CompositePasswordAuthenticationBundle\PHPMentorsCompositePasswordAuthenticationBundle(),
        );
        ...
```

## Configuration

`app/config/security.yml:`

```yaml
security:
    # ...

    firewalls:
        secured_area:
            form_login_composite_password:
                ... # Same configuration as `form_login`
```

## Support

If you find a bug or have a question, or want to request a feature, create an issue or pull request for it on [Issues](https://github.com/phpmentors-jp/composite-password-authentication-bundle/issues).

## Copyright

Copyright (c) 2016 KUBO Atsuhiro, All rights reserved.

## License

[The BSD 2-Clause License](http://opensource.org/licenses/BSD-2-Clause)
