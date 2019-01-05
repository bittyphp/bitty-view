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

    /**
     * @param mixed $data
     *
     * @dataProvider sampleRenderData
     */
    public function testRenderResponse($data): void
    {
        $html     = uniqid('html');
        $template = uniqid('template');

        $this->fixture->expects(self::once())
            ->method('render')
            ->with($template, $data)
            ->willReturn($html);

        $actual = $this->fixture->renderResponse($template, $data);

        self::assertInstanceOf(ResponseInterface::class, $actual);
        self::assertEquals($html, (string) $actual->getBody());
    }

    public function sampleRenderData(): array
    {
        return [
            'array' => [[uniqid('param')]],
            'object' => [(object) [uniqid('param') => uniqid('value')]],
            'null' => [null],
            'false' => [false],
            'true' => [true],
            'int' => [rand()],
            'string' => [uniqid('a')],
        ];
    }
}
