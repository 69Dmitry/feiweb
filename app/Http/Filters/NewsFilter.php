<?php

namespace App\Http\Filters;

use App\Models\News;
use Illuminate\Database\Eloquent\Builder;

class NewsFilter extends AbstractFilter
{
    const ACTIVE = 'active';
    const SLUG = 'slug';
    const ID = 'id';
    const TAGS = 'tags';

    protected function getCallbacks(): array
    {
        return [
            self::ACTIVE => [$this, 'active'],
            self::SLUG => [$this, 'slug'],
            self::ID => [$this, 'id'],
        ];
    }

    public function active(Builder $builder, $value) 
    {
        $builder->where('active', '=', $value);
    }

    public function id(Builder $builder, $value) 
    {
        $builder->where('id', $value);
    }

    public function slug(Builder $builder, $value) 
    {
        $builder->where('slug', 'like', "%{$value}%");
    }
}