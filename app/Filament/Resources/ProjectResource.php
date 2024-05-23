<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Project;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\ProjectResource\RelationManagers;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nom')
                    ->required(),
                Select::make('type')
                    ->label('Type')
                    ->required()
                    ->placeholder('Sélectionnez un type')
                    ->options([
                        'Landing Page' => 'Landing Page',
                        'Site vitrine' => 'Site vitrine',
                        'SaaS' => 'SaaS',
                    ]),
                TextInput::make('url')
                    ->label('URL')
                    ->required(),
                Select::make('stack')
                    ->multiple()
                    ->options([
                        'tailwind' => 'Tailwind CSS',
                        'alpine' => 'Alpine.js',
                        'laravel' => 'Laravel',
                        'livewire' => 'Laravel Livewire',
                        'inertia' => 'Inertia.js',
                        'vue' => 'Vue.js',
                        'filament' => 'Filament',
                        'spatie' => 'Spatie',
                        'MySQL' => 'MySQL',
                        'Laravel Forge' => 'Laravel Forge',
                        'DigitalOcean' => 'DigitalOcean',
                    ]),
                SpatieMediaLibraryFileUpload::make('project_thumbnail')
                    ->label('Vignette du projet')
                    ->collection('Project')
                    ->responsiveImages()
                    ->conversion('thumb')
                    ->disk('media')
                    ->required(),
                RichEditor::make('description')
                    ->label('Description')
                    ->columnSpan('full')
                    ->fileAttachmentsDisk('media')
                    ->fileAttachmentsDirectory('attachments')
                    ->fileAttachmentsVisibility('private')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('url'),
                TextColumn::make('type'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
