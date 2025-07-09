<?php

namespace Webkul\RestApi\Docs\Shop\Models\Core;

/**
 * @OA\Schema(
 *     title="StaticPageDetails",
 *     description="StaticPageDetails model",
 * )
 */
class StaticPageDetails
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
     *     title="URL Key",
     *     description="URL key for the static page",
     *     type="string",
     *     example="privacy-policy"
     * )
     *
     * @var string
     */
    public $url_key;

    /**
     * @OA\Property(
     *     title="Page Title",
     *     description="Title of the static page",
     *     type="string",
     *     example="Privacy Policy"
     * )
     *
     * @var string
     */
    public $page_title;

    /**
     * @OA\Property(
     *     title="HTML Content",
     *     description="HTML content of the static page",
     *     type="string",
     *     example="<div>Privacy Policy Page Content</div>"
     * )
     *
     * @var string
     */
    public $html_content;
}
