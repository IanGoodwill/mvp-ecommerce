<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Product extends Model
    {
        use SoftDeletes;

        protected $fillable = [
            'name', 'description', 'brand', 'image', 'small_units', 'medium_units', 'large_units', 'price'
        ];

        public function orders(){
            return $this->hasMany(Order::class);
        }
    }