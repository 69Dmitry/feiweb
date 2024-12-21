<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use Filterable;

    private const IS_ACTIVE = 1, IS_DISABLED = 0;
    
    protected $table = 'vacancy';
    protected $guarded = false;

    protected $fillable = ['active', 'title', 'description', 'salary', ];
   

    public static function getStatuses()
    {
         return [
            self::IS_ACTIVE => 'Опубликована', 
            self::IS_DISABLED => 'Не опубликована'
         ];
    }

    /**
     * отдает название атрибута
     */
    public function getStatusTitleAttribute() 
    {
        return self::getStatuses()[$this->active];
    }

    /**
     * очистка от html тегов
     */
    private function clean(): void
    {
        $this->description = strip_tags($this->description);
    }

    /**
     * отдает превью описания модели
     */
    public function getPreviewTextAttribute(): string 
    {
        $this->clean();

        if (mb_strlen($this->description) > 100) {
            return mb_substr($this->description, 0, 250) . '...';
        }

        return $this->description;
    }
}