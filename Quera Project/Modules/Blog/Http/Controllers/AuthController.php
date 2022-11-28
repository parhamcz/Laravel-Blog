<?php /** @noinspection ALL */

namespace Modules\Blog\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->family = $request->family;
        $user->mobile = $request->mobile;
        $user->password = Hash::make($request->password);
        $user->save();
    }

    public function login(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'mobile' => ['required'],
            'password' => ['required']
        ]);
        $user = User::where('mobile', $request->mobile)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response(json_encode(['errors' => ['mobile' => 'اطلاعات ورود اشتباه است']]), 403);
        }
        $token = $user->createToken('Quera Access Token')->accessToken;
        return response(json_encode(['token' => $token,
            'name' => $user->name,
            'family' => $user->family,
            'mobile' => $user->mobile]));
    }
}
