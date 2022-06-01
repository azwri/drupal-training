<?php

namespace Drupal\custom_names\Controller;

class NamesController
{
    public function listNames()
    {
        $names = [
            ['name' => 'Abdulrahman'],
            ['name' => 'Khalid'],
            ['name' => 'Mohammed'],
        ];

        $_names = '';

        foreach ($names as $name)
        {
            $_names .= '<li>' . $name['name'] . '</li>';
        }

        return [
            '#type' => 'markup',
            '#markup' => '<ol>' . $_names . '</ol>'
        ];
    }
}