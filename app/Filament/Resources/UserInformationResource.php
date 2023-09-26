<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserInformationResource\Pages;
use App\Filament\Resources\UserInformationResource\RelationManagers;
use App\Models\UserInformation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserInformationResource extends Resource
{
    protected static ?string $model = UserInformation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user.email')->relationship('user', 'email')->label('Email')->disabled(),
                Forms\Components\TextInput::make('first_name')->label('First name'),
                Forms\Components\TextInput::make('last_name')->label('Last name'),
                Forms\Components\TextInput::make('birth_date')->label('Birth date')->numeric()->minValue(1)->maxValue(31),
                Forms\Components\TextInput::make('birth_month')->label('Birth month')->numeric()->minValue(1)->maxValue(12),
                Forms\Components\TextInput::make('birth_year')->label('Birth year')->numeric()->minValue(1970)->maxValue(2020),
                Forms\Components\TextInput::make('street_name')->label('Street name'),
                Forms\Components\TextInput::make('street_number')->label('Street number')->numeric(),
                Forms\Components\TextInput::make('zip')->label('Zip')->numeric(),
                Forms\Components\TextInput::make('city')->label('City'),
                Forms\Components\TextInput::make('country')->label('Country'),
                Forms\Components\Checkbox::make('is_send_notification')->label('Send notification?'),
                Forms\Components\TextInput::make('steam_account')->label('Steam account'),
                Forms\Components\TextInput::make('social_account')->label('Social account'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Columns\TextColumn::make('user.email')->label('Email'),
                Columns\TextColumn::make('first_name')->label('First name'),
                Columns\TextColumn::make('last_name')->label('Last name'),
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
            'index' => Pages\ListUserInformation::route('/'),
            'create' => Pages\CreateUserInformation::route('/create'),
            'edit' => Pages\EditUserInformation::route('/{record}/edit'),
        ];
    }
}
