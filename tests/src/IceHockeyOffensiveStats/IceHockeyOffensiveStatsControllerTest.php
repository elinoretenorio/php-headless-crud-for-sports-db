<?php

declare(strict_types=1);

namespace Sports\Tests\IceHockeyOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\IceHockeyOffensiveStats\{ IceHockeyOffensiveStatsDto, IceHockeyOffensiveStatsModel, IceHockeyOffensiveStatsController };

class IceHockeyOffensiveStatsControllerTest extends TestCase
{
    private array $input;
    private IceHockeyOffensiveStatsDto $dto;
    private IceHockeyOffensiveStatsModel $model;
    private $service;
    private $request;
    private $stream;
    private IceHockeyOffensiveStatsController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 2342,
            "goals_game_winning" => "eat",
            "goals_game_tying" => "bed",
            "goals_power_play" => "majority",
            "goals_short_handed" => "Congress",
            "goals_even_strength" => "first",
            "goals_empty_net" => "whose",
            "goals_overtime" => "sing",
            "goals_shootout" => "he",
            "goals_penalty_shot" => "agreement",
            "assists" => "identify",
            "points" => "open",
            "power_play_amount" => "indeed",
            "power_play_percentage" => "three",
            "shots_penalty_shot_taken" => "couple",
            "shots_penalty_shot_missed" => "when",
            "shots_penalty_shot_percentage" => "listen",
            "giveaways" => "cold",
            "minutes_power_play" => "society",
            "faceoff_wins" => "authority",
            "faceoff_losses" => "evening",
            "faceoff_win_percentage" => "surface",
            "scoring_chances" => "structure",
        ];
        $this->dto = new IceHockeyOffensiveStatsDto($this->input);
        $this->model = new IceHockeyOffensiveStatsModel($this->dto);
        $this->service = $this->createMock("Sports\IceHockeyOffensiveStats\IIceHockeyOffensiveStatsService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new IceHockeyOffensiveStatsController(
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
        $id = 1833;
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
        $id = 9873;
        $expected = ["result" => $id];
        $args = ["id" => 4029];

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
        $args = ["id" => 1640];

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
        $id = 7458;
        $expected = ["result" => $id];
        $args = ["id" => 4351];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}