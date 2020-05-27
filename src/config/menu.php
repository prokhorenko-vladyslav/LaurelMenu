<?php
    return [
        /**
         * Need to attach user to menu and menu item
         */
        'attach_user' => true,

        /**
         * User model
         */
        'user_model' => config('auth.providers.users.model'),
    ];
