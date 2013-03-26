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

use Netstar\FormSchemaBundle\Model\FormRelation;

interface FormSchemaInterface
{
    /**
     * @param string $serviceId
     * @param array  $classes
     */
    //public function setReader($serviceId, array $classes);

    /**
     * @param string $class
     *
     * @return bool
     */
    //public function hasReader($class);

    /**
     * @param string $class
     *
     * @return \Sonata\AdminBundle\Model\AuditReaderInterface
     * @throws \RuntimeException
     */
    //public function getReader($class);
    
    //public function getFormBuilder();
    
    //public function addRelation(FormRelation $relation);
    
    public function getRelations();
    
    public function relationBuilder();
    
    /*public function initUpdateForm($form);
    
    public function finalUpdateForm($form, $data);*/
    
    /*public static function getCurrentOptions($options);*/
}
