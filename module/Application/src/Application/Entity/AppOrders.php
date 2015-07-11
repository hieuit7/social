<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppOrders
 *
 * @ORM\Table(name="app_orders")
 * @ORM\Entity
 */
class AppOrders
{
    /**
     * @var integer
     *
     * @ORM\Column(name="orderid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderid;

    /**
     * @var integer
     *
     * @ORM\Column(name="customerid", type="integer", nullable=true)
     */
    private $customerid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="orderdate", type="datetime", nullable=true)
     */
    private $orderdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sumtotal", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $sumtotal;



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
     * Set customerid
     *
     * @param integer $customerid
     *
     * @return AppOrders
     */
    public function setCustomerid($customerid)
    {
        $this->customerid = $customerid;

        return $this;
    }

    /**
     * Get customerid
     *
     * @return integer
     */
    public function getCustomerid()
    {
        return $this->customerid;
    }

    /**
     * Set orderdate
     *
     * @param \DateTime $orderdate
     *
     * @return AppOrders
     */
    public function setOrderdate($orderdate)
    {
        $this->orderdate = $orderdate;

        return $this;
    }

    /**
     * Get orderdate
     *
     * @return \DateTime
     */
    public function getOrderdate()
    {
        return $this->orderdate;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return AppOrders
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set sumtotal
     *
     * @param string $sumtotal
     *
     * @return AppOrders
     */
    public function setSumtotal($sumtotal)
    {
        $this->sumtotal = $sumtotal;

        return $this;
    }

    /**
     * Get sumtotal
     *
     * @return string
     */
    public function getSumtotal()
    {
        return $this->sumtotal;
    }
}
