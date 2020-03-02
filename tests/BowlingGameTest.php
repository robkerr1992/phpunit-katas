<?php

use App\BowlingGame;
use \PHPUnit\Framework\TestCase;

class BowlingGameTest extends TestCase
{

    /** @test */
    public function it_scores_a_gutter_games_as_0()
    {
        $game = new BowlingGame();

        foreach (range(1,20) as $roll) {
            $game->roll(0);
        }

        $this->assertSame(0, $game->score());
    }

    /** @test */
    public function it_awards_a_roll_bonus_for_spares()
    {
        $game = new BowlingGame();

        $game->roll(5);
        $game->roll(5);

        $game->roll(7);

        foreach (range(1,17) as $roll) {
            $game->roll(1);
        }

        $this->assertSame(41, $game->score());
    }

    /** @test */
    public function it_awards_a_2_roll_bonus_for_strikes()
    {
        $game = new BowlingGame();

        $game->roll(10);

        $game->roll(7);
        $game->roll(2);

        foreach (range(1,16) as $roll) {
            $game->roll(1);
        }

        $this->assertSame(44, $game->score());
    }

    /** @test */
    public function it_scores_300_for_a_perfect_game()
    {
        $game = new BowlingGame();

        foreach (range(1,12) as $roll) {
            $game->roll(10);
        }

        $this->assertSame(300, $game->score());
    }
}
