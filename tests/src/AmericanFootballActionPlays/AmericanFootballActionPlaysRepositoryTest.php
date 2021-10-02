<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballActionPlays;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\AmericanFootballActionPlays\{ AmericanFootballActionPlaysDto, IAmericanFootballActionPlaysRepository, AmericanFootballActionPlaysRepository };

class AmericanFootballActionPlaysRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private AmericanFootballActionPlaysDto $dto;
    private IAmericanFootballActionPlaysRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 8916,
            "american_football_event_state_id" => 7374,
            "play_type" => "report",
            "score_attempt_type" => "tend",
            "drive_result" => "happy",
            "points" => 9307,
            "comment" => "interview",
        ];
        $this->dto = new AmericanFootballActionPlaysDto($this->input);
        $this->repository = new AmericanFootballActionPlaysRepository($this->db);
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
        $expected = 1994;

        $sql = "INSERT INTO `american_football_action_plays` (`american_football_event_state_id`, `play_type`, `score_attempt_type`, `drive_result`, `points`, `comment`)
                VALUES (?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->americanFootballEventStateId,
                $this->dto->playType,
                $this->dto->scoreAttemptType,
                $this->dto->driveResult,
                $this->dto->points,
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
        $expected = 9915;

        $sql = "UPDATE `american_football_action_plays` SET `american_football_event_state_id` = ?, `play_type` = ?, `score_attempt_type` = ?, `drive_result` = ?, `points` = ?, `comment` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->americanFootballEventStateId,
                $this->dto->playType,
                $this->dto->scoreAttemptType,
                $this->dto->driveResult,
                $this->dto->points,
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
        $id = 1307;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 7441;

        $sql = "SELECT `id`, `american_football_event_state_id`, `play_type`, `score_attempt_type`, `drive_result`, `points`, `comment`
                FROM `american_football_action_plays` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `american_football_event_state_id`, `play_type`, `score_attempt_type`, `drive_result`, `points`, `comment`
                FROM `american_football_action_plays`";

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
        $id = 7751;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 7546;
        $expected = 6590;

        $sql = "DELETE FROM `american_football_action_plays` WHERE `id` = ?";

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