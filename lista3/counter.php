<?php
if (!isset($_COOKIE["counter"])) {
    setcookie("counter", 1, time() + (365 * 24 * 60 * 60));
    setcookie("visited", "visited", time() + (24 * 60 * 60));
} else {
    if (!isset($_COOKIE["visited"])) {
        setcookie("counter", $_COOKIE["counter"] + 1, time() + (365 * 24 * 60 * 60));
        setcookie("visited", "visited", time() + (24 * 60 * 60));
    }
}
