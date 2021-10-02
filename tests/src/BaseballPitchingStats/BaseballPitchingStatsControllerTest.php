<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballPitchingStats;

use PHPUnit\Framework\TestCase;
use Sports\BaseballPitchingStats\{ BaseballPitchingStatsDto, BaseballPitchingStatsModel, BaseballPitchingStatsController };

class BaseballPitchingStatsControllerTest extends TestCase
{
    private array $input;
    private BaseballPitchingStatsDto $dto;
    private BaseballPitchingStatsModel $model;
    private $service;
    private $request;
    private $stream;
    private BaseballPitchingStatsController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 2274,
            "runs_allowed" => 8008,
            "singles_allowed" => 3910,
            "doubles_allowed" => 4746,
            "triples_allowed" => 3058,
            "home_runs_allowed" => 7793,
            "innings_pitched" => "father",
            "hits" => 5908,
            "earned_runs" => 3878,
            "unearned_runs" => 3040,
            "bases_on_balls" => 6791,
            "bases_on_balls_intentional" => 1914,
            "strikeouts" => 1864,
            "strikeout_to_bb_ratio" => 118.42,
            "number_of_pitches" => 6604,
            "era" => 392.30,
            "inherited_runners_scored" => 9320,
            "pick_offs" => 7975,
            "errors_hit_with_pitch" => 3862,
            "errors_wild_pitch" => 6993,
            "balks" => 4973,
            "wins" => 4109,
            "losses" => 7040,
            "saves" => 9399,
            "shutouts" => 7651,
            "games_complete" => 9997,
            "games_finished" => 9380,
            "winning_percentage" => 952.50,
            "event_credit" => "three",
            "save_credit" => "nothing",
        ];
        $this->dto = new BaseballPitchingStatsDto($this->input);
        $this->model = new BaseballPitchingStatsModel($this->dto);
        $this->service = $this->createMock("Sports\BaseballPitchingStats\IBaseballPitchingStatsService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new BaseballPitchingStatsController(
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
        $id = 1631;
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
        $id = 112;
        $expected = ["result" => $id];
        $args = ["id" => 607];

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
        $args = ["id" => 8104];

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
        $id = 5374;
        $expected = ["result" => $id];
        $args = ["id" => 9857];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}