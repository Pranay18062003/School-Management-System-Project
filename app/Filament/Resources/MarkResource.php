<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MarkResource\Pages;
use App\Filament\Resources\MarkResource\RelationManagers;
use App\Models\Mark;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MarkResource extends Resource
{
    protected static ?string $model = Mark::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('student_id')
                    ->label('Student')
                    // ->relationship('student', 'name') // assuming User model has a 'name' field
                    ->relationship(
                        name: 'student',
                        titleAttribute: 'name',
                        modifyQueryUsing: fn($query) => $query->where('role_id', 3)
                    )
                    ->searchable()
                    ->preload()
                    ->required(),

                Forms\Components\Select::make('exam_id')
                    ->label('Exam')
                    // ->relationship('exam', 'name') // assuming Exam model has a 'title' field
                    ->relationship(
                        name: 'exam',
                        titleAttribute: 'name',
                        modifyQueryUsing: fn($query) => $query->orderByDesc('date')
                    )
                    ->getOptionLabelFromRecordUsing(fn ($record) => "{$record->date} - {$record->name} - {$record->subject->name}")
                    ->searchable()
                    ->preload()
                    ->required(),

                Forms\Components\TextInput::make('marks_obtained')
                    ->numeric()
                    ->required()
                    ->minValue(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('serial_no')->label('No.')->rowIndex(),

                Tables\Columns\TextColumn::make('student.name')->label('Student')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('exam.name')->label('Exam')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('exam.subject.name')->label('Subject')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('marks_obtained')->label('Marks')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->label('Created'),
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
            'index' => Pages\ListMarks::route('/'),
            'create' => Pages\CreateMark::route('/create'),
            'edit' => Pages\EditMark::route('/{record}/edit'),
        ];
    }
}
