/**
 * @file
 * Simple behaviors.
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.simple = {
    attach: function (context, settings) {

      console.log('It works!');

    }
  };

} (Drupal));
