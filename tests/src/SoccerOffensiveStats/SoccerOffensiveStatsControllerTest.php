<?php

declare(strict_types=1);

namespace Sports\Tests\SoccerOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\SoccerOffensiveStats\{ SoccerOffensiveStatsDto, SoccerOffensiveStatsModel, SoccerOffensiveStatsController };

class SoccerOffensiveStatsControllerTest extends TestCase
{
    private array $input;
    private SoccerOffensiveStatsDto $dto;
    private SoccerOffensiveStatsModel $model;
    private $service;
    private $request;
    private $stream;
    private SoccerOffensiveStatsController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 6730,
            "goals_game_winning" => "number",
            "goals_game_tying" => "send",
            "goals_overtime" => "go",
            "goals_shootout" => "receive",
            "goals_total" => "receive",
            "assists_game_winning" => "light",
            "assists_game_tying" => "item",
            "assists_overtime" => "plan",
            "assists_total" => "it",
            "points" => "record",
            "shots_total" => "white",
            "shots_on_goal_total" => "choice",
            "shots_hit_frame" => "cultural",
            "shots_penalty_shot_taken" => "into",
            "shots_penalty_shot_scored" => "event",
            "shots_penalty_shot_missed" => "station",
            "shots_penalty_shot_percentage" => "alone",
            "shots_shootout_taken" => "that",
            "shots_shootout_scored" => "four",
            "shots_shootout_missed" => "treat",
            "shots_shootout_percentage" => "cover",
            "giveaways" => "staff",
            "offsides" => "PM",
            "corner_kicks" => "always",
            "hat_tricks" => "Mr",
        ];
        $this->dto = new SoccerOffensiveStatsDto($this->input);
        $this->model = new SoccerOffensiveStatsModel($this->dto);
        $this->service = $this->createMock("Sports\SoccerOffensiveStats\ISoccerOffensiveStatsService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new SoccerOffensiveStatsController(
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
        $id = 5278;
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
        $id = 1504;
        $expected = ["result" => $id];
        $args = ["id" => 7330];

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
        $args = ["id" => 8200];

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
        $id = 4343;
        $expected = ["result" => $id];
        $args = ["id" => 9571];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}