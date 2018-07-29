<?php
/**
 * Created by PhpStorm.
 * User: redouane
 * Date: 25/07/2018
 * Time: 15:28
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


    /**
     * @ORM\Entity
     * @ORM\Table
     */
class Product
{
    const FOOD_PRODUCT = 'food';

    private $name;

    private $type;

    private $price;

    public function __construct($name, $type, $price)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
    }

    public function computeTVA()
    {
        if ($this->price < 0) {
            throw new \LogicException('The TVA cannot be negative.');
        }

        if (self::FOOD_PRODUCT == $this->type) {
            return $this->price * 0.055;
        }

        return $this->price * 0.196;
    }
}