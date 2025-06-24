<?php

namespace Webkul\RestApi\Docs\Shop\Models\Catalog;

/**
 * @OA\Schema(
 *     title="ProductConfigurableConfig",
 *     description="ProductConfigurableConfig model, Use with configurable type product only.",
 * )
 */
class ProductConfigurableConfig
{
    /**
     * @OA\Property(
     *     title="Attributes",
     *     description="List of configurable attributes with available options",
     *     type="array",
     *     example={{
     *          "id": 23,
     *          "code": "color",
     *          "label": "Color",
     *          "swatch_type": null,
     *          "options": {{
     *              "id": 4,
     *              "label": "Black",
     *              "swatch_value": null,
     *              "products": {
     *                  4,
     *                  6
     *              }
     *          },  {
     *              "id": 5,
     *              "label": "White",
     *              "swatch_value": null,
     *              "products": {
     *                  5,
     *                  7
     *              }
     *          }}
     *     },   {
     *          "id": 24,
     *          "code": "size",
     *          "label": "Size",
     *          "swatch_type": null,
     *          "options": {{
     *              "id": 8,
     *              "label": "L",
     *              "swatch_value": null,
     *              "products": {
     *                  4,
     *                  5
     *              }
     *          },  {
     *              "id": 9,
     *              "label": "XL",
     *              "swatch_value": null,
     *              "products": {
     *                  6,
     *                  7
     *              }
     *          }}
     *      }},
     *
     *      @OA\Items(
     *
     *          @OA\Property(property="id", type="integer"),
     *          @OA\Property(property="code", type="string"),
     *          @OA\Property(property="label", type="string"),
     *          @OA\Property(property="swatch_type", type="string"),
     *          @OA\Property(
     *              property="options",
     *              type="array",
     *
     *              @OA\Items(
     *
     *                  @OA\Property(property="id", type="integer"),
     *                  @OA\Property(property="label", type="string"),
     *                  @OA\Property(property="swatch_type", type="string"),
     *                  @OA\Property(
     *                      property="products",
     *                      type="array",
     *
     *                      @OA\Items(
     *
     *                          @OA\Property(type="integer")
     *                      )
     *                  )
     *              )
     *          )
     *      )
     * )
     *
     * @var array
     */
    public $attributes;

    /**
     * @OA\Property(
     *     title="Index",
     *     description="Mapped list of configurable attributes with their options",
     *     type="array",
     *     example={
     *          {
     *              "id": 4,
     *              "attribute_option_ids": {
     *                  {
     *                      "attribute_id": 23,
     *                      "attribute_code": "color",
     *                      "attribute_option_id": 3
     *                  },
     *                  {
     *                       "attribute_id": 24,
     *                       "attribute_code": "size",
     *                       "attribute_option_id": 8
     *                   }
     *              }
     *          }
     *      },
     *      @OA\Items(
     *          type="object",
     *          @OA\Property(property="id", type="integer", example=4, description="Product ID"),
     *          @OA\Property(
     *              property="attribute_option_ids",
     *              type="array",
     *              example="List of attribute options",
     *              @OA\Items(
     *                  @OA\Property(property="attribute_id", type="integer", example=23),
     *                  @OA\Property(property="attribute_code", type="string", example="color"),
     *                  @OA\Property(property="attribute_option_id", type="string", example=3)
     *              )
     *          )
     *      )
     * )
     *
     * @var array
     */
    public $index;

    /**
     * @OA\Property(
     *     title="Variant Prices",
     *     description="Variant prices",
     *     type="array",
     *     example={
     *          {
     *              "id": 4,
     *              "regular_price": {
     *                  "price": 40,
     *                  "formated_price": "$40.00"
     *              },
     *              "final_price": {
     *                  "price": 38.5,
     *                  "formated_price": "$38.50"
     *              }
     *          },
     *          {
     *              "id": 5,
     *              "regular_price": {
     *                  "price": 30,
     *                  "formated_price": "$30.00"
     *              },
     *              "final_price": {
     *                  "price": 30,
     *                  "formated_price": "$30.00"
     *              }
     *          }
     *      },
     *     @OA\Items(
     *          type="object",
     *          @OA\Property(
     *              property="id",
     *              description="Product ID",
     *              type="integer",
     *              example=1
     *          ),
     *          @OA\Property(
     *              property="regular_price",
     *              type="object",
     *              @OA\Property(property="price", type="string", example="60.00"),
     *              @OA\Property(property="formated_price", type="string", example="$60.00")
     *          ),
     *          @OA\Property(
     *              property="final_price",
     *              type="object",
     *              @OA\Property(property="price", type="string", example="60.00"),
     *              @OA\Property(property="formated_price", type="string", example="$60.00")
     *          )
     *     )
     * )
     *
     * @var array
     */
    public $variant_prices;

    /**
     * @OA\Property(
     *     title="Variant Images",
     *     description="Variant images",
     *     type="array",
     *     example={
     *          {
     *              "id": 4,
     *              "images":{
     *                  "small_image_url": "http://localhost/public/cache/small/product/4/{image_name.jpg}",
     *                  "medium_image_url": "http://localhost/public/cache/medium/product/4/{image_name.jpg}",
     *                  "large_image_url": "http://localhost/public/cache/large/product/4/{image_name.jpg}",
     *                  "original_image_url": "http://localhost/public/cache/original/product/4/{image_name.jpg}"
     *              }
     *          },
     *          {
     *              "id": 5,
     *              "images":{
     *                  "small_image_url": "http://localhost/public/cache/small/product/4/{image_name.jpg}",
     *                  "medium_image_url": "http://localhost/public/cache/medium/product/4/{image_name.jpg}",
     *                  "large_image_url": "http://localhost/public/cache/large/product/4/{image_name.jpg}",
     *                  "original_image_url": "http://localhost/public/cache/original/product/4/{image_name.jpg}"
     *              }
     *          },
     *      },
     *     @OA\Items(
     *          type="object",
     *          @OA\Property(property="id", type="integer", example=4, description="Product ID"),
     *          @OA\Property(
     *              property="images",
     *              type="array",
     *              example="List of image presets",
     *              @OA\Items(
     *                  @OA\Property(property="small_image_url", type="string", example="http://localhost/public/cache/small/product/{product_id}/{image_name.jpg}"),
     *                  @OA\Property(property="medium_image_url", type="string", example="http://localhost/public/cache/small/product/{product_id}/{image_name.jpg}"),
     *                  @OA\Property(property="large_image_url", type="string", example="http://localhost/public/cache/small/product/{product_id}/{image_name.jpg}"),
     *                  @OA\Property(property="original_image_url", type="string", example="http://localhost/public/cache/small/product/{product_id}/{image_name.jpg}")
     *              )
     *          )
     *     )
     * )
     *
     * @var array
     */
    public $variant_images;

    /**
     * @OA\Property(
     *     title="Variant Videos",
     *     description="Variant Videos",
     *     type="array",
     *     example={
     *          {
     *              "id": 4,
     *              "videos":{
     *                  "type": "mp4",
     *                  "video_url": "http://localhost/public/cache/small/product/{product_id}/{video_name.mp4}",
     *              }
     *          }
     *      },
     *     @OA\Items(
     *          type="object",
     *          @OA\Property(property="id", type="integer", example=4, description="Product ID"),
     *          @OA\Property(
     *              property="videos",
     *              type="array",
     *              example="List of videos",
     *              @OA\Items(
     *                  @OA\Property(property="type", type="string", example="mp4"),
     *                  @OA\Property(property="video_url", type="string", example="http://localhost/public/cache/small/product/{product_id}/{video_name.mp4}"),
     *              )
     *          )
     *     )
     * )
     *
     * @var array
     */
    public $variant_videos;

    /**
     * @OA\Property(
     *     title="Regular Price",
     *     description="Regular price",
     *     type="object",
     *     example={
     *          "formated_price": "$30.00",
     *          "price": 30
     *      },
     *      @OA\Property(property="formated_price", type="string", example="$30.00"),
     *      @OA\Property(property="price", type="string", example="30.00")
     * )
     *
     * @var object
     */
    public $regular_price;
}
