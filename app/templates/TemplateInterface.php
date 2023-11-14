<?php

namespace app\templates;

interface TemplateInterface
{
    public function render(string $template, array $data = []);
}
