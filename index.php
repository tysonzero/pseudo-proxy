<?php
    function url($part)
    {
        $url = parse_url($_SERVER['QUERY_STRING']);
        $scheme = (empty($url['scheme']) ? '' : $url['scheme'].'://');
        $host = (empty($url['host']) ? '' : $url['host']);
        $port = (empty($url['port']) ? '' : $url['port']);
        $path = (empty($url['path']) ? '' : $url['path']);
        $query = (empty($url['query']) ? '' : '?'.$url['query']);
        if ($part == 0) {
            return $scheme.$host.$port;
        }
        elseif ($part == 1) {
            return $path.$query;
        }
    };

    echo file_get_contents($_SERVER['QUERY_STRING']);
?>
