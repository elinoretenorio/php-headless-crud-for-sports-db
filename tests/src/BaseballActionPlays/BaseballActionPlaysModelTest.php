<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballActionPlays;

use PHPUnit\Framework\TestCase;
use Sports\BaseballActionPlays\{ BaseballActionPlaysDto, BaseballActionPlaysModel };

class BaseballActionPlaysModelTest extends TestCase
{
    private array $input;
    private BaseballActionPlaysDto $dto;
    private BaseballActionPlaysModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 4806,
            "baseball_event_state_id" => 7521,
            "play_type" => "realize",
            "notation" => "Mr",
            "notation_yaml" => "News suggest option mission responsibility word. Gas series firm dog turn brother large.",
            "baseball_defensive_group_id" => 2729,
            "comment" => "according",
            "runner_on_first_advance" => 1805,
            "runner_on_second_advance" => 7150,
            "runner_on_third_advance" => 442,
            "outs_recorded" => 3771,
            "rbi" => 718,
            "runs_scored" => 8041,
            "earned_runs_scored" => "worker",
        ];
        $this->dto = new BaseballActionPlaysDto($this->input);
        $this->model = new BaseballActionPlaysModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new BaseballActionPlaysModel(null);

        $this->assertInstanceOf(BaseballActionPlaysModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 5952;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetBaseballEventStateId(): void
    {
        $this->assertEquals($this->dto->baseballEventStateId, $this->model->getBaseballEventStateId());
    }

    public function testSetBaseballEventStateId(): void
    {
        $expected = 8844;
        $model = $this->model;
        $model->setBaseballEventStateId($expected);

        $this->assertEquals($expected, $model->getBaseballEventStateId());
    }

    public function testGetPlayType(): void
    {
        $this->assertEquals($this->dto->playType, $this->model->getPlayType());
    }

    public function testSetPlayType(): void
    {
        $expected = "success";
        $model = $this->model;
        $model->setPlayType($expected);

        $this->assertEquals($expected, $model->getPlayType());
    }

    public function testGetNotation(): void
    {
        $this->assertEquals($this->dto->notation, $this->model->getNotation());
    }

    public function testSetNotation(): void
    {
        $expected = "shoulder";
        $model = $this->model;
        $model->setNotation($expected);

        $this->assertEquals($expected, $model->getNotation());
    }

    public function testGetNotationYaml(): void
    {
        $this->assertEquals($this->dto->notationYaml, $this->model->getNotationYaml());
    }

    public function testSetNotationYaml(): void
    {
        $expected = "Bill finish writer people name team. Smile now turn trade star. Environment best yourself.";
        $model = $this->model;
        $model->setNotationYaml($expected);

        $this->assertEquals($expected, $model->getNotationYaml());
    }

    public function testGetBaseballDefensiveGroupId(): void
    {
        $this->assertEquals($this->dto->baseballDefensiveGroupId, $this->model->getBaseballDefensiveGroupId());
    }

    public function testSetBaseballDefensiveGroupId(): void
    {
        $expected = 8354;
        $model = $this->model;
        $model->setBaseballDefensiveGroupId($expected);

        $this->assertEquals($expected, $model->getBaseballDefensiveGroupId());
    }

    public function testGetComment(): void
    {
        $this->assertEquals($this->dto->comment, $this->model->getComment());
    }

    public function testSetComment(): void
    {
        $expected = "tough";
        $model = $this->model;
        $model->setComment($expected);

        $this->assertEquals($expected, $model->getComment());
    }

    public function testGetRunnerOnFirstAdvance(): void
    {
        $this->assertEquals($this->dto->runnerOnFirstAdvance, $this->model->getRunnerOnFirstAdvance());
    }

    public function testSetRunnerOnFirstAdvance(): void
    {
        $expected = 2973;
        $model = $this->model;
        $model->setRunnerOnFirstAdvance($expected);

        $this->assertEquals($expected, $model->getRunnerOnFirstAdvance());
    }

    public function testGetRunnerOnSecondAdvance(): void
    {
        $this->assertEquals($this->dto->runnerOnSecondAdvance, $this->model->getRunnerOnSecondAdvance());
    }

    public function testSetRunnerOnSecondAdvance(): void
    {
        $expected = 2545;
        $model = $this->model;
        $model->setRunnerOnSecondAdvance($expected);

        $this->assertEquals($expected, $model->getRunnerOnSecondAdvance());
    }

    public function testGetRunnerOnThirdAdvance(): void
    {
        $this->assertEquals($this->dto->runnerOnThirdAdvance, $this->model->getRunnerOnThirdAdvance());
    }

    public function testSetRunnerOnThirdAdvance(): void
    {
        $expected = 5377;
        $model = $this->model;
        $model->setRunnerOnThirdAdvance($expected);

        $this->assertEquals($expected, $model->getRunnerOnThirdAdvance());
    }

    public function testGetOutsRecorded(): void
    {
        $this->assertEquals($this->dto->outsRecorded, $this->model->getOutsRecorded());
    }

    public function testSetOutsRecorded(): void
    {
        $expected = 6718;
        $model = $this->model;
        $model->setOutsRecorded($expected);

        $this->assertEquals($expected, $model->getOutsRecorded());
    }

    public function testGetRbi(): void
    {
        $this->assertEquals($this->dto->rbi, $this->model->getRbi());
    }

    public function testSetRbi(): void
    {
        $expected = 2399;
        $model = $this->model;
        $model->setRbi($expected);

        $this->assertEquals($expected, $model->getRbi());
    }

    public function testGetRunsScored(): void
    {
        $this->assertEquals($this->dto->runsScored, $this->model->getRunsScored());
    }

    public function testSetRunsScored(): void
    {
        $expected = 6123;
        $model = $this->model;
        $model->setRunsScored($expected);

        $this->assertEquals($expected, $model->getRunsScored());
    }

    public function testGetEarnedRunsScored(): void
    {
        $this->assertEquals($this->dto->earnedRunsScored, $this->model->getEarnedRunsScored());
    }

    public function testSetEarnedRunsScored(): void
    {
        $expected = "reason";
        $model = $this->model;
        $model->setEarnedRunsScored($expected);

        $this->assertEquals($expected, $model->getEarnedRunsScored());
    }

    public function testToDto(): void
    {
        $this->assertEquals($this->dto, $this->model->toDto());
    }

    public function testJsonSerialize(): void
    {
        $this->assertEquals($this->input, $this->model->jsonSerialize());
    }
}