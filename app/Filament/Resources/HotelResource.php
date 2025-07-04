<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HotelResource\Pages;
use App\Filament\Resources\HotelResource\RelationManagers;
use App\Models\Hotel;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HotelResource extends Resource
{
    protected static ?string $model = Hotel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('hotel_name') // Hilangkan "name:"
                    ->required()
                    ->maxLength(255),
                Textarea::make('description'),
                TextInput::make('location')
                    ->required(),
                TextInput::make('rating')
                    ->numeric()
                    ->required()
                    ->minValue(0)
                    ->maxValue(5),
                TextInput::make('price')
                    ->numeric()
                    ->required(),
                Toggle::make('available'),
            ]);
    }
        
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hotel_name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->sortable(),
                Tables\Columns\TextColumn::make('rating')
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('idr'), // Menggunakan format mata uang
                BooleanColumn::make('available') // Ubah ke BooleanColumn
                    ->label('Available'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('location') // Filter sesuai lokasi
                    ->options([
                        'Buahbatu, Bandung' => 'Buahbatu, Bandung',
                        'Dago Atas, Bandung' => 'Dago Atas, Bandung',
                        'Gedebage, Bandung' => 'Gedebage, Bandung',
                        'Tangerang'=> 'Tangerang',
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
            'index' => Pages\ListHotels::route('/'),
            'create' => Pages\CreateHotel::route('/create'),
            'edit' => Pages\EditHotel::route('/{record}/edit'),
        ];
    }
}
