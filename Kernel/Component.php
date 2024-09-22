<?php

namespace kernel;

class Component {
    public static function display($compName, $compPar = []) {
        // Utilisation de la concaténation pour inclure les variables dans le HTML
        $type = $compPar['type'];
        $url = $compPar['url'];
        $label = $compPar['label'];

        $html = '<a class="btn btn-' . $type . ' btn-xs" href="' . $url . '">' . $label . '</a>';

        return $html;
    }
}
