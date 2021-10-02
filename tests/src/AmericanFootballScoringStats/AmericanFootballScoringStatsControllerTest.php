<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballScoringStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballScoringStats\{ AmericanFootballScoringStatsDto, AmericanFootballScoringStatsModel, AmericanFootballScoringStatsController };

class AmericanFootballScoringStatsControllerTest extends TestCase
{
    private array $input;
    private AmericanFootballScoringStatsDto $dto;
    private AmericanFootballScoringStatsModel $model;
    private $service;
    private $request;
    private $stream;
    private AmericanFootballScoringStatsController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 8053,
            "touchdowns_total" => "investment",
            "touchdowns_passing" => "billion",
            "touchdowns_rushing" => "fine",
            "touchdowns_special_teams" => "at",
            "touchdowns_defensive" => "family",
            "extra_points_attempts" => "vote",
            "extra_points_made" => "pretty",
            "extra_points_missed" => "write",
            "extra_points_blocked" => "source",
            "field_goal_attempts" => "manager",
            "field_goals_made" => "strategy",
            "field_goals_missed" => "the",
            "field_goals_blocked" => "first",
            "safeties_against" => "nation",
            "two_point_conversions_attempts" => "test",
            "two_point_conversions_made" => "detail",
            "touchbacks_total" => "decide",
        ];
        $this->dto = new AmericanFootballScoringStatsDto($this->input);
        $this->model = new AmericanFootballScoringStatsModel($this->dto);
        $this->service = $this->createMock("Sports\AmericanFootballScoringStats\IAmericanFootballScoringStatsService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new AmericanFootballScoringStatsController(
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
        $id = 7910;
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
        $id = 831;
        $expected = ["result" => $id];
        $args = ["id" => 8763];

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
        $args = ["id" => 2457];

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
        $id = 4535;
        $expected = ["result" => $id];
        $args = ["id" => 8381];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}