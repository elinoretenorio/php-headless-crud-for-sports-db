<?php

declare(strict_types=1);

namespace Sports\Tests\IceHockeyDefensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\IceHockeyDefensiveStats\{ IceHockeyDefensiveStatsDto, IceHockeyDefensiveStatsModel, IceHockeyDefensiveStatsController };

class IceHockeyDefensiveStatsControllerTest extends TestCase
{
    private array $input;
    private IceHockeyDefensiveStatsDto $dto;
    private IceHockeyDefensiveStatsModel $model;
    private $service;
    private $request;
    private $stream;
    private IceHockeyDefensiveStatsController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 4603,
            "shots_power_play_allowed" => "structure",
            "shots_penalty_shot_allowed" => "bill",
            "goals_power_play_allowed" => "field",
            "goals_penalty_shot_allowed" => "worker",
            "goals_against_average" => "shake",
            "saves" => "money",
            "save_percentage" => "model",
            "penalty_killing_amount" => "language",
            "penalty_killing_percentage" => "begin",
            "shots_blocked" => "break",
            "takeaways" => "world",
            "shutouts" => "each",
            "minutes_penalty_killing" => "sister",
            "hits" => "week",
            "goals_empty_net_allowed" => "plant",
            "goals_short_handed_allowed" => "score",
            "goals_shootout_allowed" => "catch",
            "shots_shootout_allowed" => "letter",
        ];
        $this->dto = new IceHockeyDefensiveStatsDto($this->input);
        $this->model = new IceHockeyDefensiveStatsModel($this->dto);
        $this->service = $this->createMock("Sports\IceHockeyDefensiveStats\IIceHockeyDefensiveStatsService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new IceHockeyDefensiveStatsController(
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
        $id = 2942;
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
        $id = 9342;
        $expected = ["result" => $id];
        $args = ["id" => 2137];

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
        $args = ["id" => 6779];

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
        $id = 3315;
        $expected = ["result" => $id];
        $args = ["id" => 5358];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}