<?php

namespace App\Http\Controllers;

use App\Models\ProdukModel; // Pastikan Anda menggunakan model yang sesuai
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class HasilSurveyController extends Controller
{
    /**
     * Konstanta untuk jumlah item per halaman.
     */
    private const DEFAULT_PER_PAGE = 12;

    public function awareness()
    {
        return view('pages.reference.hasil-survey.brand-awareness');
    }

    public function position()
    {
        return view('pages.reference.hasil-survey.brand-position');
    }
    
    public function cse()
    {
        return view('pages.reference.hasil-survey.cse');
    }
    
    public function skl()
    {
        return view('pages.reference.hasil-survey.skl');
    }

    public function testimoni()
    {
        return view('pages.reference.hasil-survey.testimoni');
    }

    /**
     * Menampilkan halaman daftar dokumen survey dengan fungsionalitas search & sort.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function dokumen_survey(Request $request) // <-- Tambahkan 'Request $request' di sini
    {
        // Ambil parameter dari request atau gunakan nilai default
        $sort = $request->get('sort', 'terbaru');
        $search = $request->get('search', '');
        $perPage = $request->get('perPage', self::DEFAULT_PER_PAGE);

        // Query dasar untuk mengambil produk dengan kategori 'hasil_survey'
        $query = ProdukModel::where('kategori', 'hasil_survey');

        // Terapkan filter pencarian jika ada kata kunci
        if (!empty($search)) {
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', '%' . $search . '%')
                  ->orWhere('deskripsi', 'like', '%' . $search . '%');
            });
        }

        // Terapkan logika pengurutan
        switch ($sort) {
            case 'terlama':
                $query->orderBy('created_at', 'asc');
                break;
            case 'a-z':
                $query->orderBy('nama', 'asc');
                break;
            case 'z-a':
                $query->orderBy('nama', 'desc');
                break;
            case 'terbaru':
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }

        // Ambil data dengan pagination dan sertakan query string
        $dokumenSurveys = $query->paginate($perPage)->withQueryString();

        // Proses gambar untuk fallback jika file tidak ditemukan
        $this->processDokumenImages($dokumenSurveys);

        // Kirim data ke view
        // Pastikan path view 'pages.survey.dokumen_survey' sudah benar
        return view('pages.reference.hasil-survey.dokumen_survey', [ 
            'dokumenSurveys' => $dokumenSurveys,
            'sort' => $sort,
            'search' => $search,
            'perPage' => $perPage
        ]);
    }

    /**
     * Memproses gambar dokumen dan memberikan gambar fallback jika file asli tidak ada.
     *
     * @param  \Illuminate\Pagination\LengthAwarePaginator  $documents
     * @return void
     */
    private function processDokumenImages($documents)
    {
        // Daftar gambar fallback generik untuk dokumen
        $fallbackImages = ['doc_thumb_1.jpg', 'doc_thumb_2.jpg', 'doc_thumb_3.jpg', 'doc_thumb_4.jpg'];

        foreach ($documents as $document) {
            // Asumsikan path file gambar ada di public/files/
            $imagePath = public_path('files/' . $document->foto);
            
            // Periksa apakah file ada dan bukan direktori
            if (!File::exists($imagePath) || !is_file($imagePath)) {
                // Jika file tidak ada, gunakan gambar fallback secara acak
                $randomIndex = array_rand($fallbackImages);
                // Asumsikan gambar fallback ada di public/img/fallbacks/
                $document->display_image = 'fallbacks/' . $fallbackImages[$randomIndex]; 
            } else {
                // Jika file ada, gunakan gambar asli
                $document->display_image = $document->foto;
            }
        }
    }
}
