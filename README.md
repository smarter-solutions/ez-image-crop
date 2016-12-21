# eZ Image Crop
This is a tool that improves cutting images in eZ Publish

## Install Package

```bash
composer require smarter-solutions/ez-image-crop "~2.0.0"
```
## Register Bundle

```php
// app/AppKernel.php

class EzPublishKernel extends Kernel
{
    ...
    public function registerBundles()
    {
        ...
        $bundles = array(
            ...
            new SmarterSolutions\EzComponents\EzImageCropBundle\EzImageCropBundle()
            ...
        );
        ...
    }
}
```
## Define filters

```yaml
# ezpublish/config/ezplatform.yml

ezpublish:
    imagemagick:
        path: /usr/bin/convert
        filters:
            gravity/center: '-gravity Center'
...
```
## Create Image alias
```yaml
# ezpublish/config/ezpublish.yml

ezpublish:
    system:
        frontend:
            image_variations:
                first_alias:
                    reference: null
                    filters:
                        - { name: gravity/center, params: [200, 75] }
...
```
