<?php
/**
 * Theme constants and setup functions.
 *
 * @package Rendered
 * @author  Jason Bobich <jasonbobich@gmail.com>
 */

define( 'RENDERED_VERSION', '0.1.0' );
define( 'RENDERED_TEMPLATE_URL', get_template_directory_uri() );
define( 'RENDERED_PATH', get_template_directory() . '/' );
define( 'RENDERED_INC', RENDERED_PATH . 'includes/' );

require_once RENDERED_INC . 'content.php';
require_once RENDERED_INC . 'core.php';
require_once RENDERED_INC . 'template-parts.php';
require_once RENDERED_INC . 'template-tags.php';

Rendered\Core\setup();
