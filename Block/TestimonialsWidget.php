<?php
/* 
 * @package Credevlabz/Testimonials
 * @category Block
 * @author Aman Srivastava <http://amansrivastava.in>
 *
 */

namespace Credevlabz\Testimonials\Block;

use Credevlabz\Testimonials\Api\Data\TestimonialInterface;
use Credevlabz\Testimonials\Model\ResourceModel\Testimonial\Collection as TestimonialCollection;

class TestimonialsWidget extends \Magento\Framework\View\Element\Template implements
    \Magento\Framework\DataObject\IdentityInterface
{
    /**
     * @var \Credevlabz\Testimonials\Model\ResourceModel\Testimonial\CollectionFactory
     */
    protected $_testimonialCollectionFactory;

    protected $_pageSize = 3;

    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Credevlabz\Testimonials\Model\ResourceModel\Testimonial\CollectionFactory $testimonialCollectionFactory,
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Credevlabz\Testimonials\Model\ResourceModel\Testimonial\CollectionFactory $testimonialCollectionFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_testimonialCollectionFactory = $testimonialCollectionFactory;
        if($this->hasData('size')){
            $this->_pageSize = $this->getData('size');
        }
    }

    /**
     * @return \Credevlabz\Testimonials\Model\ResourceModel\Testimonial\Collection
     */
    public function getTestimonials()
    {
        if (!$this->hasData('testimonials')) {
            $testimonials = $this->_testimonialCollectionFactory
                ->create()
                ->addFilter('is_active', 1)
                ->addFilter('show_homepage', 1)
                ->setPageSize($this->_pageSize)
                ->addOrder(
                    TestimonialInterface::CREATION_TIME,
                    TestimonialCollection::SORT_ORDER_ASC
                );
            $this->setData('testimonials', $testimonials);
        }
        return $this->getData('testimonials');
    }
    
    /**
     * @return $this
     */
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        if ($this->getTestimonials()) {
            $this->getTestimonials()->load();
        }
        return $this;
    }

    /**
     * Return identifiers for produced content
     *
     * @return array
     */
    public function getIdentities()
    {
        return [\Credevlabz\Testimonials\Model\Testimonial::CACHE_TAG . '_' . 'widget'];
    }

}