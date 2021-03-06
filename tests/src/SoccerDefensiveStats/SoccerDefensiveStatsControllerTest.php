<?php

declare(strict_types=1);

namespace Sports\Tests\SoccerDefensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\SoccerDefensiveStats\{ SoccerDefensiveStatsDto, SoccerDefensiveStatsModel, SoccerDefensiveStatsController };

class SoccerDefensiveStatsControllerTest extends TestCase
{
    private array $input;
    private SoccerDefensiveStatsDto $dto;
    private SoccerDefensiveStatsModel $model;
    private $service;
    private $request;
    private $stream;
    private SoccerDefensiveStatsController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 3115,
            "shots_penalty_shot_allowed" => "wonder",
            "goals_penalty_shot_allowed" => "would",
            "goals_against_average" => "into",
            "goals_against_total" => "military",
            "saves" => "magazine",
            "save_percentage" => "mouth",
            "catches_punches" => "television",
            "shots_on_goal_total" => "pick",
            "shots_shootout_total" => "people",
            "shots_shootout_allowed" => "language",
            "shots_blocked" => "third",
            "shutouts" => "finally",
        ];
        $this->dto = new SoccerDefensiveStatsDto($this->input);
        $this->model = new SoccerDefensiveStatsModel($this->dto);
        $this->service = $this->createMock("Sports\SoccerDefensiveStats\ISoccerDefensiveStatsService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new SoccerDefensiveStatsController(
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
        $id = 6438;
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
        $id = 7490;
        $expected = ["result" => $id];
        $args = ["id" => 3121];

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
        $args = ["id" => 6310];

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
        $id = 582;
        $expected = ["result" => $id];
        $args = ["id" => 4060];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}