<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballSpecialTeamsStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballSpecialTeamsStats\{ AmericanFootballSpecialTeamsStatsDto, AmericanFootballSpecialTeamsStatsModel, AmericanFootballSpecialTeamsStatsController };

class AmericanFootballSpecialTeamsStatsControllerTest extends TestCase
{
    private array $input;
    private AmericanFootballSpecialTeamsStatsDto $dto;
    private AmericanFootballSpecialTeamsStatsModel $model;
    private $service;
    private $request;
    private $stream;
    private AmericanFootballSpecialTeamsStatsController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 317,
            "returns_punt_total" => "race",
            "returns_punt_yards" => "environment",
            "returns_punt_average" => "level",
            "returns_punt_longest" => "heart",
            "returns_punt_touchdown" => "teach",
            "returns_kickoff_total" => "control",
            "returns_kickoff_yards" => "personal",
            "returns_kickoff_average" => "heavy",
            "returns_kickoff_longest" => "home",
            "returns_kickoff_touchdown" => "player",
            "returns_total" => "something",
            "returns_yards" => "trip",
            "punts_total" => "more",
            "punts_yards_gross" => "which",
            "punts_yards_net" => "rock",
            "punts_longest" => "behind",
            "punts_inside_20" => "west",
            "punts_inside_20_percentage" => "try",
            "punts_average" => "catch",
            "punts_blocked" => "difference",
            "touchbacks_total" => "scene",
            "touchbacks_total_percentage" => "manager",
            "touchbacks_kickoffs" => "happy",
            "touchbacks_kickoffs_percentage" => "four",
            "touchbacks_punts" => "receive",
            "touchbacks_punts_percentage" => "act",
            "touchbacks_interceptions" => "sea",
            "touchbacks_interceptions_percentage" => "if",
            "fair_catches" => "majority",
        ];
        $this->dto = new AmericanFootballSpecialTeamsStatsDto($this->input);
        $this->model = new AmericanFootballSpecialTeamsStatsModel($this->dto);
        $this->service = $this->createMock("Sports\AmericanFootballSpecialTeamsStats\IAmericanFootballSpecialTeamsStatsService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new AmericanFootballSpecialTeamsStatsController(
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
        $id = 8249;
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
        $id = 1161;
        $expected = ["result" => $id];
        $args = ["id" => 5583];

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
        $args = ["id" => 6479];

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
        $id = 4277;
        $expected = ["result" => $id];
        $args = ["id" => 8856];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}