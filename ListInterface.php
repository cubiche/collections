<?php
/**
 * This file is part of the Cubiche package.
 *
 * Copyright (c) Cubiche
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Cubiche\Core\Collections;

use Cubiche\Core\Specification\SpecificationInterface;

/**
 * List interface.
 *
 * @author Ivannis Suárez Jerez <ivannis.suarez@gmail.com>
 * @author Karel Osorio Ramírez <osorioramirez@gmail.com>
 */
interface ListInterface extends CollectionInterface
{
    /**
     * Appends the specified element to the end of this list.
     *
     * @param mixed $element
     */
    public function add($element);

    /**
     * Appends all of the elements in the specified collection to the end of this list.
     *
     * @param array|\Traversable $elements
     */
    public function addAll($elements);

    /**
     * Removes the first occurrence of the specified element from this list, if it is present.
     *
     * @param mixed $element
     *
     * @return bool
     */
    public function remove($element);

    /**
     * Removes from this list all of its elements that are contained in the specified collection.
     * Returns true if this list changed as a result of the call.
     *
     * @param array|\Traversable $elements
     *
     * @return bool
     */
    public function removeAll($elements);

    /**
     * Find the first element that match with a given specification in this list.
     *
     * @param SpecificationInterface $criteria
     *
     * @return mixed
     */
    public function findOne(SpecificationInterface $criteria);
}
