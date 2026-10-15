<?php

$services = ["Apache", "PostgreSQL", "Redis", "Mailpit"];

foreach ($services as $service) {
    echo "Service supervisé : " . $service . "<br>";
}
