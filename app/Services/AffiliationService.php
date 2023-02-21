<?php

namespace App\Services;

use App\Models\Affiliation;

class AffiliationService
{
    /**
     * affiliation登録処理
     * 
     * @param  \Illuminate\Http\Request  $request
     */
    public function createAffiliation($request)
    {
        $affiliation = new Affiliation($request->all());
        $affiliation->save();
    }
}
