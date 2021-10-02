<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballEventStates;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballEventStates\{ AmericanFootballEventStatesDto, AmericanFootballEventStatesModel, AmericanFootballEventStatesController };

class AmericanFootballEventStatesControllerTest extends TestCase
{
    private array $input;
    private AmericanFootballEventStatesDto $dto;
    private AmericanFootballEventStatesModel $model;
    private $service;
    private $request;
    private $stream;
    private AmericanFootballEventStatesController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 6927,
            "event_id" => 1625,
            "current_state" => 4431,
            "sequence_number" => 3422,
            "period_value" => 1202,
            "period_time_elapsed" => "child",
            "period_time_remaining" => "beyond",
            "clock_state" => "dinner",
            "down" => 1218,
            "team_in_possession_id" => 7795,
            "distance_for_1st_down" => 239,
            "field_side" => "bill",
            "field_line" => 9792,
            "context" => "soldier",
        ];
        $this->dto = new AmericanFootballEventStatesDto($this->input);
        $this->model = new AmericanFootballEventStatesModel($this->dto);
        $this->service = $this->createMock("Sports\AmericanFootballEventStates\IAmericanFootballEventStatesService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new AmericanFootballEventStatesController(
            $this->service
        );

        $this->stream->method("getContents")
            ->willReturn("[]");

        $this->request->method("getBody")
            ->willReturn($this->stream);

        $this->request->method("getParsedBody")
            ->willReturn($this->input);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
        unset($this->service);
        unset($this->request);
        unset($this->stream);
        unset($this->controller);
    }

    public function testInsert_ReturnsResponse(): void
    {
        $id = 3264;
        $expected = ["result" => $id];
        $args = [];

        $this->service->expects($this->once())
            ->method("createModel")
            ->with($this->request->getParsedBody())
            ->willReturn($this->model);
        $this->service->expects($this->once())
            ->method("insert")
            ->with($this->model)
            ->willReturn($id);

        $actual = $this->controller->insert($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }

    public function testUpdate_ReturnsErrorResponse(): void
    {
        $expected = ["result" => 0, "message" => "Invalid input"];
        $args = ["id" => 0];

        $actual = $this->controller->update($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }

    public function testUpdate_ReturnsResponse(): void
    {
        $id = 6700;
        $expected = ["result" => $id];
        $args = ["id" => 5872];

        $this->service->expects($this->once())
            ->method("createModel")
            ->with($this->request->getParsedBody())
            ->willReturn($this->model);
        $this->service->expects($this->once())
            ->method("update")
            ->with($this->model)
            ->willReturn($id);

        $actual = $this->controller->update($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }

    public function testGet_ReturnsErrorResponse(): void
    {
        $expected = ["result" => 0, "message" => "Invalid input"];
        $args = ["id" => 0];

        $actual = $this->controller->get($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }

    public function testGet_ReturnsResponse(): void
    {
        $expected = ["result" => $this->model->jsonSerialize()];
        $args = ["id" => 7648];

        $this->service->expects($this->once())
            ->method("get")
            ->with($args["id"])
            ->willReturn($this->model);

        $actual = $this->controller->get($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }

    public function testGetAll_ReturnsResponse(): void
    {
        $expected = ["result" => [$this->model->jsonSerialize()]];
        $args = [];

        $this->service->expects($this->once())
            ->method("getAll")
            ->willReturn([$this->model]);

        $actual = $this->controller->getAll($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }

    public function testDelete_ReturnsErrorResponse(): void
    {
        $expected = ["result" => 0, "message" => "Invalid input"];
        $args = ["id" => 0];

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }

    public function testDelete_ReturnsResponse(): void
    {
        $id = 9917;
        $expected = ["result" => $id];
        $args = ["id" => 8414];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}