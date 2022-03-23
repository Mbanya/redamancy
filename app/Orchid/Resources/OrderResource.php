<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Filters\DefaultSorted;
use Orchid\Crud\Resource;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class OrderResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Order::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [

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
            TD::make('billing_first_name'),
            TD::make('billing_last_name'),
            TD::make('billing_email'),
            TD::make('billing_phone'),
            TD::make('amount'),
            TD::make('m_payment_id'),
            TD::make('billing_address_1'),
            TD::make('billing_address_2'),
            TD::make('payment_status'),
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
            Sight::make('billing_first_name'),
            Sight::make('billing_last_name'),
            Sight::make('billing_email'),
            Sight::make('billing_phone'),
            Sight::make('amount'),
            Sight::make('m_payment_id'),
            Sight::make('billing_address_1'),
            Sight::make('billing_address_2'),
            Sight::make('payment_status'),
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
            new  DefaultSorted('m_payment_id', 'asc'),
        ];
    }
}
