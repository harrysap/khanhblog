<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsLetterResource\Pages;
use App\Filament\Resources\NewsLetterResource\RelationManagers;
use App\Models\NewsLetter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsLetterResource extends Resource
{
    protected static ?string $model = Newsletter::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationLabel = 'Subscriber';
    public static function getNavigationBadge(): ?string
    {
        return Newsletter::count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(NewsLetter::query())
            ->columns([
                TextColumn::make('email')
                    ->label('Email')
                    ->columnSpan(1)
                    ->sortable(),
                TextColumn::make('reason')
                    ->label('Reason')
                    ->columnSpan(2)
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('active')
                    ->label('Active')

            ])
            ->filters([
                //
            ])
            ->actions([
               // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListNewsLetters::route('/'),
          //  'create' => Pages\CreateNewsLetter::route('/create'),
            //'edit' => Pages\EditNewsLetter::route('/{record}/edit'),
        ];
    }
}
