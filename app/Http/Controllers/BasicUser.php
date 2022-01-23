<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\VarDumper\Dumper\esc;

class BasicUser extends Controller
{
    function userInsert(Request $req){
        $name = $req->input('name');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $country = $req->input('country');

        $insertReturn = DB::insert('INSERT INTO `basicusers`(`name`, `email`, `phone`, `country`) VALUES (?,?,?,?)', [$name, $email, $phone, $country]);
        if($insertReturn){
            return "Insert Success";
        }else{
            return "Insert faild";
        }
    }


    function deleteuser(Request $req){
        $id = $req->input('id');

        $dbReturn = DB::delete('DELETE FROM `basicusers` WHERE `id` = ?', [$id]);

        if($dbReturn){
            return "Delete Success";
        }else{
            return "Delete faild";
        }
    }

    function getUser(){
        $data = DB::select('SELECT * FROM `basicusers`');

        $selectedData = "";

        foreach($data as $value){
            $selectedData .= "<tr>";
            $selectedData .= "<td>{$value->id}</td>";
            $selectedData .= "<td>{$value->name}</td>";
            $selectedData .= "<td>{$value->email}</td>";
            $selectedData .= "<td>{$value->phone}</td>";
            $selectedData .= "<td>{$value->country}</td>";
            $selectedData .= "<tr>";
        }

        return $selectedData;
    }



    function updateUser(Request $req){
        $name = $req->input('name');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $country = $req->input('country');
        $id = $req->input('id');


        $dbResponse = DB::update('UPDATE `basicusers` SET `name`=?, `email`=?, `phone`=?, `country`=? WHERE `id`=?',[$name, $email, $phone, $country, $id]);
        if($dbResponse){
            return "Update Success";
        }else{
            return "Update faild";
        }
    }
}



