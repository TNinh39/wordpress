<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/asset_group_listing_group_filter.proto

namespace Google\Ads\GoogleAds\V14\Resources\ListingGroupFilterDimension;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * One element of a bidding category at a certain level. Top-level categories
 * are at level 1, their children at level 2, and so on. We currently support
 * up to 5 levels. The user must specify a dimension type that indicates the
 * level of the category. All cases of the same subdivision must have the same
 * dimension type (category level).
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.resources.ListingGroupFilterDimension.ProductBiddingCategory</code>
 */
class ProductBiddingCategory extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the product bidding category.
     * This ID is equivalent to the google_product_category ID as described in
     * this article: https://support.google.com/merchants/answer/6324436
     *
     * Generated from protobuf field <code>optional int64 id = 1;</code>
     */
    protected $id = null;
    /**
     * Indicates the level of the category in the taxonomy.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ListingGroupFilterBiddingCategoryLevelEnum.ListingGroupFilterBiddingCategoryLevel level = 2;</code>
     */
    protected $level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *           ID of the product bidding category.
     *           This ID is equivalent to the google_product_category ID as described in
     *           this article: https://support.google.com/merchants/answer/6324436
     *     @type int $level
     *           Indicates the level of the category in the taxonomy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Resources\AssetGroupListingGroupFilter::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of the product bidding category.
     * This ID is equivalent to the google_product_category ID as described in
     * this article: https://support.google.com/merchants/answer/6324436
     *
     * Generated from protobuf field <code>optional int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * ID of the product bidding category.
     * This ID is equivalent to the google_product_category ID as described in
     * this article: https://support.google.com/merchants/answer/6324436
     *
     * Generated from protobuf field <code>optional int64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Indicates the level of the category in the taxonomy.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ListingGroupFilterBiddingCategoryLevelEnum.ListingGroupFilterBiddingCategoryLevel level = 2;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Indicates the level of the category in the taxonomy.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.ListingGroupFilterBiddingCategoryLevelEnum.ListingGroupFilterBiddingCategoryLevel level = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\ListingGroupFilterBiddingCategoryLevelEnum\ListingGroupFilterBiddingCategoryLevel::class);
        $this->level = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProductBiddingCategory::class, \Google\Ads\GoogleAds\V14\Resources\ListingGroupFilterDimension_ProductBiddingCategory::class);

