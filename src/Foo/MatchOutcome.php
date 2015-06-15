<?php
namespace Foo;

abstract class MatchOutcome extends Outcome
{
    protected $match;

    /**
     * @return Match
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * @param Match $match
     *
     * @return $this
     */
    public function setMatch(Match $match)
    {
        $this->match = $match;

        return $this;
    }
}
