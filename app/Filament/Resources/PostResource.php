<?php

namespace App\Filament\Resources;

use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use App\Filament\Resources\PostResource\Pages;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\View\Components\TinyMce;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Forms\Set $set, ?string $state) => $set('slug', Str::slug($state))),
                Forms\Components\TextInput::make('slug'),
                Forms\Components\TextInput::make('description'),
                TinyEditor::make('content')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('uploads')
                    ->profile('default|simple|full|minimal|none|custom')
                    ->columnSpan('full')
                    ->required(),
                Forms\Components\Select::make('category_id')
                ->options(Category::pluck('name', 'id')),
               Forms\Components\SpatieTagsInput::make('tags')
                ->formatStateUsing(fn ($state) => array_map(function ($item) use ($state) {
                    $item = json_decode($item,true);
                    return $item['en'];
                }, $state) ),
                FileUpload::make('featured_media_id')
                ->disk('public')
                ->storeFiles(false)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\ImageColumn::make('featured_media_id')
                ->url(fn(Post $record) =>$record->featureMedia->url(),true)
                ->height(100),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('content')
                    ->limit(100)
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),

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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            TextEntry::make('title')->columnSpanFull(),
            TextEntry::make('slug')->columnSpanFull(),
            TextEntry::make('description')->columnSpanFull(),
            TextEntry::make('category.name'),
            TextEntry::make('content')
                ->formatStateUsing(fn ($state) => new HtmlString($state),)
                ->columnSpanFull(),
        ]);
    }
}
