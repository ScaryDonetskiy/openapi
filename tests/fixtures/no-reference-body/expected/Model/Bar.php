<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Joli\Jane\OpenApi\Tests\Expected\Model;

class Bar
{
    /**
     * @var string
     */
    protected $foo;
    /**
     * @var string
     */
    protected $bar;

    /**
     * @return string
     */
    public function getFoo()
    {
        return $this->foo;
    }

    /**
     * @param string $foo
     *
     * @return self
     */
    public function setFoo($foo = null)
    {
        $this->foo = $foo;

        return $this;
    }

    /**
     * @return string
     */
    public function getBar()
    {
        return $this->bar;
    }

    /**
     * @param string $bar
     *
     * @return self
     */
    public function setBar($bar = null)
    {
        $this->bar = $bar;

        return $this;
    }
}