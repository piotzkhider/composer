<?php

namespace Skeleton;

use Composer\Script\Event;

class Composer
{
    public static function preInstall(Event $event)
    {
        $io = $event->getIO();
        $io->write(__FUNCTION__);
    }

    public static function postInstall(Event $event)
    {
        $io = $event->getIO();
        $io->write(__FUNCTION__);
    }

    public static function preUpdate(Event $event)
    {
        $io = $event->getIO();
        $io->write(__FUNCTION__);
    }

    public static function postUpdate(Event $event)
    {
        $io = $event->getIO();
        $io->write(__FUNCTION__);
    }

    public static function postRootPackageInstall(Event $event)
    {
        $io = $event->getIO();
        $io->write(__FUNCTION__);
    }

    public static function postCreateProject(Event $event)
    {
        $io = $event->getIO();
        $io->write(__FUNCTION__);
    }
}
