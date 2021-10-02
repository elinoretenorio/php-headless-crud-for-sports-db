<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballActionSubstitutions;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\BaseballActionSubstitutions\{ BaseballActionSubstitutionsDto, IBaseballActionSubstitutionsRepository, BaseballActionSubstitutionsRepository };

class BaseballActionSubstitutionsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private BaseballActionSubstitutionsDto $dto;
    private IBaseballActionSubstitutionsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 8257,
            "baseball_event_state_id" => 309,
            "sequence_number" => 1604,
            "person_type" => "before",
            "person_original_id" => 4807,
            "person_original_position_id" => 6553,
            "person_original_lineup_slot" => 5468,
            "person_replacing_id" => 3664,
            "person_replacing_position_id" => 713,
            "person_replacing_lineup_slot" => 4477,
            "substitution_reason" => "by",
            "comment" => "change",
        ];
        $this->dto = new BaseballActionSubstitutionsDto($this->input);
        $this->repository = new BaseballActionSubstitutionsRepository($this->db);
    }

    protected function tearDown(): void
    {
        unset($this->db);
        unset($this->result);
        unset($this->input);
        unset($this->dto);
        unset($this->repository);
    }

    public function testInsert_ReturnsFailedOnException(): void
    {
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->insert($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testInsert_ReturnsId(): void
    {
        $expected = 8196;

        $sql = "INSERT INTO `baseball_action_substitutions` (`baseball_event_state_id`, `sequence_number`, `person_type`, `person_original_id`, `person_original_position_id`, `person_original_lineup_slot`, `person_replacing_id`, `person_replacing_position_id`, `person_replacing_lineup_slot`, `substitution_reason`, `comment`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->baseballEventStateId,
                $this->dto->sequenceNumber,
                $this->dto->personType,
                $this->dto->personOriginalId,
                $this->dto->personOriginalPositionId,
                $this->dto->personOriginalLineupSlot,
                $this->dto->personReplacingId,
                $this->dto->personReplacingPositionId,
                $this->dto->personReplacingLineupSlot,
                $this->dto->substitutionReason,
                $this->dto->comment
            ]);
        $this->db->expects($this->once())
            ->method("lastInsertId")
            ->willReturn($expected);

        $actual = $this->repository->insert($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testUpdate_ReturnsFailedOnException(): void
    {
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->update($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testUpdate_ReturnsRowCount(): void
    {
        $expected = 6763;

        $sql = "UPDATE `baseball_action_substitutions` SET `baseball_event_state_id` = ?, `sequence_number` = ?, `person_type` = ?, `person_original_id` = ?, `person_original_position_id` = ?, `person_original_lineup_slot` = ?, `person_replacing_id` = ?, `person_replacing_position_id` = ?, `person_replacing_lineup_slot` = ?, `substitution_reason` = ?, `comment` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->baseballEventStateId,
                $this->dto->sequenceNumber,
                $this->dto->personType,
                $this->dto->personOriginalId,
                $this->dto->personOriginalPositionId,
                $this->dto->personOriginalLineupSlot,
                $this->dto->personReplacingId,
                $this->dto->personReplacingPositionId,
                $this->dto->personReplacingLineupSlot,
                $this->dto->substitutionReason,
                $this->dto->comment,
                $this->dto->id
            ]);
        $this->result->expects($this->once())
            ->method("rowCount")
            ->willReturn($expected);

        $actual = $this->repository->update($this->dto);
        $this->assertEquals($expected, $actual);
    }

    public function testGet_ReturnsEmptyOnException(): void
    {
        $id = 9924;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 4273;

        $sql = "SELECT `id`, `baseball_event_state_id`, `sequence_number`, `person_type`, `person_original_id`, `person_original_position_id`, `person_original_lineup_slot`, `person_replacing_id`, `person_replacing_position_id`, `person_replacing_lineup_slot`, `substitution_reason`, `comment`
                FROM `baseball_action_substitutions` WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([$id]);
        $this->result->expects($this->once())
            ->method("fetchAll")
            ->willReturn([$this->input]);

        $actual = $this->repository->get($id);
        $this->assertEquals($this->dto, $actual);
    }

    public function testGetAll_ReturnsEmptyOnException(): void
    {
        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->getAll();
        $this->assertEmpty($actual);
    }

    public function testGetAll_ReturnsDtos(): void
    {
        $sql = "SELECT `id`, `baseball_event_state_id`, `sequence_number`, `person_type`, `person_original_id`, `person_original_position_id`, `person_original_lineup_slot`, `person_replacing_id`, `person_replacing_position_id`, `person_replacing_lineup_slot`, `substitution_reason`, `comment`
                FROM `baseball_action_substitutions`";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute");
        $this->result->expects($this->once())
            ->method("fetchAll")
            ->willReturn([$this->input]);

        $actual = $this->repository->getAll();
        $this->assertEquals([$this->dto], $actual);
    }

    public function testDelete_ReturnsFailedOnException(): void
    {
        $id = 6967;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 1317;
        $expected = 9314;

        $sql = "DELETE FROM `baseball_action_substitutions` WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([$id]);
        $this->result->expects($this->once())
            ->method("rowCount")
            ->willReturn($expected);

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }
}