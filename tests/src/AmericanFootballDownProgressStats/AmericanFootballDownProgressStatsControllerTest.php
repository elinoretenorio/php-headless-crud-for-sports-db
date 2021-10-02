<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballDownProgressStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballDownProgressStats\{ AmericanFootballDownProgressStatsDto, AmericanFootballDownProgressStatsModel, AmericanFootballDownProgressStatsController };

class AmericanFootballDownProgressStatsControllerTest extends TestCase
{
    private array $input;
    private AmericanFootballDownProgressStatsDto $dto;
    private AmericanFootballDownProgressStatsModel $model;
    private $service;
    private $request;
    private $stream;
    private AmericanFootballDownProgressStatsController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 1995,
            "first_downs_total" => "language",
            "first_downs_pass" => "threat",
            "first_downs_run" => "may",
            "first_downs_penalty" => "information",
            "conversions_third_down" => "society",
            "conversions_third_down_attempts" => "blue",
            "conversions_third_down_percentage" => "condition",
            "conversions_fourth_down" => "black",
            "conversions_fourth_down_attempts" => "report",
            "conversions_fourth_down_percentage" => "soon",
        ];
        $this->dto = new AmericanFootballDownProgressStatsDto($this->input);
        $this->model = new AmericanFootballDownProgressStatsModel($this->dto);
        $this->service = $this->createMock("Sports\AmericanFootballDownProgressStats\IAmericanFootballDownProgressStatsService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new AmericanFootballDownProgressStatsController(
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
        $id = 4453;
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
        $id = 6539;
        $expected = ["result" => $id];
        $args = ["id" => 1639];

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
        $args = ["id" => 3808];

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
        $id = 687;
        $expected = ["result" => $id];
        $args = ["id" => 2711];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}