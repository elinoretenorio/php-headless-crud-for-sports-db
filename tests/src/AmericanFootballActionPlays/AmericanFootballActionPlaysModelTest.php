<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballActionPlays;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballActionPlays\{ AmericanFootballActionPlaysDto, AmericanFootballActionPlaysModel };

class AmericanFootballActionPlaysModelTest extends TestCase
{
    private array $input;
    private AmericanFootballActionPlaysDto $dto;
    private AmericanFootballActionPlaysModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 1325,
            "american_football_event_state_id" => 9162,
            "play_type" => "technology",
            "score_attempt_type" => "pay",
            "drive_result" => "result",
            "points" => 5706,
            "comment" => "election",
        ];
        $this->dto = new AmericanFootballActionPlaysDto($this->input);
        $this->model = new AmericanFootballActionPlaysModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new AmericanFootballActionPlaysModel(null);

        $this->assertInstanceOf(AmericanFootballActionPlaysModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 1872;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetAmericanFootballEventStateId(): void
    {
        $this->assertEquals($this->dto->americanFootballEventStateId, $this->model->getAmericanFootballEventStateId());
    }

    public function testSetAmericanFootballEventStateId(): void
    {
        $expected = 1298;
        $model = $this->model;
        $model->setAmericanFootballEventStateId($expected);

        $this->assertEquals($expected, $model->getAmericanFootballEventStateId());
    }

    public function testGetPlayType(): void
    {
        $this->assertEquals($this->dto->playType, $this->model->getPlayType());
    }

    public function testSetPlayType(): void
    {
        $expected = "coach";
        $model = $this->model;
        $model->setPlayType($expected);

        $this->assertEquals($expected, $model->getPlayType());
    }

    public function testGetScoreAttemptType(): void
    {
        $this->assertEquals($this->dto->scoreAttemptType, $this->model->getScoreAttemptType());
    }

    public function testSetScoreAttemptType(): void
    {
        $expected = "company";
        $model = $this->model;
        $model->setScoreAttemptType($expected);

        $this->assertEquals($expected, $model->getScoreAttemptType());
    }

    public function testGetDriveResult(): void
    {
        $this->assertEquals($this->dto->driveResult, $this->model->getDriveResult());
    }

    public function testSetDriveResult(): void
    {
        $expected = "surface";
        $model = $this->model;
        $model->setDriveResult($expected);

        $this->assertEquals($expected, $model->getDriveResult());
    }

    public function testGetPoints(): void
    {
        $this->assertEquals($this->dto->points, $this->model->getPoints());
    }

    public function testSetPoints(): void
    {
        $expected = 3892;
        $model = $this->model;
        $model->setPoints($expected);

        $this->assertEquals($expected, $model->getPoints());
    }

    public function testGetComment(): void
    {
        $this->assertEquals($this->dto->comment, $this->model->getComment());
    }

    public function testSetComment(): void
    {
        $expected = "stop";
        $model = $this->model;
        $model->setComment($expected);

        $this->assertEquals($expected, $model->getComment());
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