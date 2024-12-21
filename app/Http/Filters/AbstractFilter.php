<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

abstract class AbstractFilter implements FilterInterface
{
    private $queryParams;

    public function __construct(array $queryParams)
    {
        $this->queryParams = $queryParams;
    }

    abstract protected function getCallbacks():array;

    public function apply(Builder $builder)
    {
        $this->before($builder);
        foreach ($this->getCallbacks() as $name => $callback) {
            if (isset($this->queryParams[$name])) {
                call_user_func($callback, $builder, $this->queryParams[$name]);
            }
        }
    }
    
    /**
     * @param Builder $builder
     */
    protected function before(Builder $builder)
    {
    }


   /**
   * @return mixed|null
   */
   protected function getQueryParam(string $key, $default = null)
   {
       return $this->queryParams[$key] ?? $default;
   }

   /**
    * @param string[] $keys
    *
    * @return AbstractFilter
    */
   protected function removeQueryParam(string ...$keys)
   {
       foreach ($keys as $key) {
           unset($this->queryParams[$key]);
       }
       return $this;
   }
}
