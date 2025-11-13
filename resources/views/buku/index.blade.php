public function index()
{
    $data_buku = Buku::all();
    return view('buku.index', compact('data_buku'));
}
