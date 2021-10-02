<?php

declare(strict_types=1);

namespace Sports\Tests\MotorRacingRaceStats;

use PHPUnit\Framework\TestCase;
use Sports\MotorRacingRaceStats\{ MotorRacingRaceStatsDto, MotorRacingRaceStatsModel, MotorRacingRaceStatsController };

class MotorRacingRaceStatsControllerTest extends TestCase
{
    private array $input;
    private MotorRacingRaceStatsDto $dto;
    private MotorRacingRaceStatsModel $model;
    private $service;
    private $request;
    private $stream;
    private MotorRacingRaceStatsController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 6413,
            "time_behind_leader" => "agency",
            "laps_behind_leader" => "above",
            "time_ahead_follower" => "increase",
            "laps_ahead_follower" => "catch",
            "time" => "other",
            "points" => "media",
            "points_rookie" => "main",
            "bonus" => "culture",
            "laps_completed" => "these",
            "laps_leading_total" => "book",
            "distance_leading" => "nation",
            "distance_completed" => "capital",
            "distance_units" => "never",
            "speed_average" => "leader",
            "speed_units" => "rather",
            "status" => "sound",
            "finishes_top_5" => "join",
            "finishes_top_10" => "modern",
            "starts" => "little",
            "finishes" => "provide",
            "non_finishes" => "necessary",
            "wins" => "nearly",
            "races_leading" => "leader",
            "money" => "lawyer",
            "money_units" => "institution",
            "leads_total" => "form",
        ];
        $this->dto = new MotorRacingRaceStatsDto($this->input);
        $this->model = new MotorRacingRaceStatsModel($this->dto);
        $this->service = $this->createMock("Sports\MotorRacingRaceStats\IMotorRacingRaceStatsService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new MotorRacingRaceStatsController(
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
        $id = 5755;
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
        $id = 883;
        $expected = ["result" => $id];
        $args = ["id" => 2458];

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
        $args = ["id" => 1249];

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
        $id = 4546;
        $expected = ["result" => $id];
        $args = ["id" => 3910];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}