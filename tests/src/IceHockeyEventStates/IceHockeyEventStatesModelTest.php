<?php

declare(strict_types=1);

namespace Sports\Tests\IceHockeyEventStates;

use PHPUnit\Framework\TestCase;
use Sports\IceHockeyEventStates\{ IceHockeyEventStatesDto, IceHockeyEventStatesModel };

class IceHockeyEventStatesModelTest extends TestCase
{
    private array $input;
    private IceHockeyEventStatesDto $dto;
    private IceHockeyEventStatesModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 9238,
            "event_id" => 6126,
            "current_state" => 2195,
            "sequence_number" => 8929,
            "period_value" => "whatever",
            "period_time_elapsed" => "discover",
            "period_time_remaining" => "style",
            "context" => "if",
        ];
        $this->dto = new IceHockeyEventStatesDto($this->input);
        $this->model = new IceHockeyEventStatesModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new IceHockeyEventStatesModel(null);

        $this->assertInstanceOf(IceHockeyEventStatesModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 9753;
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
        $expected = 6266;
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
        $expected = 4418;
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
        $expected = 7396;
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
        $expected = "nearly";
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
        $expected = "local";
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
        $expected = "participant";
        $model = $this->model;
        $model->setPeriodTimeRemaining($expected);

        $this->assertEquals($expected, $model->getPeriodTimeRemaining());
    }

    public function testGetContext(): void
    {
        $this->assertEquals($this->dto->context, $this->model->getContext());
    }

    public function testSetContext(): void
    {
        $expected = "federal";
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