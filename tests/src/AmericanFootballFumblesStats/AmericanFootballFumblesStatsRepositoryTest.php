<?php

declare(strict_types=1);

namespace Sports\Tests\AmericanFootballFumblesStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\AmericanFootballFumblesStats\{ AmericanFootballFumblesStatsDto, IAmericanFootballFumblesStatsRepository, AmericanFootballFumblesStatsRepository };

class AmericanFootballFumblesStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private AmericanFootballFumblesStatsDto $dto;
    private IAmericanFootballFumblesStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 3778,
            "fumbles_committed" => "recent",
            "fumbles_forced" => "save",
            "fumbles_recovered" => "contain",
            "fumbles_lost" => "wish",
            "fumbles_yards_gained" => "my",
            "fumbles_own_committed" => "total",
            "fumbles_own_recovered" => "another",
            "fumbles_own_lost" => "heavy",
            "fumbles_own_yards_gained" => "our",
            "fumbles_opposing_committed" => "white",
            "fumbles_opposing_recovered" => "fight",
            "fumbles_opposing_lost" => "tree",
            "fumbles_opposing_yards_gained" => "president",
        ];
        $this->dto = new AmericanFootballFumblesStatsDto($this->input);
        $this->repository = new AmericanFootballFumblesStatsRepository($this->db);
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
        $expected = 9725;

        $sql = "INSERT INTO `american_football_fumbles_stats` (`fumbles_committed`, `fumbles_forced`, `fumbles_recovered`, `fumbles_lost`, `fumbles_yards_gained`, `fumbles_own_committed`, `fumbles_own_recovered`, `fumbles_own_lost`, `fumbles_own_yards_gained`, `fumbles_opposing_committed`, `fumbles_opposing_recovered`, `fumbles_opposing_lost`, `fumbles_opposing_yards_gained`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->fumblesCommitted,
                $this->dto->fumblesForced,
                $this->dto->fumblesRecovered,
                $this->dto->fumblesLost,
                $this->dto->fumblesYardsGained,
                $this->dto->fumblesOwnCommitted,
                $this->dto->fumblesOwnRecovered,
                $this->dto->fumblesOwnLost,
                $this->dto->fumblesOwnYardsGained,
                $this->dto->fumblesOpposingCommitted,
                $this->dto->fumblesOpposingRecovered,
                $this->dto->fumblesOpposingLost,
                $this->dto->fumblesOpposingYardsGained
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
        $expected = 8036;

        $sql = "UPDATE `american_football_fumbles_stats` SET `fumbles_committed` = ?, `fumbles_forced` = ?, `fumbles_recovered` = ?, `fumbles_lost` = ?, `fumbles_yards_gained` = ?, `fumbles_own_committed` = ?, `fumbles_own_recovered` = ?, `fumbles_own_lost` = ?, `fumbles_own_yards_gained` = ?, `fumbles_opposing_committed` = ?, `fumbles_opposing_recovered` = ?, `fumbles_opposing_lost` = ?, `fumbles_opposing_yards_gained` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->fumblesCommitted,
                $this->dto->fumblesForced,
                $this->dto->fumblesRecovered,
                $this->dto->fumblesLost,
                $this->dto->fumblesYardsGained,
                $this->dto->fumblesOwnCommitted,
                $this->dto->fumblesOwnRecovered,
                $this->dto->fumblesOwnLost,
                $this->dto->fumblesOwnYardsGained,
                $this->dto->fumblesOpposingCommitted,
                $this->dto->fumblesOpposingRecovered,
                $this->dto->fumblesOpposingLost,
                $this->dto->fumblesOpposingYardsGained,
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
        $id = 7728;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 9862;

        $sql = "SELECT `id`, `fumbles_committed`, `fumbles_forced`, `fumbles_recovered`, `fumbles_lost`, `fumbles_yards_gained`, `fumbles_own_committed`, `fumbles_own_recovered`, `fumbles_own_lost`, `fumbles_own_yards_gained`, `fumbles_opposing_committed`, `fumbles_opposing_recovered`, `fumbles_opposing_lost`, `fumbles_opposing_yards_gained`
                FROM `american_football_fumbles_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `fumbles_committed`, `fumbles_forced`, `fumbles_recovered`, `fumbles_lost`, `fumbles_yards_gained`, `fumbles_own_committed`, `fumbles_own_recovered`, `fumbles_own_lost`, `fumbles_own_yards_gained`, `fumbles_opposing_committed`, `fumbles_opposing_recovered`, `fumbles_opposing_lost`, `fumbles_opposing_yards_gained`
                FROM `american_football_fumbles_stats`";

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
        $id = 2467;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 93;
        $expected = 2439;

        $sql = "DELETE FROM `american_football_fumbles_stats` WHERE `id` = ?";

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