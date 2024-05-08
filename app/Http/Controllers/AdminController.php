<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
      $adminRequests=User::where('is_admin',NULL)->get();
      $revisorRequests=User::where('is_revisor',NULL)->get();
      $writerRequests=User::where('is_writer',NULL)->get();
      return view('admin.dashboard',compact('adminRequests','revisorRequests','writerRequests'));
    }
 public function setAdmin(User $user){
    $user->is_admin=true;
    $user->save();
    return redirect(route('admin.dashboard'))->with('message',"Hai reso amministratore l'utente scelto correttamente");
}
public function setRevisor(User $user){
    $user->is_revisor=true;
    $user->save();
    return redirect(route('admin.dashboard'))->with('message',"Hai reso revisore l'utente scelto correttamente ");
}
public function setWriter(User $user){
    $user->is_writer=true;
    $user->save();
    return redirect(route('admin.dashboard'))->with('message',"Hai reso redattore l'utente scelto correttamente");
    }
    public function editTag(Request $request, Tag $tag){
        $request->validate([
            'name'=> 'required|unique:tags',
        ]);
        $tag->update([
            'name'=> strtolower($request->name)
        ]);
        return redirect(route('admin.dashboard'))->with('message', 'Hai aggiornato correttamente il tag');
        
    }
    public function deleteTag(Tag $tag){
        foreach($tag->articles as $article){
            $article->tags()->detach($tag);
        }
        $tag->delete();
        return redirect(route('admin.dashboard'))->with('message', 'Hai eliminato correttamente il tag');

    }

    public function editCategory(Request $request, Category $category){
        $request->validate([
            'name'=> 'required|unique:categories',
        ]);
        $category->update([
            'name'=> strtolower($request->name)
        ]);
        return redirect(route('admin.dashboard'))->with('message', 'Hai aggiornato correttamente la categoria');
        
    }
    public function deleteCategory(Category $category){
        
        $category->delete();
        return redirect(route('admin.dashboard'))->with('message', 'Hai eliminato correttamente la categoria');
    }
    public function storeCategory(Request $request){
        Category::create([
            'name' => strtolower($request->name),
        ]);
        return redirect(route('admin.dashboard'))->with('message', 'Hai inserito correttamente una nuova categoria');
    
    }

}
