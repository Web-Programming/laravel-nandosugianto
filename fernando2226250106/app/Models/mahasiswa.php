namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Models;

class Mahasiswa extends Model{
    use HasFactory;

    //jika nama tabel berbeda
    protected $table = "Mahasiswa";

    //untuk mengatur kolom yg boleh diisi saat masa insert
    protected $fillable = ['npm', 'nama'];

    //untuk mengatur kolom yg tidak boleh diisi
    protected $guard =[];
}