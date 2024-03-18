<?php

namespace Cone;

abstract class Plugin
{
    /**
     * The plugin version.
     *
     * @var string
     */
    public const VERSION = '1.0.0';

    /**
     * The plugin version.
     *
     * @var string
     */
    public const SLUG = 'plugin-slug';

    /**
     * Boot the plugin.
     */
    public static function boot(): void
    {
        add_action('init', static function (): void {
            load_plugin_textdomain(static::SLUG, false, basename(dirname(__DIR__)).'/languages');
        });
    }

    /**
     * Handle the activation.
     */
    public static function activate(): void
    {
        //
    }

    /**
     * Handle the deactivation.
     */
    public static function deactivate(): void
    {
        //
    }
}
