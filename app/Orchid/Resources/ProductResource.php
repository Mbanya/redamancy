<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\TD;

class ProductResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Product::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Group::make([
                Input::make('product_name')
                ->title('Product Name')
                ->placeholder('Enter Product Name')
                ->required()
                ->help('Product Name'),

                TextArea::make('product_description')
                    ->title('Description')->required()
                    ->rows(3)
                    ->maxlength(200)
                    ->placeholder('Brief description of the post'),
            ]),

            Group::make([
                Input::make('volume')
                ->title('Volume')
                ->placeholder('Enter Volume')
            ])
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),
            TD::make('product_name'),
            TD::make('product_description'),
            TD::make('volume'),
            TD::make('varietal'),
            TD::make('appellation'),
            TD::make('vintage'),
            TD::make('profile'),
            TD::make('alcohol'),
            TD::make('price'),
            TD::make('featured'),
            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
