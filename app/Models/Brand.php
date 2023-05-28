<?php
namespace App\Models;

class Brand extends \Fusion\Models\Taxonomies\Brand
{
    public function morphTypeName() 
    {
        return \Fusion\Models\Taxonomies\Brand::class;
    }

    public function productModels()
    {
        // return $this->morphToMany(app('Fusion\Models\Taxonomies\Brand'), 'pivot', 'taxonomies_pivot', 'pivot_id', 'taxonomy_id')->where('field_id', 67)->orderBy('order');
        return $this->morphedByMany(\Fusion\Models\Collections\ProductModel::class, 'pivot', 'taxonomies_pivot', 'taxonomy_id', 'pivot_id')->where('field_id', 67)->orderBy('order');
    }

    public function getFirstProductModel()
    {
        return \Fusion\Models\Collections\ProductModel::whereHas('brand', function($query) {
            $query->where('id', $this->id);
        })->first();
    }

    public function getImageUrlAttribute()
    {
        if ($this->image->isNotEmpty()) {
            return $this->image->first()->url;
        }
    }

    public function getLogoUrlAttribute()
    {
        if ($this->logo->isNotEmpty()) {
            return $this->logo->first()->url;
        }
    }

    public function getUrlAttribute()
    {
        return url('our-plan/'.$this->slug);
    }
}