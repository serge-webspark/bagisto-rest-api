<?php

namespace Webkul\RestApi\Docs\Shop\Models\Customer;

/**
 * @OA\Schema(
 *     title="Address",
 *     description="Address model",
 * )
 */
class Address
{
    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    private $id;

    /**
     * @OA\Property(
     *     title="First Name",
     *     description="Customer's First Name",
     *     example="John",
     * )
     *
     * @var string
     */
    private $first_name;

    /**
     * @OA\Property(
     *     title="Last Name",
     *     description="Customer's Last Name",
     *     example="Doe",
     * )
     *
     * @var string
     */
    private $last_name;

    /**
     * @OA\Property(
     *     title="Company Name",
     *     description="Customer's Company Name",
     *     example="Bagisto-Laravel",
     * )
     *
     * @var string
     */
    private $company_name;

    /**
     * @OA\Property(
     *     title="VAT ID",
     *     description="Customer's VAT ID",
     *     example="INV01234567891",
     * )
     *
     * @var string
     */
    private $vat_id;

    /**
     * @OA\Property(
     *     title="Address",
     *     description="Customer's Address",
     *     example="819, Farnum Road St. Elmira",
     *     type="string"
     * )
     *
     * @var string
     */
    private $address;

    /**
     * @OA\Property(
     *     title="Country",
     *     description="Address Country, contains only country code US (e.g. United States)",
     *     example="US",
     * )
     *
     * @var string
     */
    private $country;

    /**
     * @OA\Property(
     *     title="Country Name",
     *     description="Address Country Name, contains complate country name (e.g. United States)",
     *     example="United States",
     * )
     *
     * @var string
     */
    private $country_name;

    /**
     * @OA\Property(
     *     title="State",
     *     description="Address State, contains only state code MD (e.g. Maryland)",
     *     example="MD",
     * )
     *
     * @var string
     */
    private $state;

    /**
     * @OA\Property(
     *     title="City",
     *     description="Address City",
     *     example="Woodbine",
     * )
     *
     * @var string
     */
    private $city;

    /**
     * @OA\Property(
     *     title="Postcode",
     *     description="Address Postcode",
     *     format="string",
     *     example="21797"
     * )
     *
     * @var string
     */
    private $postcode;

    /**
     * @OA\Property(
     *     title="Phone",
     *     description="Customer's Phone Number",
     *     example="1234567890",
     * )
     *
     * @var string
     */
    private $phone;

    /**
     * @OA\Property(
     *     title="Is Default Address or Not",
     *     description="Customer's Default Address",
     *     type="boolean"
     * )
     *
     * @var bool
     */
    private $is_default;

    /**
     * @OA\Property(
     *     title="Created at",
     *     description="Created at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $created_at;

    /**
     * @OA\Property(
     *     title="Updated at",
     *     description="Updated at",
     *     example="2020-01-27 17:50:45",
     *     format="datetime",
     *     type="string"
     * )
     *
     * @var \DateTime
     */
    private $updated_at;
}
