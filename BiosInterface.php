<?php

    interface BiosInterface 
    {
        public function execute();
        public function waitForKeyPress();
        public function launch(OsInterface $os);
        public function powerDown();
    }

    interface OSInterface
    {
        public function halt();
        public function getName(): string;
    }