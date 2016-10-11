<?php
/**
 * @author Patsura Dmitry https://github.com/ovr <talk@dmtry.me>
 */

namespace PHPSA;

use PHPSA\Definition\AbstractDefinition;
use PHPSA\Definition\ClassDefinition;
use PHPSA\Definition\ClassMethod;
use PHPSA\Definition\ClosureDefinition;
use PHPSA\Definition\FunctionDefinition;
use PHPSA\Definition\ReflectionClassMethod;
use PHPSA\Definition\RuntimeClassDefinition;
use PHPSA\Definition\TraitDefinition;

class ScopePointer
{
    /**
     * @var AbstractDefinition
     */
    protected $object;

    /**
     * Initializes the scopePointer with an object
     *
     * @param AbstractDefinition $object
     */
    public function __construct(AbstractDefinition $object)
    {
        $this->object = $object;
    }

    /**
     * Is the object a class method?
     *
     * @return bool
     */
    public function isClassMethod()
    {
        return $this->object instanceof ClassMethod;
    }

    /**
     * Is the object a function?
     *
     * @return bool
     */
    public function isFunction()
    {
        return $this->object instanceof FunctionDefinition;
    }

    /**
     * Is the object a reflection class method?
     *
     * @return bool
     */
    public function isReflectionClassMethod()
    {
        return $this->object instanceof ReflectionClassMethod;
    }

    /**
     * Is the object a closure?
     *
     * @return bool
     */
    public function isClosure()
    {
        return $this->object instanceof ClosureDefinition;
    }

    /**
     * Is the object a class?
     *
     * @return bool
     */
    public function isClass()
    {
        return $this->object instanceof ClassDefinition;
    }

    /**
     * Is the object a runtime class?
     *
     * @return bool
     */
    public function isRuntimeClass()
    {
        return $this->object instanceof RuntimeClassDefinition;
    }

    /**
     * Is the object a trait?
     *
     * @return bool
     */
    public function isTrait()
    {
        return $this->object instanceof TraitDefinition;
    }

    /**
     * Returns the object.
     *
     * @return AbstractDefinition
     */
    public function getObject()
    {
        return $this->object;
    }
}
