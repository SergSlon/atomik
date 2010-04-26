<?php

class FormHelper extends Atomik_Helper
{
    const ENCTYPE_FORMDATA = 'multipart/form-data';
    const ENCTYPE_URLENCODED = 'application/x-www-form-urlencoded';
    
    public static $defaultCSSClass = '';
    
    public function form($action = '', $name = null, $attrs = array())
    {
        $attrs = array_merge($attrs, array(
            'action' => $action,
            'method' => Atomik::get('method', 'POST', $attrs),
            'class' => Atomik::get('class', self::$defaultCSSClass, $attrs)
        ));
        
        if ($name !== null) {
            $attrs['name'] = $name;
            $attrs['id'] = $name;
        }
        
        return '<form ' . $this->helpers->htmlAttributes($attrs) . '>';
    }
}
