<?php
/**
 * This file belongs to Boletus.
 * The source code of application includes a LICENSE file
 * with all information about license.
 *
 * @author Asier Ramos  <asier.boletus@gmail.com>
 * @author BeÃ±at EspiÃ±a <benat.boletus@gmail.com>
 */
namespace observer\Infraestructure;


class HtmlRender
{

    /**
     * @var array The data for template
     */
    protected $vars;

    /**
     * @var string The route where are located views
     */
    private $routeViews;

    public function __construct($routeViews)
    {
        $this->routeViews = $routeViews;
    }

    public function render($view, $vars = null)
    {
        $this->vars = $vars;
        extract($this->vars);
        $template = require_once($this->routeViews."/".$view);

        return $template;
    }
}