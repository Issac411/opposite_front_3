<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRCgsB6B\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRCgsB6B/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRCgsB6B.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRCgsB6B\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRCgsB6B\App_KernelDevDebugContainer([
    'container.build_hash' => 'RCgsB6B',
    'container.build_id' => '9d619a36',
    'container.build_time' => 1586333020,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRCgsB6B');
