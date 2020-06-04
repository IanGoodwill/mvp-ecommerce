<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Illuminate\Support\Facades\Auth;

    class Product extends Model
    {
        use SoftDeletes;

        protected $fillable = [
            'name', 'description', 'brand', 'image', 'small_units', 'medium_units', 'large_units', 'price', 'is_favorite'
        ];

        public function orders()
        {
            return $this->hasMany(Order::class);
        }

        public function favorited()
        {
           return (bool) Favorite::where('product_id', $this->id) // need to check
            ->first();
        }
      
     
    
    }