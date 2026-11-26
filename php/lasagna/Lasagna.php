<?php

class Lasagna
{
    public function expectedCookTime()
    {
      return (40);  // Implement the expectedCookTime method
    }

    public function remainingCookTime($elapsed_minutes)
    {
        return $this->expectedCookTime(10) - $elapsed_minutes;  // Implement the remainingCookTime method
    }

    public function totalPreparationTime($layers_to_prep)
    {
      return $layers_to_prep * 2;  // Implement the totalPreparationTime method
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
      return $this->totalPreparationTime($layers_to_prep) + $elapsed_minutes;  // Implement the totalElapsedTime method
    }

    public function alarm()
    {
       return "Ding!"; // Implement the alarm method
    }
}
