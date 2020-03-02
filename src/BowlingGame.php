<?php


namespace App;


class BowlingGame
{
    /**
     * Number of frames in a game
     */
    const FRAMES = 10;

    /**
     * Pins knocked down in each roll
     * @var array
     */
    private $rolls = [];

    public function roll($pins)
    {
        $this->rolls[] = $pins;
    }

    /**
     * Calculate the score of a game
     * @return int|mixed
     */
    public function score()
    {
        $score = 0;
        $roll = 0;
        foreach (range(1, self::FRAMES) as $frame) {
            //add both rolls for the frame together
            if($this->isStrike($roll)) {
                $score += $this->pinCount($roll);
                $score += $this->strikeBonus($roll);
                $roll += 1;
            } elseif ($this->isSpare($roll)) {
                $score += $this->normalFrameScore($roll);
                $score += $this->spareBonus($roll);
                $roll += 2;
            } else {
                $score += $this->normalFrameScore($roll);
                $roll += 2;

            }
        }
        return $score;
    }

    /**
     * Determine if roll was a spare
     * @param $roll
     * @return bool
     */
    private function isSpare($roll)
    {
        return $this->normalFrameScore($roll) == 10;
    }

    /**
     * Determine if roll was a strike
     * @param $roll
     * @return bool
     */
    private function isStrike($roll)
    {
        return $this->pinCount($roll) == 10;
    }

    /**
     * Get the score for a frame without spares or strikes
     * @param $roll
     * @return mixed
     */
    private function normalFrameScore($roll)
    {
        return $this->pinCount($roll) + $this->pinCount($roll + 1);
    }

    /**
     * Bonus points for a spare
     * @param $roll
     * @return mixed
     */
    private function spareBonus($roll)
    {
        return $this->pinCount($roll + 2);
    }

    /**
     * Bonus points for a strike
     * @param $roll
     * @return mixed
     */
    private function strikeBonus($roll)
    {
        return $this->pinCount($roll + 1) + $this->pinCount($roll + 2);
    }

    /**
     * The pin count for a given roll
     * @param $roll
     * @return mixed
     */
    private function pinCount($roll)
    {
        return $this->rolls[$roll];
    }
}