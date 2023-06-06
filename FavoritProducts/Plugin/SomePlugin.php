<?php

namespace DimasCorporation\FavoritProducts\Plugin;

use DimasCorporation\FavoritProducts\ViewModel\Display;

class SomePlugin
{

    public function beforeShowProducts(Display $subject)
    {
        $subject->setName('Богдан');
    }


    public function afterShowProducts(Display $subject, $result)
    {
        return '**** ' . $result . ' ****';
    }

    public function beforeSetName(Display $subject, $name)
    {
        echo __METHOD__ . "<br><br>";
        $name = $name . ' to';
        return $name;
    }

    public function afterGetName(Display $subject, $result)
    {
        echo __METHOD__ . "<br><br>";
        return '' . $result . ' my site';
    }

    public function aroundGetName(Display $subject, callable $proceed)
    {
        echo __METHOD__ . "<br><br>";
        if (is_callable($proceed) !== true) {
            $result = 'Kate';
        } else {
            $result = $proceed();
        }
        echo __METHOD__ . " - <b>after proceed</b> <br><br>";
        return $result;
    }
}
