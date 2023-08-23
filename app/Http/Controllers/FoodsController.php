<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;


class FoodsController extends Controller
{
    public function index()
    {
        $foods = Food::all(); // SELECT * FROM foods;
        // dd($foods);
        // $foods = Food::where('name', '=', 'sashimi')
                    // ->get();
                    // ->firstOrFail(); // chi tra ve 1 phan tu (k phai array)
        return view('foods.index', [
            'foods' => $foods,
        ]);
    }

    public function create()
    {
        // insert new food 
        $categories =  Category::all();
        return view('foods.create',[
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        // dd('this is store function');
        // $food = new Food();
        // $food->name = $request->input('name');
        // $food->count = $request->input('count');
        // $food->description = $request->input('description');
        // dd($request->all()); // thông tin chi tiết của request
        // dd($request->file('image')->guessClientExtension()); // name của input = image(create.blade), guessClientExtension: lấy ra đuôi file: jpg, jpeg,...
        // dd($request->file('image')->getMimeType()); // image/jpeg
        // dd($request->file('image')->getClientOriginalName()); // doctor9.jpg
        // dd($request->file('image')->getSize()); // Size image(kB)
        // dd($request->file('image')->getError()); // tra ve error
        // dd($request->file('image')->isValid()); // tra ve true neu k lỗi

        // we need to create and validate data 
        $request->validate([
            'name' => 'required',
            'count' => 'required|integer|min:0|max:200',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        // client's image name and servers's image name must be different
        $generatedImageName = 'image'.time().'-'
                                .$request->name.'.'
                                .$request->image->extension(); // image1692814261-Trường.jpg
        // dd($generatedImageName);
        // move to a folder
        $request->image->move(public_path('images'), $generatedImageName); // move file image1692814261-Trường.jpg to public/images
        // $request->validate([
        //     // 'name' => 'required|unique:foods',
        //     'name' => new Uppercase,
        //     'count' => 'required|integer|min:0|max:1000',
        //     'category_id' => 'required',
        // ]);
        // if the validation is pass, it will come here!
        // Otherwise it will throw an exception(ValidationException)
        $food = Food::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'image_path' => $generatedImageName
        ]);

        // save to database
        $food->save();
        return redirect("/foods");
    }

    public function edit($id)
    {
        // dd($id);
        $food = Food::find($id);
        // dd($food);
        return view('foods.edit')->with('food', $food);
    }

    public function update(CreateValidationRequest $request, $id)
    {
        // validate data
        $request->validated();
        // update
        $food = Food::where('id', $id)
                ->update([
                    'name' => $request->input('name'),
                    'count' => $request->input('count'),
                    'description' => $request->input('description'),
                ]);
        return redirect('/foods');
    }

    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();
        // dd($id);
        // // dd($food);
        return redirect('/foods');
    }

    public function show($id) // show details food
    {
        // dd('this is show function '.$id);
        $food = Food::find($id);
        $category = Category::find($food->category_id);
        // dd($category);
        $food->category = $category;
        // dd($food);
        return view('foods.show')->with('food', $food);
    }
}
