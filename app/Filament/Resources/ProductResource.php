<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Imports\ProductImport;
use App\Models\Category;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Mockery\Exception;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('weapons')->label('Weapons'),
                Forms\Components\Select::make('category_id')->options(Category::all()->pluck('name', 'id')),
                Forms\Components\TextInput::make('hash_name')->label('Hash name'),
                Forms\Components\TextInput::make('rarity')->label('Rarity'),
                Forms\Components\TextInput::make('float_rate')->label('Float rate')->numeric(),
                Forms\Components\TextInput::make('price')->label('Price')->numeric(),
                Forms\Components\Select::make('currency')->label('Currency')->options([
                    'USD' => 'USD',
                    'EUR' => 'EUR',
                ]),
                Forms\Components\TextInput::make('statrak')->label('Statrak'),
                Forms\Components\Checkbox::make('is_active')->label('Is active'),
                Forms\Components\TextInput::make('image_link')->label('Image link'),
                Forms\Components\FileUpload::make('image')->label('Image')->disk('public')->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Columns\TextColumn::make('weapons')->label('Weapons'),
                Columns\TextColumn::make('hash_name')->label('Hash name'),
                Columns\TextColumn::make('price')->label('Price'),
                Columns\TextColumn::make('currency')->label('Currency'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\Action::make('uploadExcel')
                ->label('Import from excel')
                ->button()
                ->action(function ($data) {
                    try {
                        Excel::import(new ProductImport(), Storage::disk('public')->path($data['file']));

                        Notification::make()
                            ->title('Import success.')
                            ->send();
                    } catch (Exception $exception) {
                        Notification::make()
                            ->title('Error')
                            ->send();
                    }
                })
                ->form([
                    Forms\Components\FileUpload::make('file')->label('Excel doc')->disk('public'),
                ])
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
