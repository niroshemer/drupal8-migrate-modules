<?php

namespace Drupal\uclahealth_article_import\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;

/**
 * Provides a 'UCLAHSMigrateArticles' migrate process plugin.
 *
 * @MigrateProcessPlugin(
 *  id = "uclahs_articles"
 * )
 */
class UCLAHSMigrateArticles extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    // Plugin logic goes here.
    if (empty($value)) {
      return '';
    }
    $output = "<p><a href=\"$value\">View original article</a></p>";    
    return $output;
  }

}
