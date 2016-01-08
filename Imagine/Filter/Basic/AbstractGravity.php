<?php
namespace SmarterSolutions\EzComponents\EzImageCropBundle\Imagine\Filter\Basic;

use Imagine\Image\BoxInterface;
use Imagine\Image\Point;

abstract class AbstractGravity implements GravityInterface
{
    /**
     * {@inheritdoc}
     */
    public function getStartPoint(BoxInterface $box)
    {
        return $this;
    }
    /**
     * {@inheritdoc}
     */
    public function getEndPoint(BoxInterface $box)
    {
        return new Point($this->getX() + $box->getWidth(), $this->getY() + $box->getHeight());
    }
    /**
     * {@inheritdoc}
     */
    public function in(BoxInterface $box)
    {
        return $this->getX() < $box->getWidth() && $this->getY() < $box->getHeight();
    }
    /**
     * {@inheritdoc}
     */
    public function move($amount)
    {
        return new Point($this->getX() + $amount, $this->getY() + $amount);
    }
    /**
     * {@inheritdoc}
     */
    public function moveY($amount)
    {
        return new Point($this->getX(), $this->getY() + $amount);
    }
    /**
     * {@inheritdoc}
     */
    public function moveX($amount)
    {
        return new Point($this->getX() + $amount, $this->getY());
    }
    /**
     * {@inheritdoc}
     */
    public function moveBox(BoxInterface $box)
    {
        return new Point($this->getX() + $box->getWidth(), $this->getY() + $box->getHeight());
    }
    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return sprintf('(%d, %d)', $this->getX(), $this->getY());
    }
}
