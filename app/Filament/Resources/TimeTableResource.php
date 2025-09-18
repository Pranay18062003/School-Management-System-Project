<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TimeTableResource\Pages;
use App\Filament\Resources\TimeTableResource\RelationManagers;
use App\Models\TimeTable;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TimeTableResource extends Resource
{
    protected static ?string $model = TimeTable::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('day')
                    ->options([
                        'Monday' => 'Monday',
                        'Tuesday' => 'Tuesday',
                        'Wednesday' => 'Wednesday',
                        'Thursday' => 'Thursday',
                        'Friday' => 'Friday',
                    ])
                    ->required(),

                Select::make('period')
                    ->options([
                        1 => 'Period 1',
                        2 => 'Period 2',
                        3 => 'Period 3',
                        4 => 'Period 4',
                        5 => 'Period 5',
                        6 => 'Period 6',
                        7 => 'Period 7',
                    ])
                    ->required(),

                Select::make('subject_id')
                    ->relationship('subject', 'name') // assumes Subject model has 'name'
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('serial_no')->label('No.')->rowIndex(),
                TextColumn::make('day')->sortable()->searchable(),
                TextColumn::make('period')->sortable(),
                TextColumn::make('subject.name')->label('Subject')->sortable()->searchable(),
                TextColumn::make('created_at')->dateTime(),
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
            'index' => Pages\ListTimeTables::route('/'),
            'create' => Pages\CreateTimeTable::route('/create'),
            'edit' => Pages\EditTimeTable::route('/{record}/edit'),
        ];
    }
}
