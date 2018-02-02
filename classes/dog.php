<?php
    class Dog extends Pet{
        function fetch(){
            echo "<p>$this->name is playing fetch.</p>";
            echo "<p>He caugth the ball! Dilly-Dilly!!</p>";
        }
    }