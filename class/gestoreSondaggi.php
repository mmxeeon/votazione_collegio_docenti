<?php
    class gestoreSondaggi{
        public static function getSondaggi() {
            require_once("connDB.php");
            require_once("sondaggio.php");
            $query = "SELECT * FROM sondaggi";
            $result = $conn->query($query);

            $sondaggi = array();
            while($row = $result->fetch_assoc()) {
                $sondaggio = new sondaggio($row["titolo"], $row["data_inizio"], $row["is_attivo"], $row["is_visibile"]);
                $sondaggi[] = $sondaggio;
            }
            return $sondaggi;
        }

        public static function stampaSondaggi() {
            require_once("sondaggio.php");
            $sondaggi = self::getSondaggi();
            echo "</tr>";
            foreach ($sondaggi as $s) {
                $classe = "table-secondary";
                $isDisabled = true;
                if($s->getIsAttivo()) {
                    $classe = "";
                    $isDisabled = false;
                }
                if($s->getIsVisibile()) {
                    echo "<tr class='$classe'>";
                    echo "<td>".$s->getTitolo()."</td>";
                    echo "<td>".$s->getDataInizio()."</td>";
                    if($isDisabled)
                        echo "<td><button type='button' class='btn btn-secondary' disabled>INATTIVO</button></td>";
                    else
                        echo "<td><button type='button' class='btn btn-primary' onclick='window.location.href=\"votazione.php?titolo=".$s->getTitolo()."\"'>VOTA</button></td>";
                    echo "</tr>";
                }
            }
        }
    }
?>