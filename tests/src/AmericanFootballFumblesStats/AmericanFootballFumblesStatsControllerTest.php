<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballFumblesStats;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballFumblesStats\{ AmericanFootballFumblesStatsDto, AmericanFootballFumblesStatsModel, AmericanFootballFumblesStatsController };

class AmericanFootballFumblesStatsControllerTest extends TestCase
{
    private array $input;
    private AmericanFootballFumblesStatsDto $dto;
    private AmericanFootballFumblesStatsModel $model;
    private $service;
    private $request;
    private $stream;
    private AmericanFootballFumblesStatsController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 5827,
            "fumbles_committed" => "issue",
            "fumbles_forced" => "west",
            "fumbles_recovered" => "visit",
            "fumbles_lost" => "face",
            "fumbles_yards_gained" => "can",
            "fumbles_own_committed" => "prevent",
            "fumbles_own_recovered" => "research",
            "fumbles_own_lost" => "standard",
            "fumbles_own_yards_gained" => "serve",
            "fumbles_opposing_committed" => "without",
            "fumbles_opposing_recovered" => "type",
            "fumbles_opposing_lost" => "small",
            "fumbles_opposing_yards_gained" => "drug",
        ];
        $this->dto = new AmericanFootballFumblesStatsDto($this->input);
        $this->model = new AmericanFootballFumblesStatsModel($this->dto);
        $this->service = $this->createMock("Sports\AmericanFootballFumblesStats\IAmericanFootballFumblesStatsService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new AmericanFootballFumblesStatsController(
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
        $id = 4965;
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
        $id = 8292;
        $expected = ["result" => $id];
        $args = ["id" => 8535];

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
        $args = ["id" => 381];

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
        $id = 6724;
        $expected = ["result" => $id];
        $args = ["id" => 5519];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}