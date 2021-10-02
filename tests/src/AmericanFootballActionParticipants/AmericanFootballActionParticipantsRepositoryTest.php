<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballActionParticipants;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\AmericanFootballActionParticipants\{ AmericanFootballActionParticipantsDto, IAmericanFootballActionParticipantsRepository, AmericanFootballActionParticipantsRepository };

class AmericanFootballActionParticipantsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private AmericanFootballActionParticipantsDto $dto;
    private IAmericanFootballActionParticipantsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 6410,
            "american_football_action_play_id" => 5462,
            "person_id" => 1231,
            "participant_role" => "hand",
            "score_type" => "ok",
            "field_line" => 5767,
            "yardage" => 3247,
            "score_credit" => 5655,
            "yards_gained" => 4653,
        ];
        $this->dto = new AmericanFootballActionParticipantsDto($this->input);
        $this->repository = new AmericanFootballActionParticipantsRepository($this->db);
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
        $expected = 8721;

        $sql = "INSERT INTO `american_football_action_participants` (`american_football_action_play_id`, `person_id`, `participant_role`, `score_type`, `field_line`, `yardage`, `score_credit`, `yards_gained`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->americanFootballActionPlayId,
                $this->dto->personId,
                $this->dto->participantRole,
                $this->dto->scoreType,
                $this->dto->fieldLine,
                $this->dto->yardage,
                $this->dto->scoreCredit,
                $this->dto->yardsGained
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
        $expected = 9772;

        $sql = "UPDATE `american_football_action_participants` SET `american_football_action_play_id` = ?, `person_id` = ?, `participant_role` = ?, `score_type` = ?, `field_line` = ?, `yardage` = ?, `score_credit` = ?, `yards_gained` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->americanFootballActionPlayId,
                $this->dto->personId,
                $this->dto->participantRole,
                $this->dto->scoreType,
                $this->dto->fieldLine,
                $this->dto->yardage,
                $this->dto->scoreCredit,
                $this->dto->yardsGained,
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
        $id = 3997;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 5116;

        $sql = "SELECT `id`, `american_football_action_play_id`, `person_id`, `participant_role`, `score_type`, `field_line`, `yardage`, `score_credit`, `yards_gained`
                FROM `american_football_action_participants` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `american_football_action_play_id`, `person_id`, `participant_role`, `score_type`, `field_line`, `yardage`, `score_credit`, `yards_gained`
                FROM `american_football_action_participants`";

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
        $id = 7535;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 20;
        $expected = 7989;

        $sql = "DELETE FROM `american_football_action_participants` WHERE `id` = ?";

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