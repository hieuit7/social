<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppOrderDetails
 *
 * @ORM\Table(name="app_order_details")
 * @ORM\Entity
 */
class AppOrderDetails
{
    /**
     * @var integer
     *
     * @ORM\Column(name="orderid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $orderid;

    /**
     * @var integer
     *
     * @ORM\Column(name="productid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $productid;

    /**
     * @var string
     *
     * @ORM\Column(name="unitprice", type="decimal", precision=18, scale=2, nullable=false)
     */
    private $unitprice = '0.00';

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="smallint", nullable=false)
     */
    private $quantity = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="discount", type="float", precision=8, scale=0, nullable=false)
     */
    private $discount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $total;



    /**
     * Set orderid
     *
     * @param integer $orderid
     *
     * @return AppOrderDetails
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;

        return $this;
    }

    /**
     * Get orderid
     *
     * @return integer
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Set productid
     *
     * @param integer $productid
     *
     * @return AppOrderDetails
     */
    public function setProductid($productid)
    {
        $this->productid = $productid;

        return $this;
    }

    /**
     * Get productid
     *
     * @return integer
     */
    public function getProductid()
    {
        return $this->productid;
    }

    /**
     * Set unitprice
     *
     * @param string $unitprice
     *
     * @return AppOrderDetails
     */
    public function setUnitprice($unitprice)
    {
        $this->unitprice = $unitprice;

        return $this;
    }

    /**
     * Get unitprice
     *
     * @return string
     */
    public function getUnitprice()
    {
        return $this->unitprice;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return AppOrderDetails
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set discount
     *
     * @param float $discount
     *
     * @return AppOrderDetails
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return AppOrderDetails
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }
}
