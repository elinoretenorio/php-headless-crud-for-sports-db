<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballOffensiveStats;

use PHPUnit\Framework\TestCase;
use Sports\BaseballOffensiveStats\{ BaseballOffensiveStatsDto, BaseballOffensiveStatsModel, BaseballOffensiveStatsController };

class BaseballOffensiveStatsControllerTest extends TestCase
{
    private array $input;
    private BaseballOffensiveStatsDto $dto;
    private BaseballOffensiveStatsModel $model;
    private $service;
    private $request;
    private $stream;
    private BaseballOffensiveStatsController $controller;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 1285,
            "average" => 770.79,
            "runs_scored" => 7672,
            "at_bats" => 386,
            "hits" => 8987,
            "rbi" => 7041,
            "total_bases" => 5026,
            "slugging_percentage" => 504.24,
            "bases_on_balls" => 5570,
            "strikeouts" => 782,
            "left_on_base" => 8906,
            "left_in_scoring_position" => 9616,
            "singles" => 2577,
            "doubles" => 9930,
            "triples" => 7753,
            "home_runs" => 6300,
            "grand_slams" => 204,
            "at_bats_per_rbi" => 797.50,
            "plate_appearances_per_rbi" => 652.89,
            "at_bats_per_home_run" => 805.00,
            "plate_appearances_per_home_run" => 130.30,
            "sac_flies" => 1913,
            "sac_bunts" => 8197,
            "grounded_into_double_play" => 4443,
            "moved_up" => 5788,
            "on_base_percentage" => 521.00,
            "stolen_bases" => 9050,
            "stolen_bases_caught" => 9389,
            "stolen_bases_average" => 243.00,
            "hit_by_pitch" => 6608,
            "defensive_interferance_reaches" => 77,
            "on_base_plus_slugging" => 227.00,
            "plate_appearances" => 9447,
            "hits_extra_base" => 3501,
        ];
        $this->dto = new BaseballOffensiveStatsDto($this->input);
        $this->model = new BaseballOffensiveStatsModel($this->dto);
        $this->service = $this->createMock("Sports\BaseballOffensiveStats\IBaseballOffensiveStatsService");
        $this->request = $this->createMock("Psr\Http\Message\ServerRequestInterface");
        $this->stream = $this->createMock("Psr\Http\Message\StreamInterface");
        $this->controller = new BaseballOffensiveStatsController(
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
        $id = 3467;
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
        $id = 8803;
        $expected = ["result" => $id];
        $args = ["id" => 4009];

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
        $args = ["id" => 338];

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
        $id = 7530;
        $expected = ["result" => $id];
        $args = ["id" => 7160];

        $this->service->expects($this->once())
            ->method("delete")
            ->with($args["id"])
            ->willReturn($id);

        $actual = $this->controller->delete($this->request, $args);
        $this->assertEquals($expected, $actual->getPayload());
    }
}