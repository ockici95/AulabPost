<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\CareerRequestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Symfony\Contracts\Service\Attribute\Required;

class PublicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('homepage');
    }
    public function homepage(){
        
        $articles = Article::where('is_accepted',true)->orderBy('created_at', 'desc')->take(5)->get();
        $lastArticlesTitles= $articles->map(function ($article) {
            return $article->title;
        })->join(' - ');
        return view('welcome', compact('articles' , 'lastArticlesTitles'));
    }
    
    public function careers(){
        return view('careers');
    }
    public function careersSubmit(Request $request){
        $request->validate ([
            'role'=> 'required',
            'email'=>'required |email',
            'message'=>'required',
        ]);
        $user = Auth::user();
        $role = $request->role;
        $email = $request->email;
        $message = $request->message;
        
        Mail::to('admin@theaulabpost.it')->send(new CareerRequestMail(compact('role', 'email', 'message')));
        switch($role){
            case 'admin':
                $user->is_admin=NULL;
                break;
                case 'revisor':
                    $user->is_revisor=NULL;
                    break;
                    case 'writer':
                        $user->is_writer=NULL;
                        break;
                    }
                    
                    $user->update();
                    return redirect(route('homepage'))->with('message', 'Grazie per averci contattato.');
                }
                
            }