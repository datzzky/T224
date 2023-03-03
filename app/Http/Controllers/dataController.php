<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentsData;


use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class dataController extends Controller
{
    public function getData(Request $request){
        //dd($request->all());
        $request->validate([

            'lastName'=> 'Required',
            'firstName'=> 'Required',
            'age'=> 'Required',
            'birthDate'=> 'Required', 
            'gender'=> 'Required',
            'college'=> 'Required',
            'department'=> 'Required',
            'yearLevel'=> 'Required', 
            'region'=> 'Required',
            'city'=> 'Required',
        ]);

        $lastname = $request->lastName;
        $firstname = $request->firstName;
        $birhdate = $request->birthDate;
        $age = $request->age;
        $gender = $request-> gender;
        $college = $request->college;
        $department = $request->department;
        $yearLevel = $request->yearLevel;
        $region = $request->region;
        $city = $request->city;


        // inserting data into the data base
        $student = new studentsData();

        $student->lastName = $lastname;
        $student->firstName = $firstname;
        $student->age = $age;
        $student->birthDate = $birhdate;
        $student->gender = $gender;
        $student->college = $college;
        $student->department = $department;
        $student->yearLevel = $yearLevel;
        $student->Region = $region;
        $student->city = $city;
        $student->save();
        
        return redirect()->route('main');
       
    }
    public function deleteRow(Request $request, $id){
        //dd($request->all());
        studentsData::where('id', '=', $id)->first()->delete();
        return redirect()->back();
    }
    public function update(Request $request){
        $request->validate([

            'lastName'=> 'Required',
            'firstName'=> 'Required',
            'age'=> 'Required',
            'birthDate'=> 'Required', 
            'gender'=> 'Required',
            'college'=> 'Required',
            'department'=> 'Required',
            'yearLevel'=> 'Required', 
            'region'=> 'Required',
            'city'=> 'Required',
        ]);

        $lastname = $request->lastName;
        $firstname = $request->firstName;
        $birhdate = $request->birthDate;
        $age = $request->age;
        $gender = $request-> gender;
        $college = $request->college;
        $department = $request->department;
        $yearLevel = $request->yearLevel;
        $region = $request->region;
        $city = $request->city;
        $id = $request->id;

        // dd($request->all());


        // updating data into the data base
        studentsData::where('id', '=', $id)->update([
            'lastname' => $lastname,
            'firstname'=> $firstname,
            'age'=> $age,
            'birthDate'=> $birhdate, 
            'gender'=> $gender,
            'college'=> $college,
            'department'=> $department,
            'yearLevel'=> $yearLevel, 
            'Region'=> $region,
            'city'=> $city
        ]);
        return redirect()->route('main');
    }
}

/*
 


        $data = DB::table('students_data')
       ->insert([
            'lastname' => $lastname,
            'firstname'=> $firstname,
            'age'=> $age,
            'birthDate'=> $birhdate, 
            'gender'=> $gender,
            'college'=> $college,
            'department'=> $department,
            'yearLevel'=> $yearLevel, 
            'Region'=> $region,
            'city'=> $city
       ]);
        dd($data);
        
*/