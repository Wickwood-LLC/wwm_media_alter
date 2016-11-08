/**
 * @file Plugin for inserting styles for images added.
 */
( function() {
  var pluginDefinition = {
    // Wrap Drupal plugin in a proxy plugin.
    init: function(editor){

      if (Drupal.settings.hasOwnProperty('media_ckeditor_extras') && Drupal.settings.media_ckeditor_extras.hasOwnProperty('styles')) {
        for (var index in Drupal.settings.media_ckeditor_extras.styles) {
          CKEDITOR.addCss(Drupal.settings.media_ckeditor_extras.styles[index]);
        }
      }
    }
  };
  CKEDITOR.plugins.add( 'media_ckeditor_extras', pluginDefinition);
} )();
