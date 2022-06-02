<?php

namespace aruka;

class View {
    
    public string $content = '';

    public function __construct(
        public $route,
        public $layout = '',
        public $view = '',
        public $meta = []
    )
    {
        if (false !== $this->layout) {
            $this->layout = $this->layout ?: LAYOUT;
        }

    }

    // Create page = template + view + data
    public function render($data)
    {
        if (is_array($data)) {
            extract($data);
        }
        // admin\ => admin/
        $prefix = str_replace('\\', '/', $this->route['admin_prefix']);
        $view_file = APP . "/view/{$prefix}{$this->route['controller']}/{$this->view}.php";
        var_dump($view_file);
    }
}