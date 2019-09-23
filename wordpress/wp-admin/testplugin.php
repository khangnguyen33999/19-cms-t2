<?php
 function loadMyBlock() {
  wp_enqueue_script(
    'my-new-block',
    plugin_dir_url(__FILE__) . 'test-plugin.js',
    array('wp-blocks','wp-editor'),
    true
  );
}
  
add_action('enqueue_block_editor_assets', 'loadMyBlock');