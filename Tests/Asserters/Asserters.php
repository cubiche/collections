<?php
/**
 * This file is part of the Cubiche package.
 *
 * Copyright (c) Cubiche
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Cubiche\Core\Collections\Tests\Asserters;

/**
 * Asserters trait.
 *
 * @author Karel Osorio Ramírez <osorioramirez@gmail.com>
 */
trait Asserters
{
    /**
     * @return \Cubiche\Core\Collections\Tests\Asserters\CollectionAsserter
     */
    public function collection()
    {
        return static::__call(__FUNCTION__, func_get_args());
    }

    /**
     * @return \Cubiche\Core\Collections\Tests\Asserters\ListAsserter
     */
    public function listCollection()
    {
        return static::__call(__FUNCTION__, func_get_args());
    }

    /**
     * @return \Cubiche\Core\Collections\Tests\Asserters\SetAsserter
     */
    public function setCollection()
    {
        return static::__call(__FUNCTION__, func_get_args());
    }

    /**
     * @return \Cubiche\Core\Collections\Tests\Asserters\HashMapAsserter
     */
    public function hashmapCollection()
    {
        return static::__call(__FUNCTION__, func_get_args());
    }

    /**
     * @return \Cubiche\Core\Collections\Tests\Asserters\DataSourceAsserter
     */
    public function datasource()
    {
        return static::__call(__FUNCTION__, func_get_args());
    }
}
