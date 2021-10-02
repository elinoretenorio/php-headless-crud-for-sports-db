<?php

declare(strict_types=1);

namespace Sports\Tests\MotorRacingEventStates;

use PHPUnit\Framework\TestCase;
use Sports\MotorRacingEventStates\{ MotorRacingEventStatesDto, MotorRacingEventStatesModel };

class MotorRacingEventStatesModelTest extends TestCase
{
    private array $input;
    private MotorRacingEventStatesDto $dto;
    private MotorRacingEventStatesModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 6454,
            "event_id" => 5777,
            "current_state" => 7987,
            "sequence_number" => 9922,
            "lap" => "various",
            "laps_remaining" => "push",
            "time_elapsed" => "green",
            "flag_state" => "do",
            "context" => "man",
        ];
        $this->dto = new MotorRacingEventStatesDto($this->input);
        $this->model = new MotorRacingEventStatesModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new MotorRacingEventStatesModel(null);

        $this->assertInstanceOf(MotorRacingEventStatesModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 2715;
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
        $expected = 4773;
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
        $expected = 3336;
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
        $expected = 6025;
        $model = $this->model;
        $model->setSequenceNumber($expected);

        $this->assertEquals($expected, $model->getSequenceNumber());
    }

    public function testGetLap(): void
    {
        $this->assertEquals($this->dto->lap, $this->model->getLap());
    }

    public function testSetLap(): void
    {
        $expected = "worry";
        $model = $this->model;
        $model->setLap($expected);

        $this->assertEquals($expected, $model->getLap());
    }

    public function testGetLapsRemaining(): void
    {
        $this->assertEquals($this->dto->lapsRemaining, $this->model->getLapsRemaining());
    }

    public function testSetLapsRemaining(): void
    {
        $expected = "least";
        $model = $this->model;
        $model->setLapsRemaining($expected);

        $this->assertEquals($expected, $model->getLapsRemaining());
    }

    public function testGetTimeElapsed(): void
    {
        $this->assertEquals($this->dto->timeElapsed, $this->model->getTimeElapsed());
    }

    public function testSetTimeElapsed(): void
    {
        $expected = "finally";
        $model = $this->model;
        $model->setTimeElapsed($expected);

        $this->assertEquals($expected, $model->getTimeElapsed());
    }

    public function testGetFlagState(): void
    {
        $this->assertEquals($this->dto->flagState, $this->model->getFlagState());
    }

    public function testSetFlagState(): void
    {
        $expected = "few";
        $model = $this->model;
        $model->setFlagState($expected);

        $this->assertEquals($expected, $model->getFlagState());
    }

    public function testGetContext(): void
    {
        $this->assertEquals($this->dto->context, $this->model->getContext());
    }

    public function testSetContext(): void
    {
        $expected = "join";
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