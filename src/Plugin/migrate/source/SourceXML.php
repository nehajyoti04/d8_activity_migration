<?php
 
/**
 * @file
 * Contains \Drupal\d8_activity_migration\Plugin\migrate\source\SourceXML.
 */
 
namespace Drupal\d8_activity_migration\Plugin\migrate\source;
 
use Drupal\migrate\Row;
use Drupal\migrate\Plugin\migrate\source\SqlBase;
 
/**
 * XML Source files.
 *
 * @todo Support term_relation, term_synonym table if possible.
 *
 * @MigrateSource(
 *   id = "d8_activity_migration_xml_source"
 * )
 */
class Term extends SqlBase {
 
  /**
   * {@inheritdoc}
   */
  // public function query() {
    
  // }
 
  /**
   * {@inheritdoc}
   */
  // public function fields() {
  //   return array(
  //    );
  // }
 
  /**
   * {@inheritdoc}
   */
  // public function prepareRow(Row $row) {
    
  //   return parent::prepareRow($row);
  // }
 
  /**
   * {@inheritdoc}
   */
  // public function getIds() {
  //   $ids['tid']['type'] = 'integer';
  //   return $ids;
  // }
 
}
