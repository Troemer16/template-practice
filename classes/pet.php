<?php

    /**
     * The Pet class represents a pet in a pet store.
     *
     * The Pet class represents a Pet with a name, type
     * and color. Pets can talk, eat, and sleep.
     *@author Tyler Roemer <troemer@greenriver.edu>
     *@copyright 2018
     */
    class Pet{
        protected $name;
        protected $color;

        function __construct($name = 'Unknown', $color = '?'){
            $this->name = $name;
            $this->color = $color;
        }

        /**
         * Function that tells the pet to eat the specified
         * number of times.
         *@return void
         */
        function eat(){
            echo "<p>$this->name is eating.</p>";
        }

        /**
         * Function that tells the pet to sleep
         * @return void
         */
        function sleep(){
            echo "<p>$this->name is sleeping</p>";
        }

        //getters and setters

        /**
         * Gets the name of the pet and returns it
         * @return string name of pet
         */
        function getName(){
            return $this->name;
        }
        function setName($name){
            $this->name = $name;
        }
        function getColor(){
            return $this->color;
        }
        function setColor($color){
            $this->color = $color;
        }
    }