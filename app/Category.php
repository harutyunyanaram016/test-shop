<?phpnamespace App;use Illuminate\Database\Eloquent\Model;class Category extends Model{    protected $fillable = ['name','name_ru','name_fr'];    public function products()    {        return $this->hasMany( Product::class);    }    public function locName()    {        if(config('app.locale') == 'en'){            return $this->name;        }        if(config('app.locale') == 'ru'){            return $this->name_ru;        }        if(config('app.locale') == 'fr'){            return $this->name_fr;        }    }    public function getNameAttribute($value)    {        return ucfirst($value);    }}