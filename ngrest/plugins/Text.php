<?php

namespace admin\ngrest\plugins;

class Text extends \admin\ngrest\base\Plugin
{
    public $placeholder = null;
    
    public function __construct($placeholder = null)
    {
        $this->placeholder = $placeholder;
    }
    
    public function renderList($doc)
    {
        $doc->appendChild($doc->createElement('span', '{{item.'.$this->name.'}}'));
        return $doc;
    }

    public function renderCreate($doc)
    {
        $elmn = $doc->createElement('zaa-text');
        $elmn->setAttribute('id', $this->id);
        $elmn->setIdAttribute('id', true);
        $elmn->setAttribute('model', $this->ngModel);
        $elmn->setAttribute('label', $this->alias);
        $elmn->setAttribute('grid', $this->gridCols);
        $elmn->setAttribute('placeholder', $this->placeholder);
        $doc->appendChild($elmn);

        return $doc;
    }

    public function renderUpdate($doc)
    {
        return $this->renderCreate($doc);
    }
}
