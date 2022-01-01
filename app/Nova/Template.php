<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Benjaminhirsch\NovaSlugField\Slug;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Laravel\Nova\Fields\Trix;
use App\Models\Contract;

class Template extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Template::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = ['id', 'name'];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            BelongsTo::make('User', 'user', '\App\Nova\User')->hideFromIndex(),

            BelongsTo::make(
                'Contract',
                'contract',
                '\App\Nova\Contract'
            )->sortable(),

            TextWithSlug::make('Name')->slug('slug'),

            Text::make('Header Title')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            Trix::make('Header Content')
                ->sortable()
                ->hideFromIndex()
                ->rules('required'),

            Image::make('Preview Image')->hideFromIndex(),

            Text::make('Page Title')
                ->sortable()
                ->rules('required', 'max:255'),

            Trix::make('Template Body')
                ->sortable()
                ->hideFromIndex()
                ->rules('required'),

            Text::make('Page Meta Description')
                ->hideFromIndex()
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Page Meta Image')
                ->sortable()
                ->hideFromIndex(),

            Slug::make('Slug')->hideFromIndex(),

            DateTime::make('When to Publish', 'published_at')
                ->rules('required')
                ->format('MMM DD, YYYY, HH:MM:SS')
                ->hideFromIndex(),

            Boolean::make('Published', function () {
                return now()->gt($this->published_at);
            }),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
