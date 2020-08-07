<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;


class GroupsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]) ;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $groups = Group::all();
        return view ('groups.index')->with('groups', $groups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.showgroup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'note' => 'required',
            'post_id' => 'required'
        ]);

        //Create Post
        $group = new group;
        $group->name = $request->input('name');
        $group->note = $request->input('note');
        $group->creator_id = auth()->user()->id;
        $group->post_id= $request->input('post_id');
        $group->save();


        $user_id = auth()->user()->id;
        $user = \App\User::find($user_id);
        $user->group_id = $group->id;
        $user->save; 
        return redirect()->route('post_group', [$group->post_id])->with('success', 'Group Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post_id)
    {
        $user = Group::find($post_id); 
        return view('groups.show')->with('groups', $user->groups);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $group = Group::find($id);

        //Check auth
        if(auth()->user()->id !==$group->user_id){
            return redirect('/groups')->with('error', 'Unauthorized Page');

        }
        
        $group->delete();
        return redirect('/groups')->with('success', 'Group Deleted');

    }


    public function creategroup($postId)
    {
        $post = \App\Post::findOrFail($postId);
    
        return view('groups.create')->with('post', $post);
    }

    public function listgroup($postId){
        $post = \App\Post::findOrFail($postId);
    
        return view('posts.showgroup')->with('post', $post);
    }

    public function detailgroup($groupId){
        $group = \App\Group::findOrFail($groupId);
    
        return view('groups.show')->with('group', $group);
    }

    public function join($groupId)
    {
        //check group stats
        if((auth()->user()->group_id) > 0){
            return redirect('/home')->with('error', 'You have joined another group!!');

        }

        $user_id = auth()->user()->id;
        $user = \App\User::find($user_id);

        $user->group_id= $groupId;
        $user->save();
        return redirect('home')->with('success', 'Group Joined');

    }

    public function exit()
    {

        $user_id = auth()->user()->id;
        $user = \App\User::find($user_id);

        $user->group_id= 0;
        $user->save();
        return redirect('home')->with('success', 'Good bye my friend :)');

    }
}