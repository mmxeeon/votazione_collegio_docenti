<?php
    class sondaggio{
        private $titolo;
        private $data_inizio;
        private $is_attivo;
        private $is_visibile;

        public function __construct($titolo, $data_inizio, $is_attivo, $is_visibile) {
            $this->titolo = $titolo;
            $this->data_inizio = $data_inizio;
            $this->is_attivo = $is_attivo;
            $this->is_visibile = $is_visibile;
        }

        public function getTitolo() {
            return $this->titolo;
        }

        public function getDataInizio() {
            return $this->data_inizio;
        }

        public function getIsAttivo() {
            return $this->is_attivo;
        }

        public function getIsVisibile() {
            return $this->is_visibile;
        }
    }
?>