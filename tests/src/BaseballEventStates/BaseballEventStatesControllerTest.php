<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballEventStates;

use PHPUnit\Framework\TestCase;
use Sports\BaseballEventStates\{ BaseballEventStatesDto, BaseballEventStatesModel, BaseballEventStatesController };

class BaseballEventStatesControllerTest extends TestCase
{
    private array $input;
    private BaseballEventStatesDto $dto;
    private BaseballEventStatesModel $model;
    private $service;
    private $request;
    private $stream;
    private BaseballEventStatesController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 2687,
            "event_id" => 844,
            "current_state" => 7310,
            "sequence_number" => 1501,
            "at_bat_number" => 4329,
            "inning_value" => 8958,
            "inning_half" => "red",
            "outs" => 424,
            "balls" => 2726,
            "strikes" => 8528,
            "runner_on_first_id" => 4531,
            "runner_on_second_id" => 7108,
            "runner_on_third_id" => 6888,
            "runner_on_first" => 7222,
            "runner_on_second" => 9089,
            "runner_on_third" => 4866,
            "runs_this_inning_half" => 8770,
            "pitcher_id" => 861,
            "batter_id" => 4025,
            "batter_side" => "amount",
            "context" => "from",
        ];
        $this->dto = new BaseballEventStatesDto($this->input);
        $this->model = new BaseballEventStatesModel($this->dto);
        $this->service = $this->createMock("Sports\BaseballEventStates\IBaseballEventStatesService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new BaseballEventStatesController(
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
        $id = 2174;
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
        $id = 2579;
        $expected = ["result" => $id];
        $args = ["id" => 4381];

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
        $args = ["id" => 9561];

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
        $id = 6474;
        $expected = ["result" => $id];
        $args = ["id" => 6354];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}