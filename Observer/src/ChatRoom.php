<?php
namespace observer;

use observer\Infraestructure\HtmlRender;

class ChatRoom
{
    /**
     * @var LoaderInterface
     */
    private $loader;

    private $participants;

    /**
     * @var HtmlRender
     */
    private $htmlRender;

    /**
     * ChatRoom constructor.
     */
    public function __construct(LoaderInterface $loader, HtmlRender $htmlRender)
    {
        $this->loader = $loader;
        $this->participants = $loader->load();
        $this->htmlRender = $htmlRender;
    }


    public function render() {
        $this->htmlRender->render('room.php', ['participants' => $this->participants]);
    }
}