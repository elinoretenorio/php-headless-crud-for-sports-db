<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballPassingStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballPassingStats\{ AmericanFootballPassingStatsDto, AmericanFootballPassingStatsModel, AmericanFootballPassingStatsController };

class AmericanFootballPassingStatsControllerTest extends TestCase
{
    private array $input;
    private AmericanFootballPassingStatsDto $dto;
    private AmericanFootballPassingStatsModel $model;
    private $service;
    private $request;
    private $stream;
    private AmericanFootballPassingStatsController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 7754,
            "passes_attempts" => "become",
            "passes_completions" => "different",
            "passes_percentage" => "production",
            "passes_yards_gross" => "program",
            "passes_yards_net" => "shake",
            "passes_yards_lost" => "head",
            "passes_touchdowns" => "too",
            "passes_touchdowns_percentage" => "break",
            "passes_interceptions" => "return",
            "passes_interceptions_percentage" => "team",
            "passes_longest" => "wear",
            "passes_average_yards_per" => "manager",
            "passer_rating" => "speak",
            "receptions_total" => "court",
            "receptions_yards" => "end",
            "receptions_touchdowns" => "event",
            "receptions_first_down" => "catch",
            "receptions_longest" => "ability",
            "receptions_average_yards_per" => "show",
        ];
        $this->dto = new AmericanFootballPassingStatsDto($this->input);
        $this->model = new AmericanFootballPassingStatsModel($this->dto);
        $this->service = $this->createMock("Sports\AmericanFootballPassingStats\IAmericanFootballPassingStatsService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new AmericanFootballPassingStatsController(
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
        $id = 630;
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
        $id = 7980;
        $expected = ["result" => $id];
        $args = ["id" => 5374];

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
        $args = ["id" => 9553];

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
        $id = 8068;
        $expected = ["result" => $id];
        $args = ["id" => 680];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}