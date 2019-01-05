<?php

namespace Bitty\View;

use Bitty\Http\Response;
use Bitty\View\ViewInterface;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractView implements ViewInterface
{
    /**
     * {@inheritDoc}
     */
    abstract public function render(string $template, $data = []): string;

    /**
     * Renders an HTTP response using the template and given data.
     *
     * @param string $template Template to render.
     * @param mixed $data Data to pass to template.
     *
     * @return ResponseInterface
     */
    public function renderResponse(string $template, $data = []): ResponseInterface
    {
        return new Response($this->render($template, $data));
    }
}
