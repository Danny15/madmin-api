<?php namespace App\Transformers;
use App\Models\SiteContent;
use League\Fractal\TransformerAbstract;

class SiteContentTransformer extends TransformerAbstract
{
    public function transform(SiteContent $content)
    {
        return [
            'id' => (int) $content->id,
            'type' => $content->type,
            'contentType' => $content->contentType,
            'pagetitle' => $content->pagetitle,
            'longtitle' => $content->longtitle,
            'description' => $content->description,
            'alias' => $content->alias,
            'published' => (int) $content->published,
            'introtext' => $content->introtext,
            'content' => $content->content,
        ];
    }
}