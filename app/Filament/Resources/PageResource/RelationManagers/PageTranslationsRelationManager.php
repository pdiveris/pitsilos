<?php

namespace App\Filament\Resources\PageResource\RelationManagers;

use App\Models\LanguageSorted;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class PageTranslationsRelationManager extends RelationManager
{
    protected static string $relationship = 'translations';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Select::make('lang_id')
                    ->label('Language')
                    ->options(LanguageSorted::where(["enabled" => 1])
                        ->pluck("name", "lang_id")
                        ->all()
                    )
                    ->required(),
                MarkdownEditor::make('content')
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('language.name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(
                )->mutateFormDataUsing(
                    function (array $data): array {
                        return $data;
                    }),
            ])
            ->actions([
                Tables\Actions\CreateAction::make(
                )->mutateFormDataUsing(
                    function (array $data): array {
                        return $data;
                    }),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
