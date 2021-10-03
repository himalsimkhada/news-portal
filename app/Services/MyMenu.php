<?php

namespace App\Services;

use App\Models\Admin\SiteSetting;
use Pratiksh\Adminetic\Traits\SidebarHelper;
use Pratiksh\Adminetic\Contracts\SidebarInterface;

class MyMenu implements SidebarInterface {
    use SidebarHelper;

    public function myMenu(): array {
        return [
            [
                'type' => 'breaker',
                'name' => 'Dependencies',
                'description' => 'Dependency Modules',
            ],
            [
                'type' => 'menu',
                'name' => 'Post',
                'icon' => 'fa fa-pencil-square-o',
                'is_active' => request()->routeIs('post*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', App\Models\Admin\Post::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', App\Models\Admin\Post::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('post', App\Models\Admin\Post::class)
            ],
            [
                'type' => 'menu',
                'name' => 'Category',
                'icon' => 'fa fa-code-fork',
                'is_active' => request()->routeIs('category*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', App\Models\Admin\Category::class),
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', App\Models\Admin\Category::class),
                    ],
                ],
                'children' => $this->indexCreateChildren('category', App\Models\Admin\Category::class)
            ],
            [
                'type' => 'breaker',
                'name' => 'DEV TOOLS',
                'description' => 'Development Environment',
            ],
            [
                'type' => 'menu',
                'name' => 'Builder',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => env('APP_ENV') == 'local'
                    ],
                ],
                'children' => [
                    [
                        'type' => 'submenu',
                        'name' => 'Form Builder 1',
                        'link' => 'http://admin.pixelstrap.com/cuba/theme/form-builder-1.html',
                    ],
                    [
                        'type' => 'submenu',
                        'name' => 'Form Builder 2',
                        'link' => 'http://admin.pixelstrap.com/cuba/theme/form-builder-2.html',
                    ],
                    [
                        'type' => 'submenu',
                        'name' => 'Page Builder',
                        'link' => 'http://admin.pixelstrap.com/cuba/theme/pagebuild.html',
                    ],
                    [
                        'type' => 'submenu',
                        'name' => 'Buttom Builder',
                        'link' => 'http://admin.pixelstrap.com/cuba/theme/button-builder.html',
                    ],
                ]
            ],
            [
                'type' => 'menu',
                'name' => 'Documentation',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => env('APP_ENV') == 'local'
                    ],
                ],
                'children' => [
                    [
                        'type' => 'submenu',
                        'name' => 'Frontend Docs',
                        'link' => 'https://docs.pixelstrap.com/cuba/all_in_one/document/index.html',
                    ],
                    [
                        'type' => 'submenu',
                        'name' => 'Adminetic Docs',
                        'link' => 'https://pratikdai404.gitbook.io/adminetic/',
                    ],
                ]
            ],
            [
                'type' => 'link',
                'name' => 'Github',
                'icon' => 'fab fa-github',
                'link' => 'https://github.com/pratiksh404/admineticl',
            ],
            [
                'type' => 'link',
                'name' => 'Approval Requests',
                'link' => route('requests.index'),
            ],
            [
                'type' => 'link',
                'name' => 'Site Settings',
                'link' => route('site-setting.index'),
            ],
        ];
    }
}
