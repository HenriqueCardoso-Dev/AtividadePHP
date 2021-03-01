<?php

    function autenticateURL($url) {
        

        $verifYTB = explode('.', $url);

        switch ($verifYTB[1]) {
            case 'youtube':
                # code...
                $videoYTB = explode('=', $url);

                $ifIsPlaylistOrNot = explode('&', $videoYTB[1]);

                $embedPlayer = "<iframe width='560' height='315' src='https://www.youtube.com/embed/$ifIsPlaylistOrNot[0]' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen class='playerYT'></iframe>";

                return $embedPlayer;
            break;
            default:
                # code...
                $embedPlayer = "Desculpa, mas só aceitamos links do <strong>YouTube</strong>.";
                return $embedPlayer;
            break;
        }

    }

?>