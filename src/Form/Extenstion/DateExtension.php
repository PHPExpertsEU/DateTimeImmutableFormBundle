<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 6/8/15
 * Time: 7:50 PM
 */

namespace PHPExpertsEU\DateTimeImmutableFormBundle\Form\Extension;


use PHPExpertsEU\DateTimeImmutableFormBundle\DataTransformer\DateTimeTransformer;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

class DateExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->addModelTransformer(new DateTimeTransformer(), true);
    }


    /**
     * Returns the name of the type being extended.
     *
     * @return string The name of the type being extended
     */
    public function getExtendedType()
    {
        return "date";
    }

}