<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 6/8/15
 * Time: 7:50 PM
 */

namespace PHPExpertsEU\DateTimeImmutableFormBundle\Form;


use PHPExpertsEU\DateTimeImmutableFormBundle\DataTransformer\DateTimeImmutableToMutableTransformer;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DateTimeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        parent::buildForm($builder, $options);


        $builder->addModelTransformer(new DateTimeImmutableToMutableTransformer(), true);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
       /* $resolver->setDefaults(array(//'data_class' => \DateTimeImmutable::class
        ));*/

    }

    /**
     * Returns the name of the type being extended.
     *
     * @return string The name of the type being extended
     */
    public function getExtendedType()
    {
        return DateTimeType::class;
    }

}
