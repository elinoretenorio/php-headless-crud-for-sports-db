<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballActionSubstitutions;

use PHPUnit\Framework\TestCase;
use Sports\BaseballActionSubstitutions\{ BaseballActionSubstitutionsDto, BaseballActionSubstitutionsModel };

class BaseballActionSubstitutionsModelTest extends TestCase
{
    private array $input;
    private BaseballActionSubstitutionsDto $dto;
    private BaseballActionSubstitutionsModel $model;

    protected function setUp(): void
    {
        $this->input = [
            "id" => 2037,
            "baseball_event_state_id" => 2555,
            "sequence_number" => 2242,
            "person_type" => "also",
            "person_original_id" => 1726,
            "person_original_position_id" => 7031,
            "person_original_lineup_slot" => 9720,
            "person_replacing_id" => 5291,
            "person_replacing_position_id" => 9844,
            "person_replacing_lineup_slot" => 27,
            "substitution_reason" => "quickly",
            "comment" => "leader",
        ];
        $this->dto = new BaseballActionSubstitutionsDto($this->input);
        $this->model = new BaseballActionSubstitutionsModel($this->dto);
    }

    protected function tearDown(): void
    {
        unset($this->input);
        unset($this->dto);
        unset($this->model);
    }

    public function testModel_ReturnsInstance(): void
    {
        $model = new BaseballActionSubstitutionsModel(null);

        $this->assertInstanceOf(BaseballActionSubstitutionsModel::class, $model);
    }

    public function testGetId(): void
    {
        $this->assertEquals($this->dto->id, $this->model->getId());
    }

    public function testSetId(): void
    {
        $expected = 3776;
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
        $expected = 1883;
        $model = $this->model;
        $model->setBaseballEventStateId($expected);

        $this->assertEquals($expected, $model->getBaseballEventStateId());
    }

    public function testGetSequenceNumber(): void
    {
        $this->assertEquals($this->dto->sequenceNumber, $this->model->getSequenceNumber());
    }

    public function testSetSequenceNumber(): void
    {
        $expected = 5338;
        $model = $this->model;
        $model->setSequenceNumber($expected);

        $this->assertEquals($expected, $model->getSequenceNumber());
    }

    public function testGetPersonType(): void
    {
        $this->assertEquals($this->dto->personType, $this->model->getPersonType());
    }

    public function testSetPersonType(): void
    {
        $expected = "least";
        $model = $this->model;
        $model->setPersonType($expected);

        $this->assertEquals($expected, $model->getPersonType());
    }

    public function testGetPersonOriginalId(): void
    {
        $this->assertEquals($this->dto->personOriginalId, $this->model->getPersonOriginalId());
    }

    public function testSetPersonOriginalId(): void
    {
        $expected = 9272;
        $model = $this->model;
        $model->setPersonOriginalId($expected);

        $this->assertEquals($expected, $model->getPersonOriginalId());
    }

    public function testGetPersonOriginalPositionId(): void
    {
        $this->assertEquals($this->dto->personOriginalPositionId, $this->model->getPersonOriginalPositionId());
    }

    public function testSetPersonOriginalPositionId(): void
    {
        $expected = 1212;
        $model = $this->model;
        $model->setPersonOriginalPositionId($expected);

        $this->assertEquals($expected, $model->getPersonOriginalPositionId());
    }

    public function testGetPersonOriginalLineupSlot(): void
    {
        $this->assertEquals($this->dto->personOriginalLineupSlot, $this->model->getPersonOriginalLineupSlot());
    }

    public function testSetPersonOriginalLineupSlot(): void
    {
        $expected = 5838;
        $model = $this->model;
        $model->setPersonOriginalLineupSlot($expected);

        $this->assertEquals($expected, $model->getPersonOriginalLineupSlot());
    }

    public function testGetPersonReplacingId(): void
    {
        $this->assertEquals($this->dto->personReplacingId, $this->model->getPersonReplacingId());
    }

    public function testSetPersonReplacingId(): void
    {
        $expected = 7338;
        $model = $this->model;
        $model->setPersonReplacingId($expected);

        $this->assertEquals($expected, $model->getPersonReplacingId());
    }

    public function testGetPersonReplacingPositionId(): void
    {
        $this->assertEquals($this->dto->personReplacingPositionId, $this->model->getPersonReplacingPositionId());
    }

    public function testSetPersonReplacingPositionId(): void
    {
        $expected = 987;
        $model = $this->model;
        $model->setPersonReplacingPositionId($expected);

        $this->assertEquals($expected, $model->getPersonReplacingPositionId());
    }

    public function testGetPersonReplacingLineupSlot(): void
    {
        $this->assertEquals($this->dto->personReplacingLineupSlot, $this->model->getPersonReplacingLineupSlot());
    }

    public function testSetPersonReplacingLineupSlot(): void
    {
        $expected = 9507;
        $model = $this->model;
        $model->setPersonReplacingLineupSlot($expected);

        $this->assertEquals($expected, $model->getPersonReplacingLineupSlot());
    }

    public function testGetSubstitutionReason(): void
    {
        $this->assertEquals($this->dto->substitutionReason, $this->model->getSubstitutionReason());
    }

    public function testSetSubstitutionReason(): void
    {
        $expected = "different";
        $model = $this->model;
        $model->setSubstitutionReason($expected);

        $this->assertEquals($expected, $model->getSubstitutionReason());
    }

    public function testGetComment(): void
    {
        $this->assertEquals($this->dto->comment, $this->model->getComment());
    }

    public function testSetComment(): void
    {
        $expected = "help";
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