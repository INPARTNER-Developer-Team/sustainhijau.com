<?php 

namespace Shi\Contact\Components;

use Cms\Classes\ComponentBase;
use October\Rain\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use shi\Contact\Models\Lists;

class ContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Contact Form',
            'description' => 'Simple Contact Form'
        ];
    }

    public function onSend(){

        $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'Company' => Input::get('company'), 'phone' => Input::get('phone'), 'message' => Input::get('message') ];

        Mail::send('grofgraf.contactme::emails.auto-reply', $vars, function($message)
        {
            $message->to(Input::get('email'), 'Admin SHI');
            // $message->subject('New Message');
            
        });

        $contact = new Lists;
        $contact->name = Input::get('name');
        $contact->company = Input::get('company');
        $contact->email = Input::get('email');
        $contact->message = Input::get('message');
        $contact->phone = Input::get('phone');
        $contact->save();

    }

}