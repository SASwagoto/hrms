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
        $users = User::role('employee')->orderBy('name', 'asc')->get();
        $teams = Team::all();
        return view('department.teams', compact('depts','teams', 'zones','users'));
    }

    public function team_store(Request $request)
    {
        Team::create($request->all());
        Alert::success( $request->team_name,'Added Successfully!');
        return redirect()->back();
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
        $sectors = Sector::orderBy('id','desc')->get();
        return view('department.sector', compact('sectors'));
    }

    public function sector_store(Request $request)
    {
        Sector::create($request->all());
        Alert::success( $request->sector_name,'Added Successfully!');
        return redirect()->back();
    }

    public function sector_assign_leader()
    {
        $sectors = Sector::active()->orderBy('id','desc')->get();
        $users = User::role('employee')->orderBy('name', 'asc')->get();
        return view('department.assign_sl', compact('sectors','users'));
    }

    public function sector_assign_team()
    {
        $sectors = Sector::with('teams')->orderBy('id','desc')->get();
        $teams = Team::active()->orderBy('team_name','asc')->get();

        return view('department.assign_tm', compact('sectors','teams'));
    }

    public function assign_S_leader(Request $request)
    {
        $sector = Sector::find($request->sector_id);
        $user = User::find($request->sector_leader);
        $sector->update([
            'sector_leader'=> $request->sector_leader,
        ]);
        Alert::success('Success', $user->name.' assign to sector leader');
        return redirect()->back();
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
