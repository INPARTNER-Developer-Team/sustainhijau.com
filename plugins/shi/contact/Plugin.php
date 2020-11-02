<?php namespace SHI\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'shi\Contact\Components\ContactForm' => 'contactForm'
        ];
    }

    public function registerSettings()
    {
    }
}
