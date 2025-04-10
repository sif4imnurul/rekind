<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use DOMDocument;
use DOMXPath;

class TwibbonController extends Controller
{
    /**
     * Display a listing of the twibbons.
     */
    public function index(Request $request)
    {
        // Get search query if exists
        $search = $request->query('search');
        $sort = $request->query('sort', 'newest'); // Default sort by newest
        
        // Base query
        $query = DB::table('produk')->where('kategori', 'twibbon');
        
        // Apply search if provided
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                  ->orWhere('deskripsi', 'like', "%{$search}%");
            });
        }
        
        // Apply sorting
        switch ($sort) {
            case 'name_asc':
                $query->orderBy('nama', 'asc');
                break;
            case 'name_desc':
                $query->orderBy('nama', 'desc');
                break;
            case 'oldest':
                $query->orderBy('created_at', 'asc');
                break;
            default:
                $query->orderBy('created_at', 'desc'); // newest first
                break;
        }
        
        // Get twibbons
        $twibbons = $query->paginate(8);
        
        // Fetch preview images for each twibbon
        foreach ($twibbons as $twibbon) {
            $twibbon->preview_image = $this->getTwibbonPreviewImage($twibbon->url);
        }
        
        return view('pages.picture.twibbon.index', compact('twibbons', 'search', 'sort'));
    }
    
    /**
     * Get preview image from Twibbonize URL
     */
    private function getTwibbonPreviewImage($url)
    {
        try {
            // Try to fetch the page content
            $response = Http::get($url);
            
            if ($response->successful()) {
                // Create DOM document and load HTML
                $dom = new DOMDocument();
                @$dom->loadHTML($response->body());
                
                $xpath = new DOMXPath($dom);
                
                // Look for meta og:image tag which usually contains preview image
                $metaTags = $xpath->query('//meta[@property="og:image"]');
                
                if ($metaTags->length > 0) {
                    return $metaTags[0]->getAttribute('content');
                }
                
                // Alternative: try to find the main image in the page
                $images = $xpath->query('//div[contains(@class, "twibbon-preview")]//img');
                
                if ($images->length > 0) {
                    return $images[0]->getAttribute('src');
                }
            }
            
            // Return a default image if preview image can't be found
            return asset('img/twibbon-default.png');
            
        } catch (\Exception $e) {
            // Return default image on error
            return asset('img/twibbon-default.png');
        }
    }
}