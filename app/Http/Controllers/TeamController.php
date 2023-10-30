<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Sector;
use App\Models\Team;
use App\Models\User;
use App\Models\Zone;
use DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function team_index()
    {
        $zones = Zone::active()->orderBy('zone_name', 'asc')->get();
        $depts = Department::active()->get();
        $users = User::role('Employee')->leftJoin('teams', 'users.id', '=', 'teams.leader_id')
        ->whereNull('teams.leader_id')
        ->select('users.*')
        ->get();
        $teams = Team::all();
        return view('department.teams', compact('depts','teams', 'zones','users'));
    }

    public function team_store(Request $request)
    {
        Team::create($request->all());
        Alert::success( $request->team_name,'Added Successfully!');
        return redirect()->back();
    }

    public function team_show(Team $team)
    {
        $users = User::role('Employee')->leftJoin('teams', 'users.id', '=', 'teams.leader_id')
        ->whereNull('teams.leader_id')
        ->select('users.*')
        ->get();
        return view('department.teamDetails', compact('team', 'users'));
    }

    public function team_update(Request $request, Team $team)
    {
        $isActive = ($request->has('isActive')) ? 1 : 0;
        $team->update([
            'team_name'=> $request->team_name,
            'dept_id'=> $request->dept_id,
            'zone_id'=> $request->zone_id,
            'leader_id'=> $request->leader_id,
            'isActive'=> $isActive,
        ]);
        Alert::success( $request->team_name,'Updated Successfully!');
        return redirect()->back();
    }

    public function addMember(Request $request)
    {
        $exist = DB::table('team_has_members')
        ->where('team_id', $request->team_id)
        ->where('user_id', $request->user_id)
        ->first();
        if( $exist ){
            Alert::error( 'Exist','This employee already in this team.');
            return redirect()->back();
        }else{
            DB::table('team_has_members')->insert([
                'team_id' => $request->team_id,
                'user_id'=> $request->user_id,
            ]);
            Alert::success( 'Successfull','Member added.');
            return redirect()->back();
        }
        
    }

    public function removeMember(Request $request)
    {
        $team = Team::find($request->team_id);
        $team->members()->detach($request->user_id);

        Alert::success('Removed','Removed successfully form team.');
        return redirect()->back();

        // $delete = DB::table('team_has_members')
        // ->where('team_id', $request->team_id)
        // ->where('user_id', $request->user_id)
        // ->delete();
        // if( !$delete ){
        //     Alert::error( 'Erorr','Data not found!');
        //     return redirect()->back();
        // }else{
        //     Alert::success('Removed','Removed successfully form team.');
        //     return redirect()->back();
        // }
        
    }

    public function zone()
    {
        $zones  = Zone::orderBy('id', 'desc')->get();
        return view('department.zone', compact('zones'));
    }

    public function zone_store(Request $request)
    {
        Zone::create($request->all());

        Alert::success( $request->zone_name,'Added Successfully!');
        return redirect()->back();
    }

    public function zone_update(Request $request, Zone $zone)
    {
        $isActive = ($request->has('isActive')) ? 1 : 0;
       
         $zone->update([
            'zone_name'=> $request->zone_name,
            'isActive'=> $isActive,
         ]);

         Alert::success( $request->zone_name,'Updated Successfully!');
         return redirect()->back();
    }

    public function zone_delete(Zone $zone)
    {
        $zone->delete();
        Alert::success( $zone->name,'Deleted Successfully!');
        return redirect()->back();
    }

    public function sector()
    {
        $sectors = Sector::orderBy('id','desc')->paginate(10);
        $users = User::role('Employee')->leftJoin('sectors', 'users.id', '=', 'sectors.sector_leader')
        ->whereNull('sectors.sector_leader')
        ->select('users.*')
        ->get();
        return view('department.sector', compact('sectors', 'users'));
    }

    public function sector_store(Request $request)
    {
        Sector::create($request->all());
        Alert::success( $request->sector_name,'Added Successfully!');
        return redirect()->back();
    }
    public function sector_update(Request $request, Sector $sector){
        $isActive = ($request->has('isActive')) ? 1 : 0;
        $sector->update([
            'sector_name'=> $request->sector_name,
            'sector_leader'=> $request->sector_leader,
            'isActive'=> $isActive,
        ]);
        Alert::success( $request->sector_name,'Updated Successfully!');
        return redirect()->back();
    }
    public function sector_assign_team()
    {
        $sectors = Sector::with('teams')->orderBy('id','desc')->get();
        // $sectors = Sector::with('teams')
        // ->whereDoesntHave('teams') // Exclude sectors with related teams
        // ->orderBy('id', 'desc')
        // ->get();
        $teams = Team::active()->orderBy('team_name','asc')->get();
        // $teams = Team::active()
        // ->leftJoin('sector_has_teams', 'teams.id', '=', 'sector_has_teams.team_id')
        // ->whereNull('sector_has_teams.sector_id')
        // ->select('teams.*')
        // ->orderBy('teams.team_name', 'asc')
        // ->get();

        return view('department.assign_tm', compact('sectors','teams'));
    }



    public function assign_team(Request $request)
    {
        $sector = $request->sector_id;
        $teams = $request->team;

        foreach ($teams as $team) {
            DB::table('sector_has_teams')->insert([
                'sector_id'=> $sector,
                'team_id' => $team,
            ]);
        }
        Alert::success('Success', 'Teams added successfully!');
        return redirect()->back();
    }

    
}
