<?php

namespace App\Filament\Resources;

use App\Models\GoldPrice;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Validation\Rule;
use App\Filament\Resources\GoldPriceResource\Pages;

class GoldPriceResource extends Resource
{
    protected static ?string $model = GoldPrice::class;

    protected static ?string $navigationIcon  = 'heroicon-o-currency-dollar';
    protected static ?string $navigationLabel = 'Harga Emas';
    protected static ?int    $navigationSort  = 1;
    protected static ?string $navigationGroup = 'Manajemen Produk';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('gold_type')
                ->label('Jenis Emas')
                ->options([
                    'emas_tua'  => 'Emas Tua',
                    'emas_muda' => 'Emas Muda',
                ])
                ->required()
                ->native(false),

            Forms\Components\TextInput::make('price_per_gram')
                ->label('Harga per Gram')
                ->numeric()
                ->prefix('Rp')
                ->required(),

            Forms\Components\DatePicker::make('price_date')
                ->label('Tanggal Harga')
                ->default(now())
                ->required()
                ->closeOnDateSelection()
                ->rules([
                    function (callable $get, $record) {
                        return Rule::unique('gold_prices', 'price_date')
                            ->where(fn ($q) => $q
                                ->where('gold_type', $get('gold_type'))
                                ->where('price_date', $get('price_date')))
                            ->ignore($record?->id);
                    },
                ])
                ->validationAttribute('kombinasi jenis & tanggal')
                ->helperText('Setiap tanggal hanya boleh satu harga per jenis emas.'),
        ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('gold_type')
                    ->label('Jenis Emas')
                    ->badge(),

                Tables\Columns\TextColumn::make('price_per_gram')
                    ->label('Harga/Gram')
                    ->money('IDR', true)
                    ->sortable(),

                Tables\Columns\TextColumn::make('price_date')
                    ->label('Tanggal')
                    ->date()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('gold_type')
                    ->label('Jenis Emas')
                    ->options([
                        'emas_tua'  => 'Emas Tua',
                        'emas_muda' => 'Emas Muda',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListGoldPrices::route('/'),
            'create' => Pages\CreateGoldPrice::route('/create'),
            'edit'   => Pages\EditGoldPrice::route('/{record}/edit'),
        ];
    }
}
