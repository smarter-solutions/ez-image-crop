<?php
namespace SmarterSolutions\EzComponents\EzImageCropBundle\Imagine\Filter\Basic;

use Imagine\Image\BoxInterface;
use Imagine\Image\PointInterface;

interface GravityInterface extends PointInterface
{
    /**
     * @param  BoxInterface $box
     * @return PointInterface
     */
    public function getStartPoint(BoxInterface $box);
    /**
     * @param  BoxInterface $box
     * @return PointInterface
     */
    public function getEndPoint(BoxInterface $box);
    /**
     * Returns another point, moved by a given amount from current coordinates
     *
     * @param  integer $amount
     * @return PointInterface
     */
    public function moveY($amount);
    /**
     * Returns another point, moved by a given amount from current coordinates
     *
     * @param  integer $amount
     * @return PointInterface
     */
    public function moveX($amount);
    /**
     * Returns another point, moved by a given amount from current coordinates
     *
     * @param  BoxInterface $box
     * @return PointInterface
     */
    public function moveBox(BoxInterface $box);
}
