<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAOKYjx4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAOKYjx4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAOKYjx4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAOKYjx4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAOKYjx4\App_KernelDevDebugContainer([
    'container.build_hash' => 'AOKYjx4',
    'container.build_id' => '3eca38a8',
    'container.build_time' => 1662715807,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAOKYjx4');
