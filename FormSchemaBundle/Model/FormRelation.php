<?php

/*
 * This file is part of the Netstar Form Schema package.
 *
 * (c) Gleb Tiltikov <gleb@netstar.od.ua>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Netstar\FormSchemaBundle\Model;

class FormRelation
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $master;

    /**
     * @var string
     */
    protected $slaves;

    /**
     * @var integer
     */
    protected $retrieveEntity;

    /**
     * @var \Master\CoreBundle\Entity\Cities
     */
    protected $findByFieldName;

    /**
     * @var boolean
     */
    protected $findByParams;

    /**
     * @var \Master\CoreBundle\Entity\Cities
     */
    protected $orderByParams;

    /**
     * @var \Master\CoreBundle\Entity\Cities
     */
    protected $resultFieldName;

    /**
     * @var \Master\CoreBundle\Entity\Cities
     */
    protected $queryBuilder;

    /**
     * @var \Master\CoreBundle\Entity\Cities
     */
    protected $options;

    
    public function __construct($master = null)
    {
    	$this->id = uniqid();
    	$this->master = $master;
    	$this->slaves = array();
    	$this->findByParams = array();
    	$this->orderByParams = array();
    }
    

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set slaves
     *
     * @param string $name
     * @return Areas
     */
    public function setSlave($slave)
    {
        $this->slaves[] = $slave;
    	
    	return $this;
    }
    
    /**
     * Set slaves
     *
     * @param string $name
     * @return Areas
     */
    public function setSlaves($slaves)
    {
        $this->slaves = $slaves;
    	
    	return $this;
    }

    /**
     * Get slaves
     *
     * @return string 
     */
    public function getSlaves()
    {
        return $this->slaves;
    }
    
    /**
     * Set master
     *
     * @param string $name
     * @return Areas
     */
    public function setMaster($master)
    {
        $this->master = $master;
    	
    	return $this;
    }

    /**
     * Get master
     *
     * @return string 
     */
    public function getMaster()
    {
        return $this->master;
    }

    /**
     * Set retrieveEntity
     *
     * @param string $name
     * @return Areas
     */
    public function setRetrieveEntity($retrieveEntity)
    {
        $this->retrieveEntity = $retrieveEntity;
    	
    	return $this;
    }

    /**
     * Get retrieveEntity
     *
     * @return string 
     */
    public function getRetrieveEntity()
    {
        return $this->retrieveEntity;
    }

    /**
     * Set findByFieldName
     *
     * @param integer $position
     * @return Areas
     */
    public function setFindByFieldName($findByFieldName)
    {
        $this->findByFieldName = $findByFieldName;
    	
    	return $this;
    }

    /**
     * Get findByFieldName
     *
     * @return integer 
     */
    public function getFindByFieldName()
    {
        return $this->findByFieldName;
    }

    /**
     * Set findByParams
     *
     * @param integer $position
     * @return Areas
     */
    public function setFindByParams($findByParams)
    {
        $this->findByParams = $findByParams;
    	
    	return $this;
    }

    /**
     * Get findByParams
     *
     * @return integer 
     */
    public function getFindByParams()
    {
        return $this->findByParams;
    }

    /**
     * Set orderByParams
     *
     * @param boolean $orderByParams
     * @return Areas
     */
    public function setOrderByParams($orderByParams)
    {
        $this->orderByParams = $orderByParams;
    	
    	return $this;
    }

    /**
     * Get orderByParams
     *
     * @return boolean 
     */
    public function getOrderByParams()
    {
        return $this->orderByParams;
    }

    /**
     * Set resultFieldName
     *
     * @param \Master\CoreBundle\Entity\Cities $city
     * @return Areas
     */
    public function setResultFieldName($resultFieldName)
    {
        $this->resultFieldName = $resultFieldName;
    	
    	return $this;
    }

    /**
     * Get resultFieldName
     *
     * @return \Master\CoreBundle\Entity\Cities 
     */
    public function getResultFieldName()
    {
        return $this->resultFieldName;
    }

    /**
     * Set queryBuilder
     *
     * @param \Master\CoreBundle\Entity\Cities $city
     * @return Areas
     */
    public function setQueryBuilder($queryBuilder)
    {
        $this->queryBuilder = $queryBuilder;
    	
    	return $this;
    }

    /**
     * Get queryBuilder
     *
     * @return \Master\CoreBundle\Entity\Cities 
     */
    public function getQueryBuilder()
    {
        return $this->queryBuilder;
    }

    /**
     * Set options
     *
     * @param \Master\CoreBundle\Entity\Cities $city
     * @return Areas
     */
    public function setOptions($options)
    {
        $this->options = $options;
    	
    	return $this;
    }

    /**
     * Get resultFieldName
     *
     * @return \Master\CoreBundle\Entity\Cities 
     */
    public function getOptions()
    {
        return $this->options;
    }
}
