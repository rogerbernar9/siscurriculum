<?php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SexoType extends AbstractType
{
    public function getParent()
    {
        return ChoiceType::class;
    }
}

