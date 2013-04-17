Form schema bundle 1
========

This bundle allows to add schema to any forms, with the relative entities, described only as select boxes.
This service just need in access formBuilder of the form.
At view level slave select boxes will only contain values, constrained by master selectbox.
Form will pass validation and value of slave select boxes will change automatically when master selectbox is changing.
There is a controller which will retrieve slave entity values and it will be done automatically. Also it's secured
by user session.

This is most actual in Sonata Admin, if your editing entity has depended properties related as Country -> Region -> City -> Subway
and you may have many cities and metro stations, so, more useful to show only actual metro stations if some city is selected,
instead of showing all list.


AUTHORITY

 Gleb Tiltikov <gleb@netstar.od.ua>
 https://github.com/GlebNetstar


LICENSE

 By MIT License


VERSION

 1 alpha


DEPENDENCIES

 - Symfony 2.1 or newer
 - jQuery
 - FOS\JsRoutingBundle
 - Doctrine


INSTALLATION

 Enable bundle in kernel:
 new Netstar\FormSchemaBundle\NetstarFormSchemaBundle(),
 
 Add to autoload;
 
 Add following lines to twig section in config.yml:

 twig:
    form:
        resources:
            - 'NetstarFormSchemaBundle:Form:fields.html.twig'
            
  If you want to use FormRelationSonataAdminFilter you need to override template
  standard_layout.html.twig in SonataAdmin and add to javascript block:
  
  {% include 'NetstarFormSchemaBundle::sonata_filters.html.twig' %}
  

USAGE

 Have a look at Admin/ExampleAdmin.php
 
 Get new schema service:
 $formSchema = $this->container->get('form.schema')->newSchema($formMapper->getFormBuilder()); // Creation of FormSchema object
 
 As the parameter you have to pass formBuilder of appropriate form.
 
 $form_relation1 = $formSchema->relationBuilder()
	->setMaster('city')
	->setSlaves(array('district', 'district2')) // Related select boxes
	->setRetrieveEntity('MasterCoreBundle:Districts')
	->setFindByFieldName('city') // Used in controller to make correct requests
	->setOrderByParams(array('name' => 'ASC'))
	->setQueryBuilder('city') // Name of related field in orm.yml schema
	->setResultFieldName('name'); // Name of field which contain value showing in slave selectbox on update
	
 $formSchema->addRelation($form_relation1); // You can add as many relatins as you wish
 
 $this->container->get('form.schema')->set($formSchema); // Process schema
 
 
 
 To make FormRelationSonataAdminFilter you have to do the following:
 
 $filterSchema = $this->container->get('form.schema')->newSonataFilter(); // Creation of SonataFilter object
		
 $form_relation2 = $filterSchema->relationBuilder()
	->setFilterName('district') // Name of existing filter
	->setEntity('MasterCoreBundle:Districts')
	->setParentRelation('city') // Name of related field in orm.yml schema
	->setOrderByParams(array('name' => 'ASC'));
 
 $form_relation = $filterSchema->relationBuilder()
	->setFilterName('district.city')
	->setEntity('MasterCoreBundle:Cities')
	->setOrderByParams(array('position' => 'ASC', 'name' => 'ASC'))
	->setSlave($form_relation2); // Slave relation object created above

 $filterSchema->addRelation($form_relation);
 
 $this->container->get('form.schema')->set($filterSchema, 'sonata_filter'); // 'sonata_filter' in parameter switching to Sonata Filter processing instead of Form Relation


KNOWN ISSUES

 - In Sonata, if object with relation is using as collection, problem with label field translation in dev environment.

TODO

 - Check and improve to Symfony 2.2 support (& Sonata 2.1), perhaps it already in accordance 
 


Please don't hesitate to contact me by any question or with the bug reports!

Email: gleb@netstar.od.ua

Facebook: http://www.facebook.com/glebnetstar


