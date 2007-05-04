<?php
ezcTestRunner::addFileToFilter( __FILE__ );

/*
 * Holds the definition for Table
 * This definition is used by the keywords test.
 */
// build definition
$def = new ezcPersistentObjectDefinition();
$def->table = "table";
$def->class = "Sequence";

$def->idProperty = new ezcPersistentObjectIdProperty;
$def->idProperty->columnName = 'from';
$def->idProperty->propertyName = 'column';
$def->idProperty->visibility = ezcPersistentObjectProperty::VISIBILITY_PRIVATE;
$def->idProperty->generator = new ezcPersistentGeneratorDefinition( 'ezcPersistentSequenceGenerator',
                                                                    array( 'sequence' => 'table_from_seq' ) );

$def->properties['trigger'] = new ezcPersistentObjectProperty;
$def->properties['trigger']->columnName = 'select';
$def->properties['trigger']->propertyName = 'trigger';
$def->properties['trigger']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_INT;
$def->properties['trigger']->defaultValue = 0;
$def->properties['trigger']->visibility = ezcPersistentObjectProperty::VISIBILITY_PRIVATE;
$def->properties['trigger']->isRequired = false;

return $def;

?>