<?php

declare(strict_types=1);

namespace Sports\Tests\BaseballActionPitches;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\BaseballActionPitches\{ BaseballActionPitchesDto, IBaseballActionPitchesRepository, BaseballActionPitchesRepository };

class BaseballActionPitchesRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private BaseballActionPitchesDto $dto;
    private IBaseballActionPitchesRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 6232,
            "baseball_action_play_id" => 2586,
            "sequence_number" => 5750,
            "baseball_defensive_group_id" => 2640,
            "umpire_call" => "great",
            "pitch_location" => "red",
            "pitch_type" => "by",
            "pitch_velocity" => 7681,
            "comment" => "Fear land response. Develop such yet outside class.",
            "trajectory_coordinates" => "end",
            "trajectory_formula" => "phone",
            "ball_type" => "born",
            "strike_type" => "truth",
        ];
        $this->dto = new BaseballActionPitchesDto($this->input);
        $this->repository = new BaseballActionPitchesRepository($this->db);
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
        $expected = 3765;

        $sql = "INSERT INTO `baseball_action_pitches` (`baseball_action_play_id`, `sequence_number`, `baseball_defensive_group_id`, `umpire_call`, `pitch_location`, `pitch_type`, `pitch_velocity`, `comment`, `trajectory_coordinates`, `trajectory_formula`, `ball_type`, `strike_type`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->baseballActionPlayId,
                $this->dto->sequenceNumber,
                $this->dto->baseballDefensiveGroupId,
                $this->dto->umpireCall,
                $this->dto->pitchLocation,
                $this->dto->pitchType,
                $this->dto->pitchVelocity,
                $this->dto->comment,
                $this->dto->trajectoryCoordinates,
                $this->dto->trajectoryFormula,
                $this->dto->ballType,
                $this->dto->strikeType
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
        $expected = 237;

        $sql = "UPDATE `baseball_action_pitches` SET `baseball_action_play_id` = ?, `sequence_number` = ?, `baseball_defensive_group_id` = ?, `umpire_call` = ?, `pitch_location` = ?, `pitch_type` = ?, `pitch_velocity` = ?, `comment` = ?, `trajectory_coordinates` = ?, `trajectory_formula` = ?, `ball_type` = ?, `strike_type` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->baseballActionPlayId,
                $this->dto->sequenceNumber,
                $this->dto->baseballDefensiveGroupId,
                $this->dto->umpireCall,
                $this->dto->pitchLocation,
                $this->dto->pitchType,
                $this->dto->pitchVelocity,
                $this->dto->comment,
                $this->dto->trajectoryCoordinates,
                $this->dto->trajectoryFormula,
                $this->dto->ballType,
                $this->dto->strikeType,
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
        $id = 9536;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 5643;

        $sql = "SELECT `id`, `baseball_action_play_id`, `sequence_number`, `baseball_defensive_group_id`, `umpire_call`, `pitch_location`, `pitch_type`, `pitch_velocity`, `comment`, `trajectory_coordinates`, `trajectory_formula`, `ball_type`, `strike_type`
                FROM `baseball_action_pitches` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `baseball_action_play_id`, `sequence_number`, `baseball_defensive_group_id`, `umpire_call`, `pitch_location`, `pitch_type`, `pitch_velocity`, `comment`, `trajectory_coordinates`, `trajectory_formula`, `ball_type`, `strike_type`
                FROM `baseball_action_pitches`";

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
        $id = 9146;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 8373;
        $expected = 2899;

        $sql = "DELETE FROM `baseball_action_pitches` WHERE `id` = ?";

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