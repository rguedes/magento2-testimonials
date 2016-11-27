<?php
/* 
 * @package Credevlabz/Testimonials
 * @category Api
 * @author Aman Srivastava <http://amansrivastava.in>
 *
 */

namespace Credevlabz\Testimonials\Api\Data;


interface TestimonialInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const TESTIMONIAL_ID = 'testimonial_id';
    const NAME         = 'name';
    const TITLE         = 'title';
    const CONTENT       = 'content';
    const CREATION_TIME = 'creation_time';
    const UPDATE_TIME   = 'update_time';
    const IS_ACTIVE     = 'is_active';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get name
     *
     * @return string|null
     */
    public function getName();

    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getContent();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime();

    /**
     * Is active
     *
     * @return bool|null
     */
    public function isActive();

    /**
     * Set ID
     *
     * @param int $id
     * @return \Credevlabz\Testimonials\Api\Data\TestimonialInterface
     */
    public function setId($id);

    /**
     * Set name
     *
     * @param string $name
     * @return \Credevlabz\Testimonials\Api\Data\TestimonialInterface
     */
    public function setName($name);

    /**
     * Set title
     *
     * @param string $title
     * @return \Credevlabz\Testimonials\Api\Data\TestimonialInterface
     */
    public function setTitle($title);

    /**
     * Set content
     *
     * @param string $content
     * @return \Credevlabz\Testimonials\Api\Data\TestimonialInterface
     */
    public function setContent($content);

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return \Credevlabz\Testimonials\Api\Data\TestimonialInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return \Credevlabz\Testimonials\Api\Data\TestimonialInterface
     */
    public function setUpdateTime($updateTime);

    /**
     * Set is active
     *
     * @param int|bool $isActive
     * @return \Credevlabz\Testimonials\Api\Data\TestimonialInterface
     */
    public function setIsActive($isActive);
}