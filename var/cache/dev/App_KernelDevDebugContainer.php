<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerT7C1lTc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerT7C1lTc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerT7C1lTc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerT7C1lTc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerT7C1lTc\App_KernelDevDebugContainer([
    'container.build_hash' => 'T7C1lTc',
    'container.build_id' => 'ee018f94',
    'container.build_time' => 1586446699,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerT7C1lTc');
