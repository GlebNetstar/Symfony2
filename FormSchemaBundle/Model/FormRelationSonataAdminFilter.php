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

class FormRelationSonataAdminFilter
{
    /**
     * @var string
     */
    protected $filterName;

    /**
     * @var integer
     */
    protected $entity;

    /**
     * @var \Master\CoreBundle\Entity\Cities
     */
    protected $parentRelation;

    /**
     * @var \Master\CoreBundle\Entity\Cities
     */
    protected $orderByParams;

    /**
     * @var string
     */
    protected $slave;

    
    public function __construct()
    {
    	$this->orderByParams = array();
    }
    
    
    /**
     * Set slaves
     *
     * @param string $name
     * @return Areas
     */
    public function setFilterName($filterName)
    {
        $this->filterName = $filterName;
    	
    	return $this;
    }

    /**
     * Get slaves
     *
     * @return string 
     */
    public function getFilterName()
    {
        return str_replace('.', '__', $this->filterName);
    }
    
    /**
     * Set master
     *
     * @param string $name
     * @return Areas
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;
    	
    	return $this;
    }

    /**
     * Get master
     *
     * @return string 
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Set parentRelation
     *
     * @param string $name
     * @return Areas
     */
    public function setParentRelation($parentRelation)
    {
        $this->parentRelation = $parentRelation;
    	
    	return $this;
    }

    /**
     * Get parentRelation
     *
     * @return string 
     */
    public function getParentRelation($id = null)
    {
    	if($id) return array($this->parentRelation => $id);
    	
    	else return array();
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
     * Set slaves
     *
     * @param string $name
     * @return Areas
     */
    public function setSlave($slave)
    {
        $this->slave = $slave;
    	
    	return $this;
    }

    /**
     * Get slaves
     *
     * @return string 
     */
    public function getSlave()
    {
        return $this->slave;
    }
}
