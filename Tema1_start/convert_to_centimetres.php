<?php
     $cm=2323;
     $pulg = $cm/2.54;
     $feet = intval($pulg/12);
     $pulg = $pulg%12;
     echo ("Centimetres " .$cm. "Feet ".$feet. "Inches ".$pulg);