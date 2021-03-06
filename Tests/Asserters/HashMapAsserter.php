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

use Cubiche\Core\Collections\HashMapInterface;
use mageekguy\atoum\exceptions\logic as LogicException;

/**
 * HashMapAsserter class.
 *
 * @author Ivannis Suárez Jerez <ivannis.suarez@gmail.com>
 */
class HashMapAsserter extends CollectionAsserter
{
    /**
     * @var bool
     */
    protected $assertAll;

    /**
     * {@inheritdoc}
     */
    public function setWith($value, $checkType = true)
    {
        parent::setWith($value, $checkType);

        if ($checkType === true) {
            if ($this->value instanceof HashMapInterface) {
                $this->pass();
            } else {
                $this->fail($this->getLocale()->_('%s is not a list', $this));
            }
        }

        return $this;
    }

    /**
     * @param mixed $key
     *
     * @return $this
     */
    public function containsKey($key)
    {
        $collection = $this->valueAsCollection();
        if ($collection->containsKey($key) === true) {
            $this->pass();
        } else {
            $this->fail($this->getLocale()->_('The hashmap not contain the key %s', $key));
        }

        return $this;
    }

    /**
     * @param array|\Traversable $keys
     *
     * @return $this
     */
    public function containsKeys($keys)
    {
        foreach ($keys as $key) {
            $this->containsKey($key);
        }

        return $this;
    }

    /**
     * @param mixed $key
     *
     * @return $this
     */
    public function notContainsKey($key)
    {
        $collection = $this->valueAsCollection();
        if ($collection->containsKey($key) === true) {
            $this->fail($this->getLocale()->_('The hashmap contain this key %s', $key));
        } else {
            $this->pass();
        }

        return $this;
    }

    /**
     * @throws LogicException
     *
     * @return \Cubiche\Core\Collections\HashMapInterface
     */
    protected function valueAsCollection()
    {
        $value = $this->valueIsSet()->getValue();
        if ($value instanceof HashMapInterface) {
            return $value;
        }

        throw new LogicException('Hashmap is undefined');
    }
}
