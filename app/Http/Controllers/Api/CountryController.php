<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

  public function index()
  {
    return response(Country::all());
  }

  public function store(Request $request)
  {
    $data = request()->except('_token');
    $countryName = $data['countryName'];
    $countryPrefix = $data['countryPrefix'];
    $countryDomain = $data['countryDomain'];
    $countryFlag = 'Bandera NO disponible';

    Country::create([
      'country_name' => $countryName,
      'country_prefix' => $countryPrefix,
      'country_domain' => $countryDomain,
      'country_flag' => $countryFlag
    ]);

    $response = [
      'success'=>	true,
      'message'=> '¡País registrado correctamente!'
    ];

    return response()->json($response);
  }

  public function edit($id)
  {
    return response(Country::find($id));
  }

  public function update(Request $request, Country $country)
  {
    $data = request()->except('_token');

    $countryName = $data['countryName'];
    $countryPrefix = $data['countryPrefix'];
    $countryDomain = $data['countryDomain'];
    $countryFlag = 'Bandera NO disponible';
    $countryId = $data['countryId'];

    Country::where('id',$countryId)->update([
      'country_name' => $countryName, 
      'country_prefix' => $countryPrefix,
      'country_domain' => $countryDomain,
      'country_flag' => $countryFlag
    ]);

    $response = [
      'success'=>	true,
      'message'=> '¡País actualizado correctamente!'
    ];

    return response()->json($response);
  }

  public function destroy($id)
  {
    Country::destroy($id);

    $response = [
      'success'=>	true,
      'message'=> 'País eliminado correctamente.'
    ];
    
    return response()->json($response);
  }
}
