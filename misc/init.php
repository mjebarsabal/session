<?php

declare(strict_types=1);

if (!function_exists('ensure_session_started')) {
    /**
     * Guarantee there is an active PHP session before accessing $_SESSION.
     */
    function ensure_session_started(): void
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }
}

ensure_session_started();

