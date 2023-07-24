<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShowAllUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\HasApiTokens;
use PHPUnit\TextUI\XmlConfiguration\ValidationResult;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
    use HasApiTokens;

    public function index(ShowAllUser $request){
        $users = User::latest();

        if(request("search")){
            $users = $users->filter();
        }

        if($request->user()->tokenCan('admin')) return view("users.admin",["users" => $users->simplePaginate(5)]);
        elseif($request->user()->tokenCan('user')) return view("users.users",["users" => $users->get()]);
    }

    public function create(){
        return view("users.user_create");
    }

    public function store(Request $request){
        $user = $request->validate([
            "name" => "required|unique:users,name",
            "email" => "required|unique:users,email",
            "password" => "required",
        ]);

        User::create($user);

        return redirect("users");
    }

    public function show(User $user){
        return view("users.users",["user" => $user]);
    }

    public function edit(User $user){
        return view("users.user_update",["user" => $user]);
    }

    public function update(User $user){
        $update = request()->validate([
            "name" => "required|unique:users,name,".$user->id,
            "email" => "required|unique:users,email,".$user->id,
            "password" => "",
        ]);

        if($update["password"] == "") $update["password"] = $user->password;

        $user->update($update);

        return redirect("users");
    }

    public function destroy(User $user){
        $user->delete();
        return redirect("/users");
    }
}