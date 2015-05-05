<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\User;
use App\Http\Requests\FormRequest;
use App\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Psy\Util\Json;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        return view('index.index')

            ->with('title', 'Welcome | Dhap');



	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(FormRequest $request)
	{

            $model = new UserModel();
            $model->firstname = Input::get('firstname');
            $model->surname =Input::get('surname');
            $model->save();
            return response()->json(['success' => 'true']);



	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)

    {
		//
        return response()->json(UserModel::all());
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
       UserModel::destroy($id);
        return response()->json(['success' => 'true']);
	}

}
