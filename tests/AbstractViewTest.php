<?php

namespace Bitty\Tests\View;

use Bitty\View\AbstractView;
use Bitty\View\ViewInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

class AbstractViewTest extends TestCase
{
    /**
     * @var AbstractView|MockObject
     */
    protected $fixture = null;

    protected function setUp(): void
    {
        parent::setUp();

        $this->fixture = $this->getMockForAbstractClass(AbstractView::class);
    }

    public function testInstanceOf(): void
    {
        self::assertInstanceOf(ViewInterface::class, $this->fixture);
    }

    public function testRenderResponse(): void
    {
        $html     = uniqid('html');
        $template = uniqid('template');
        $data     = [uniqid('param')];

        $this->fixture->expects(self::once())
            ->method('render')
            ->with($template, $data)
            ->willReturn($html);

        $actual = $this->fixture->renderResponse($template, $data);

        self::assertInstanceOf(ResponseInterface::class, $actual);
        self::assertEquals($html, (string) $actual->getBody());
    }
}
