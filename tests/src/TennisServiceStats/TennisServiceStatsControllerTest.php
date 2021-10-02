<?php

declare(strict_types=1);

namespace Sports\Tests\TennisServiceStats;

use PHPUnit\Framework\TestCase;
use Sports\TennisServiceStats\{ TennisServiceStatsDto, TennisServiceStatsModel, TennisServiceStatsController };

class TennisServiceStatsControllerTest extends TestCase
{
    private array $input;
    private TennisServiceStatsDto $dto;
    private TennisServiceStatsModel $model;
    private $service;
    private $request;
    private $stream;
    private TennisServiceStatsController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 4903,
            "services_played" => "discover",
            "matches_played" => "indeed",
            "aces" => "thank",
            "first_services_good" => "try",
            "first_services_good_pct" => "difference",
            "first_service_points_won" => "gun",
            "first_service_points_won_pct" => "buy",
            "second_service_points_won" => "arm",
            "second_service_points_won_pct" => "if",
            "service_games_played" => "bag",
            "service_games_won" => "fish",
            "service_games_won_pct" => "night",
            "break_points_played" => "skin",
            "break_points_saved" => "along",
            "break_points_saved_pct" => "piece",
        ];
        $this->dto = new TennisServiceStatsDto($this->input);
        $this->model = new TennisServiceStatsModel($this->dto);
        $this->service = $this->createMock("Sports\TennisServiceStats\ITennisServiceStatsService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new TennisServiceStatsController(
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
        $id = 2692;
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
        $id = 5932;
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
        $args = ["id" => 3916];

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
        $id = 2728;
        $expected = ["result" => $id];
        $args = ["id" => 3400];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}