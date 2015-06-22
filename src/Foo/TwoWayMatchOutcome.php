<?php
namespace Foo;

class TwoWayMatchOutcome extends MatchOutcome
{
    private $winner;

    /**
     * @return Team
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * @param Team $winner
     *
     * @return $this
     */
    public function setWinner(Team $winner)
    {
        $this->winner = $winner;

        return $this;
    }
}
