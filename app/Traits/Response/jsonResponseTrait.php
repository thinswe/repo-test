<?php

namespace App\Traits\Response;

use Illuminate\Http\JsonResponse;

trait jsonResponseTrait
{
    private function _privateResponse($reponse, $message = null, $redirectUrl = null) : JsonResponse {

        if($reponse['status'] == 'error'){
            return jsonResponse(
                'error',
                ''
            );
        }
        if($reponse['status'] == 'info'){
            return jsonResponse(
                'info',
                ''
            );
        }

        return jsonResponse(
            'success',
            $message,
            $redirectUrl ?? url()->previous()
        );
    }
}