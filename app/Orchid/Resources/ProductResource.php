<?php

namespace App\Orchid\Resources;

use Illuminate\Database\Eloquent\Model;
use Orchid\Crud\Filters\DefaultSorted;
use Orchid\Crud\Resource;
use Orchid\Crud\ResourceRequest;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Sight;
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
                ->placeholder('Enter Volume'),

                Input::make('appellation')
                    ->title('Appellation')
                    ->placeholder('Enter Appellation'),

                Input::make('vintage')
                    ->title('Vintage')
                    ->placeholder('Enter Vintage'),

                Input::make('profile')
                    ->title('Profile')
                    ->placeholder('Enter Profile')

            ]),

            Group::make([
                Input::make('alcohol')
                    ->title('Alcohol')
                    ->placeholder('Enter Alcohol'),

                Input::make('price')
                    ->title('Price')
                    ->placeholder('Enter Price'),

                Cropper::make('product_image')
                    ->title('Product Image')->required()
                    ->width(840)
                    ->height(1335),
            ]),

            Group::make([
                Input::make('slug')
                    ->title('Slug')
                    ->required()
                    ->placeholder('Slug')
                    ->help('Specify a url friendly name. Should be lower case version of title'),

                Select::make('status')
                    ->options([
                        'published'   => 'PUBLISHED',
                        'draft' => 'DRAFT',
                        'pending' => 'PENDING',
                    ])
                    ->title('Select Status')
                    ->help('Status i.e. Published, Draft & Pending'),
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
            TD::make('product_image','Product Image')
                ->width(500)
                ->render(function ($model){
                    return "<img src='{$model->product_image}'
                              alt='sample'
                              class='mw-100 d-block img-fluid'>";
                }),
            TD::make('varietal'),
            TD::make('price'),
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
        return [
            Sight::make('id'),
            Sight::make('product_name'),
            Sight::make('price'),
            Sight::make('varietal'),
            Sight::make('created_at'),
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [
            new  DefaultSorted('id', 'asc'),
        ];
    }

    /**
     * Action to create and update the model
     *
     * @param ResourceRequest $request
     * @param Model           $model
     */
    public function onSave(ResourceRequest $request, Model $model)
    {
        $model->forceFill($request->all())->save();
    }

    /**
     * Action to delete a model
     *
     * @param Model $model
     *
     * @throws Exception
     */
    public function onDelete(Model $model)
    {
        $model->delete();
    }
}
