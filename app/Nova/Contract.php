<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Illuminate\Support\Facades\Storage;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Boolean;
use Benjaminhirsch\NovaSlugField\Slug;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Laravel\Nova\Fields\Trix;
use ClassicO\NovaMediaLibrary\MediaLibrary;

class Contract extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Contract::class;

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

            BelongsTo::make('User', 'user', 'App\Nova\User')
                ->sortable()
                ->hideFromIndex()
                ->rules('required'),

            HasMany::make('Template', 'template', 'App\Nova\Template'),

            TextWithSlug::make('Name')->slug('slug'),

            Text::make('Header Title')
                ->sortable()
                ->rules('required', 'max:255'),
            Trix::make('Header Content')
                ->sortable()
                ->hideFromIndex()
                ->rules('required'),

            MediaLibrary::make('Preview Image')->preview('thumb'),

            //Image::make('Preview Image')
            //    ->hideFromIndex()
            //    ->disk('public')
            //    ->preview(function ($value, $disk) {
            //        return $value ? Storage::disk($disk)->url($value) : null;
            //    }),

            Text::make('Short Name')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            Trix::make('Template Body')
                ->sortable()
                ->rules('required'),

            Text::make('Short Description')
                ->sortable()
                ->hideFromIndex()
                ->rules('required', 'max:255'),

            Text::make('Page Title')
                ->sortable()
                ->rules('required', 'max:255'),
            Text::make('Page Meta Description')
                ->sortable()
                ->hideFromIndex()
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
