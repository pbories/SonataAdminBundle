<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Admin;

/**
 * Implementations should provide arrays of FieldDescriptionInterface instances.
 *
 * @author Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * @method bool                        hasFormFieldDescription($name)
 * @method void                        addFormFieldDescription($name, FieldDescriptionInterface $fieldDescription)
 * @method void                        removeFormFieldDescription($name)
 * @method FieldDescriptionInterface   getShowFieldDescription($name)
 * @method FieldDescriptionInterface[] getShowFieldDescriptions()
 * @method bool                        hasListFieldDescription()
 * @method FieldDescriptionInterface   getListFieldDescription($name)
 * @method FieldDescriptionInterface[] getListFieldDescriptions()
 */
interface FieldDescriptionRegistryInterface
{
    /**
     * Return FormFieldDescription.
     *
     * @param string $name
     *
     * @return FieldDescriptionInterface|null // NEXT_MAJOR: Return FieldDescriptionInterface
     */
    public function getFormFieldDescription(string $name): ?FieldDescriptionInterface;

    // NEXT_MAJOR: Uncomment the following line.
    //public function hasFormFieldDescription(string $name): bool;

    // NEXT_MAJOR: Uncomment the following line.
    //public function addFormFieldDescription(string $name, FieldDescriptionInterface $fieldDescription): void;

    // NEXT_MAJOR: Uncomment the following line.
    //public function removeFormFieldDescription(string $name): void;

    /**
     * Build and return the collection of form FieldDescription.
     *
     * @return FieldDescriptionInterface[] collection of form FieldDescription
     */
    public function getFormFieldDescriptions(): array;

    // NEXT_MAJOR: Uncomment the following line.
    //public function getShowFieldDescription(string $name): FieldDescriptionInterface;

    /**
     * Returns true if the admin has a FieldDescription with the given $name.
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasShowFieldDescription(string $name): bool;

    /**
     * Adds a FieldDescription.
     *
     * @param string                    $name
     * @param FieldDescriptionInterface $fieldDescription
     *
     * @return void
     */
    public function addShowFieldDescription(string $name, FieldDescriptionInterface $fieldDescription): void;

    /**
     * Removes a ShowFieldDescription.
     *
     * @param string $name
     *
     * @return void
     */
    public function removeShowFieldDescription(string $name): void;

    // NEXT_MAJOR: Uncomment the following line.
    //public function getShowFieldDescriptions(): array;

    // NEXT_MAJOR: Uncomment the following line.
    //public function hasListFieldDescription(string $name): bool;

    // NEXT_MAJOR: Uncomment the following line.
    //public function getListFieldDescription(string $name): FieldDescriptionInterface;

    /**
     * Adds a list FieldDescription.
     *
     * @param string                    $name
     * @param FieldDescriptionInterface $fieldDescription
     *
     * @return void
     */
    public function addListFieldDescription(string $name, FieldDescriptionInterface $fieldDescription): void;

    /**
     * Removes a list FieldDescription.
     *
     * @param string $name
     *
     * @return void
     */
    public function removeListFieldDescription(string $name): void;

    // NEXT_MAJOR: Uncomment the following line.
    //public function getListFieldDescriptions(): array;

    /**
     * Returns a list depend on the given $object.
     *
     * @return FieldDescriptionCollection
     */
    public function getList(): FieldDescriptionCollection;

    /**
     * Returns a filter FieldDescription.
     *
     * @param string $name
     *
     * @return FieldDescriptionInterface|null // NEXT_MAJOR: Remove the null return type
     */
    public function getFilterFieldDescription(string $name): ?FieldDescriptionInterface;

    /**
     * Returns true if the filter FieldDescription exists.
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasFilterFieldDescription(string $name): bool;

    /**
     * Adds a filter FieldDescription.
     *
     * @param string                    $name
     * @param FieldDescriptionInterface $fieldDescription
     *
     * @return void
     */
    public function addFilterFieldDescription(string $name, FieldDescriptionInterface $fieldDescription): void;

    /**
     * Removes a filter FieldDescription.
     *
     * @param string $name
     *
     * @return void
     */
    public function removeFilterFieldDescription(string $name): void;

    /**
     * Returns the filter FieldDescription collection.
     *
     * @return FieldDescriptionInterface[]
     */
    public function getFilterFieldDescriptions(): array;
}
