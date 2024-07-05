<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class QueryController extends Controller
{
    public function handleQuery(Request $request)
    {
        $query = $request->input('query');
        $client = new Client();

        $response = $client->post('https://gemini.api.url', [
            'headers' => [
                'Authorization' => 'Bearer ' . env('GEMINI_API_KEY'),
            ],
            'json' => [
                'query' => $query,
            ],
        ]);

        $responseData = json_decode($response->getBody()->getContents(), true);

        return response()->json($responseData);
    }
}
