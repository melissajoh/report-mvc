<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUzLiy1R\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUzLiy1R/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUzLiy1R.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUzLiy1R\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUzLiy1R\App_KernelDevDebugContainer([
    'container.build_hash' => 'UzLiy1R',
    'container.build_id' => '2149d862',
    'container.build_time' => 1683814240,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUzLiy1R');
