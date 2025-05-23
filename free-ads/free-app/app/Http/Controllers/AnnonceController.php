<?php
use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;


class AnnonceController extends Controller
{
    public function search(): View
    {
        return view('annonces.search');
    }

    public function results(Request $request): View
    {
        $query = $request->input('query');

        $results = Annonce::where('nom', 'like', '%' . $query . '%')
                           ->orWhere('description', 'like', '%' . $query . '%')
                           ->orWhere('prix', 'like', '%' . $query . '%')
                           ->get();

        return view('annonces.search', ['results' => $results, 'query' => $query]);
    }

}
