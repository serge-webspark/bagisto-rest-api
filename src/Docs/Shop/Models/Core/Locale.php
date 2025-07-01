<?php

namespace Webkul\RestApi\Docs\Shop\Models\Core;

/**
 * @OA\Schema(
 *     title="Locale",
 *     description="Locale model",
 * )
 */
class Locale
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
    public $id;

    /**
     * @OA\Property(
     *     title="Code",
     *     description="Locale code",
     *     example="en"
     * )
     *
     * @var string
     */
    public $code;

    /**
     * @OA\Property(
     *     title="Name",
     *     description="Locale name",
     *     example="English"
     * )
     *
     * @var string
     */
    public $name;

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
    public $created_at;

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
    public $updated_at;

    /**
     * @OA\Property(
     *     title="Direction",
     *     description="Locale direction",
     *     enum={"ltr", "rtl"}
     * )
     *
     * @var string
     */
    public $direction;

    /**
     * @OA\Property(
     *     title="Image URL",
     *     description="Locale image URL",
     *     example="http://bagisto.test/storage/locales/gPItfHHyylLDkdFIdouZAXEjZxqbUzkx5CcmBhp3.png",
     *     type="string",
     *     format="uri"
     * )
     *
     * @var string
     */
    public $logo_url;
}
