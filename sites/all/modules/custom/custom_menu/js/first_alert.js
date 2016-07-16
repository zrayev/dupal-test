(function ( $ ) {
  'use strict';

  Drupal.behaviors.testScript1 = {
   attach: function (content, setting) {
     alert('Hello my first Drupal behaviors script!');
   }
};
} (jQuery));
