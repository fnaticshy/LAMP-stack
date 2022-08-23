<?php
namespace Helpers {
    function render(string $template, array $context) {
        global $base_path;
        extract($context);
        require_once $base_path . 'modules/templates/' . $template . '.php';
    }

    function get_fragment_path($template) {
        global $base_path;
        require_once $base_path . 'modules/templates/' . $template . '.inc.php';
    }
}