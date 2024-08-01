<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContractResource\Pages;
use App\Filament\Resources\ContractResource\RelationManagers;
use App\Models\Contract;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContractResource extends Resource
{
    protected static ?string $model = Contract::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('muster')->required(),
                Forms\Components\TextInput::make('vertragsgruppe')->required(),
                Forms\Components\TextInput::make('vertragstyp')->required(),
                Forms\Components\TextInput::make('rechtsgebiet')->required(),
                Forms\Components\TextInput::make('autor')->required(),
                Forms\Components\TextInput::make('geschaeftsbereich')->required(),
                Forms\Components\RichEditor::make('anmerkungen_autor')->label('Anmerkungen des Autors'),
                Forms\Components\RichEditor::make('hinweise_autor')->label('Hinweise des Autors'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('muster'),
                Tables\Columns\TextColumn::make('vertragsgruppe'),
                Tables\Columns\TextColumn::make('vertragstyp'),
                Tables\Columns\TextColumn::make('rechtsgebiet'),
                Tables\Columns\TextColumn::make('autor'),
                Tables\Columns\TextColumn::make('geschaeftsbereich'),
                Tables\Columns\TextColumn::make('erstellt')->date(),
                Tables\Columns\TextColumn::make('zuletzt_geaendert')->date(),
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
            'index' => Pages\ListContracts::route('/'),
            'create' => Pages\CreateContract::route('/create'),
            'edit' => Pages\EditContract::route('/{record}/edit'),
        ];
    }
}
