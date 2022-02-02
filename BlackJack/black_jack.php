<?php

class Card
{
    public array $symbols = ['creek', 'spade', 'heart', 'diamond'];
    public array $values = ['A', 'Q', 'K', 'J', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    public array $cards = [];

    public function __construct()
    {
        foreach ($this->symbols as $symbol) {
            foreach ($this->values as $value) {
                if (!is_numeric($value)) {
                    $value = 10;
                }
                if ($value == 'A') {
                    $value = 11;
                }
                $this->cards[] = [$symbol, $value];
                var_dump($this->cards);
            }
        }
    }
}

//$playerChoice = $this->cards[array_rand($this->cards)];
//$dealerChoice = $this->cards[array_rand($this->cards)];


// picked up card = random cards (player vs dealer)
// cases - switch (stop or continue)
// count points, if result > 21, player loose - while loop
// total score... if player score > dealer score, player wins, else - loose. default  -TIE