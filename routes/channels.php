<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.User.{id}', function ($note, $id) {
    return (int) $note->id === (int) $id;
});