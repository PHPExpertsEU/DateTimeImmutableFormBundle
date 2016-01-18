Step 1: Add DateTimeImmutableFormBundle to your project
=============================
```bash
composer require hwi/oauth-bundle
```

Step 2: Enable the bundle
=============================
Add the bundle into your kernel:

```php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new \PHPExpertsEU\DateTimeImmutableFormBundle\PHPExpertsEUDateTimeImmutableBundle(),
    );
}
```

Step 3: Enjoy
=============================