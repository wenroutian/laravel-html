<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class PostForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('标题', 'text')
            ->add('内容', 'textarea', [
                'rules' => 'max:5000',
                'class' => 'text'
            ])
            ->add('提交', 'submit');

    }
}
