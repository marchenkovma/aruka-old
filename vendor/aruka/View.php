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
        if(is_file($view_file)) {
            ob_start();
            require_once $view_file;
            $this->content = ob_get_clean();
        } else {
            throw new \Exception("View {$view_file} not found", 500);
        }

        if (false !== $this->layout) {
            $layout_file = APP . "/view/layouts/{$this->layout}.php";
            if (is_file($layout_file)) {
                require_once $layout_file;
            } else {
                throw new \Exception("Layout {$layout_file} not found", 500);
            }
        }
    }

    public function getMeta()
    {
        $names = ['Jonh', 'David', 'Maksim'];
        $out = '<title>' . h($this->meta['title']) . '</title>' . PHP_EOL;
        $out .= '<meta name="description" content="' . h($this->meta['description']) . '">' . PHP_EOL;
        $out .= '<meta name="keywords" content="' . h($this->meta['keywords']) .'">' . PHP_EOL;
        //return $out;
        $this->set(compact('names'));
    }
}