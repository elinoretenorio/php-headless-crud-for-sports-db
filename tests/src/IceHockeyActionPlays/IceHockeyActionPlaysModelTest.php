<?php

declare(strict_types=1);

namespace Sports\Tests\IceHockeyActionPlays;

use PHPUnit\Framework\TestCase;
use Sports\IceHockeyActionPlays\{ IceHockeyActionPlaysDto, IceHockeyActionPlaysModel };

class IceHockeyActionPlaysModelTest extends TestCase
{
    private array $input;
    private IceHockeyActionPlaysDto $dto;
    private IceHockeyActionPlaysModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 5092,
            "ice_hockey_event_state_id" => 3749,
            "play_type" => "rest",
            "score_attempt_type" => "subject",
            "play_result" => "condition",
            "comment" => "interesting",
        ];
        $this->dto = new IceHockeyActionPlaysDto($this->input);
        $this->model = new IceHockeyActionPlaysModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new IceHockeyActionPlaysModel(null);

        $this->assertInstanceOf(IceHockeyActionPlaysModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 7792;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetIceHockeyEventStateId(): void
    {
        $this->assertEquals($this->dto->iceHockeyEventStateId, $this->model->getIceHockeyEventStateId());
    }

    public function testSetIceHockeyEventStateId(): void
    {
        $expected = 3210;
        $model = $this->model;
        $model->setIceHockeyEventStateId($expected);

        $this->assertEquals($expected, $model->getIceHockeyEventStateId());
    }

    public function testGetPlayType(): void
    {
        $this->assertEquals($this->dto->playType, $this->model->getPlayType());
    }

    public function testSetPlayType(): void
    {
        $expected = "certain";
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
        $expected = "simple";
        $model = $this->model;
        $model->setScoreAttemptType($expected);

        $this->assertEquals($expected, $model->getScoreAttemptType());
    }

    public function testGetPlayResult(): void
    {
        $this->assertEquals($this->dto->playResult, $this->model->getPlayResult());
    }

    public function testSetPlayResult(): void
    {
        $expected = "though";
        $model = $this->model;
        $model->setPlayResult($expected);

        $this->assertEquals($expected, $model->getPlayResult());
    }

    public function testGetComment(): void
    {
        $this->assertEquals($this->dto->comment, $this->model->getComment());
    }

    public function testSetComment(): void
    {
        $expected = "fall";
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