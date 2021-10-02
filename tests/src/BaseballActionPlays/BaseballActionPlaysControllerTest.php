<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballActionPlays;

use PHPUnit\Framework\TestCase;
use Sports\BaseballActionPlays\{ BaseballActionPlaysDto, BaseballActionPlaysModel, BaseballActionPlaysController };

class BaseballActionPlaysControllerTest extends TestCase
{
    private array $input;
    private BaseballActionPlaysDto $dto;
    private BaseballActionPlaysModel $model;
    private $service;
    private $request;
    private $stream;
    private BaseballActionPlaysController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 8447,
            "baseball_event_state_id" => 8717,
            "play_type" => "other",
            "notation" => "close",
            "notation_yaml" => "Building front school write. Make hospital must actually experience trouble. Fish necessary training card per. Ball similar those man skin owner.",
            "baseball_defensive_group_id" => 6095,
            "comment" => "education",
            "runner_on_first_advance" => 3648,
            "runner_on_second_advance" => 476,
            "runner_on_third_advance" => 889,
            "outs_recorded" => 2034,
            "rbi" => 5856,
            "runs_scored" => 213,
            "earned_runs_scored" => "country",
        ];
        $this->dto = new BaseballActionPlaysDto($this->input);
        $this->model = new BaseballActionPlaysModel($this->dto);
        $this->service = $this->createMock("Sports\BaseballActionPlays\IBaseballActionPlaysService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new BaseballActionPlaysController(
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
        $id = 9359;
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
        $id = 9087;
        $expected = ["result" => $id];
        $args = ["id" => 5923];

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
        $args = ["id" => 4062];

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
        $id = 7225;
        $expected = ["result" => $id];
        $args = ["id" => 746];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}