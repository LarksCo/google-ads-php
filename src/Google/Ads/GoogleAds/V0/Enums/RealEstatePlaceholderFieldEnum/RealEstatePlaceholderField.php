<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/real_estate_placeholder_field.proto

namespace Google\Ads\GoogleAds\V0\Enums\RealEstatePlaceholderFieldEnum;

/**
 * Possible values for Real Estate placeholder fields.
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.RealEstatePlaceholderFieldEnum.RealEstatePlaceholderField</code>
 */
class RealEstatePlaceholderField
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Data Type: STRING. Unique ID.
     *
     * Generated from protobuf enum <code>LISTING_ID = 2;</code>
     */
    const LISTING_ID = 2;
    /**
     * Data Type: STRING. Main headline with listing name to be shown in dynamic
     * ad.
     *
     * Generated from protobuf enum <code>LISTING_NAME = 3;</code>
     */
    const LISTING_NAME = 3;
    /**
     * Data Type: STRING. City name to be shown in dynamic ad.
     *
     * Generated from protobuf enum <code>CITY_NAME = 4;</code>
     */
    const CITY_NAME = 4;
    /**
     * Data Type: STRING. Description of listing to be shown in dynamic ad.
     *
     * Generated from protobuf enum <code>DESCRIPTION = 5;</code>
     */
    const DESCRIPTION = 5;
    /**
     * Data Type: STRING. Complete listing address, including postal code.
     *
     * Generated from protobuf enum <code>ADDRESS = 6;</code>
     */
    const ADDRESS = 6;
    /**
     * Data Type: STRING. Price to be shown in the ad.
     * Example: "100.00 USD"
     *
     * Generated from protobuf enum <code>PRICE = 7;</code>
     */
    const PRICE = 7;
    /**
     * Data Type: STRING. Formatted price to be shown in the ad.
     * Example: "Starting at $100.00 USD", "$80 - $100"
     *
     * Generated from protobuf enum <code>FORMATTED_PRICE = 8;</code>
     */
    const FORMATTED_PRICE = 8;
    /**
     * Data Type: URL. Image to be displayed in the ad.
     *
     * Generated from protobuf enum <code>IMAGE_URL = 9;</code>
     */
    const IMAGE_URL = 9;
    /**
     * Data Type: STRING. Type of property (house, condo, apartment, etc.) used
     * to group like items together for recommendation engine.
     *
     * Generated from protobuf enum <code>PROPERTY_TYPE = 10;</code>
     */
    const PROPERTY_TYPE = 10;
    /**
     * Data Type: STRING. Type of listing (resale, rental, foreclosure, etc.)
     * used to group like items together for recommendation engine.
     *
     * Generated from protobuf enum <code>LISTING_TYPE = 11;</code>
     */
    const LISTING_TYPE = 11;
    /**
     * Data Type: STRING_LIST. Keywords used for product retrieval.
     *
     * Generated from protobuf enum <code>CONTEXTUAL_KEYWORDS = 12;</code>
     */
    const CONTEXTUAL_KEYWORDS = 12;
    /**
     * Data Type: URL_LIST. Final URLs to be used in ad when using Upgraded
     * URLs; the more specific the better (e.g. the individual URL of a specific
     * listing and its location).
     *
     * Generated from protobuf enum <code>FINAL_URLS = 13;</code>
     */
    const FINAL_URLS = 13;
    /**
     * Data Type: URL_LIST. Final mobile URLs for the ad when using Upgraded
     * URLs.
     *
     * Generated from protobuf enum <code>FINAL_MOBILE_URLS = 14;</code>
     */
    const FINAL_MOBILE_URLS = 14;
    /**
     * Data Type: URL. Tracking template for the ad when using Upgraded URLs.
     *
     * Generated from protobuf enum <code>TRACKING_URL = 15;</code>
     */
    const TRACKING_URL = 15;
    /**
     * Data Type: STRING. Android app link. Must be formatted as:
     * android-app://{package_id}/{scheme}/{host_path}.
     * The components are defined as follows:
     * package_id: app ID as specified in Google Play.
     * scheme: the scheme to pass to the application. Can be HTTP, or a custom
     *   scheme.
     * host_path: identifies the specific content within your application.
     *
     * Generated from protobuf enum <code>ANDROID_APP_LINK = 16;</code>
     */
    const ANDROID_APP_LINK = 16;
    /**
     * Data Type: STRING_LIST. List of recommended listing IDs to show together
     * with this item.
     *
     * Generated from protobuf enum <code>SIMILAR_LISTING_IDS = 17;</code>
     */
    const SIMILAR_LISTING_IDS = 17;
    /**
     * Data Type: STRING. iOS app link.
     *
     * Generated from protobuf enum <code>IOS_APP_LINK = 18;</code>
     */
    const IOS_APP_LINK = 18;
    /**
     * Data Type: INT64. iOS app store ID.
     *
     * Generated from protobuf enum <code>IOS_APP_STORE_ID = 19;</code>
     */
    const IOS_APP_STORE_ID = 19;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RealEstatePlaceholderField::class, \Google\Ads\GoogleAds\V0\Enums\RealEstatePlaceholderFieldEnum_RealEstatePlaceholderField::class);
