<?php

namespace Laurel\Menu;

use Laurel\Menu\App\Models\Menu;

/**
 * Main package class
 *
 * Class Menu
 * @package Laurel\MultiRoute
 */
class MenuFacade
{
    /**
     * Load menu with items using id
     *
     * @param int $id
     * @return Menu|null
     */
    public static function loadById(int $id) : ?Menu
    {
        $menu = Menu::findById($id);
        return $menu ? $menu->load('menuItems') : null;
    }

    /**
     * Load menu with items using slug
     *
     * @param string $slug
     * @return Menu|null
     */
    public static function loadBySlug(string $slug) : ?Menu
    {
        $menu = Menu::findBySlug($slug);
        return $menu ? $menu->load('menuItems') : null;
    }
}
