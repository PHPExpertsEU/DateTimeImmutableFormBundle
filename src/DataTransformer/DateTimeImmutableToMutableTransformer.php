<?php
/**
 * Created by PhpStorm.
 * User: zsolt
 * Date: 5/4/15
 * Time: 10:44 PM
 */

namespace PHPExpertsEU\DateTimeImmutableFormBundle\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class DateTimeImmutableToMutableTransformer implements DataTransformerInterface
{

    public function transform($value)
    {
        if ($value === null) {
            return null;
        }

        if (!($value instanceof \DateTimeInterface)) {
            throw new TransformationFailedException("Expected an instance of: DateTimeInterface, " . get_class($value) . " given.");
        }

        $result = new \DateTime();
        $result->setTimestamp($value->getTimestamp());
        $result->setTimezone($value->getTimezone());

        return $result;
    }

    public function reverseTransform($value)
    {
        if ($value === null) {
            return null;
        }

        if ($value instanceof \DateTimeImmutable) {
            return $value;
        }

        if (!($value instanceof \DateTime)) {
            throw new TransformationFailedException("Expected an instance of: DateTime, " . get_class($value) . " given.");
        }

        $result = new \DateTimeImmutable();
        $result = $result->setTimestamp($value->getTimestamp());
        $result = $result->setTimezone($value->getTimezone());

        return $result;
    }

}