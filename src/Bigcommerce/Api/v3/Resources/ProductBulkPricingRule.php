<?php

namespace Bigcommerce\Api\v3\Resources;

use Bigcommerce\Api\v3\Resource;
use Bigcommerce\Api\v3\Client;

/**
 * A meta field on a product.
 */
class ProductBulkPricingRule extends Resource
{
    /**
     * {@inheritdoc}
     * @var string
     */
    public $url = '/catalog/products/{id}/bulk-pricing-rules';
    
    protected $ignoreOnCreate = array(
        'id',
        'product_id'
    );
    
    protected $ignoreOnUpdate = array(
        'id',
        'product_id'
    );
}
