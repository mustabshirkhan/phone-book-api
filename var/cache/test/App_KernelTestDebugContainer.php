<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAswVrae\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAswVrae/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerAswVrae.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerAswVrae\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerAswVrae\App_KernelTestDebugContainer([
    'container.build_hash' => 'AswVrae',
    'container.build_id' => '351efd24',
    'container.build_time' => 1653925380,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAswVrae');