<h3>About</h3>
<p>The 'Media CKEditor Extras' module provides some enhancements and features on top of the Media-CKEditor stack. Features implemented by this module include:</p>
<dl>
  <dt>CSS Class field type</dt>
  <dd>This field type is almost same like a 'List text' field. The key values in fields of this type are supposed as CSS classes. Also, there will be extra configuration field called 'CSS styles' in field settings page. Which can be used to add CSS styles. On rendering, those CSS classes will be added to wrapper element of the rendered entity output. CSS styles also will be added to page output. Currently only Image type of Media entity type is supported.</dd>
  <dt>Image Alignment</dt>
  <dd>Submodule 'Media CKEditor Extras Features' brings a field called 'Image placement' which is of 'CSS Class' type mentioned above. Which already have some preconfiguraed CSS styles. So, you can use this field to align image on right, left or center on output.</dd>
  <dt>Caption</dt>
  <dd>Submodule 'Media CKEditor Extras Features' brings a field 'Caption' which can be used as caption for the images while adding to WYSIWYG editor using Media browser dialog.</dd>
  <dt>Link field</dt>
  <dd>
    User can add a link field in an image type and confgure to use it to link the image when rendered.<br/>
    To configure the link field:
    <ul>
      <li>Go to <?php print l('Image type edit page', 'admin/structure/file-types/manage/image'); ?>.</li>
      <li>Select the link field from selection list shown with label 'Link', which you can find under 'Media CKEditor Extras' fieldset.</li>
    </ul>
    <b>Note:</b> 'Media CKEditor Extras Features' submodule already brings a field 'field_image_link'. You just need to select that field at <?php print l('Image type edit page', 'admin/structure/file-types/manage/image'); ?>.
  </dd>
</dl>

<h3>Configuration</h3>
<p>There are few more steps you have to follow once both 'Media CKEditor Extras' and 'Media CKEditor Extras Features' modules are installed in the system. They are detailed here:</p>
<ul>
  <li>Go to CKEditor profiles of your choice that need Media Extras and enable "Media CKeditor Extras" plugin. Here is the <?php print l('CKEditor profiles list', 'admin/config/content/ckeditor'); ?>.</li>
  <li>Go to <?php print l('Image type edit page', 'admin/structure/file-types/manage/image'); ?> and select the link field from selection list shown with label 'Link', which you can find under 'Media CKEditor Extras' fieldset.</li>
</ul>

<h3>Configurations Required for Complete Media-CKEditor Stack to Work</h3>
<ul>
  <li>Go to <?php print l('Media browser settngs', 'admin/config/media/browser'); ?> page. Enable "Display fully rendered files in WYSIWYG" checkbox under "CKEditor WYSIWYG Configuration" section.</li>
  <li>Go to <?php print l('Permissions', 'admin/people/permissions'); ?> page and grant permission 'View overridden file entities in wysiwyg' to roles as required. Probably to 'Authenticated User' role.</li>
  <li>Go to <?php print l('CKEditor Global profile', 'admin/config/content/ckeditor/editg'); ?> page. Ensure plugin path on field "Path to the CKEditor plugins directory" is correctly configured. You can specify <strong>'%l/ckeditor/plugins'</strong> if CKEditor is put in libraries directory.</li>
  <li>Make sure following plugins are enabled on CKEditor profiles that require Media Extras:
    <ul>
      <li>Support for Linkit module</li>
      <li>Plugin for embedding files using Media CKEditor</li>
      <li>Media CKEditor Extras</li>
      <li>Plugin file: widget</li>
    </ul>
  </li>
  <li>Make sure to remove the default CKEditor 'Image' and 'Link' buttons and add the 'Media' and 'Linkit' buttons to toolbar of CKEditor profles that require Media Extras.</li>
  <li>Grant permission "Use the Caption HTML text format" to following roles: Contributor, Editor, Administrator and Webmaster.</li>
</ul>
