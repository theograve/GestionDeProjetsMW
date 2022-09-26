<?php
    Class Customer
    {
        private int $codeCustomer;
        private string $nameCustomer;
        private string $notesCustomer;

        public function getCodeCustomer(): int
        {
            return $this->codeCustomer;
        }

        public function setCodeCustomer(int $codeCustomer): void
        {
            $this->codeCustomer = $codeCustomer;
        }

        public function getNameCustomer(): string
	    {
		    return $this->nameCustomer;
	    }

        public function setNameCustomer(string $nameCustomer): void
        {
            $this->nameCustomer = $nameCustomer;
        }

        public function getNotesCustomer(): string
	    {
		    return $this->notesCustomer;
	    }

        public function setNotesCustomer(string $notesCustomer): void
        {
            $this->notesCustomer = $notesCustomer;
        }
    }