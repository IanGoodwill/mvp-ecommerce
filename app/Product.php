<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Illuminate\Support\Facades\Auth;

    class Product extends Model
    {
        use SoftDeletes;

        protected $fillable = [
            'name', 'description', 'brand', 'image', 'small_units', 'medium_units', 'large_units', 'price'
        ];

        public function orders()
        {
            return $this->hasMany(Order::class);
        }

        public function favorites()
        {
            return $this->hasMany(Favorite::class);
        }

        public function favorited()
        {
          return (bool) Favorite::where('user_id', Auth::id())
            ->where('product_id', $this->id)
            ->first();
        }
      
     
    
    }