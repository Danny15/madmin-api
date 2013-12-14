<?php namespace App\Controllers;
use App\Models\SiteContent;
use App\Transformers\SiteContentTransformer;

class SiteContents extends ApiController
{
    public function index()
    {
        $content = SiteContent::limit(10)->get();
        $this->respondWithCollection($content, new SiteContentTransformer);
    }
}