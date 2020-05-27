<?php
    if (!function_exists('loadMenuBySlug')) {
        function loadMenuBySlug(string $slug) {
            \Laurel\Menu\MenuFacade::loadBySlug($slug);
        }
    }

    if (!function_exists('loadMenuById')) {
        function loadMenuById(int $id) {
            \Laurel\Menu\MenuFacade::loadById($id);
        }
    }

