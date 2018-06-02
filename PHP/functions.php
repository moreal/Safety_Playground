<?php
    function mysql_fetch($res) {
        $arr = array();

        if ($res) {
            $index = 0;
            while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                $arr[$index++] = $row;
            }
            mysqli_free_result($res);
        }

        return $arr;
    }

?>