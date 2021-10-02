<?php

declare(strict_types=1);

namespace Sports\Tests\BasketballReboundingStats;

use PHPUnit\Framework\TestCase;
use Sports\Database\DatabaseException;
use Sports\BasketballReboundingStats\{ BasketballReboundingStatsDto, IBasketballReboundingStatsRepository, BasketballReboundingStatsRepository };

class BasketballReboundingStatsRepositoryTest extends TestCase
{
    private $db;
    private $result;
    private array $input;
    private BasketballReboundingStatsDto $dto;
    private IBasketballReboundingStatsRepository $repository;

    protected function setUp(): void
    {
        $this->db = $this->createMock("Sports\Database\IDatabase");
        $this->result = $this->createMock("Sports\Database\IDatabaseResult");
        $this->input = [
            "id" => 5546,
            "rebounds_total" => "daughter",
            "rebounds_per_game" => "participant",
            "rebounds_defensive" => "knowledge",
            "rebounds_offensive" => "along",
            "team_rebounds_total" => "myself",
            "team_rebounds_per_game" => "main",
            "team_rebounds_defensive" => "impact",
            "team_rebounds_offensive" => "administration",
        ];
        $this->dto = new BasketballReboundingStatsDto($this->input);
        $this->repository = new BasketballReboundingStatsRepository($this->db);
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
        $expected = 6242;

        $sql = "INSERT INTO `basketball_rebounding_stats` (`rebounds_total`, `rebounds_per_game`, `rebounds_defensive`, `rebounds_offensive`, `team_rebounds_total`, `team_rebounds_per_game`, `team_rebounds_defensive`, `team_rebounds_offensive`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->reboundsTotal,
                $this->dto->reboundsPerGame,
                $this->dto->reboundsDefensive,
                $this->dto->reboundsOffensive,
                $this->dto->teamReboundsTotal,
                $this->dto->teamReboundsPerGame,
                $this->dto->teamReboundsDefensive,
                $this->dto->teamReboundsOffensive
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
        $expected = 5150;

        $sql = "UPDATE `basketball_rebounding_stats` SET `rebounds_total` = ?, `rebounds_per_game` = ?, `rebounds_defensive` = ?, `rebounds_offensive` = ?, `team_rebounds_total` = ?, `team_rebounds_per_game` = ?, `team_rebounds_defensive` = ?, `team_rebounds_offensive` = ?
                WHERE `id` = ?";

        $this->db->expects($this->once())
            ->method("prepare")
            ->with($sql)
            ->willReturn($this->result);
        $this->result->expects($this->once())
            ->method("execute")
            ->with([
                $this->dto->reboundsTotal,
                $this->dto->reboundsPerGame,
                $this->dto->reboundsDefensive,
                $this->dto->reboundsOffensive,
                $this->dto->teamReboundsTotal,
                $this->dto->teamReboundsPerGame,
                $this->dto->teamReboundsDefensive,
                $this->dto->teamReboundsOffensive,
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
        $id = 7356;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->get($id);
        $this->assertEmpty($actual);
    }

    public function testGet_ReturnsDto(): void
    {
        $id = 4287;

        $sql = "SELECT `id`, `rebounds_total`, `rebounds_per_game`, `rebounds_defensive`, `rebounds_offensive`, `team_rebounds_total`, `team_rebounds_per_game`, `team_rebounds_defensive`, `team_rebounds_offensive`
                FROM `basketball_rebounding_stats` WHERE `id` = ?";

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
        $sql = "SELECT `id`, `rebounds_total`, `rebounds_per_game`, `rebounds_defensive`, `rebounds_offensive`, `team_rebounds_total`, `team_rebounds_per_game`, `team_rebounds_defensive`, `team_rebounds_offensive`
                FROM `basketball_rebounding_stats`";

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
        $id = 9608;
        $expected = -1;

        $this->db->method("prepare")
            ->will($this->throwException(new DatabaseException()));

        $actual = $this->repository->delete($id);
        $this->assertEquals($expected, $actual);
    }

    public function testDelete_ReturnsRowCount(): void
    {
        $id = 652;
        $expected = 6595;

        $sql = "DELETE FROM `basketball_rebounding_stats` WHERE `id` = ?";

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