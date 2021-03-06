<?php

class Player
{
    private array $cards = [];

    public function getCards(): array
    {
        return $this->cards;
    }

    public function addCard(Card $card): void
    {
        $this->cards[] = $card;
    }

    public function disband()
    {
        $symbols = [];
        foreach ($this->cards as $card) {
            $symbols[] = $card->getSymbol();
        }

        $uniqueCardsAccount = array_count_values($symbols);

        foreach ($uniqueCardsAccount as $symbol => $count) {
            if ($count === 1) continue;

            if ($count === 2 || $count === 4) {
                foreach ($this->cards as $index => $card) {
                    if ($card->getSymbol() === (string) $symbol) {
                        unset($this->cards[$index]);
                    }
                }

            }
            if ($count === 3) {
                for ($i = 0; $i < 2; $i ++) {
                    foreach ($this->cards as $index => $card) {
                        if ($card->getSymbol() === (string)$symbol) {
                            unset($this->cards[$index]);
                            break;
                        }
                    }
                }
            }
        }
    }
}