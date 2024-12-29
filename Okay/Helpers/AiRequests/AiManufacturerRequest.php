<?php

namespace Okay\Helpers\AiRequests;


class AiManufacturerRequest extends AbstractAiRequest
{
    public const ENTITY_TYPE = 'manufacturer';
    public const FIELD_META_TITLE = 'meta_title';
    public const FIELD_META_DESCRIPTION = 'meta_description';
    public const FIELD_META_KEYWORDS= 'meta_keywords';
    public const FIELD_ANNOTATION = 'annotation';
    public const FIELD_DESCRIPTION = 'description';

    public function getRequestText(string $field): string
    {
        $template = '';
        switch ($field) {
            case self::FIELD_META_TITLE:
                $template = $this->settings->get('ai_manufacturer_title_template');
                break;
            case self::FIELD_META_DESCRIPTION:
                $template = $this->settings->get('ai_manufacturer_meta_description_template');
                break;
            case self::FIELD_META_KEYWORDS:
                $template = $this->settings->get('ai_manufacturer_keywords_template');
                break;
            case self::FIELD_ANNOTATION:
                $template = $this->settings->get('ai_manufacturer_annotation_template');
                break;
            case self::FIELD_DESCRIPTION:
                $template = $this->settings->get('ai_manufacturer_description_template');
        }
        return strtr($template, [
            '{$manufacturer}' => "\n'{$this->name}'\n"
        ]);
    }
}