<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Pages\Dashboard;
use Nody\NodyBlog\NodyBlogPlugin;
use Filament\Support\Colors\Color;
use App\Filament\Widgets\AuditStats;
use Filament\Navigation\NavigationItem;
use Filament\Http\Middleware\Authenticate;
use Filament\Navigation\NavigationBuilder;
use Filament\View\LegacyComponents\Widget;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Nody\NodyBlog\Filament\Resources\TagResource;
use Nody\NodyBlog\Filament\Resources\PostResource;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Nody\NodyBlog\Filament\Resources\CommentResource;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Nody\NodyBlog\Filament\Resources\CategoryResource;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->profile()
            ->colors([
                'primary' => Color::Indigo,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                AuditStats::class,
            ])
            ->plugin(new NodyBlogPlugin())
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->navigation(function (NavigationBuilder $builder): NavigationBuilder {
                $builder->items([
                    NavigationItem::make('Dashboard')
                        ->icon('heroicon-o-home')
                        ->isActiveWhen(fn (): bool => request()->routeIs('filament.pages.dashboard'))
                        ->url(fn (): string => Dashboard::getUrl()),
                    NavigationItem::make('Site')
                        ->icon('heroicon-o-globe-alt')
                        ->isActiveWhen(fn (): bool => request()->routeIs('home'))
                        ->url(fn (): string => '/'),
                    NavigationItem::make('Audits')
                        ->icon('heroicon-o-megaphone')
                        ->isActiveWhen(fn (): bool => request()->routeIs('filament.admin.resources.audits.index'))
                        ->url(fn (): string => route('filament.admin.resources.audits.index')),
                    NavigationItem::make('Projets')
                        ->icon('heroicon-o-briefcase')
                        ->isActiveWhen(fn (): bool => request()->routeIs('filament.admin.resources.projects.index'))
                        ->url(fn (): string => route('filament.admin.resources.projects.index')),
                    NavigationItem::make('Analytics')
                        ->icon('heroicon-o-chart-bar')
                        ->isActiveWhen(fn (): bool => request()->routeIs('filament.admin.pages.analytics'))
                        ->url(fn (): string => route('filament.admin.pages.analytics')),
                ]);
                $builder->group('Blog', [
                    ...CategoryResource::getNavigationItems(),
                    ...PostResource::getNavigationItems(),
                    ...TagResource::getNavigationItems(),
                    ...CommentResource::getNavigationItems(),
                ]);

                return $builder;
            });
    }
}
