<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StaticInfoResource\Pages;
use App\Filament\Resources\StaticInfoResource\RelationManagers;
use App\Models\StaticInfo;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StaticInfoResource extends Resource
{
    protected static ?string $model = StaticInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name'),
                Forms\Components\TextInput::make('phone'),
                Forms\Components\TextInput::make('email'),
                Forms\Components\RichEditor::make('address'),
                Forms\Components\TextInput::make('slogan'),
                FileUpload::make('background_id')
                    ->disk('public')
                    ->previewable(true)
                    ->storeFiles(false),
                FileUpload::make('logo_id')
                    ->disk('public')
                    ->storeFiles(false),
                FileUpload::make('favicon_id')
                    ->disk('public')
                    ->storeFiles(false)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('phone'),
                TextColumn::make('email'),
                TextColumn::make('address'),
                TextColumn::make('slogan'),
                TextColumn::make('favicon'),
                Tables\Columns\ImageColumn::make('background_id')
                    ->url(fn(StaticInfo $record) =>$record->background()->first()->url(),true)
                    ->height(100),
                Tables\Columns\ImageColumn::make('logo_id')
                    ->url(fn(StaticInfo $record) =>$record->logo()->first()->url(),true)
                    ->height(100),
                Tables\Columns\ImageColumn::make('favicon_id')
                    ->url(fn(StaticInfo $record) =>$record->favicon()->first()->url(),true)
                    ->height(100),
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
            'index' => Pages\ListStaticInfos::route('/'),
            'create' => Pages\CreateStaticInfo::route('/create'),
            'edit' => Pages\EditStaticInfo::route('/{record}/edit'),
        ];
    }
}
