<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return mb_substr(trim($name), 0, 1);
    }

    public function initial(string $name): string
    {
        return mb_strtoupper($this->firstLetter($name));
    }

    public function initials(string $name): string
    {
        [$first, $last] = explode(' ', trim($name));
        return $this->initial($first) . ' ' . $this->initial($last);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $a = $this->initials($sweetheart_a);
        $b = $this->initials($sweetheart_b);

        return <<<HEART
                 ******       ******
               **      **   **      **
             **         ** **         **
            **            *            **
            **                         **
            **        $a  +  $b        **
             **                       **
               **                   **
                 **               **
                   **           **
                     **       **
                       **   **
                         ***
                          *
            HEART;
    }
}
