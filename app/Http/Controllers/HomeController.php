<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  /**
   * @var Request
   */
  private $requests;

  /**
   * HomeController constructor.
   *
   * @param Request $request
   */
  public function __construct(Request $request)
  {
    $this->requests = $request;
    $this->middleware('auth');
  }

  public function create_user()
  {
    DB::transaction(
      function() {
        for($i = 0; 100 > $i; $i++) {
          for($i = 0; 1000 > $i; $i++) {
            DB::table('users')->insert(
              [
                'name'             => "User: $i",
                'email'            => "mail$i@mail.ru",
                'password'         => md5(rand(1000, 9999)),
                'text'             => 'test',
                'description'      => 'test',
                'colors'           => 'red',
                'abilities'        => 'magic',
                'points'           => 4.8,
                'user_group_id '   => 1,
                'user_message_id ' => 1,
                'user_scraps_id '  => 1,
                'created_at'       => Carbon::now(),
              ]
            );
          }
        }
      }
    );

    DB::commit();
  }

  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function user_list()
  {
    $data['users'] = DB::table('users')->paginate(10);
    $data['user']  = Auth::user();

    return view(Auth::user()['is_admin'] ? 'home' : 'user_view', $data);
  }

  /**
   * @param $method
   * @param $id
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
   */
  public function user($method, $id)
  {
    $user = User::where('id', $id);

    if($method === 'remove') {
      $user->delete();
      return redirect()->back();
    } elseif($method === 'view') {
      return view('user_view', ['user' => $user->first()]);
    } elseif($method === 'edit') {
      return view('user_view_edit', ['user' => $user->first()]);
    }
  }

  /**
   * @param $id
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
   */
  public function user_edit($id)
  {
    $all  = $this->requests->all();
    $user = User::where('id', $id);
    $user->update($all['res']);

    return redirect("/user/view/$id");
  }
}
