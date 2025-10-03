<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function __invoke()
    {
        $filePath = storage_path('cv/cv_mohamed_khalil_boutar_fr.pdf');
        $fileName = 'invoice.pdf';

        if (!file_exists($filePath)) {
            abort(404, 'File not found.');
        }

        return response()->download($filePath, $fileName, [
            'Content-Type' => 'application/pdf',
        ]);
    }
}
