<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini; // Import Gemini facade
use Illuminate\Support\Facades\Log; // For logging

class QueryController extends Controller
{
    /**
     * Handle incoming queries and generate response from Gemini API.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handleQuery(Request $request)
    {
        $query = $request->input('query');

        try {
            // Generate content based on input query
            $result = Gemini::geminiPro()->generateContent($query);

            // Logs
            Log::info('Gemini API response:', $result->toArray());

            // Return JSON
            return response()->json([
                'response' => $result->text(), // Example: Getting text response
                'success' => true, // Indicate success status
            ]);
        } catch (\Exception $e) {
            // Log any exceptions or errors
            Log::error('Gemini API error:', ['message' => $e->getMessage()]);

            // Return error response
            return response()->json([
                'error' => 'Failed to process query. Please try again later.',
                'success' => false,
            ], 500); // HTTP status code 500 for internal server error
        }
    }
}
