<?php

namespace Webkul\RestApi\Docs\Shop\Controllers\Customer;

class WishlistController
{
    /**
     * @OA\Get(
     *      path="/api/v1/customer/wishlist",
     *      operationId="getCustomerWishlistDetail",
     *      tags={"Wishlists"},
     *      summary="Get customer's wishlist",
     *      description="Returns customer's wishlist",
     *      security={ {"sanctum": {} }},
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\JsonContent(
     *
     *              @OA\Property(
     *                  property="data",
     *                  type="array",
     *                  @OA\Items(
     *                      @OA\Property(property="id", type="integer"),
     *                      @OA\Property(property="product", type="object", ref="#/components/schemas/Product"),
     *                      @OA\Property(
     *                          property="created_at",
     *                          example="2020-01-27 17:50:45",
     *                          format="datetime",
     *                          type="string"
     *                     ),
     *                     @OA\Property(
     *                          property="updated_at",
     *                          example="2020-01-27 17:50:45",
     *                          format="datetime",
     *                          type="string"
     *                     )
     *                  )
     *              )
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function get()
    {
    }

    /**
     * @OA\Post(
     *      path="/api/v1/customer/wishlist/{id}",
     *      operationId="createOrRemoveCustomerWishlist",
     *      tags={"Wishlists"},
     *      summary="Add or Remove (deprecated) product to customer's wishlist",
     *      description="Add or Remove product to customer's wishlist. The remove action is deprecated, please use the `DELETE` method for the same endpoint instead.",
     *      security={ {"sanctum": {} }},
     *
     *      @OA\Parameter(
     *          name="id",
     *          description="Product id",
     *          required=true,
     *          in="path",
     *
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\JsonContent(
     *
     *              @OA\Property(
     *                  property="message",
     *                  type="string",
     *                  example="Product added/removed to wishlist successfully."
     *              )
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=404,
     *          description="Something went wrong!"
     *      )
     * )
     */
    public function store()
    {
    }

    /**
     * @OA\Delete(
     *      path="/api/v1/customer/wishlist/{id}",
     *      operationId="removeCustomerWishlist",
     *      tags={"Wishlists"},
     *      summary="Remove product from customer's wishlist",
     *      description="Remove product from customer's wishlist",
     *      security={ {"bearerAuth": {} }},
     *
     *      @OA\Parameter(
     *          name="id",
     *          description="Product id",
     *          required=true,
     *          in="path",
     *
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\JsonContent(
     *
     *              @OA\Property(
     *                  property="message",
     *                  type="string",
     *                  example="Product removed from wishlist successfully."
     *              )
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=404,
     *          description="Something went wrong!"
     *      )
     * )
     */
    public function remove()
    {
    }

    /**
     * @OA\Post(
     *      path="/api/v1/customer/wishlist/{id}/move-to-cart",
     *      operationId="moveToCartCustomerWishlist",
     *      tags={"Wishlists"},
     *      summary="Move Product From Wishlist To Cart",
     *      description="Move product from wishlist to cart",
     *      security={ {"sanctum": {} }},
     *
     *      @OA\Parameter(
     *          name="id",
     *          description="Product id",
     *          required=true,
     *          in="path",
     *
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *
     *      @OA\RequestBody(
     *           @OA\MediaType(
     *               mediaType="application/json",
     *               @OA\Schema(
     *                   @OA\Property(property="quantity", type="integer", example=1, nullable=true)
     *               )
     *           )
     *       ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\JsonContent(
     *
     *              @OA\Property(
     *                  property="message",
     *                  type="string",
     *                  example="Item successfully moved To cart."),
     *              @OA\Property(
     *                  property="data",
     *                  type="object",
     *                  ref="#/components/schemas/Wishlist"
     *              )
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=400,
     *          description="Selected Wishlist product not found.."
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Something went wrong!"
     *      )
     * )
     */
    public function moveToCart()
    {
    }

    /**
     * @OA\Delete(
     *      path="/api/v1/customer/wishlist/all",
     *      operationId="deleteAllWishlistItems",
     *      tags={"Wishlists"},
     *      summary="Delete all wishlist items.",
     *      description="Delete all wishlists items to the customer.",
     *      security={ {"sanctum": {} }},
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *
     *          @OA\JsonContent(
     *
     *              @OA\Property(
     *                  property="data",
     *                  type="object",
     *                  ref="#/components/schemas/Wishlist"
     *              )
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function deleteAll()
    {
    }
}
