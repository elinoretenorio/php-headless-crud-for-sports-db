<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballEventStates;

use PHPUnit\Framework\TestCase;
use Sports\AmericanFootballEventStates\{ AmericanFootballEventStatesDto, AmericanFootballEventStatesModel };

class AmericanFootballEventStatesModelTest extends TestCase
{
    private array $input;
    private AmericanFootballEventStatesDto $dto;
    private AmericanFootballEventStatesModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 79,
            "event_id" => 6745,
            "current_state" => 8268,
            "sequence_number" => 2556,
            "period_value" => 6200,
            "period_time_elapsed" => "clearly",
            "period_time_remaining" => "real",
            "clock_state" => "image",
            "down" => 4320,
            "team_in_possession_id" => 3804,
            "distance_for_1st_down" => 28,
            "field_side" => "computer",
            "field_line" => 5263,
            "context" => "black",
        ];
        $this->dto = new AmericanFootballEventStatesDto($this->input);
        $this->model = new AmericanFootballEventStatesModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new AmericanFootballEventStatesModel(null);

        $this->assertInstanceOf(AmericanFootballEventStatesModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 4928;
        $model = $this->model;
        $model->setId($expected);

        $this->assertEquals($expected, $model->getId());
    }

    public function testGetEventId(): void
    {
        $this->assertEquals($this->dto->eventId, $this->model->getEventId());
    }

    public function testSetEventId(): void
    {
        $expected = 7696;
        $model = $this->model;
        $model->setEventId($expected);

        $this->assertEquals($expected, $model->getEventId());
    }

    public function testGetCurrentState(): void
    {
        $this->assertEquals($this->dto->currentState, $this->model->getCurrentState());
    }

    public function testSetCurrentState(): void
    {
        $expected = 5793;
        $model = $this->model;
        $model->setCurrentState($expected);

        $this->assertEquals($expected, $model->getCurrentState());
    }

    public function testGetSequenceNumber(): void
    {
        $this->assertEquals($this->dto->sequenceNumber, $this->model->getSequenceNumber());
    }

    public function testSetSequenceNumber(): void
    {
        $expected = 8111;
        $model = $this->model;
        $model->setSequenceNumber($expected);

        $this->assertEquals($expected, $model->getSequenceNumber());
    }

    public function testGetPeriodValue(): void
    {
        $this->assertEquals($this->dto->periodValue, $this->model->getPeriodValue());
    }

    public function testSetPeriodValue(): void
    {
        $expected = 1634;
        $model = $this->model;
        $model->setPeriodValue($expected);

        $this->assertEquals($expected, $model->getPeriodValue());
    }

    public function testGetPeriodTimeElapsed(): void
    {
        $this->assertEquals($this->dto->periodTimeElapsed, $this->model->getPeriodTimeElapsed());
    }

    public function testSetPeriodTimeElapsed(): void
    {
        $expected = "write";
        $model = $this->model;
        $model->setPeriodTimeElapsed($expected);

        $this->assertEquals($expected, $model->getPeriodTimeElapsed());
    }

    public function testGetPeriodTimeRemaining(): void
    {
        $this->assertEquals($this->dto->periodTimeRemaining, $this->model->getPeriodTimeRemaining());
    }

    public function testSetPeriodTimeRemaining(): void
    {
        $expected = "ability";
        $model = $this->model;
        $model->setPeriodTimeRemaining($expected);

        $this->assertEquals($expected, $model->getPeriodTimeRemaining());
    }

    public function testGetClockState(): void
    {
        $this->assertEquals($this->dto->clockState, $this->model->getClockState());
    }

    public function testSetClockState(): void
    {
        $expected = "around";
        $model = $this->model;
        $model->setClockState($expected);

        $this->assertEquals($expected, $model->getClockState());
    }

    public function testGetDown(): void
    {
        $this->assertEquals($this->dto->down, $this->model->getDown());
    }

    public function testSetDown(): void
    {
        $expected = 3387;
        $model = $this->model;
        $model->setDown($expected);

        $this->assertEquals($expected, $model->getDown());
    }

    public function testGetTeamInPossessionId(): void
    {
        $this->assertEquals($this->dto->teamInPossessionId, $this->model->getTeamInPossessionId());
    }

    public function testSetTeamInPossessionId(): void
    {
        $expected = 6699;
        $model = $this->model;
        $model->setTeamInPossessionId($expected);

        $this->assertEquals($expected, $model->getTeamInPossessionId());
    }

    public function testGetDistanceFor1stDown(): void
    {
        $this->assertEquals($this->dto->distanceFor1stDown, $this->model->getDistanceFor1stDown());
    }

    public function testSetDistanceFor1stDown(): void
    {
        $expected = 8711;
        $model = $this->model;
        $model->setDistanceFor1stDown($expected);

        $this->assertEquals($expected, $model->getDistanceFor1stDown());
    }

    public function testGetFieldSide(): void
    {
        $this->assertEquals($this->dto->fieldSide, $this->model->getFieldSide());
    }

    public function testSetFieldSide(): void
    {
        $expected = "realize";
        $model = $this->model;
        $model->setFieldSide($expected);

        $this->assertEquals($expected, $model->getFieldSide());
    }

    public function testGetFieldLine(): void
    {
        $this->assertEquals($this->dto->fieldLine, $this->model->getFieldLine());
    }

    public function testSetFieldLine(): void
    {
        $expected = 846;
        $model = $this->model;
        $model->setFieldLine($expected);

        $this->assertEquals($expected, $model->getFieldLine());
    }

    public function testGetContext(): void
    {
        $this->assertEquals($this->dto->context, $this->model->getContext());
    }

    public function testSetContext(): void
    {
        $expected = "garden";
        $model = $this->model;
        $model->setContext($expected);

        $this->assertEquals($expected, $model->getContext());
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