<?php declare(strict_types=1);

namespace ApiGen\Contracts\Parser\Elements;

use ApiGen\Contracts\Parser\Reflection\ElementReflectionInterface;

interface ElementFilterInterface
{

    /**
     * @param ElementReflectionInterface[] $elements
     * @return ElementReflectionInterface[]
     */
    public function filterForMain(array $elements);


    /**
     * @param ElementReflectionInterface[] $elements
     * @param string $annotation
     * @return ElementReflectionInterface[]
     */
    public function filterByAnnotation(array $elements, string $annotation);
}
