<?php

namespace Webkul\RestApi\Docs\Shop\Models\Core;

/**
 * @OA\Schema(
 *     title="Themes",
 *     description="Theme model",
 * )
 */
class Theme
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
     *     title="Theme code",
     *     description="Theme code",
     *     type="string",
     *     example="default"
     * )
     *
     * @var string
     */
    public $theme_code;

    /**
     * @OA\Property(
     *     title="channel_id",
     *     description="channel_id",
     *     format="int64",
     *     example=1
     * )
     *
     * @var int
     */
    public $channel_id;

    /**
     * @OA\Property(
     *     title="type",
     *     description="type",
     *     example="image_carousel",
     *     type="string",
     *     enum={"image_carousel", "static_content", "category_carousel", "product_carousel", "footer_links", "services_content"}
     * )
     *
     * @var string
     */
    public $type;

    /**
     * @OA\Property(
     *     title="name",
     *     description="name",
     *     type="string",
     *     example="image_carousel"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *     title="status",
     *     description="status",
     *     type="integer",
     *     example=1
     * )
     *
     * @var int
     */
    public $status;

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

    /**
     * @OA\Property(
     *     title="sort_order",
     *     description="sort_order",
     *     type="integer",
     *     example=1
     * )
     *
     * @var int
     */
    public $sort_order;

    /**
     * @OA\Property(
     *     title="Options",
     *     description="Variable structure depending on theme type",
     *     additionalProperties=true,
     *     type="object",
     *     oneOf={
     *         @OA\Schema(
     *             title="Image Carousel Options",
     *             @OA\Property(
     *                 property="images",
     *                 type="array",
     *                 @OA\Items(
     *                     @OA\Property(property="link", type="string"),
     *                     @OA\Property(property="image", type="string"),
     *                     @OA\Property(property="title", type="string")
     *                 )
     *             )
     *         ),
     *         @OA\Schema(
     *             title="Static Content Options",
     *             @OA\Property(property="css", type="string"),
     *             @OA\Property(property="html", type="string")
     *         ),
     *         @OA\Schema(
     *             title="Category Carousel Options",
     *             @OA\Property(
     *                 property="filters",
     *                 type="object",
     *                 @OA\Property(property="sort", type="string"),
     *                 @OA\Property(property="limit", type="integer"),
     *                 @OA\Property(property="parent_id", type="integer")
     *             )
     *         ),
     *         @OA\Schema(
     *             title="Product Carousel Options",
     *             @OA\Property(property="title", type="string"),
     *             @OA\Property(
     *                 property="filters",
     *                 type="object",
     *                 @OA\Property(property="new", type="integer"),
     *                 @OA\Property(property="sort", type="string"),
     *                 @OA\Property(property="limit", type="integer")
     *             )
     *         ),
     *         @OA\Schema(
     *             title="Footer Links Options",
     *             @OA\Property(
     *                 property="column_1",
     *                 type="array",
     *                 @OA\Items(
     *                     @OA\Property(property="url", type="string"),
     *                     @OA\Property(property="title", type="string"),
     *                     @OA\Property(property="sort_order", type="integer")
     *                 )
     *             ),
     *             @OA\Property(
     *                 property="column_2",
     *                 type="array",
     *                 @OA\Items(
     *                     @OA\Property(property="url", type="string"),
     *                     @OA\Property(property="title", type="string"),
     *                     @OA\Property(property="sort_order", type="integer")
     *                 )
     *             )
     *         ),
     *         @OA\Schema(
     *             title="Services Content Options",
     *             @OA\Property(
     *                 property="services",
     *                 type="array",
     *                 @OA\Items(
     *                     @OA\Property(property="title", type="string"),
     *                     @OA\Property(property="description", type="string"),
     *                     @OA\Property(property="service_icon", type="string")
     *                 )
     *             )
     *         )
     *     }
     * )
     *
     * @var array
     */
    public $options;

    /**
     * @OA\Property(
     *     title="Translations",
     *     description="Theme translations",
     *     type="array",
     *     @OA\Items(ref="#/components/schemas/ThemeTranslation")
     * )
     *
     * @var array
     */
    public $translations;
}
