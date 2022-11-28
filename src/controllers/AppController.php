<?php   

class AppController {
    protected function render(string $template = null, array $variables = []) {
        $templatePath = 'public/views/' . $template . '.html';
        $content = 'File not found';
        if (file_exists($templatePath)) {
            extract($variables);
            ob_start();
            include $templatePath;
            $content = ob_get_clean();
        }
        print $content;
    }

}

?>