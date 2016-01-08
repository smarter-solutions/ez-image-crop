<?php
namespace SmarterSolutions\EzComponents\EzImageCropBundle\Imagine\Filter\Loader;

use SmarterSolutions\EzComponents\EzImageCropBundle\Imagine\Filter\Basic\Gravity;
use SmarterSolutions\EzComponents\EzImageCropBundle\Imagine\Filter\Basic\MiddleMiddle;
use eZ\Bundle\EzPublishCoreBundle\Imagine\Filter\Loader\FilterLoaderWrapped;
use Imagine\Exception\InvalidArgumentException;
use Imagine\Image\Box;
use Imagine\Image\ImageInterface;

/**
 * Filter loader for gravity filter.
 * Proxy to RelativeResizeFilterLoader.
 */
class ThumbnailGravityCenterFilterLoader extends FilterLoaderWrapped
{
    public function load(ImageInterface $image, array $options = array())
    {
        if (empty($options)) {
            throw new InvalidArgumentException('Missing width option');
        }
        $filter = new Gravity( new Box((int)$options[0], (int)$options[1]), new MiddleMiddle( $image->getSize() ) );
        $image = $filter->apply($image);
        return $image;
    }
}
