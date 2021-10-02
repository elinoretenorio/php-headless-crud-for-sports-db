<?php

declare(strict_types=1);

namespace Sports\Tests\BasketballOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\BasketballOffensiveStats\{ BasketballOffensiveStatsDto, BasketballOffensiveStatsModel, BasketballOffensiveStatsController };

class BasketballOffensiveStatsControllerTest extends TestCase
{
    private array $input;
    private BasketballOffensiveStatsDto $dto;
    private BasketballOffensiveStatsModel $model;
    private $service;
    private $request;
    private $stream;
    private BasketballOffensiveStatsController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 5342,
            "field_goals_made" => 7765,
            "field_goals_attempted" => 3498,
            "field_goals_percentage" => "majority",
            "field_goals_per_game" => "perform",
            "field_goals_attempted_per_game" => "church",
            "field_goals_percentage_adjusted" => "floor",
            "three_pointers_made" => 9220,
            "three_pointers_attempted" => 6005,
            "three_pointers_percentage" => "piece",
            "three_pointers_per_game" => "exactly",
            "three_pointers_attempted_per_game" => "find",
            "free_throws_made" => "more",
            "free_throws_attempted" => "thank",
            "free_throws_percentage" => "although",
            "free_throws_per_game" => "wrong",
            "free_throws_attempted_per_game" => "almost",
            "points_scored_total" => "suggest",
            "points_scored_per_game" => "prove",
            "assists_total" => "head",
            "assists_per_game" => "five",
            "turnovers_total" => "sound",
            "turnovers_per_game" => "perform",
            "points_scored_off_turnovers" => "house",
            "points_scored_in_paint" => "contain",
            "points_scored_on_second_chance" => "that",
            "points_scored_on_fast_break" => "clearly",
        ];
        $this->dto = new BasketballOffensiveStatsDto($this->input);
        $this->model = new BasketballOffensiveStatsModel($this->dto);
        $this->service = $this->createMock("Sports\BasketballOffensiveStats\IBasketballOffensiveStatsService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new BasketballOffensiveStatsController(
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
        $id = 7540;
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
        $id = 6588;
        $expected = ["result" => $id];
        $args = ["id" => 473];

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
        $args = ["id" => 8928];

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
        $id = 1564;
        $expected = ["result" => $id];
        $args = ["id" => 750];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}