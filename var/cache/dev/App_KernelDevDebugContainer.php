<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCcNPx8J\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCcNPx8J/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCcNPx8J.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCcNPx8J\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCcNPx8J\App_KernelDevDebugContainer([
    'container.build_hash' => 'CcNPx8J',
    'container.build_id' => 'e0eebf8a',
    'container.build_time' => 1606137695,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCcNPx8J');
