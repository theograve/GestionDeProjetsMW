<?php
    Class Host
    {
        private int $codeHost;
        private string $nameHost;
        private string $notesHost;

        public function getCodeHost(): int
        {
            return $this->codeHost;
        }

        public function setCodeHost(int $codeHost): void
        {
            $this->codeHost = $codeHost;
        }

        public function getNameHost(): string
	    {
		    return $this->nameHost;
	    }

        public function setNameHost(string $nameHost): void
        {
            $this->nameHost = $nameHost;
        }

        public function getNotesHost(): string
	    {
		    return $this->notesHost;
	    }

        public function setNotesHost(string $notesHost): void
        {
            $this->notesHost = $notesHost;
        }
    }